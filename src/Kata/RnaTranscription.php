<?php

namespace Kata;

class RnaTranscription
{
    public function fromDnaStrand(DnaStrand $dnaStrand): RnaStrand
    {
        return RnaStrand::fromDnaStrand($dnaStrand);
    }
}
