<?php

namespace JordJD\GitHubStatusApi;

use JordJD\GitHubStatusApi\Client;
use JordJD\GitHubStatusApi\Enums\GitHubStatus;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testStatusShouldReturnGood()
    {
        $mockedClient = $this->createMock(Client::class);
        $mockedClient->method('status')
            ->willReturn(GitHubStatus::GOOD);

        $this->assertSame(GitHubStatus::GOOD, $mockedClient->status());
    }

    public function testStatusShouldReturnMinor()
    {
        $mockedClient = $this->createMock(Client::class);
        $mockedClient->method('status')
            ->willReturn(GitHubStatus::MINOR);

        $this->assertSame(GitHubStatus::MINOR, $mockedClient->status());
    }

    public function testStatusShouldReturnMajor()
    {
        $mockedClient = $this->createMock(Client::class);
        $mockedClient->method('status')
            ->willReturn(GitHubStatus::MAJOR);

        $this->assertSame(GitHubStatus::MAJOR, $mockedClient->status());
    }

    public function testStatusShouldReturnUnknown()
    {
        $mockedClient = $this->createMock(Client::class);
        $mockedClient->method('status')
            ->willReturn(GitHubStatus::UNKNOWN);

        $this->assertSame(GitHubStatus::UNKNOWN, $mockedClient->status());
    }
}
