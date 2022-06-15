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
        $actual = $this->rnaTranscription->fromDnaStrand(new DnaStrand([]));

        $this->assertEquals(new RnaStrand([]), $actual);
    }

    public function testItHandleSingleNucleotideG(): void
    {
        $actual = $this->rnaTranscription->fromDnaStrand(new DnaStrand(['G']));

        $this->assertEquals(new RnaStrand(['C']), $actual);
    }

    public function testItHandleSingleNucleotideC(): void
    {
        $actual = $this->rnaTranscription->fromDnaStrand(new DnaStrand(['C']));

        $this->assertEquals(new RnaStrand(['G']), $actual);
    }
}
