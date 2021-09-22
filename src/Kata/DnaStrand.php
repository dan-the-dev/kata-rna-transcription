<?php

namespace Kata;

class DnaStrand
{
    const CYTOSINE = 'C';
    const GUANINE = 'G';
    const THYMINE = 'T';

    /** @var string $strand */
    private $strand;

    public function __construct(string $strand)
    {
        $this->strand = $strand;
    }

    public static function cytosine(): DnaStrand
    {
        return new DnaStrand(self::CYTOSINE);
    }

    public static function guanine(): DnaStrand
    {
        return new DnaStrand(self::GUANINE);
    }

    public static function thymine(): DnaStrand
    {
        return new DnaStrand(self::THYMINE);
    }

    public function equals(DnaStrand $anotherDnaStrand): bool
    {
        return $this->strand === $anotherDnaStrand->strand;
    }
}