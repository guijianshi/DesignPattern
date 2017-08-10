<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 15:28
 */

namespace Create\Prototype;

/**
 * 简历类
 * Class Resume
 * @package Create\Prototype
 */
class Resume
{
    private $name;

    private $sex;

    private $age;

    private $timeArea;

    private $company;

    private $workExperience;

    /**
     * Resume constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->workExperience = new WorkExperience();
    }
    public function setPersonalInfo(string $sex, string $age)
    {
        $this->sex = $sex;
        $this->age = $age;
    }

    public function setWorkExperience(string $timeArea, string $company)
    {
        $this->timeArea = $timeArea;
        $this->company = $company;
        $this->workExperience->setTimeArea($timeArea);
        $this->workExperience->setCompany($company);
    }

    public function dispaly()
    {
        printf("%s %s %s<br>", $this->name, $this->sex, $this->age);
        printf("%s %s<br>", $this->timeArea, $this->company);
        printf("引用传递%s %s<br>", $this->workExperience->getTimeArea(), $this->workExperience->getCompany());
        echo '<hr>';
    }

    public function cloneSelf()
    {
        return clone $this;//浅复制,只复制值类型,引用类型,仅仅复制引用而不复制引用对象,类似于引用复用.实际为同一对象
    }


}