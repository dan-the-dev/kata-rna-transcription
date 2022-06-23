<?php
declare(strict_types=1);

namespace Kata;

final class DnaString
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}