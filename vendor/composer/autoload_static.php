<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaed2760761f03495b68bab0d00bad275
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fouadlamnaouar\\CourPhp\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fouadlamnaouar\\CourPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaed2760761f03495b68bab0d00bad275::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaed2760761f03495b68bab0d00bad275::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaed2760761f03495b68bab0d00bad275::$classMap;

        }, null, ClassLoader::class);
    }
}
