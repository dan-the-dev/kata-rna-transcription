<?php
declare(strict_types=1);

namespace Kata;

enum RnaNucleotide
{
    case C;
    case G;
    case A;
    case U;

    public static function fromDnaNucleotide(DnaNucleotide $dnaNucleotide): self
    {
        if ($dnaNucleotide === DnaNucleotide::G) {
            return self::C;
        }
        if ($dnaNucleotide === DnaNucleotide::C) {
            return self::G;
        }
        if ($dnaNucleotide === DnaNucleotide::T) {
            return self::A;
        }
        if ($dnaNucleotide === DnaNucleotide::A) {
            return self::U;
        }
    }
}