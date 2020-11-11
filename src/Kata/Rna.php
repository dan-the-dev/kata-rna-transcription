<?php

namespace Kata;

class Rna
{
    private $strand;

    public function __construct(string $strand)
    {
        $this->strand = $strand;
    }

    public function strand(): string
    {
        return $this->strand;
    }
}