<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/15
 * Time: 17:42
 */
namespace app\controller\util;

class RedisUtil {

    public static function redisConnect($dbNum = 0){
        $redis = new redis();
        $redis->connect('127.0.0.1' , 6379);
        $redis->select($dbNum);

        return $redis;
    }

    public static function hsetRedis($dbNum = 0 , $key , $field , $val){
        $redis = self::redisConnect($dbNum);
        $redis->hset($key , $field , $val);
    }

    public static function hdelRedis($dbNum = 0 , $key , $field){
        $redis = self::redisConnect($dbNum);
        $redis->hdel($key , $field);
    }
}