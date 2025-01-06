<?php

declare(strict_types=1);

namespace Interfaces;

interface WebinarSpeaker
{
  public function setSkillsWebinarSpeaker(array $themes): void;

  public function getSkillsWebinarSpeaker(): array;
}
