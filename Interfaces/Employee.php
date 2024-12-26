<?php

declare(strict_types=1);

namespace Interfaces;

interface Employee
{
  public function getFullName(): string;
  public function getAge(): int;
  public function getDepartment(): string;
  public function getPosition(): string;
  public function getSalary(): int;
}
