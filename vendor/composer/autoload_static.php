<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c066cf463869e99cf4a50b5a429c25e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c066cf463869e99cf4a50b5a429c25e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c066cf463869e99cf4a50b5a429c25e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
