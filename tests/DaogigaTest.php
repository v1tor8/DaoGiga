<?php
/**
 * Tests for DaoGiga
 */

use PHPUnit\Framework\TestCase;
use Daogiga\Daogiga;

class DaogigaTest extends TestCase {
    private Daogiga $instance;

    protected function setUp(): void {
        $this->instance = new Daogiga(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Daogiga::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
