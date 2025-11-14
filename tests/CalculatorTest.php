<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $calc = new Calculator();
        $this->assertSame(5, $calc->add(2, 3));
        $this->assertSame(-1, $calc->add(-3, 2));
        $this->assertSame(0.0, $calc->add(0.1, -0.1), '', 0.0001);
    }

    public function testSubtract(): void
    {
        $calc = new Calculator();
        $this->assertSame(2, $calc->subtract(5, 3));
        $this->assertSame(-5, $calc->subtract(-2, 3));
    }

    public function testMultiply(): void
    {
        $calc = new Calculator();
        $this->assertSame(6, $calc->multiply(2, 3));
        $this->assertSame(-6, $calc->multiply(-2, 3));
        $this->assertSame(0, $calc->multiply(0, 99));
    }

    public function testDivide(): void
    {
        $calc = new Calculator();
        $this->assertSame(2.0, $calc->divide(6, 3));
        $this->assertSame(-2.5, $calc->divide(5, -2));
    }

    public function testDivideByZeroThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Division by zero');

        $calc = new Calculator();
        $calc->divide(1, 0);
    }

    /**
     * @dataProvider powerDataProvider
     */
    public function testPower(int $base, int $exp, int $expected): void
    {
        $calc = new Calculator();
        $this->assertSame($expected, $calc->power($base, $exp));
    }

    public static function powerDataProvider(): array
    {
        return [
            [2, 3, 8],
            [5, 0, 1],
            [10, 1, 10],
            [-2, 3, -8],
        ];
    }

    public function testFactorial(): void
    {
        $calc = new Calculator();
        $this->assertSame(1, $calc->factorial(0));
        $this->assertSame(1, $calc->factorial(1));
        $this->assertSame(120, $calc->factorial(5));
    }

    public function testFactorialNegativeThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Non-negative integer required');

        $calc = new Calculator();
        $calc->factorial(-1);
    }
}