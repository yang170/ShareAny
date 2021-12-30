<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4aefc249d3aae018f359286a4d2229cc
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4aefc249d3aae018f359286a4d2229cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4aefc249d3aae018f359286a4d2229cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4aefc249d3aae018f359286a4d2229cc::$classMap;

        }, null, ClassLoader::class);
    }
}
