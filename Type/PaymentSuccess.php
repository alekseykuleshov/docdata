<?php

namespace CL\DocData\Component\OrderApi\Type;

/**
 * DocDataPayments PaymentSuccess class
 *
 * @author Roel van Duijnhoven <roel@jouwweb.nl>
 */
class PaymentSuccess extends AbstractObject
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
