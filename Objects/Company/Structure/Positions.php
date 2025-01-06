<?php

declare(strict_types=1);

namespace Objects\Company\Structure;

class Positions
{
  public const PROGRAMMER = 'программист';
  public const DESIGNER = 'дизайнер';
  public const MANAGER = 'менеджер';
  public const DIRECTOR = 'директор';
  public const TESTER = 'тестировщик';

  public const ALL_POSITIONS = [self::PROGRAMMER, self::DESIGNER, self::MANAGER, self::DIRECTOR, self::TESTER];

  public static function getAllPositions(): array
  {
    return self::ALL_POSITIONS;
  }
}
