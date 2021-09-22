<?php

namespace Kata;

class RnaTranscription
{
    /**
     * @throws UnknownDnaNucleotideException
     */
    public function transcribeDnaToRna(DnaStrand $dnaStrand): RnaStrand
    {
        $rnaStrand = new RnaStrand();
        /** @var DnaNucleotide $dnaNucleotide */
        foreach ($dnaStrand->all() as $dnaNucleotide) {
            $rnaStrand->add($this->transcribeNucleotide($dnaNucleotide));
        }
        return $rnaStrand;
    }

    /**
     * @param DnaStrand $dnaStrand
     * @return RnaStrand
     * @throws UnknownDnaNucleotideException
     */
    private function transcribeNucleotide(DnaNucleotide $dnaNucleotide): RnaNucleotide
    {
        if ($dnaNucleotide->equals(DnaNucleotide::cytosine())) {
            return RnaNucleotide::guanine();
        }
        if ($dnaNucleotide->equals(DnaNucleotide::thymine())) {
            return RnaNucleotide::adenine();
        }
        if ($dnaNucleotide->equals(DnaNucleotide::adenine())) {
            return RnaNucleotide::uracil();
        }
        if ($dnaNucleotide->equals(DnaNucleotide::guanine())) {
            return RnaNucleotide::cytosine();
        }
        throw new UnknownDnaNucleotideException();
    }
}

