<?php
namespace CalulatorApp;

class AverageCalculator
{
    public static function getAverage(array $numbers)
    {
        return array_sum($numbers) / count($numbers);
    }
}
