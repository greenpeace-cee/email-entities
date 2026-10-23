<?php
declare(strict_types = 1);

// phpcs:disable PSR1.Files.SideEffects
require_once 'email_entities.civix.php';
// phpcs:enable

use CRM_EmailEntities_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function email_entities_civicrm_config(\CRM_Core_Config $config): void {
  _email_entities_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function email_entities_civicrm_install(): void {
  _email_entities_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function email_entities_civicrm_enable(): void {
  _email_entities_civix_civicrm_enable();
}
