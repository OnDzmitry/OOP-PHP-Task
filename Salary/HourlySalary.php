<?php

class HourlySalary implements SalaryInterface
{
    private $salary;

    public function __construct(float $rate, int $hours)
    {
        $this->salary = $hours * $rate;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }
}