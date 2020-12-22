<?php

namespace abbdin;

class LinearEquation
{
    protected $x;

    public function LinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new \Error('Division by zero');
        }
        return $this->x = [(-$b) / $a];
    }
}