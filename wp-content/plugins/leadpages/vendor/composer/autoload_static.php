<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ea5f20b5aaac2ce3d28107eaac71b65
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '603ce470d3b0980801c7a6185a3d6d53' => __DIR__ . '/..' . '/icanboogie/inflector/lib/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TheLoop\\' => 8,
        ),
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'L' => 
        array (
            'Leadpages\\Pages\\' => 16,
            'Leadpages\\Leadboxes\\' => 20,
            'Leadpages\\' => 10,
            'LeadpagesWP\\' => 12,
            'LeadpagesMetrics\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TheLoop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'Leadpages\\Pages\\' => 
        array (
            0 => __DIR__ . '/..' . '/leadpages/pages/src/Pages',
        ),
        'Leadpages\\Leadboxes\\' => 
        array (
            0 => __DIR__ . '/..' . '/leadpages/leadboxes/src/Leadboxes',
        ),
        'Leadpages\\' => 
        array (
            0 => __DIR__ . '/..' . '/leadpages/leadpages-auth/src',
        ),
        'LeadpagesWP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
        'LeadpagesMetrics\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Lib/LeadpagesMetrics',
        ),
        'GuzzleHttp\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/streams/src',
        ),
        'GuzzleHttp\\Ring\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/ringphp/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'ICanBoogie\\Inflections' => __DIR__ . '/..' . '/icanboogie/inflector/lib/inflections.php',
        'ICanBoogie\\Inflector' => __DIR__ . '/..' . '/icanboogie/inflector/lib/inflector.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ea5f20b5aaac2ce3d28107eaac71b65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ea5f20b5aaac2ce3d28107eaac71b65::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1ea5f20b5aaac2ce3d28107eaac71b65::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1ea5f20b5aaac2ce3d28107eaac71b65::$classMap;

        }, null, ClassLoader::class);
    }
}
