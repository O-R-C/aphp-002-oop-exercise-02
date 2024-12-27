<?php

declare(strict_types=1);

namespace Interfaces;

interface Employee
{
  public function setName(string $name): void;
  public function getName(): string;
  public function setSurname(string $surname): void;
  public function getSurname(): string;
  public function getFullName(): string;
  public function setAge(int $age): void;
  public function getAge(): int;
  public function setDepartment(string $department): void;
  public function getDepartment(): string;
  public function setPosition(string $position): void;
  public function getPosition(): string;
  public function setSalary(int $salary): void;
  public function getSalary(): int;
}
