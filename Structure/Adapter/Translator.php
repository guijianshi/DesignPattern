<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 14:25
 */

namespace Structure\Adapter;


class Translator extends Player
{
    private $foreignCenter;

    /**
     * Translator constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->foreignCenter = new ForeignCenter();
        $this->foreignCenter->setName($name);
    }


    public function attack()
    {
        $this->foreignCenter->进攻();
    }

    public function defense()
    {
        $this->foreignCenter->防守();
    }

}