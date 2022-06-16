<?php

namespace Kata;

class RnaTranscription
{
    public function fromDnaStrand(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->isEmpty()) {
            return new RnaStrand([]);
        }

        $dnaNucleotide = $dnaStrand->head();

        $rnaNucleotide = $this->transcribeRnaNucleotide($dnaNucleotide);

        return new RnaStrand([
            $rnaNucleotide
        ]);
    }

    /**
     * @param DnaNucleotide $dnaNucleotide
     * @return RnaNucleotide
     */
    protected function transcribeRnaNucleotide(DnaNucleotide $dnaNucleotide): RnaNucleotide
    {
        $rnaNucleotide = RnaNucleotide::C;
        if ($dnaNucleotide === DnaNucleotide::T) {
            $rnaNucleotide = RnaNucleotide::A;
        }
        if ($dnaNucleotide === DnaNucleotide::C) {
            $rnaNucleotide = RnaNucleotide::G;
        }
        return $rnaNucleotide;
    }
}
