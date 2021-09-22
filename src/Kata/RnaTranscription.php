<?php

namespace Kata;

class RnaTranscription
{
    /**
     * @throws UnknownDnaNucleotideException
     */
    public function transcribeDnaToRna(DnaStrand $dnaStrand): RnaStrand
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
        if ($dnaStrand->equals(DnaStrand::guanine())) {
            return RnaStrand::cytosine();
        }
        throw new UnknownDnaNucleotideException();
    }
}

