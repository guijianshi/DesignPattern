<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 11:12
 */

namespace Structure\Template\Demo;


class TestPape
{
    public function testQuestion1()
    {
        echo '问题:以下哪一个正确(): A.1 B.2 C.3', '<br>';
        echo '答案是:' . $this->answer1(), '<br>';
    }

    protected function answer1()
    {
        return;
    }
}