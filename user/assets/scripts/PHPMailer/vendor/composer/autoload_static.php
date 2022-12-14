<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb8b271cb32836716635bed0fa0bc3fc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb8b271cb32836716635bed0fa0bc3fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb8b271cb32836716635bed0fa0bc3fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb8b271cb32836716635bed0fa0bc3fc::$classMap;

        }, null, ClassLoader::class);
    }
}
