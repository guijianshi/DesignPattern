<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 15:52
 */

namespace Action\Observer;


class NBAObserver
{
    private $sub;

    /**
     * NBAObserver constructor.
     * @param $sub
     */
    public function __construct($sub)
    {
        $this->sub = $sub;
    }

    public function closeNBADirectSeeding()
    {
        printf("%s%s关闭NBA行情,继续工作!<br>", $this->sub->subjectState, get_class($this->sub));
    }

}