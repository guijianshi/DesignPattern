<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 9:32
 */

namespace Action\Interpreter;


class NonterminalExpression extends AbstractExpression
{
    public function interpret(Context $context)
    {
        echo '非终端解释器<br/>';
    }

}