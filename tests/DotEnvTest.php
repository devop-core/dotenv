<?php
namespace DevOp\Core\Test;

use DevOp\Core\DotEnv;

class DotEnvTest extends \PHPUnit_Framework_TestCase
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
