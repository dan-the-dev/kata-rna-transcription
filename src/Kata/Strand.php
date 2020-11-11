<?php

namespace Kata;

class Strand
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function nucleotides(): array
    {
        return str_split($this->value);
    }
}