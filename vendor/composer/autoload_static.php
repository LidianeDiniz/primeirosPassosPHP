<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32edb6722f7c7e84b217536ca0c4e492
{
    public static $files = array (
        '1f98e54b1a97e563de058fd244782751' => __DIR__ . '/..' . '/igorw/compose/src/compose.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Fp\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Fp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit32edb6722f7c7e84b217536ca0c4e492::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32edb6722f7c7e84b217536ca0c4e492::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32edb6722f7c7e84b217536ca0c4e492::$classMap;

        }, null, ClassLoader::class);
    }
}
