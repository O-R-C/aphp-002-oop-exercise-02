<?php

declare(strict_types=1);

namespace Objects\Company\Positions;

class Employee implements \Interfaces\Employee
{
  protected string $name;
  protected string $surname;
  protected int $age;
  private ?string $department = null;
  private ?string $position = null;
  private ?int $salary = null;
  protected array $skills = [];

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


  public function getDepartment(): string
  {
    return $this->department;
  }

  public function setDepartment(string $department): void
  {
    $this->department = $department;
  }

  public function getPosition(): string
  {
    return $this->position;
  }

  public function setPosition(string $position): void
  {
    $this->position = $position;
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
