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
        $actual = $this->rnaTranscription->fromDnaStrand(new DnaStrand([
            DnaNucleotide::G
        ]));

        $this->assertEquals([ RnaNucleotide::C ], $actual->all());
    }

    public function testItHandleSingleNucleotideC(): void
    {
        $actual = $this->rnaTranscription->fromDnaStrand(new DnaStrand([
            DnaNucleotide::C
        ]));

        $this->assertEquals([ RnaNucleotide::G ], $actual->all());
    }

    public function testItHandleSingleNucleotideT(): void
    {
        $actual = $this->rnaTranscription->fromDnaStrand(new DnaStrand([
            DnaNucleotide::T
        ]));

        $this->assertEquals([ RnaNucleotide::A ], $actual->all());
    }

    public function testItHandleSingleNucleotideA(): void
    {
        $actual = $this->rnaTranscription->fromDnaStrand(new DnaStrand([
            DnaNucleotide::A
        ]));

        $this->assertEquals([ RnaNucleotide::U ], $actual->all());
    }

    public function testItHandleMultipleCompleteStrada(): void
    {
        $actual = $this->rnaTranscription->fromDnaStrand(new DnaStrand([
            DnaNucleotide::A, DnaNucleotide::G, DnaNucleotide::C, DnaNucleotide::T
        ]));

        $this->assertEquals([
            RnaNucleotide::U, RnaNucleotide::C, RnaNucleotide::G, RnaNucleotide::A
        ], $actual->all());
    }

}
