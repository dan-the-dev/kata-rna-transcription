<?php

namespace Kata;

class RnaTranscription
{

    public function transcribe(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->equals(DnaStrand::cytosine())) {
            return RnaStrand::guanine();
        }
        if ($dnaStrand->equals(DnaStrand::thymine())) {
            return RnaStrand::adenine();
        }
        if ($dnaStrand->equals(DnaStrand::adenine())) {
            return RnaStrand::uracil();
        }
        return RnaStrand::cytosine();
    }
}
