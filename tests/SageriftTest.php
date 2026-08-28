<?php
/**
 * Tests for SageRift
 */

use PHPUnit\Framework\TestCase;
use Sagerift\Sagerift;

class SageriftTest extends TestCase {
    private Sagerift $instance;

    protected function setUp(): void {
        $this->instance = new Sagerift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sagerift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
