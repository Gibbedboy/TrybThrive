<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdeee4b24fe78293af6a1784c07f4af3f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdeee4b24fe78293af6a1784c07f4af3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdeee4b24fe78293af6a1784c07f4af3f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
