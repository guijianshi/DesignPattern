<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 13:05
 */

namespace Action\Commond\Demo;


class Waiter
{
    private $orders = [];

    /**
     * 设定订单
     * @param Commond $orderList
     */
    public function setOrder(Commond $commond)
    {
        if ($commond == '烤鸡翅') {
            echo '服务员,鸡翅没有了,点点别的吧', '<br>';
        } else {
            $this->orders[] = $commond;
            echo '增加订单:', $commond->executeCommond() , date('Y-m-d H:i:s'), '<br/>';
        }

    }

    /**
     * 取消订单
     * @param Commond $commond
     */
    public function cancerOrder(Commond $commond)
    {
        foreach ($this->orders as $k => $order) {
            if ($order == $commond)
                unset($this->orders[$k]);
        }
        echo '取消订单', $commond, date('Y-m-d H-i-s'), '<br/>';
    }

    /**
     * 通知全部执行
     */
    public function notify()
    {
        foreach ($this->orders as $order) {
            $order->executeCommond();
        }
    }
}