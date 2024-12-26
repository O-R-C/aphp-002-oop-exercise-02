<?php

declare(strict_types=1);

namespace Objects\Company\SmallDepartment;

class Employee implements \Interfaces\Employee
{
  protected string $name;
  protected string $surname;
  protected int $age;
  private ?string $department = null;
  private ?string $position = null;
  private ?int $salary = null;

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

  public function getPosition(): string
  {
    return $this->position;
  }

  public function getSalary(): int
  {
    return $this->salary;
  }
}
