<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a0406ab729568165abea20aa2b12a4f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'MVC4PHP\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'MVC4PHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/dsoft/mvc4php/src/MVC4PHP',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a0406ab729568165abea20aa2b12a4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a0406ab729568165abea20aa2b12a4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a0406ab729568165abea20aa2b12a4f::$classMap;

        }, null, ClassLoader::class);
    }
}
