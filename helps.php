<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 10:59
 */

function detach($list, $data)
{
    foreach ($list as $k => $v) {
        if ($v == $data) {
            unset($list[$k]);
            break;
        }
    }
    return $list;
}