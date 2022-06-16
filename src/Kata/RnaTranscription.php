<?php

namespace Kata;

class RnaTranscription
{
    public function fromDnaStrand(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->isEmpty()) {
            return new RnaStrand([]);
        }
        $rnaNucleotide = RnaNucleotide::C;
        if ($dnaStrand->head() === DnaNucleotide::T) {
            $rnaNucleotide = RnaNucleotide::A;
        }
        if ($dnaStrand->head() === DnaNucleotide::C) {
            $rnaNucleotide = RnaNucleotide::G;
        }
        return new RnaStrand([
            $rnaNucleotide
        ]);
    }
}
