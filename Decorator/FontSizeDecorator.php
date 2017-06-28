<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/28
 * Time: 12:43
 */

namespace Decorator;


class FontSizeDecorator implements DrawDecorator
{
    protected $size;

    public function __construct($size = 10)
    {
        $this->size = $size;
    }

    public function beforeDraw()
    {
        echo "<div style='font-size: {$this->size}px'>";
    }

    public function afterDraw()
    {
        echo '</div>';
    }

}