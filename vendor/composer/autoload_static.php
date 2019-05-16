<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1114e5411f3c2cc742a6ec32b3fe9af3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mostrar\\' => 8,
        ),
        'F' => 
        array (
            'Formularios\\' => 12,
        ),
        'C' => 
        array (
            'Conexion\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mostrar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scripts',
        ),
        'Formularios\\' => 
        array (
            0 => __DIR__ . '/../..' . '/formularios',
        ),
        'Conexion\\' => 
        array (
            0 => __DIR__ . '/../..' . '/extras',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1114e5411f3c2cc742a6ec32b3fe9af3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1114e5411f3c2cc742a6ec32b3fe9af3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}