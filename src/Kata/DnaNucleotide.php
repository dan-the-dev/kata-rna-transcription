<?php

namespace Kata;

class DnaNucleotide
{
    private const THYMINE = 'T';
    private const GUANINE = 'G';
    private const ADENINE = 'A';
    private const CYTOSINE = 'C';

    /** @var string $nucleotide */
    private $nucleotide;

    private function __construct(string $strand)
    {
        $this->nucleotide = $strand;
    }

    public static function adenine(): DnaNucleotide
    {
        return new DnaNucleotide(self::ADENINE);
    }

    public static function cytosine(): DnaNucleotide
    {
        return new DnaNucleotide(self::CYTOSINE);
    }

    public static function guanine(): DnaNucleotide
    {
        return new DnaNucleotide(self::GUANINE);
    }

    public static function thymine(): DnaNucleotide
    {
        return new DnaNucleotide(self::THYMINE);
    }

    public function equals(DnaNucleotide $anotherDnaNucleotide): bool
    {
        return $this->nucleotide === $anotherDnaNucleotide->nucleotide;
    }
}