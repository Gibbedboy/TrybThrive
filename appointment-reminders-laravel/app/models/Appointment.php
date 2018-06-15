<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function scopeAppointmentsDue($query)
    {
        $now = Carbon::now();
        $inOneDay = Carbon::now()->addDay();
        return $query->where('notificationTime', '>=', $now)->where('notificationTime', '<=', $inOneDay);
    }
}
