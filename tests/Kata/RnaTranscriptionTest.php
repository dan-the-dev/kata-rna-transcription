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

    /**
     * @throws UnknownDnaNucleotideException
     */
    public function testDnaStrandWithDnaNucleotideGIsTransformedInRnaNucleotideC(): void
    {
        $actual = $this->rnaTranscription->transcribeDnaToRna(new DnaStrand(DnaNucleotide::guanine()));
        $expected = new RnaStrand(RnaNucleotide::cytosine());

        $this->assertEquals($expected, $actual);
    }

    /**
     * @throws UnknownDnaNucleotideException
     */
    public function testDnaStrandWithDnaNucleotideCIsTransformedInRnaNucleotideG(): void
    {
        $actual = $this->rnaTranscription->transcribeDnaToRna(new DnaStrand(DnaNucleotide::cytosine()));
        $expected = new RnaStrand(RnaNucleotide::guanine());

        $this->assertEquals($expected, $actual);
    }

    /**
     * @throws UnknownDnaNucleotideException
     */
    public function testDnaStrandWithDnaNucleotideTIsTransformedInRnaNucleotideA(): void
    {
        $actual = $this->rnaTranscription->transcribeDnaToRna(new DnaStrand(DnaNucleotide::thymine()));
        $expected = new RnaStrand(RnaNucleotide::adenine());

        $this->assertEquals($expected, $actual);
    }

    /**
     * @throws UnknownDnaNucleotideException
     */
    public function testDnaStrandWithDnaNucleotideAIsTransformedInRnaNucleotideU(): void
    {
        $actual = $this->rnaTranscription->transcribeDnaToRna(new DnaStrand(DnaNucleotide::adenine()));
        $expected = new RnaStrand(RnaNucleotide::uracil());

        $this->assertEquals($expected, $actual);
    }
}
