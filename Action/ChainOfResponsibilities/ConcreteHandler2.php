<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/28
 * Time: 16:20
 */

namespace Action\ChainOfResponsibilities;


class ConcreteHandler2 extends Handler
{
    public function handleRequest(int $request)
    {
        if ($request >= 10 && $request < 20) {
            printf('%s处理请求%d<br/>',self::class, $request);
        } elseif (null !== $this->successor) {
            $this->successor->handleRequest($request);
        }
    }

}