<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/18
 * Time: 11:01
 */

namespace Structure\Composite\Demo;

/**
 * 具体部门HR
 * Class HRDepartment
 * @package Structure\Composite\Demo
 */
class HRDepartment extends Company
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
        printf('%s 招人呀,培训呀<br/>', $this->name);
    }

}