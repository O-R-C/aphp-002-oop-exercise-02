<?php

declare(strict_types=1);

$testData = [
  [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 20,
    'salary' => 60,
    'position' => 'Programmer',
    'department' => 'Small department',
    'skills' => [
      'webinarSpeaker' => [
        'themes' => [
          'технические',
          'психологические',
        ]
      ],
      'appCreator' => [
        'skills' => [
          'пишет код',
        ]
      ]
    ],
  ],
  [
    'name' => 'Jane',
    'surname' => 'Doe',
    'age' => 25,
    'salary' => 40,
    'position' => 'Tester',
    'department' => 'Small department',
    'skills' => [
      'appCreator' => [
        'skills' => [
          'тестирует код',
        ]
      ]
    ],
  ],
  [
    'name' => 'Bob',
    'surname' => 'Doe',
    'age' => 30,
    'salary' => 80,
    'position' => 'Manager',
    'department' => 'Small department',
    'skills' => [
      'lead' => [
        'skills' => [
          'руководит командой',
        ]
      ],
      'webinarSpeaker' => [
        'themes' => [
          'стратегические',
          'психологические',
        ]
      ],
    ],
  ],
  [
    'name' => 'Alice',
    'surname' => 'Doe',
    'age' => 35,
    'salary' => 4000,
    'position' => 'Designer',
    'department' => 'Small department',
    'skills' => [
      'appCreator' => [
        'skills' => [
          'дизайнер',
        ]
      ]
    ],
  ],
  [
    'name' => 'Charlie',
    'surname' => 'Doe',
    'age' => 40,
    'salary' => 2000,
    'position' => 'CEO',
    'department' => 'Small department',
    'skills' => [
      'lead' => [
        'skills' => [
          'руководит командой',
        ]
      ],
      'webinarSpeaker' => [
        'themes' => [
          'стратегические',
          'психологические',
        ]
      ],
    ],
  ],
  [
    'name' => 'Dave',
    'surname' => 'Doe',
    'age' => 45,
    'salary' => 1000,
    'position' => 'Director',
    'department' => 'Small department',
    'skills' => [
      'lead' => [
        'skills' => [
          'руководит отделом',
        ]
      ],
      'webinarSpeaker' => [
        'themes' => [
          'стратегические',
          'психологические',
        ]
      ],
    ]
  ],
  [
    'name' => 'Eve',
    'surname' => 'Doe',
    'age' => 50,
    'salary' => 50,
    'position' => 'Programmer',
    'department' => 'Small department',
    'skills' => [
      'appCreator' => [
        'skills' => [
          'пишет код',
        ]
      ]
    ]
  ]
];

$recruitStaff = function (array $staff = []) use ($testData): array {
  if (empty($staff)) {
    $staff = $testData;
  }

  foreach ($staff as $key => $value) {
    try {
      $className = "Objects\\Company\\Positions\\" . $value['position'];

      if (!class_exists($className)) {
        throw new \Exception("Class $className not found");
      }

      $workers[$key] = new $className($value['name'], $value['surname'], $value['age'], $value['salary']);
      // $workers[$key]->setPosition($value['position']);
      $workers[$key]->setDepartment($value['department']);

      if (key_exists('webinarSpeaker', $value['skills'])) {
        $workers[$key]->setSkillsWebinarSpeaker($value['skills']['webinarSpeaker']['themes']);
      }

      if (key_exists('lead', $value['skills'])) {
        $workers[$key]->setSkillsLead($value['skills']['lead']['skills']);
      }

      if (key_exists('appCreator', $value['skills'])) {
        $workers[$key]->setSkillsAppCreator($value['skills']['appCreator']['skills']);
      }
    } catch (Throwable $e) {
      echo $e->getMessage() . PHP_EOL;
    }
  }

  return $workers;
};
