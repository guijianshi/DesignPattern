<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/9
 * Time: 17:12
 */

namespace Action\Decorator;


class ConcreteComponent extends Component
{
    public function Operation()
    {
        echo "具体操作对象";
    }

}