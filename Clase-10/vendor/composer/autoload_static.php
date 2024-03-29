<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fc6a9e01a4d88538a82995f9df5ef03
{
    public static $files = array (
        '80afd39893fb54e824e8ef20c37e5a24' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fc6a9e01a4d88538a82995f9df5ef03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fc6a9e01a4d88538a82995f9df5ef03::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5fc6a9e01a4d88538a82995f9df5ef03::$classMap;

        }, null, ClassLoader::class);
    }
}
