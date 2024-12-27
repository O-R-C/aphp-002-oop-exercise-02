<?php

declare(strict_types=1);

require_once './autoload.php';

$programmer = new \Objects\Company\SmallDepartment\Programmer('John', 'Doe', 20, 10000);

echo 'Full name: ' . $programmer->getFullName() . PHP_EOL;
echo 'Age: ' . $programmer->getAge() . PHP_EOL;
echo 'Salary: ' . $programmer->getSalary() . PHP_EOL;
echo 'Position: ' . $programmer->getPosition() . PHP_EOL;
echo 'Department: ' . $programmer->getDepartment() . PHP_EOL;
echo 'Skills: ' . json_encode($programmer->getSkillsAppCreator()) . PHP_EOL;
echo 'Skills: ' . json_encode($programmer->getSkillsWebinarSpeaker(), JSON_PRETTY_PRINT, JSON_UNESCAPED_UNICODE) . PHP_EOL;
