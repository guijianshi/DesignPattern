<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 14:31
 */

namespace Create\Builder;


class PersonDirector
{
    private $pb;

    /**
     * PersonDirector constructor.
     * @param $pb
     */
    public function __construct(PersonBuilder $pb)
    {
        $this->pb = $pb;
    }

    public function createPerson()
    {
        $this->pb->buildHead();
        $this->pb->buildBody();
        $this->pb->buildArmLeft();
        $this->pb->buildArmRight();
        $this->pb->buildLegLeft();
        $this->pb->buildLegRight();
    }


}