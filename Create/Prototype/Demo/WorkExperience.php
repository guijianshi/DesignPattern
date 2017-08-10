<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 15:52
 */

namespace Create\Prototype\Demo;


class WorkExperience
{
    private $workDate;

    private $company;

    /**
     * @return mixed
     */
    public function getWorkDate()
    {
        return $this->workDate;
    }

    /**
     * @param mixed $workDate
     */
    public function setWorkDate($workDate)
    {
        $this->workDate = $workDate;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return WorkExperience
     */
    public function cloneSelf()
    {
        return clone $this;
    }
}