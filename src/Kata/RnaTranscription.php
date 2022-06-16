<?php

namespace Kata;

class RnaTranscription
{
    public function fromDnaStrand(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->isEmpty()) {
            return new RnaStrand([]);
        }
        if ($dnaStrand->head() === DnaNucleotide::T) {
            return new RnaStrand([
                RnaNucleotide::A
            ]);
        }
        if ($dnaStrand->head() === DnaNucleotide::C) {
            return new RnaStrand([
                RnaNucleotide::G
            ]);
        }
        return new RnaStrand([
            RnaNucleotide::C
        ]);
    }
}
