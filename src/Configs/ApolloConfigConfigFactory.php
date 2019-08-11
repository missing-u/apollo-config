<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/11/19
 * Time: 9:28 PM
 */
namespace ApolloConfig\Configs;

class ApolloConfigConfigFactory
{
    /**
     * @return ApolloConfigConfig
     */
    public static function getDefaultConfig()
    {
        return new ApolloConfigConfig();
    }
}