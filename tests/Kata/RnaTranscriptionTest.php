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

    public function testDnaStrandWithGNucleotideIsTransformedInRnaNucleotideC(): void
    {
        $this->assertSame('C', $this->rnaTranscription->transcribe('G'));
    }
}
