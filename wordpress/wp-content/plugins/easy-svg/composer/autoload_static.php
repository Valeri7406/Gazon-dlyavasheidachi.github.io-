<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1dc23a5a13d35b5f67304cd76dda9378
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
        'B' => 
        array (
            'Benjaminzekavica\\EasySvg\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
        'Benjaminzekavica\\EasySvg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/easy-svg.php',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1dc23a5a13d35b5f67304cd76dda9378::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1dc23a5a13d35b5f67304cd76dda9378::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1dc23a5a13d35b5f67304cd76dda9378::$classMap;

        }, null, ClassLoader::class);
    }
}