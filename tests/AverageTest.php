<?php declare(strict_types=1);

namespace CalulatorApp\Tests;

include('autoload.php');

use PHPUnit\Framework\TestCase;
use CalulatorApp\AverageCalculator;

class AverageTest extends TestCase
{
    /** @test */
    public function itShoudReturnAverage(): void
    {
        $numbers = [2,4,6,8];
        $average = AverageCalculator::getAverage($numbers);

        $this->assertEquals(
            '5',
            $average
        );
    }
}
