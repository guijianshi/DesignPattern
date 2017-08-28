<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/28
 * Time: 16:35
 */

namespace Action\ChainOfResponsibilities\Demo;

/**
 * 经理
 * Class CcommonManager
 * @package Action\ChainOfResponsibilities\Demo
 */
class CommonManager extends Manager
{
    public function requestApplications(Request $reuqest)
    {
        if ($reuqest->getRequestType() == '请假' && $reuqest->getNumber() <= 2) {
            printf('%s:%s 数量%d 被批准<br/>', $this->name, $reuqest->getRequestContent(), $reuqest->getNumber());
        } elseif (null !== $this->superior) {
            $this->superior->requestApplications($reuqest);
        }
    }

}