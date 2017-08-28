<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/28
 * Time: 16:04
 */

namespace Action\ChainOfResponsibilities;


abstract class Handler
{
    protected $successor;

    /**
     * @param mixed $successor
     */
    public function setSuccessor(Handler $successor)
    {
        $this->successor = $successor;
    }


    public abstract function handleRequest(int $request);


}