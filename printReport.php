<?php

declare(strict_types=1);

function printReport(array $workers): void
{
  echo "\nReport: " . PHP_EOL;

  foreach ($workers as $worker) {
    $name = $worker->getFullName();
    $position = $worker->getPosition();
    $salary = $worker->getSalary();
    $workerSkills = $worker->getSkills();
    $reportSkills = [];

    if (key_exists('webinarSpeaker', $workerSkills)) {
      $description = $workerSkills['webinarSpeaker']['description'];
      $themes = implode(', ', $worker->getSkillsWebinarSpeaker()['themes']);
      $reportSkills[] = "$description: на $themes темы";
    }

    if (key_exists('lead', $workerSkills)) {
      $description = $workerSkills['lead']['description'];
      $skills = implode(', ', $worker->getSkillsLead()['skills']);
      $reportSkills[] = "$description: $skills";
    }

    if (key_exists('appCreator', $workerSkills)) {
      $description = $workerSkills['appCreator']['description'];
      $skills = implode(', ', $worker->getSkillsAppCreator()['skills']);
      $reportSkills[] = "$description: $skills";
    }

    echo "$name, позиция: $position, зарплата: $salary попугаев, " . implode(', ', $reportSkills) . "." . PHP_EOL;
  }

  echo "\nОбщее количество сотрудников: " . count($workers) . " человек" . PHP_EOL;
  echo "Общая сумма зарплат: " . array_reduce($workers, function ($carry, $item) {
    return $carry + $item->getSalary();
  }, 0) . " попугаев";
  echo "\n";
}
