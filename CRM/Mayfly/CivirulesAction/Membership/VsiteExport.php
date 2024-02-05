<?php

/**
 * Class for CiviRules: VsiteExport for Membership Action
 *
 * @author Alan Dixon
 * @license AGPL-3.0
 */
class CRM_Mayfly_CivirulesAction_Membership_VsiteExport extends CRM_Civirules_Action {
      
  public function getExtraDataInputUrl($ruleActionId) {
    return FALSE;
  } 

  /**
   * Method processAction to execute the action
   *
   * @param CRM_Civirules_TriggerData_TriggerData $triggerData
   * @access public
   *
   */
  public function processAction(CRM_Civirules_TriggerData_TriggerData $triggerData) {
    $membership = $triggerData->getEntityData('Membership');
    $results = \Civi\Api4\Membership::vsiteExport(TRUE)
      ->setMembershipId($membership['id'])
      ->execute();
    // CRM_Core_Error::debug_var('membership', $membership); 
  }
}
