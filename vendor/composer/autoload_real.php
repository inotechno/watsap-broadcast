<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita28c221ba49b570bd5564e43d2d2ad8b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita28c221ba49b570bd5564e43d2d2ad8b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita28c221ba49b570bd5564e43d2d2ad8b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita28c221ba49b570bd5564e43d2d2ad8b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}