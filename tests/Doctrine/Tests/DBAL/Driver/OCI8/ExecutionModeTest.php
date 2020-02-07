<?php

declare(strict_types=1);

namespace Doctrine\Tests\DBAL\Driver\OCI8;

use Doctrine\DBAL\Driver\OCI8\ExecutionMode;
use PHPStan\Testing\TestCase;

final class ExecutionModeTest extends TestCase
{
    /** @var ExecutionMode */
    private $mode;

    protected function setUp() : void
    {
        $this->mode = new ExecutionMode();
    }

    public function testDefaultAutoCommitStatus() : void
    {
        self::assertTrue($this->mode->isAutoCommitEnabled());
    }

    public function testChangeAutoCommitStatus() : void
    {
        $this->mode->disableAutoCommit();
        self::assertFalse($this->mode->isAutoCommitEnabled());

        $this->mode->enableAutoCommit();
        self::assertTrue($this->mode->isAutoCommitEnabled());
    }
}
