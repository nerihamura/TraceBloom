<?php
/**
 * Tests for TraceBloom
 */

use PHPUnit\Framework\TestCase;
use Tracebloom\Tracebloom;

class TracebloomTest extends TestCase {
    private Tracebloom $instance;

    protected function setUp(): void {
        $this->instance = new Tracebloom(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tracebloom::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
