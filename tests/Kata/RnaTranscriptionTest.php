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

    public function testItTranscribeDnaStrandWithSingleNucleotideG(): void
    {
        $actual = $this->rnaTranscription->handle('G');
        $this->assertEquals('C', $actual);
    }

}
