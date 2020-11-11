<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\RnaTranscription;

class RnaTranscriptionTest extends TestCase
{
    private $rnaTranscription;

    protected function setUp(): void
    {
        $this->rnaTranscription = new RnaTranscription(new RnaFactory());
    }

    public function testDnaGIsTranscribedToRnaC(): void
    {
        $actual = $this->rnaTranscription->toRna(new Dna(new Strand('G')));

        $this->assertEquals(new Rna(new Strand('C')), $actual);
    }

    public function testDnaCIsTranscribedToRnaG(): void
    {
        $actual = $this->rnaTranscription->toRna(new Dna(new Strand('C')));

        $this->assertEquals(new Rna(new Strand('G')), $actual);
    }

    public function testDnaTIsTranscribedToRnaA(): void
    {
        $actual = $this->rnaTranscription->toRna(new Dna(new Strand('T')));

        $this->assertEquals(new Rna(new Strand('A')), $actual);
    }

    public function testDnaAIsTranscribedToRnaU(): void
    {
        $actual = $this->rnaTranscription->toRna(new Dna(new Strand('A')));

        $this->assertEquals(new Rna(new Strand('U')), $actual);
    }

    public function testDnaGGIsTranscribedToRnaCC(): void
    {
        $actual = $this->rnaTranscription->toRna(new Dna(new Strand('GG')));

        $this->assertEquals(new Rna(new Strand('CC')), $actual);
    }

    public function testDnaCCIsTranscribedToRnaGG(): void
    {
        $actual = $this->rnaTranscription->toRna(new Dna(new Strand('CC')));

        $this->assertEquals(new Rna(new Strand('GG')), $actual);
    }

    public function testDnaACGTGGTCTTAAIsTranscribedToRnaUGCACCAGAAUU(): void
    {
        $actual = $this->rnaTranscription->toRna(new Dna(new Strand('ACGTGGTCTTAA')));

        $this->assertEquals(new Rna(new Strand('UGCACCAGAAUU')), $actual);
    }

}
