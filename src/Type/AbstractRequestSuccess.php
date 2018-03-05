<?php

namespace JouwWeb\DocData\Type;


abstract class AbstractRequestSuccess extends AbstractObject
{
    /**
     * @var Success
     */
    protected $success;

    /**
     * @param Success $success
     */
    public function setSuccess(Success $success)
    {
        $this->success = $success;
    }

    /**
     * @return Success
     */
    public function getSuccess()
    {
        return $this->success;
    }
}
