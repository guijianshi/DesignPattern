<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/28
 * Time: 11:17
 */

namespace Decorator;


class ColorDecorator implements DrawDecorator
{
    protected $color;
    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function beforeDraw()
    {
        echo "<div style='color: {$this->color};'>";
    }

    public function afterDraw()
    {
        echo '</div>';
    }

}