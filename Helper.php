<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/18
 * Time: 10:56
 */

class Helper
{
    public static function array_remove(array $array, $input)
    {
        return array_filter($array ,function ($item) use ($input) {
            if ($input == $item)
                return false;
            else
                return true;
        });
    }
}