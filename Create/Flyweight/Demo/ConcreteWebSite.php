<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 10:17
 */

namespace Create\Flyweight\Demo;


class ConcreteWebSite extends WebSite
{
    private $name;

    /**
     * ConcreteWebSite constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function user(User $user)
    {
        echo '网站分类:' . $this->name . ' 用户:' . $user->getName() . '<br/>';
    }


}