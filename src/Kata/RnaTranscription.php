<?php

namespace Kata;

class RnaTranscription
{
    public function fromDnaStrand(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->isEmpty()) {
            return new RnaStrand([]);
        }

        $allRnaNucleotides = $dnaStrand->map(function (DnaNucleotide $dnaNucleotide): RnaNucleotide {
            return $this->transcribeRnaNucleotide($dnaNucleotide);
        });

        return new RnaStrand($allRnaNucleotides);
    }

    protected function transcribeRnaNucleotide(DnaNucleotide $dnaNucleotide): RnaNucleotide
    {
        if ($dnaNucleotide === DnaNucleotide::G) {
            return RnaNucleotide::C;
        }
        if ($dnaNucleotide === DnaNucleotide::C) {
            return RnaNucleotide::G;
        }
        if ($dnaNucleotide === DnaNucleotide::T) {
            return RnaNucleotide::A;
        }
        if ($dnaNucleotide === DnaNucleotide::A) {
            return RnaNucleotide::U;
        }
    }
}
