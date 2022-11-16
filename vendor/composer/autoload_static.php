<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87d6b499cee4c4e11012f1e6d5477228
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'P' => 
        array (
            'Pico\\Composer\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Pico\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/picocms/composer-installer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'PicoPluginInterface' => 
            array (
                0 => __DIR__ . '/..' . '/picocms/pico/lib',
            ),
            'Pico' => 
            array (
                0 => __DIR__ . '/..' . '/picocms/pico/lib',
            ),
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
        'A' => 
        array (
            'AbstractPicoPlugin' => 
            array (
                0 => __DIR__ . '/..' . '/picocms/pico/lib',
            ),
        ),
    );

    public static $classMap = array (
        'AbstractPicoCompatPlugin' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/lib/AbstractPicoCompatPlugin.php',
        'AbstractPicoPluginApiCompatPlugin' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/lib/AbstractPicoPluginApiCompatPlugin.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PicoCompatPluginInterface' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/lib/PicoCompatPluginInterface.php',
        'PicoDeprecated' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/PicoDeprecated.php',
        'PicoMainCompatPlugin' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/plugins/PicoMainCompatPlugin.php',
        'PicoPluginApi0CompatPlugin' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/plugins/PicoPluginApi0CompatPlugin.php',
        'PicoPluginApi1CompatPlugin' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/plugins/PicoPluginApi1CompatPlugin.php',
        'PicoPluginApi2CompatPlugin' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/plugins/PicoPluginApi2CompatPlugin.php',
        'PicoPluginApiCompatPluginInterface' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/lib/PicoPluginApiCompatPluginInterface.php',
        'PicoThemeApi0CompatPlugin' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/plugins/PicoThemeApi0CompatPlugin.php',
        'PicoThemeApi1CompatPlugin' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/plugins/PicoThemeApi1CompatPlugin.php',
        'PicoThemeApi2CompatPlugin' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/plugins/PicoThemeApi2CompatPlugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87d6b499cee4c4e11012f1e6d5477228::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87d6b499cee4c4e11012f1e6d5477228::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit87d6b499cee4c4e11012f1e6d5477228::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit87d6b499cee4c4e11012f1e6d5477228::$classMap;

        }, null, ClassLoader::class);
    }
}
