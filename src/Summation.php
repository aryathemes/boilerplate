<?php

namespace Application;

class Summation
{
    public static function sum(int $n): int
    {
        return $n * ($n + 1) / 2;
    }
}
