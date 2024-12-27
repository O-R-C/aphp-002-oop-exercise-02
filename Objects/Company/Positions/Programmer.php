<?php

declare(strict_types=1);

namespace Objects\Company\Positions;

use Interfaces\ApplicationCreator as ApplicationCreator;
use Interfaces\WebinarSpeaker as WebinarSpeaker;

class Programmer extends Employee implements ApplicationCreator, WebinarSpeaker
{
  public function __construct(string $name, string $surname, int $age, int $salary = 20)
  {
    parent::__construct($name, $surname, $age);

    $this->setSalary($salary);
    $this->setPosition('Programmer');
    $this->setDepartment('Small Department');
    $this->setSkillsAppCreator();
    $this->setSkillsWebinarSpeaker();
  }

  public function setSkillsAppCreator(): void
  {
    $this->skills['appCreator'] = [
      'description' => 'может заниматься разработкой приложения',
      'пишет код',
    ];
  }

  public function getSkillsAppCreator(): array
  {
    return $this->skills['appCreator'];
  }

  public function setSkillsWebinarSpeaker(): void
  {
    $this->skills['webinarSpeaker'] = [
      'description' => 'может проводить вебинары',
      'технические',
      'психологические',

    ];
  }

  public function getSkillsWebinarSpeaker(): array
  {
    return $this->skills['webinarSpeaker'];
  }
}
