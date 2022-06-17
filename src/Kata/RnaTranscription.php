<?php

namespace Kata;

class RnaTranscription
{
    public function handle(DnaNucleotide $dnaNucleotide): RnaNucleotide
    {
        if ($dnaNucleotide->equalsTo(new DnaNucleotide('T'))) {
            return new RnaNucleotide('A');
        }
        if ($dnaNucleotide->equalsTo(new DnaNucleotide('C'))) {
            return new RnaNucleotide('G');
        }
        return new RnaNucleotide('C');
    }
}
