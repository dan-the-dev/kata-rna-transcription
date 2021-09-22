<?php

namespace Kata;

class DnaStrand
{
    /** @var string $strand */
    private $strand;

    public function __construct(string $strand)
    {
        $this->strand = $strand;
    }

    public function equals(DnaStrand $anotherDnaStrand): bool
    {
        return $this->strand === $anotherDnaStrand->strand;
    }
}