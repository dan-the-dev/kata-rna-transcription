<?php

namespace Kata;

class RnaTranscription
{
    /**
     * @throws UnknownDnaNucleotideException
     */
    public function transcribeDnaToRna(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->equals(new DnaStrand(DnaNucleotide::cytosine()))) {
            return new RnaStrand(RnaNucleotide::guanine());
        }
        if ($dnaStrand->equals(new DnaStrand(DnaNucleotide::thymine()))) {
            return new RnaStrand(RnaNucleotide::adenine());
        }
        if ($dnaStrand->equals(new DnaStrand(DnaNucleotide::adenine()))) {
            return new RnaStrand(RnaNucleotide::uracil());
        }
        if ($dnaStrand->equals(new DnaStrand(DnaNucleotide::guanine()))) {
            return new RnaStrand(RnaNucleotide::cytosine());
        }
        throw new UnknownDnaNucleotideException();
    }
}

