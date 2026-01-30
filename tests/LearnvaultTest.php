<?php
/**
 * Tests for LearnVault
 */

use PHPUnit\Framework\TestCase;
use Learnvault\Learnvault;

class LearnvaultTest extends TestCase {
    private Learnvault $instance;

    protected function setUp(): void {
        $this->instance = new Learnvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Learnvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
