<?php

namespace Core;

class Config {
    private static $config = [
        'version' => '0.0.1',
        'root_dir' => '/CMS-Project/',
        'default_controller' => 'Blog',
        'default_layout' => 'default',
        'default_site_title' => 'CMS Project',
        'db_host' => '127.0.0.1',
        'db_name' => 'cms',
        'db_user' => 'root',
        'db_password' => '',
        'login_cookie_name' => "project123"    
    ];

    public static function get($key) {
        return array_key_exists($key, self::$config)? self::$config[$key] : NULL;
    }
}