<?php

use CRM_EmailEntities_ExtensionUtil as E;

return [
  [
    'name' => 'OptionValue_Online_Mailing',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'activity_type',
        'label' => E::ts('Online Mailing'),
        'name' => 'Online_Mailing',
        'description' => E::ts('Delivery of an email to its recipients of one day'),
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
];
