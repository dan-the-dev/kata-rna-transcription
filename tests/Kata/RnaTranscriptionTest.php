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
        $dnaNucleotide = new DnaNucleotide('G');
        $actual = $this->rnaTranscription->handle($dnaNucleotide);
        $this->assertEquals(new RnaNucleotide('C'), $actual);
    }

    public function testItTranscribeDnaStrandWithSingleNucleotideC(): void
    {
        $dnaNucleotide = new DnaNucleotide('C');
        $actual = $this->rnaTranscription->handle($dnaNucleotide);
        $this->assertEquals(new RnaNucleotide('G'), $actual);
    }

    public function testItTranscribeDnaStrandWithSingleNucleotideT(): void
    {
        $dnaNucleotide = new DnaNucleotide('T');
        $actual = $this->rnaTranscription->handle($dnaNucleotide);
        $this->assertEquals(new RnaNucleotide('A'), $actual);
    }

    public function testItTranscribeDnaStrandWithSingleNucleotideA(): void
    {
        $dnaNucleotide = new DnaNucleotide('A');
        $actual = $this->rnaTranscription->handle($dnaNucleotide);
        $this->assertEquals(new RnaNucleotide('U'), $actual);
    }

}
