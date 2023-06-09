<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cec4d07d9c21919f2d29d60d86b52f5
{
    public static $classMap = array (
        'ComposerAutoloaderInit0cec4d07d9c21919f2d29d60d86b52f5' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit0cec4d07d9c21919f2d29d60d86b52f5' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'controllers\\AboutController' => __DIR__ . '/../..' . '/controllers/AboutController.php',
        'controllers\\ContactController' => __DIR__ . '/../..' . '/controllers/ContactController.php',
        'controllers\\TaskController' => __DIR__ . '/../..' . '/controllers/TaskController.php',
        'core\\App' => __DIR__ . '/../..' . '/core/App.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0cec4d07d9c21919f2d29d60d86b52f5::$classMap;

        }, null, ClassLoader::class);
    }
}
