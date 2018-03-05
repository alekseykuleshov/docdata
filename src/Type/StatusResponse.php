<?php

namespace JouwWeb\DocData\Type;


class StatusResponse extends AbstractObject
{
    /**
     * @var StatusSuccess
     */
    protected $statusSuccess;

    /**
     * @var StatusError
     */
    protected $statusError;

    /**
     * @param StatusSuccess $statusSuccess
     */
    public function setStatusSuccess(StatusSuccess $statusSuccess)
    {
        $this->statusSuccess = $statusSuccess;
    }

    /**
     * @return StatusSuccess
     */
    public function getStatusSuccess()
    {
        return $this->statusSuccess;
    }

    /**
     * @param StatusError $statusError
     */
    public function setStatusError(StatusError $statusError)
    {
        $this->statusError = $statusError;
    }

    /**
     * @return StatusError
     */
    public function getStatusError()
    {
        return $this->statusError;
    }
}
