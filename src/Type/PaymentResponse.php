<?php

namespace JouwWeb\DocData\Type;

/**
 * DocDataPayments PaymentResponse class
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
