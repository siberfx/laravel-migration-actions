<?php

declare(strict_types=1);

namespace Tests\Services;

use DragonCode\LaravelActions\Support\Git;
use Tests\TestCase;

class GitTest extends TestCase
{
    public function testCurrentBranchNull()
    {
        $this->assertNull($this->git()->currentBranch(__DIR__));
    }

    public function testCurrentBranch()
    {
        $branch = $this->git()->currentBranch(__DIR__ . '/../../.git');

        $this->assertIsString($branch);
    }

    protected function git(): Git
    {
        return new Git();
    }
}
