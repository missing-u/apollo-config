<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/2/19
 * Time: 1:27 AM
 */

namespace ApolloConfig;

use ApolloConfig\Configs\ApolloConfigConfigInterface;

class ApolloConfig
{
    private static $config_setting;

    public static function get($key)
    {
        $config_setting = self::$config_setting;

        ApolloConfigService::get($key, $config_setting);
    }

    public static function change_default_config(ApolloConfigConfigInterface $config)
    {
        self::$config_setting = $config;
    }
}