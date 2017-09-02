<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/18
 * Time: 10:54
 */

namespace Structure\Composite\Demo;


class ConcreteCompany extends Company
{
    private $childrens = [];

    public function add(Company $company)
    {
        $this->childrens[] = $company;
    }

    public function remove(Company $company)
    {
        $this->childrens = detach($this->childrens, $company);
    }

    public function display(int $depth)
    {
        echo str_repeat('-', $depth) .' ' . $this->name . '<br/>';
        /* @var Company $children */
        foreach ($this->childrens as $children) {
            $children->display($depth + 2);
        }
    }

    public function lineOfDuty()
    {
        /* @var Company $children */
        foreach ($this->childrens as $children) {
            $children->lineOfDuty();
        }
    }

}