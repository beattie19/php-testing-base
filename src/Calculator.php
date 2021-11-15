<?php

namespace App;

class Calculator
{
    private $operands;

    public function setOperands(array $operands): void
    {
        $this->operands = $operands;
    }

    public function add(): int
    {
        return array_sum($this->operands);
    }
}
