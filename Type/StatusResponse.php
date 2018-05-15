<?php

namespace CL\DocData\Component\OrderApi\Type;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class StatusResponse extends AbstractObject
{
    /**
     * @var StatusSuccess
     */
    protected $statusSuccess;

    /**
     * @var StatusError
     */
    protected $statusErrors;

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
    public function setStatusErrors(StatusError $statusError)
    {
        $this->statusErrors = $statusError;
    }

    /**
     * @return StatusError
     */
    public function getStatusErrors()
    {
        return $this->statusErrors;
    }
}
