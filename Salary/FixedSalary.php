<?php

class FixedSalary implements SalaryInterface
{
    private $salary;

    public function __construct(float $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

}