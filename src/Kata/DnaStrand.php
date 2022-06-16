<?php
declare(strict_types=1);

namespace Kata;

use Closure;

final class DnaStrand
{
    /** @var array<DnaNucleotide> */
    private array $nucleotides;

    public function __construct(array $nucleotides)
    {
        $this->nucleotides = $nucleotides;
    }

    public function map(Closure $callback): array
    {
        return array_map($callback, $this->nucleotides);
    }

}