<?php

namespace Kata;

class RnaFactory
{
    private $dnaToRnaNucleotideMap = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U',
    ];

    public function fromDna(Dna $dna): Rna
    {
        $rnaStrandString = '';
        foreach ($dna->nucleotides() as $nucleotide) {
            $rnaNucleotide = $this->transcriptRnaNucleotide($nucleotide);
            $rnaStrandString .= $rnaNucleotide;
        }
        return new Rna(new Strand($rnaStrandString));
    }

    /**
     * @param $nucleotide
     * @return string
     */
    public function transcriptRnaNucleotide($nucleotide): string
    {
        return $this->dnaToRnaNucleotideMap[$nucleotide];
    }
}