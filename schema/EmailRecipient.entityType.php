<?php
use CRM_EmailEntities_ExtensionUtil as E;

return [
  'name' => 'EmailRecipient',
  'table' => 'civicrm_email_recipient',
  'class' => 'CRM_EmailEntities_DAO_EmailRecipient',
  'getInfo' => fn() => [
    'title' => E::ts('EmailRecipient'),
    'title_plural' => E::ts('EmailRecipients'),
    'description' => E::ts('Link Contacts to Online Mailing Acitvities'),
    'log' => TRUE,
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique EmailRecipient ID'),
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'activity_id' => [
      'title' => E::ts('Activity ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'description' => E::ts('FK to Activity'),
      'entity_reference' => [
        'entity' => 'Activity',
        'key' => 'id',
        'on_delete' => 'CASCADE',
      ],
      'required' => TRUE,
    ],
    'contact_id' => [
      'title' => E::ts('Contact ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'description' => E::ts('FK to Contact'),
      'entity_reference' => [
        'entity' => 'Contact',
        'key' => 'id',
        'on_delete' => 'CASCADE',
      ],
      'required' => TRUE,
    ],
    'received_date' => [
      'title' => E::ts('Received Date'),
      'description' => E::ts('The date the email was received by the contact'),
      'sql_type' => 'timestamp',
      'input_type' => 'Date',
      'required' => TRUE,
    ],
    'created_date' => [
      'title' => E::ts('Created Date'),
      'description' => E::ts('Date of creation'),
      'sql_type' => 'timestamp',
      'input_type' => 'Date',
      'required' => TRUE,
      'default' => 'CURRENT_TIMESTAMP',
    ],
    'modified_date' => [
      'title' => E::ts('Modified Date'),
      'description' => E::ts('Date of last modification'),
      'sql_type' => 'timestamp',
      'input_type' => 'Date',
      'required' => TRUE,
      'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
    ],
  ],
  'getIndices' => fn() => [],
  'getPaths' => fn() => [],
];
