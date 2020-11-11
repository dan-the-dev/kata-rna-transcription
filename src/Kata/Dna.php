<?php

namespace Kata;

class Dna
{
    private $strand;

    public function __construct(Strand $strand)
    {
        $this->strand = $strand;
    }

    public function nucleotides(): array
    {
        return $this->strand->nucleotides();
    }
}