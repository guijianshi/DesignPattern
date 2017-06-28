<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/28
 * Time: 11:16
 */

namespace Decorator;


interface DrawDecorator
{
    public function beforeDraw();

    public function afterDraw();
}