<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

/*
final class StackTest extends TestCase
{
    public function testPushAndPop(): void
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}
*/

//Informa un error identificado por $message si $variable no lo es null
final class NullTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertNull('foo');
    }
}

//Informa un error identificado por $message si $actual no es de tipo numeric.

//assertIsNumeric($actual[, $message = ''])
class NumericTest extends TestCase
{
    public function testFailure()
    {
        $this->assertIsNumeric(null);
    }
}

//Informa un error identificado por $message si $actual no está vacío.

// assertEmpty(mixed $actual[, string $message = ''])
final class EmptyTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertEmpty(['foo']);
    }
}