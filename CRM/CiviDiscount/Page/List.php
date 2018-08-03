<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.6                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2015                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 * @package CiviDiscount
 */

require_once 'CRM/CiviDiscount/DAO/Item.php';
use CRM_CiviDiscount_ExtensionUtil as E;

/**
 * Page for displaying list of discount codes
 */
class CRM_CiviDiscount_Page_List extends CRM_Core_Page_Basic {
  public $useLivePageJS = TRUE;

  /**
   * The action links that we need to display for the browse screen
   *
   * @var array
   * @static
   */
  static $_links = NULL;

  /**
   * Get BAO Name
   *
   * @return string Classname of BAO.
   */
  function getBAOName() {
    return 'CRM_CiviDiscount_BAO_Item';
  }

  /**
   * Get action Links
   *
   * @return array (reference) of action links
   */
  function &links() {
    if (!(self::$_links)) {
      self::$_links = array(
        CRM_Core_Action::VIEW => array(
          'name' => E::ts('View'),
          'url' => 'civicrm/cividiscount/discount/view',
          'qs' => 'id=%%id%%&reset=1',
          'title' => E::ts('View Discount Code')
        ),
        CRM_Core_Action::UPDATE => array(
          'name' => E::ts('Edit'),
          'url' => 'civicrm/cividiscount/discount/edit',
          'qs' => '&id=%%id%%&reset=1',
          'title' => E::ts('Edit Discount Code')
        ),
        CRM_Core_Action::COPY => array(
          'name' => E::ts('Copy'),
          'url' => 'civicrm/cividiscount/discount/copy',
          'qs' => '&cloneID=%%id%%&reset=1',
          'title' => E::ts('Clone Discount Code')
        ),
        CRM_Core_Action::DISABLE => array(
          'name' => E::ts('Disable'),
          'class' => 'crm-enable-disable',
          'title' => E::ts('Disable Discount Code')
        ),
        CRM_Core_Action::ENABLE => array(
          'name' => E::ts('Enable'),
          'class' => 'crm-enable-disable',
          'title' => E::ts('Enable Discount Code')
        ),
        CRM_Core_Action::DELETE => array(
          'name' => E::ts('Delete'),
          'url' => 'civicrm/cividiscount/discount/delete',
          'qs' => '&id=%%id%%',
          'title' => E::ts('Delete Discount Code')
        )
      );
    }
    return self::$_links;
  }

  /**
   * Get name of edit form
   *
   * @return string Classname of edit form.
   */
  function editForm() {
    return 'CRM_CiviDiscount_Form_Item';
  }

  /**
   * Get edit form name
   *
   * @return string name of this page.
   */
  function editName() {
    return E::ts('Discount Code');
  }

  /**
   * Get user context.
   *
   * @return string user context.
   */
  function userContext($mode = NULL) {
    return 'civicrm/cividiscount/discount';
  }
}

