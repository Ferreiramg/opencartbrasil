<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit529edf555723ee7d6785bff5252964ab
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wechat\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Validator\\' => 28,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Subscriber\\Oauth\\' => 28,
            'GuzzleHttp\\Subscriber\\Log\\' => 26,
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
            'GuzzleHttp\\' => 11,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'Cardinity\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wechat\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/validator',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
        'GuzzleHttp\\Subscriber\\Oauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/oauth-subscriber/src',
        ),
        'GuzzleHttp\\Subscriber\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/log-subscriber/src',
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
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Cardinity\\' => 
        array (
            0 => __DIR__ . '/..' . '/cardinity/cardinity-sdk-php/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/klarna/kco_rest/src',
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Divido' => 
            array (
                0 => __DIR__ . '/..' . '/divido/divido-php/lib',
            ),
        ),
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit529edf555723ee7d6785bff5252964ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit529edf555723ee7d6785bff5252964ab::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit529edf555723ee7d6785bff5252964ab::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit529edf555723ee7d6785bff5252964ab::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit529edf555723ee7d6785bff5252964ab::$classMap;

        }, null, ClassLoader::class);
    }
}
