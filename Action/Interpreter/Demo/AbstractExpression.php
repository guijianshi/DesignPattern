<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 9:43
 */

namespace Action\Interpreter\Demo;


abstract class AbstractExpression
{
    public function interpret(PlayContext $context)
    {
        if (!strlen($context->getText())) {
            return;
        } else {
            $playKey = $context->getText()[0];
            $context->setText(substr($context->getText(),2));
            $position = strpos($context->getText(), ' ');
            $playValue = floatval(substr($context->getText(), 0 , $position));
            $context->setText(substr($context->getText(),$position + 1));
            $this->excute($playKey, $playValue);
        }
    }

    /**
     * @param string $playKey 音阶或音符
     * @param float $playValue 具体音阶或音符长度
     * @return void
     */
    public abstract function excute(string $playKey, float $playValue);
}