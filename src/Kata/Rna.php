<?php

namespace Kata;

class Rna
{
    private $strand;

    public function __construct(Strand $strand)
    {
        $this->strand = $strand;
    }
}
