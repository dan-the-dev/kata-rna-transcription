<?php

namespace Kata;

class RnaTranscription
{
    private $adapter = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U',
    ];
    public function handle(Dna $dna): Rna
    {
        return new Rna($this->adapter[$dna->strand()]);
    }
}
