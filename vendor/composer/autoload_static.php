<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4727e7d62f76b515e8e6276cef49b63
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Libs\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/libs',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4727e7d62f76b515e8e6276cef49b63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4727e7d62f76b515e8e6276cef49b63::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
