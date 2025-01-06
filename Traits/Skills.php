<?php

declare(strict_types=1);

namespace Traits;

trait Skills
{
  protected array $skills = []; //['appCreator' => [], 'webinarSpeaker' => [], 'lead' => []];

  public function setSkillsAppCreator(array $skills): void
  {
    $this->skills['appCreator'] = ['description' => 'может заниматься разработкой приложения', 'skills' => $skills];
  }

  public function getSkillsAppCreator(): array
  {
    return $this->skills['appCreator'];
  }

  public function setSkillsWebinarSpeaker(array $themes): void
  {
    $this->skills['webinarSpeaker'] = ['description' => 'может проводить вебинары', 'themes' => $themes];
  }

  public function getSkillsWebinarSpeaker(): array
  {
    return $this->skills['webinarSpeaker'];
  }

  public function setSkillsLead(array $skills): void
  {
    $this->skills['lead'] = ['description' => 'может управлять', 'skills' => $skills];
  }

  public function getSkillsLead(): array
  {
    return $this->skills['lead'];
  }

  public function getSkills(): array
  {
    return $this->skills;
  }
}
