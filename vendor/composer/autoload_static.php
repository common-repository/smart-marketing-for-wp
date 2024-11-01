<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3f83acd7beab098a7625756ec4c7791
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPSMTP\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPSMTP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite3f83acd7beab098a7625756ec4c7791::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3f83acd7beab098a7625756ec4c7791::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite3f83acd7beab098a7625756ec4c7791::$classMap;

        }, null, ClassLoader::class);
    }
}
