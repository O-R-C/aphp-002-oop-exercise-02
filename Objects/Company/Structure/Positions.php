<?php

declare(strict_types=1);

namespace Objects\Company\Structure;

class Positions
{
  public const PROGRAMMER = 'Programmer';
  public const DESIGNER = 'Designer';
  public const MANAGER = 'Manager';

  public const ALL_POSITIONS = [self::PROGRAMMER, self::DESIGNER, self::MANAGER];

  public static function getAllPositions(): array
  {
    return self::ALL_POSITIONS;
  }
}
