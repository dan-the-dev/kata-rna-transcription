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

}
