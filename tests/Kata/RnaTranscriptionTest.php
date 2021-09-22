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
        $actual = $this->rnaTranscription->transcribeDnaToRna(DnaStrand::guanine());
        $expected = RnaStrand::cytosine();

        $this->assertEquals($expected, $actual);
    }

    public function testDnaStrandWithDnaNucleotideCIsTransformedInRnaNucleotideG(): void
    {
        $actual = $this->rnaTranscription->transcribeDnaToRna(DnaStrand::cytosine());
        $expected = RnaStrand::guanine();

        $this->assertEquals($expected, $actual);
    }

    public function testDnaStrandWithDnaNucleotideTIsTransformedInRnaNucleotideA(): void
    {
        $actual = $this->rnaTranscription->transcribeDnaToRna(DnaStrand::thymine());
        $expected = RnaStrand::adenine();

        $this->assertEquals($expected, $actual);
    }

    public function testDnaStrandWithDnaNucleotideAIsTransformedInRnaNucleotideU(): void
    {
        $actual = $this->rnaTranscription->transcribeDnaToRna(DnaStrand::adenine());
        $expected = RnaStrand::uracil();

        $this->assertEquals($expected, $actual);
    }
}
