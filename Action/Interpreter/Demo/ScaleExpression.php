<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 10:01
 */

namespace Action\Interpreter\Demo;


class ScaleExpression extends AbstractExpression
{
    public function excute(string $key, float $value)
    {
        switch ((int)$value) {
            case 1:
                $scale = '低音';
                break;
            case 2:
                $scale = '重音';
                break;
            case 3:
                $scale = '高音';
                break;
            default:
                throw new \Exception('音阶不存在');
                break;
        }
        echo $scale . ' ';
    }

}