<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita28c221ba49b570bd5564e43d2d2ad8b
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inotechno\\WatsapBroadcast\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inotechno\\WatsapBroadcast\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita28c221ba49b570bd5564e43d2d2ad8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita28c221ba49b570bd5564e43d2d2ad8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita28c221ba49b570bd5564e43d2d2ad8b::$classMap;

        }, null, ClassLoader::class);
    }
}
