<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 14:23
 */

namespace Create\Factory;


/**
 * 大众
 * Class Volkswagen
 * @package Create\Factory
 */
class Volkswagen extends Car
{
    function run()
    {
        echo '大众跑得很慢', '<br>';
    }

}