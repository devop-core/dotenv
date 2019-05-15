<?php
namespace DevOp\Core\Test;

use DevOp\Core\DotEnv;
use PHPUnit\Framework\TestCase;

class DotEnvTest extends TestCase
{

    public function setUp()
    {
        (new DotEnv())->load('tests/.env')->toEnv();
    }

    public function testGetDotEnv()
    {
        $this->assertEquals(true, env('APP_DEBUG'));
        $this->assertEquals('true', getenv('APP_DEBUG'));
    }
}
