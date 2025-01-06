<?php

declare(strict_types=1);

namespace Interfaces;

interface Departments
{
  public function getDepartments(): array;
  public function setDepartment(string $department): void;
  public function getDepartment(): string;
}
