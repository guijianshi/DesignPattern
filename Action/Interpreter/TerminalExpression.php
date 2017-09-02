<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 9:30
 */

namespace Action\Interpreter;


class TerminalExpression extends AbstractExpression
{
    public function interpret(Context $context)
    {
        echo '终端解释器<br/>';
    }

}