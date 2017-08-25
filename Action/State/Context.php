<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:56
 */

namespace Action\State;


class Context
{
    public $state;

    public function __construct(State $state)
    {
        $this->setState($state);
    }

    /**
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $state $state
     */
    public function setState(State $state)
    {
        $this->state = $state;
        echo '当前状态:' . get_class($this->getState()), '<br/>';
    }

    public function Request()
    {
        $this->state->handle($this);
    }
}