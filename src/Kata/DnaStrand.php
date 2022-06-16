<?php
declare(strict_types=1);

namespace Kata;

final class DnaStrand
{
    /** @var array<DnaNucleotide> */
    private array $nucleotides;

    public function __construct(array $nucleotides)
    {
        $this->nucleotides = $nucleotides;
    }

    public function all(): array
    {
        return $this->nucleotides;
    }

    public function isEmpty(): bool
    {
        return empty($this->nucleotides);
    }

    public function head(): DnaNucleotide
    {
        return $this->nucleotides[0];
    }
}