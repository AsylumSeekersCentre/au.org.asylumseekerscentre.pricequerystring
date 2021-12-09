<?php

require_once 'pricequerystring.civix.php';
// phpcs:disable
use CRM_Pricequerystring_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function pricequerystring_civicrm_config(&$config) {
  _pricequerystring_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function pricequerystring_civicrm_xmlMenu(&$files) {
  _pricequerystring_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function pricequerystring_civicrm_install() {
  _pricequerystring_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function pricequerystring_civicrm_postInstall() {
  _pricequerystring_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function pricequerystring_civicrm_uninstall() {
  _pricequerystring_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function pricequerystring_civicrm_enable() {
  _pricequerystring_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function pricequerystring_civicrm_disable() {
  _pricequerystring_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function pricequerystring_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _pricequerystring_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function pricequerystring_civicrm_managed(&$entities) {
  _pricequerystring_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function pricequerystring_civicrm_caseTypes(&$caseTypes) {
  _pricequerystring_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function pricequerystring_civicrm_angularModules(&$angularModules) {
  _pricequerystring_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function pricequerystring_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _pricequerystring_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function pricequerystring_civicrm_entityTypes(&$entityTypes) {
  _pricequerystring_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function pricequerystring_civicrm_themes(&$themes) {
  _pricequerystring_civix_civicrm_themes($themes);
}

// function pricequerystring_civicrm_alterContent(&$content, $context, $tplName, &$object) {
//   watchdog('tplName', $context. ', '.$tplName);
// }

function pricequerystring_civicrm_buildForm($formName, &$form) {
  //CRM_Core_Session::setStatus($formName, "formName");
  //watchdog('formName', $formName);
  if ($formName === 'CRM_Contribute_Form_Contribution_Main') {
      watchdog('formName', $formName);
      $res = CRM_Core_Resources::singleton();
      $res->addScriptFile('au.org.asylumseekerscentre.pricequerystring', 'pricequerystring.js');
  }
}


// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function pricequerystring_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function pricequerystring_civicrm_navigationMenu(&$menu) {
//  _pricequerystring_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _pricequerystring_civix_navigationMenu($menu);
//}
