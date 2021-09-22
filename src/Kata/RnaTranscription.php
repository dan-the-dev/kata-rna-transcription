<?php

namespace Kata;

class RnaTranscription
{

    public function transcribe(DnaStrand $dnaStrand): string
    {
        if ($dnaStrand->equals(new DnaStrand('C'))) {
            return 'G';
        }
        if ($dnaStrand->equals(new DnaStrand('T'))) {
            return 'A';
        }
        return 'C';
    }
}
