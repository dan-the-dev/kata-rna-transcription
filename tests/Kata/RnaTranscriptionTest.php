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


}
