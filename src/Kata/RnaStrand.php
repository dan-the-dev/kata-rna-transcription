<?php
declare(strict_types=1);

namespace Kata;

final class RnaStrand
{
    /** @var array<RnaNucleotide> */
    private array $nucleotides;

    public function __construct(array $nucleotides)
    {
        $this->nucleotides = $nucleotides;
    }

    public static function fromDnaStrand(DnaStrand $dnaStrand): self
    {

        $allRnaNucleotides = $dnaStrand->map(function (DnaNucleotide $dnaNucleotide): RnaNucleotide {
            return RnaNucleotide::fromDnaNucleotide($dnaNucleotide);
        });

        return new RnaStrand($allRnaNucleotides);
    }

    public function all(): array
    {
        return $this->nucleotides;
    }

}