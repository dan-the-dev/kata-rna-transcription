<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\RnaTranscription;

class RnaTranscriptionTest extends TestCase
{
     /** @var \Kata\RnaTranscription $rnaTranscription */
    private $rnaTranscription;

    protected function setUp(): void
    {
        $this->rnaTranscription = new RnaTranscription();
    }

    public function testDnaStrandWithDnaNucleotideGIsTransformedInRnaNucleotideC(): void
    {
        $this->assertEquals(RnaStrand::cytosine(), $this->rnaTranscription->transcribe(DnaStrand::guanine()));
    }

    public function testDnaStrandWithDnaNucleotideCIsTransformedInRnaNucleotideG(): void
    {
        $this->assertEquals(RnaStrand::guanine(), $this->rnaTranscription->transcribe(DnaStrand::cytosine()));
    }

    public function testDnaStrandWithDnaNucleotideTIsTransformedInRnaNucleotideA(): void
    {
        $this->assertEquals(RnaStrand::adenine(), $this->rnaTranscription->transcribe(DnaStrand::thymine()));
    }
}
