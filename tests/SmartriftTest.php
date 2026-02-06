<?php
/**
 * Tests for smartRift
 */

use PHPUnit\Framework\TestCase;
use Smartrift\Smartrift;

class SmartriftTest extends TestCase {
    private Smartrift $instance;

    protected function setUp(): void {
        $this->instance = new Smartrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
