<?php

spl_autoload_register(function ($class_name) {
    include 'ItCompany/Developers/' . $class_name . '.php';
    include 'Salary/' . $class_name . '.php';
    include 'ItCompany/DevelopersTeam/' . $class_name . '.php';
});

$team = new DevelopersTeam("X");

$team->addMember(
    new Designer('Kovalchuk', 'Maxim', 'Vladimirovich',
    new FixedSalary(3000))
);
$team->addMember(
    new SeniorDeveloper('Kochergo', 'Pavel', 'Aleksandrovich',
    new HourlySalary(60, 10))
);
$team->addMember(
    new MiddleDeveloper('Kozlovsky', 'Dmitry', 'Viktorovich',
    new FixedSalary(1000))
);
$team->addMember(
    new MiddleDeveloper('Shishko', 'Vadim', 'Yuryevich',
    new FixedSalary(1000))
);
$team->addMember(
    new FrontendDeveloper('Bogdan', 'Yury', 'Vladimirovich',
    new HourlySalary(120, 5))
);

echo 'Salary of team "' . $team->getName() . '" is ' . $team->getTeamSalary() . '$';