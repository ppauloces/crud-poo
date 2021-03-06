<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita93b37ca255151e4b3bb7634f89dd86d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita93b37ca255151e4b3bb7634f89dd86d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita93b37ca255151e4b3bb7634f89dd86d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita93b37ca255151e4b3bb7634f89dd86d::$classMap;

        }, null, ClassLoader::class);
    }
}
