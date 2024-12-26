<?php

declare(strict_types=1);

namespace Objects\Company\SmallDepartment;

use Objects\Company\Employee as Employee;


class Programmer extends Employee
{
  public function __construct(string $name, string $surname, int $age, int $salary = 20)
  {
    parent::__construct($name, $surname, $age);
    $this->setSalary($salary);
    $this->setPosition('Programmer');
    $this->setDepartment('Small Department');
  }
}
