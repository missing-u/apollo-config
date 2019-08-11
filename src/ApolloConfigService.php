<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/11/19
 * Time: 9:25 PM
 */

namespace ApolloConfig;


use ApolloConfig\Configs\ApolloConfigConfigFactory;
use ApolloConfig\Configs\ApolloConfigConfigInterface;
use SimpleRequest\Exceptions\FailRequestException;
use SimpleRequest\SimpleRequest;

class ApolloConfigService
{
    /**
     * @param $key
     * @param ApolloConfigConfigInterface|null $config
     * @return array
     * @throws FailRequestException
     */
    public static function get($key, ApolloConfigConfigInterface $config = null)
    {
        $config_val = self::getInCache($key, $config);

        if ($config_val !== null) {
            return $config_val;
        }

        $illumination = "请求阿波罗";

        if ($config === null) {
            $config = ApolloConfigConfigFactory::getDefaultConfig();
        }

        $complete_url = $config->get_apollo_complete_url();

        $info = SimpleRequest::json_get($illumination, $complete_url);

        return $info[ $key ];
    }

    public static function getInCache($key, ApolloConfigConfigInterface $config = null)
    {
        //todo
        return [];
    }
}