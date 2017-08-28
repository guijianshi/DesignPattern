<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/28
 * Time: 16:30
 */

namespace Action\ChainOfResponsibilities\Demo;


abstract class Manager
{
    protected $name;

    protected $superior;

    /**
     * Manager constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param Manager $superior
     */
    public function setSuperior(Manager $superior)
    {
        $this->superior = $superior;
    }

    /**
     * @param Request $reuqest
     * @return mixed
     */
    public abstract function requestApplications(Request $reuqest);


}