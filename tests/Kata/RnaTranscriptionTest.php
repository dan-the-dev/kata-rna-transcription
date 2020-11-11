<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\RnaTranscription;

class RnaTranscriptionTest extends TestCase
{
    private $rnaTranscription;

    protected function setUp(): void
    {
        $this->rnaTranscription = new RnaTranscription();
    }

    public function testDnaGIsTranscribedToRnaC(): void
    {
        $actual = $this->rnaTranscription->handle(new Dna('G'));

        $this->assertEquals(new Rna('C'), $actual);
    }

    public function testDnaCIsTranscribedToRnaG(): void
    {
        $actual = $this->rnaTranscription->handle(new Dna('C'));

        $this->assertEquals(new Rna('G'), $actual);
    }

    public function testDnaTIsTranscribedToRnaA(): void
    {
        $actual = $this->rnaTranscription->handle(new Dna('T'));

        $this->assertEquals(new Rna('A'), $actual);
    }

    public function testDnaaIsTranscribedToRnaU(): void
    {
        $actual = $this->rnaTranscription->handle(new Dna('A'));

        $this->assertEquals(new Rna('U'), $actual);
    }

}
