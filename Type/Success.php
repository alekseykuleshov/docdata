<?php

namespace JouwWeb\DocData\Type;

/**
 * @author Tijs Verkoyen <php-docdatapayments@verkoyen.eu>
 */
class Success extends AbstractSuccessError
{
    /**
     * @var array
     */
    protected $explanations = [
        'SUCCESS' => 'The operation was generally successful.',
    ];
}
