<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 14:28
 */

namespace Create\Factory;


class VolkswagenFactory implements ICarFactory
{
    public function createCar()
    {
        return new Volkswagen();
    }

}