<?php

namespace Kata;

class RnaTranscription
{
    private $rnaFactory;

    public function __construct(RnaFactory $rnaFactory)
    {
        $this->rnaFactory = $rnaFactory;
    }

    public function toRna(Dna $dna): Rna
    {
        return $this->rnaFactory->fromDna($dna);
    }
}
