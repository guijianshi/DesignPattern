<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 14:24
 */

namespace Create\Factory;

/**
 * 法拉利工厂
 * Class FerrariFactory
 * @package Create\Factory
 */
class FerrariFactory implements ICarFactory
{
    public function createCar()
    {
        return new Ferrari();
    }
}