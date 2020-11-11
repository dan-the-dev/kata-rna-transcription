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

        $this->assertEquals(new Dna('C'), $actual);
    }


    public function testDnaCIsTranscribedToRnaG(): void
    {
        $actual = $this->rnaTranscription->handle(new Dna('C'));

        $this->assertEquals(new Dna('G'), $actual);
    }

}
