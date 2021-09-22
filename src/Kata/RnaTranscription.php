<?php

namespace Kata;

class RnaTranscription
{

    public function transcribe(DnaStrand $dnaStrand): string
    {
        if ($dnaStrand->equals(DnaStrand::cytosine())) {
            return 'G';
        }
        if ($dnaStrand->equals(DnaStrand::thymine())) {
            return 'A';
        }
        return 'C';
    }
}
