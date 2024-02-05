<?php

require_once 'mayfly.civix.php';

use CRM_Mayfly_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function mayfly_civicrm_config(&$config): void {
  _mayfly_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function mayfly_civicrm_install(): void {
  _mayfly_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function mayfly_civicrm_enable(): void {
  _mayfly_civix_civicrm_enable();
}
