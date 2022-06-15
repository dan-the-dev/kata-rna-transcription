<?php

namespace Kata;

class RnaTranscription
{
    public function fromDnaStrand(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->isEmpty()) {
            return new RnaStrand([]);
        }
        if ($dnaStrand->all() === ['C']) {
            return new RnaStrand(['G']);
        }
        return new RnaStrand(['C']);
    }
}
