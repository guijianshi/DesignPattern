<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/29
 * Time: 8:42
 */

namespace Demo\Config;


class Config implements \ArrayAccess
{
    protected $path;

    protected $configs = [];

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function offsetExists($key)
    {
        return isset($this->configs[$key]);
    }

    public function offsetGet($key)
    {
        if (empty($this->configs[$key])) {
            $file_path = $this->path . '/' . $key . '.php';
            $config = require $file_path;
            $this->configs[$key] = $config;
        }
        return $this->configs[$key];
    }

    public function offsetSet($key, $value)
    {
        throw new \Exception('cannot write config file');
    }

    public function offsetUnset($key)
    {
        unset($this->configs[$key]);
    }

}