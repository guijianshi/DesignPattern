<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/28
 * Time: 16:21
 */

namespace Action\ChainOfResponsibilities;


class ConcreteHandler3 extends Handler
{
    public function handleRequest(int $request)
    {
        if ($request >= 20 && $request < 30) {
            printf('%s处理请求%d<br/>',self::class, $request);
        } elseif (null !== $this->successor) {
            $this->successor->handleRequest($request);
        }
    }

}