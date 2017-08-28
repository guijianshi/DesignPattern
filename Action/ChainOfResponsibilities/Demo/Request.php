<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/28
 * Time: 16:36
 */

namespace Action\ChainOfResponsibilities\Demo;


class Request
{
    private $requestType;

    private $requestContent;

    private $number;

    /**
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * @param string $requestType
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
    }

    /**
     * @return string
     */
    public function getRequestContent()
    {
        return $this->requestContent;
    }

    /**
     * @param string $requestContent
     */
    public function setRequestContent($requestContent)
    {
        $this->requestContent = $requestContent;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }


}