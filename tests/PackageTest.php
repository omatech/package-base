<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Omatech\Package\Package;

final class PackageTest extends TestCase
{
    public function testEchoString(): void
    {
        $p=new Package();
        $this->assertEquals("Hello\n", $p->echo());
        $str='odajfoajfo';
        $this->assertEquals($str, $p->echo($str));
    }
}