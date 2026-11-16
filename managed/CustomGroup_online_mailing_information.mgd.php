<?php

use CRM_EmailEntities_ExtensionUtil as E;

return [
  [
    'name' => 'CustomGroup_online_mailing_information',
    'entity' => 'CustomGroup',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'online_mailing_information',
        'title' => E::ts('Online Mailing Information'),
        'table_name' => 'civicrm_value_online_mailing_information',
        'extends' => 'Activity',
        'extends_entity_column_value:name' => [
          'Online_Mailing',
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_online_mailing_information_CustomField_email_message_id',
    'entity' => 'CustomField',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'online_mailing_information',
        'name' => 'email_message_id',
        'label' => E::ts('EmailMessage ID'),
        'data_type' => 'EntityReference',
        'html_type' => 'Autocomplete-Select',
        'column_name' => 'email_message_id',
        'fk_entity' => 'EmailMessage',
      ],
      'match' => [
        'name',
        'custom_group_id',
      ],
    ],
  ],
];
