<?php

namespace Kata;

class DnaStrand
{
    /** @var DnaNucleotide[] $strand */
    private $strand;

    public function __construct(DnaNucleotide ...$strand)
    {
        $this->strand = $strand;
    }

    public function equals(DnaStrand $anotherDnaStrand): bool
    {
        /** @var DnaNucleotide $dnaNucleotide */
        foreach ($anotherDnaStrand->strand as $k => $anotherDnaNucleotide) {
            if (!$this->strand[$k]->equals($anotherDnaNucleotide)){
                return false;
            }
        }
        return true;
    }
}