<?php

class Shape
{
    private $amount;

    private function getAverage(array $numbers)
    {
        return array_sum($numbers) / count($numbers);
    }
}
