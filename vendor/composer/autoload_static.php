<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4c344a8df18ceafc5bdb190a5737245
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4c344a8df18ceafc5bdb190a5737245::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4c344a8df18ceafc5bdb190a5737245::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
