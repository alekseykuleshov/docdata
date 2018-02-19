<?php

namespace JouwWeb\DocData\Type;


class Error extends AbstractSuccessError
{
    /**
     * @var array
     */
    protected $explanations = [
        'UNKNOWN_ERROR'          => 'The reason of error is unknown.',
        'REQUEST_DATA_MISSING'   => 'Request data is missing.',
        'REQUEST_DATA_INCORRECT' => 'Request data is incorrect.',
        'SECURITY_ERROR'         => 'Error related to security violations such as login failure or not allowed IP.',
        'INTERNAL_ERROR'         => 'Payment system error.',
    ];
}
