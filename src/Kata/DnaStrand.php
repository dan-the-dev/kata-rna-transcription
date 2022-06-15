<?php
declare(strict_types=1);

namespace Kata;

final class DnaStrand
{
    /** @var array<string> */
    private array $nucleotides;

    public function __construct(array $nucleotides)
    {
        $this->nucleotides = $nucleotides;
    }

    public function isEmpty(): bool
    {
        return empty($this->nucleotides);
    }

    public function head(): string
    {
        return $this->nucleotides[0];
    }
}