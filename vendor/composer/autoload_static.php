<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0160fc5065478c542a062a9c096510c9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tools\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tools',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0160fc5065478c542a062a9c096510c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0160fc5065478c542a062a9c096510c9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
