<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/18
 * Time: 10:52
 */

namespace Structure\Composite\Demo;


abstract class Company
{
    protected $name;

    /**
     * Company constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public abstract function add(Company $company);

    public abstract function remove(Company $company);

    public abstract function display(int $depth);

    public abstract function lineOfDuty();//履行职责

}