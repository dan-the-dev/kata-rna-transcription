<?php
declare(strict_types=1);

namespace Kata;

final class RnaString
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}