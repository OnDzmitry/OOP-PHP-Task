<?php

abstract class Employee
{
    protected $name;
    protected $surName;
    protected $patronymic;
    protected $salary;

    function __construct(string $surName, string $name, string $patronymic, SalaryInterface $salary)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->patronymic = $patronymic;
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary->getSalary();
    }
}