<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\RnaTranscription;

class RnaTranscriptionTest extends TestCase
{
    private RnaTranscription $rnaTranscription;

    protected function setUp(): void
    {
        $this->rnaTranscription = new RnaTranscription();
    }

    public function testItHandleEmptyStrand(): void
    {
        $actual = $this->rnaTranscription->fromDnaStrand([]);

        $this->assertEquals([], $actual);
    }
}
