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
        $this->assertSame('C', $this->rnaTranscription->transcribe(new DnaStrand('G')));
    }

    public function testDnaStrandWithDnaNucleotideCIsTransformedInRnaNucleotideG(): void
    {
        $this->assertSame('G', $this->rnaTranscription->transcribe(new DnaStrand('C')));
    }

    public function testDnaStrandWithDnaNucleotideTIsTransformedInRnaNucleotideA(): void
    {
        $this->assertSame('A', $this->rnaTranscription->transcribe(new DnaStrand('T')));
    }
}
