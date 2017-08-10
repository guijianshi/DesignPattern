<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 15:43
 */

namespace Create\Prototype;


class WorkExperience
{
    private $timeArea;

    private $company;

    /**
     * @return string
     */
    public function getTimeArea()
    {
        return $this->timeArea;
    }

    /**
     * @param string $timeArea
     */
    public function setTimeArea(string $timeArea)
    {
        $this->timeArea = $timeArea;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany(string $company)
    {
        $this->company = $company;
    }


}