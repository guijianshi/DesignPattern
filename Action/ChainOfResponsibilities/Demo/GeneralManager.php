<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/28
 * Time: 16:46
 */

namespace Action\ChainOfResponsibilities\Demo;


class GeneralManager extends Manager
{
    public function requestApplications(Request $reuqest)
    {
        if ($reuqest->getRequestType() == '请假') {
            printf('%s:%s 数量%d 被批准<br/>', $this->name, $reuqest->getRequestContent(), $reuqest->getNumber());
        } elseif ($reuqest->getRequestType() == '加薪' && $reuqest->getNumber() <= 500) {
            printf('%s:%s 数量%d 被批准<br/>', $this->name, $reuqest->getRequestContent(), $reuqest->getNumber());
        } elseif ($reuqest->getRequestType() == '加薪' && $reuqest->getNumber() > 500) {
            printf('%s:%s 数量%d 再说吧<br/>', $this->name, $reuqest->getRequestContent(), $reuqest->getNumber());
        }
    }

}