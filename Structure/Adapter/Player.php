<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 14:11
 */

namespace Structure\Adapter;

/**
 * 抽象球员类
 * Class Player
 * @package Structure\Adapter
 */
abstract class Player
{
    protected $name;

    /**
     * Player constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * 进攻
     * @return mixed
     */
    public abstract function attack();

    /**
     * 防守
     * @return mixed
     */
    public abstract function defense();

}