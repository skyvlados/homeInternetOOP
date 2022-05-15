<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b12779dd79e42c89babb4d4c45abb92
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'I' => 
        array (
            'Interfaces\\' => 11,
        ),
        'B' => 
        array (
            'Builders\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Interfaces',
        ),
        'Builders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Builders',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b12779dd79e42c89babb4d4c45abb92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b12779dd79e42c89babb4d4c45abb92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9b12779dd79e42c89babb4d4c45abb92::$classMap;

        }, null, ClassLoader::class);
    }
}