<?php

declare(strict_types=1);

namespace Interfaces;

interface ApplicationCreator
{
  public function setSkillsAppCreator(array $skills): void;
  public function getSkillsAppCreator(): array;
}
