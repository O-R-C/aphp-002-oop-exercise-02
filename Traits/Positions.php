<?php

declare(strict_types=1);

namespace Traits;

trait Positions
{
  protected ?string $position = null;

  public function getPosition(): string
  {
    return $this->position;
  }

  public function setPosition(string $position): void
  {
    if (empty($position)) {
      throw new \InvalidArgumentException('Position cannot be empty.');
    }

    if (!is_string($position)) {
      throw new \InvalidArgumentException('Position must be a string.');
    }

    if (!in_array($position, \Objects\Company\Structure\Positions::getAllPositions())) {
      throw new \InvalidArgumentException('Position must be one of the following: ' . implode(', ', \Objects\Company\Structure\Positions::getAllPositions()));
    }

    $this->position = $position;
  }
}
