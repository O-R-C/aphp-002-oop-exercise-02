<?php

declare(strict_types=1);

namespace Objects\Company\Positions;

abstract class Employee implements \Interfaces\Employee, \Interfaces\Departments, \Interfaces\ApplicationCreator, \Interfaces\WebinarSpeaker, \Interfaces\Lead
{
  use \Traits\Departments, \Traits\Skills, \Traits\Positions;

  protected string $name;
  protected string $surname;
  protected int $age;
  private ?int $salary = null;

  /**
   * @param string $name Имя сотрудника
   * @param string $surname Фамилия сотрудника
   * @param int $age Возраст сотрудника
   * 
   * @throws \Exception
   */

  public function __construct(string $name, string $surname, int $age)
  {
    $this->setName($name);
    $this->setSurname($surname);
    $this->setAge($age);
  }

  public function setName(string $name): void
  {
    if (!trim($name)) {
      throw new \Exception('Name cannot be empty');
    }

    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setSurname(string $surname): void
  {
    if (!trim($surname)) {
      throw new \Exception('Surname cannot be empty');
    }

    $this->surname = $surname;
  }

  public function getSurname(): string
  {
    return $this->surname;
  }

  public function setAge(int $age): void
  {
    if ($age < 0) {
      throw new \Exception('Age cannot be negative');
    }

    $this->age = $age;
  }

  public function getAge(): int
  {
    return $this->age;
  }


  public function getFullName(): string
  {
    return "$this->name $this->surname";
  }

  public function getSalary(): int
  {
    return $this->salary;
  }

  public function setSalary(int $salary): void
  {
    if ($salary < 0) {
      throw new \Exception('Salary cannot be negative');
    }

    $this->salary = $salary;
  }
}
