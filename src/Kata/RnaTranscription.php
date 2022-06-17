<?php

namespace Kata;

class RnaTranscription
{
    public function handle(DnaNucleotide $dnaNucleotide): RnaNucleotide
    {
        if ($dnaNucleotide->toString() === 'C') {
            return new RnaNucleotide('G');
        }
        return new RnaNucleotide('C');
    }
}
