<?php

declare(strict_types=1);

namespace Objects\Company\Positions;


class Programmer extends Employee
{
  public function __construct(string $name, string $surname, int $age, int $salary = 20)
  {
    parent::__construct($name, $surname, $age);

    $this->setSalary($salary);
    $this->setPosition(\Objects\Company\Structure\Positions::PROGRAMMER);
  }
}
