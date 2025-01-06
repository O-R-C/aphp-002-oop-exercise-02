<?php

declare(strict_types=1);

namespace Traits;

trait Departments
{
  public const IT = 'IT';
  public const HR = 'HR';
  public const MARKETING = 'Marketing';
  public const SMALL_DEPARTMENT = 'Small department';
  protected array $departments = [self::IT, self::HR, self::MARKETING, self::SMALL_DEPARTMENT];

  protected ?string $department = null;

  public function getDepartments(): array
  {
    return $this->departments;
  }

  public function setDepartment(string $department): void
  {
    if (!in_array($department, $this->departments)) {
      throw new \Exception('Invalid department');
    }

    $this->department = $department;
  }

  public function getDepartment(): string
  {
    return $this->department;
  }

  public function setSmallDepartment(): void
  {
    $this->setDepartment(self::SMALL_DEPARTMENT);
  }
}
