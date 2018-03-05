<?php

namespace JouwWeb\DocData\Type;


class Success extends AbstractSuccessError
{
    /**
     * @var array
     */
    protected $explanations = [
        'SUCCESS' => 'The operation was generally successful.',
    ];
}
