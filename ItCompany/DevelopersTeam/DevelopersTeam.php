<?php

class DevelopersTeam
{
    protected $name;
    protected $developers = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addMember(Employee $developer): void
    {
        array_push($this->developers, $developer);
    }

    public function getTeamSalary(): float
    {
        $salary = 0;
        foreach ($this->developers as $developer) {
            $salary += $developer->getSalary();
        }
        return $salary;
    }

}