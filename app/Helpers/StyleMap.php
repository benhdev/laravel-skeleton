<?php

namespace App\Helpers;

class StyleMap extends Helper
{
    public function __toString()
    {
        array_walk($this->options, function (&$style, $key) {
            $style = "$key: $style;";
        });

        return implode($this->options);
    }
}
