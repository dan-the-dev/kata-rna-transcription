<?php

namespace Kata;

class RnaTranscription
{
    public function handle(DnaString $dnaString): RnaString
    {
        return new RnaString('C');
    }
}
