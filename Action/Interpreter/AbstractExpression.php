<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 9:26
 */

namespace Action\Interpreter;

/**
 * 抽象表达式
 * Class AbstractExpression
 * @package Action\Interpreter
 */
abstract class AbstractExpression
{
    /**
     * @param $context
     * @return void
     */
    public abstract function interpret(Context $context);
}