<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 8:40
 */

namespace Action\Mediator;


abstract class Colleague
{
    protected $mediator;

    /**
     * Colleague constructor.
     * @param Mediator $mediator
     */
    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }


}