<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec3c8e92179c1b34811e6831d6a46002
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitec3c8e92179c1b34811e6831d6a46002::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec3c8e92179c1b34811e6831d6a46002::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec3c8e92179c1b34811e6831d6a46002::$classMap;

        }, null, ClassLoader::class);
    }
}
