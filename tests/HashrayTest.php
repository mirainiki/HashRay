<?php
/**
 * Tests for HashRay
 */

use PHPUnit\Framework\TestCase;
use Hashray\Hashray;

class HashrayTest extends TestCase {
    private Hashray $instance;

    protected function setUp(): void {
        $this->instance = new Hashray(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hashray::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
