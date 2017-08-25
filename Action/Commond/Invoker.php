<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 11:09
 */

namespace Action\Commond;


class Invoker
{
    private $commond;

    /**
     * @param Commond $commond
     */
    public function setCommond(Commond $commond)
    {
        $this->commond = $commond;
    }

    public function executeCommond()
    {
        $this->commond->execute();
    }
}