<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 10:44
 */

namespace Action\Commond;


abstract class Commond
{
    protected $receiver;

    /**
     * Commond constructor.
     * @param Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public abstract function execute();

}