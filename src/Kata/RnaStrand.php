<?php

namespace Kata;

class RnaStrand
{
    /** @var RnaNucleotide[] $strand */
    private $strand;

    public function __construct(RnaNucleotide ...$strand)
    {
        $this->strand = $strand;
    }

    public function equals(RnaStrand $anotherDnaStrand): bool
    {
        /** @var RnaNucleotide $dnaNucleotide */
        foreach ($anotherDnaStrand->strand as $k => $anotherDnaNucleotide) {
            if (!$this->strand[$k]->equals($anotherDnaNucleotide)){
                return false;
            }
        }
        return true;
    }

    public function add(RnaNucleotide $rnaNucleotide): void
    {
        array_push($this->strand, $rnaNucleotide);
    }
}