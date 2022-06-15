<?php
declare(strict_types=1);

namespace Kata;

final class DnaStrand
{
    private array $nucleotides;

    public function __construct(array $nucleotides)
    {
        $this->nucleotides = $nucleotides;
    }

    public function all(): array
    {
        return $this->nucleotides;
    }

}