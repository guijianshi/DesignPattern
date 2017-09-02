<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 9:42
 */

namespace Action\Interpreter\Demo;

/**
 * 演奏内容
 * Class PlayContext
 * @package Action\Interpreter\Demo
 */
class PlayContext
{
    private $text;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


}