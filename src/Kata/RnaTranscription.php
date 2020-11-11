<?php

namespace Kata;

class RnaTranscription
{
    public function handle(Dna $dna): Dna
    {
        if ($dna->equals(new Dna('C'))){
            return new Dna('G');
        }
        return new Dna('C');
    }
}
