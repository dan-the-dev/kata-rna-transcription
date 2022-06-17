<?php

namespace Kata;

class RnaTranscription
{
    public function handle(DnaNucleotide $dnaNucleotide): RnaNucleotide
    {
        return new RnaNucleotide('C');
    }
}
