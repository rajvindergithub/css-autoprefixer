<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0415bee3ea5a7cda75670b4dd4a5696
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sabberworm\\CSS\\' => 15,
        ),
        'P' => 
        array (
            'Padaliyajay\\PHPAutoprefixer\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'Padaliyajay\\PHPAutoprefixer\\' => 
        array (
            0 => __DIR__ . '/..' . '/padaliyajay/php-autoprefixer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0415bee3ea5a7cda75670b4dd4a5696::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0415bee3ea5a7cda75670b4dd4a5696::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0415bee3ea5a7cda75670b4dd4a5696::$classMap;

        }, null, ClassLoader::class);
    }
}
