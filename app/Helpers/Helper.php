<?php

namespace App\Helpers;

abstract class Helper
{
    final public function __construct(protected array $options)
    {
        //
    }

    final public static function create(array $options)
    {
        $instance = new static($options);
        return $instance;
    }
}
