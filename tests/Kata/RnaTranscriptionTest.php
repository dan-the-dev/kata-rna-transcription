<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class RnaTranscriptionTest extends TestCase
{
    private RnaTranscription $rnaTranscription;

    protected function setUp(): void
    {
        $this->rnaTranscription = new RnaTranscription();
    }

    public function testItTranscribeDnaStringWithGToRnaC(): void
    {
        $actual = $this->rnaTranscription->handle(new DnaString('G'));
        $this->assertEquals(new RnaString('C'), $actual);
    }
}
