<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec9b26b996a90c8a7cd24cf16565c5ba
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'c15d4a1253e33e055d05e547c61dcb71' => __DIR__ . '/..' . '/smarty/smarty/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Sorinotel\\Smartyubung8\\' => 23,
            'Smarty\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Sorinotel\\Smartyubung8\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Smarty\\' => 
        array (
            0 => __DIR__ . '/..' . '/smarty/smarty/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec9b26b996a90c8a7cd24cf16565c5ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec9b26b996a90c8a7cd24cf16565c5ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec9b26b996a90c8a7cd24cf16565c5ba::$classMap;

        }, null, ClassLoader::class);
    }
}
