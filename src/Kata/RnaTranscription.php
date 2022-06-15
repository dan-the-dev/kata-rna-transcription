<?php

namespace Kata;

class RnaTranscription
{
    public function fromDnaStrand(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->empty()) {
            return new RnaStrand([]);
        }
        return new RnaStrand(['C']);
    }
}
