<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 16:41
 */

namespace Structure\Composite;

/**
 * 叶子机构
 * Class Leaf
 * @package Structure\Composite
 */
class Leaf extends Component
{
    public function add(Component $c)
    {
        echo '末端机构不可添加子机构<br/>';
    }

    public function remove(Component $c)
    {
        echo '末端机构不可移除子机构<br/>';
    }

    public function display(int $depth)
    {
        echo str_repeat('-', $depth) . ' ' .$this->name . '<br/>';
    }

}