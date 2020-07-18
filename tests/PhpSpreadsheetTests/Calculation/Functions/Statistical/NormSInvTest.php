<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Statistical;

use PhpOffice\PhpSpreadsheet\Calculation\Statistical;
use PHPUnit\Framework\TestCase;

class NormSInvTest extends TestCase
{
    /**
     * @dataProvider providerNORMSINV
     *
     * @param mixed $expectedResult
     */
    public function testNORMSINV($expectedResult, $testValue): void
    {
        $result = Statistical::NORMSINV($testValue);
        self::assertEqualsWithDelta($expectedResult, $result, 1E-12);
    }

    public function providerNORMSINV()
    {
        return require 'tests/data/Calculation/Statistical/NORMSINV.php';
    }
}
