<?php

declare(strict_types=1);

namespace Interfaces;

interface Lead
{
  public function setSkillsLead(array $skills): void;
  public function getSkillsLead(): array;
}
