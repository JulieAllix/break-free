<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita14e310bbed2ceaf4ebbd356c61bab0b
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Breakfree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Breakfree\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita14e310bbed2ceaf4ebbd356c61bab0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita14e310bbed2ceaf4ebbd356c61bab0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita14e310bbed2ceaf4ebbd356c61bab0b::$classMap;

        }, null, ClassLoader::class);
    }
}
