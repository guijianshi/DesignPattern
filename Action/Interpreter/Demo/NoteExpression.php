<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 9:56
 */

namespace Action\Interpreter\Demo;

/**
 * 音符解释器
 * Class NoteExpression
 * @package Action\Interpreter\Demo
 */
class NoteExpression extends AbstractExpression
{
    public function excute(string $key, float $value)
    {
        switch ($key) {
            case 'C':
                $note = '1';
                break;
            case 'D':
                $note = '2';
                break;
            case 'E':
                $note = '3';
                break;
            case 'F':
                $note = '4';
                break;
            case 'G':
                $note = '5';
                break;
            case 'A':
                $note = '6';
                break;
            case 'B':
                $note = '7';
                break;
            default:
                throw new \Exception('音阶不存在');
                break;
        }
        echo $note . ' ';
    }

}