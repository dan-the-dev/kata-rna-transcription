<?php

namespace Kata;

class RnaNucleotide
{
    private const GUANINE = 'G';
    private const ADENINE = 'A';
    private const URACIL = 'U';
    private const CYTOSINE = 'C';

    /** @var string $nucleotide */
    private $nucleotide;

    private function __construct(string $strand)
    {
        $this->nucleotide = $strand;
    }

    public static function adenine(): RnaNucleotide
    {
        return new RnaNucleotide(self::ADENINE);
    }

    public static function cytosine(): RnaNucleotide
    {
        return new RnaNucleotide(self::CYTOSINE);
    }

    public static function guanine(): RnaNucleotide
    {
        return new RnaNucleotide(self::GUANINE);
    }

    public static function uracil(): RnaNucleotide
    {
        return new RnaNucleotide(self::URACIL);
    }

    public function equals(RnaNucleotide $anotherDnaNucleotide): bool
    {
        return $this->nucleotide === $anotherDnaNucleotide->nucleotide;
    }
}