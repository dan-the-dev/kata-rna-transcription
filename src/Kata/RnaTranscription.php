<?php

namespace Kata;

class RnaTranscription
{

    public function transcribe(string $dnaStrand): string
    {
        if ($dnaStrand === 'C') {
            return 'G';
        }
        if ($dnaStrand === 'T') {
            return 'A';
        }
        return 'C';
    }
}
