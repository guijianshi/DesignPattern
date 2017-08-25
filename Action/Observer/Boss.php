<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 15:56
 */

namespace Action\Observer;


class Boss implements Subject
{
    public $subjectState;

    public function notify()
    {

    }

    /**
     * @return mixed
     */
    public function getSubjectState()
    {
        return $this->subjectState;
    }

    /**
     * @param mixed $subjectState
     */
    public function setSubjectState($subjectState)
    {
        $this->subjectState = $subjectState;
    }



}