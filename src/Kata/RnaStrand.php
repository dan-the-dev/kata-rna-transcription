<?php

namespace Kata;

class RnaStrand
{
    const ADENINE = 'A';
    const CYTOSINE = 'C';
    const GUANINE = 'G';

    /** @var string $strand */
    private $strand;

    private function __construct(string $strand)
    {
        $this->strand = $strand;
    }

    public static function cytosine(): RnaStrand
    {
        return new RnaStrand(self::CYTOSINE);
    }

    public static function guanine(): RnaStrand
    {
        return new RnaStrand(self::GUANINE);
    }

    public static function adenine(): RnaStrand
    {
        return new RnaStrand(self::ADENINE);
    }

    public function equals(RnaStrand $anotherDnaStrand): bool
    {
        return $this->strand === $anotherDnaStrand->strand;
    }
}