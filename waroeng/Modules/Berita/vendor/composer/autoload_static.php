<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdef88e670cfc80b9329af5ffc826ca58
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Berita\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Berita\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\Berita\\Database\\Seeders\\BeritaDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/BeritaDatabaseSeeder.php',
        'Modules\\Berita\\Database\\Seeders\\BeritaTableSeeder' => __DIR__ . '/../..' . '/Database/Seeders/BeritaTableSeeder.php',
        'Modules\\Berita\\Entities\\ModelBerita' => __DIR__ . '/../..' . '/Entities/ModelBerita.php',
        'Modules\\Berita\\Http\\Controllers\\BeritaController' => __DIR__ . '/../..' . '/Http/Controllers/BeritaController.php',
        'Modules\\Berita\\Providers\\BeritaServiceProvider' => __DIR__ . '/../..' . '/Providers/BeritaServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdef88e670cfc80b9329af5ffc826ca58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdef88e670cfc80b9329af5ffc826ca58::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdef88e670cfc80b9329af5ffc826ca58::$classMap;

        }, null, ClassLoader::class);
    }
}
