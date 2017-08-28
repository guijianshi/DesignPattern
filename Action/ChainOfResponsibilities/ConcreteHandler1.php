<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/28
 * Time: 16:06
 */

namespace Action\ChainOfResponsibilities;


class ConcreteHandler1 extends Handler
{
    public function handleRequest(int $request)
    {
        if ($request >= 0 && $request < 10) {
            printf('%s处理请求%d<br/>',self::class, $request);
        } elseif (null !== $this->successor) {
            $this->successor->handleRequest($request);
        }
    }
}