<?php

namespace CL\DocData\Component\OrderApi\Type;

/**
 * DocDataPayments PaymentResponse class
 *
 * @author Tijs Verkoyen <php-docdatapayments@verkoyen.eu>
 */
class PaymentResponse extends AbstractObject
{
    /**
     * @var PaymentSuccess
     */
    protected $paymentSuccess;

    /**
     * @var mixed
     */
    protected $paymentInsufficientData;

    /**
     * @var mixed
     */
    protected $paymentError;

    /**
     * @return PaymentSuccess
     */
    public function getPaymentSuccess()
    {
        return $this->paymentSuccess;
    }

    /**
     * @param PaymentSuccess $paymentSuccess
     */
    public function setPaymentSuccess(PaymentSuccess $paymentSuccess)
    {
        $this->paymentSuccess = $paymentSuccess;
    }
}
