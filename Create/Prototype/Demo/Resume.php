<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 15:54
 */

namespace Create\Prototype\Demo;


/**
 * 简历类
 * Class Resume
 * @package Create\Prototype\Demo
 */
class Resume
{
    private $name;

    private $sex;

    private $age;

    private $work;

    /**
     * Resume constructor.
     * @param string $name
     */
    public function __construct(string $name = null)
    {
        $this->name = $name;
        $this->work = new WorkExperience();
    }

    public function setPersonalInfo(string $sex, string $age)
    {
        $this->sex = $sex;
        $this->age = $age;
    }

    public function setWorkExperience(string $workDate, string $company)
    {
        $this->work->setWorkDate($workDate);
        $this->work->setCompany($company);
    }

    public function display()
    {
        printf("%s %s %s<br>", $this->name, $this->sex, $this->age);
        printf("工作经验:%s %s<br>", $this->work->getWorkDate(), $this->work->getCompany());
        echo '<br>';
    }

    public function cloneSelf()
    {
        $obj = new Resume();
        $obj->name = $this->name;
        $obj->sex = $this->sex;
        $obj->age = $this->age;
        $obj->work = clone $this->work;
        return $obj;
    }

}