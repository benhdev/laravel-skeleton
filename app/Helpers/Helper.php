<?php

namespace App\Helpers;

abstract class Helper
{
    // abstract public static function create(Array $options);
    final public function __construct(protected Array $options)
    {
        //
    }

    final public static function create(Array $options)
    {
        $instance = new static($options);
        return $instance;
    }
}
