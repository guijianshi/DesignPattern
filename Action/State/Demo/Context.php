<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 12:47
 */

namespace Action\State\Demo;


use Action\State\State;

class Context
{
    private $state;

    /**
     * 定义context初始化状态
     * Context constructor.
     * @param State $state
     */
    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * 读取当前状态
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }

    /**
     * 设置新状态
     * @param State $state
     */
    public function setState(State $state)
    {
        $this->state = $state;
    }

    /**
     * 对请求做处理,并设置下一状态
     */
    public function request()
    {
        $this->getState()->handle($this);
    }
}