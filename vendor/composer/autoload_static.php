<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e00ae839fed603d569018f28cd86098
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hungpm\\Contact\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hungpm\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e00ae839fed603d569018f28cd86098::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e00ae839fed603d569018f28cd86098::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e00ae839fed603d569018f28cd86098::$classMap;

        }, null, ClassLoader::class);
    }
}