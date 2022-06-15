<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdfc010ab3c2627f8e1460176b497e6dc
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

        spl_autoload_register(array('ComposerAutoloaderInitdfc010ab3c2627f8e1460176b497e6dc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdfc010ab3c2627f8e1460176b497e6dc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdfc010ab3c2627f8e1460176b497e6dc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
