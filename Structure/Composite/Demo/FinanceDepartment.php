<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/18
 * Time: 11:04
 */

namespace Structure\Composite\Demo;

/**
 * 财务部
 * Class FinanceDepartment
 * @package Structure\Composite\Demo
 */
class FinanceDepartment extends Company
{
    public function add(Company $company)
    {
    }

    public function remove(Company $company)
    {
    }

    public function display(int $depth)
    {
        echo str_repeat('-', $depth) .' ' . $this->name . '<br/>';
    }

    public function lineOfDuty()
    {
        printf('%s 公司财务管理<br/>', $this->name);
    }

}