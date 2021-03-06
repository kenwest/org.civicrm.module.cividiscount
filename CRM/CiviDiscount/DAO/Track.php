<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from org.civicrm.module.cividiscount/xml/schema/CRM/CiviDiscount/Track.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:f21e9f5ce715d82344b33a1737a3e9a9)
 */
use \CRM_CiviDiscount_ExtensionUtil as E;

/**
 * Database access object for the Track entity.
 */
class CRM_CiviDiscount_DAO_Track extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '1.0';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'cividiscount_track';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Discount Item ID
   *
   * @var int
   */
  public $id;

  /**
   * FK to Item ID of the discount code
   *
   * @var int
   */
  public $item_id;

  /**
   * FK to Contact ID for the contact that used this discount
   *
   * @var int
   */
  public $contact_id;

  /**
   * Date of use
   *
   * @var datetime
   */
  public $used_date;

  /**
   * Tracking code information
   *
   * @var text
   */
  public $track;

  /**
   * FK to contribution table
   *
   * @var int
   */
  public $contribution_id;

  /**
   * FK to event table
   *
   * @var int
   */
  public $event_id;

  /**
   * Table where referenced item is stored
   *
   * @var string
   */
  public $entity_table;

  /**
   * Foreign key to the referenced item
   *
   * @var int
   */
  public $entity_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'cividiscount_track';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return E::ts('Discount Tracking');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'item_id', 'cividiscount_item', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contribution_id', 'civicrm_contribution', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'event_id', 'civicrm_event', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Discount Item ID'),
          'required' => TRUE,
          'where' => 'cividiscount_track.id',
          'table_name' => 'cividiscount_track',
          'entity' => 'Track',
          'bao' => 'CRM_CiviDiscount_DAO_Track',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'item_id' => [
          'name' => 'item_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('FK to Item ID of the discount code'),
          'where' => 'cividiscount_track.item_id',
          'table_name' => 'cividiscount_track',
          'entity' => 'Track',
          'bao' => 'CRM_CiviDiscount_DAO_Track',
          'localizable' => 0,
          'FKClassName' => 'CRM_CiviDiscount_DAO_Item',
          'add' => '1.0',
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('FK to Contact ID for the contact that used this discount'),
          'where' => 'cividiscount_track.contact_id',
          'table_name' => 'cividiscount_track',
          'entity' => 'Track',
          'bao' => 'CRM_CiviDiscount_DAO_Track',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '1.0',
        ],
        'used_date' => [
          'name' => 'used_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => E::ts('Used Date'),
          'description' => E::ts('Date of use'),
          'where' => 'cividiscount_track.used_date',
          'table_name' => 'cividiscount_track',
          'entity' => 'Track',
          'bao' => 'CRM_CiviDiscount_DAO_Track',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'track' => [
          'name' => 'track',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Track'),
          'description' => E::ts('Tracking code information'),
          'where' => 'cividiscount_track.track',
          'table_name' => 'cividiscount_track',
          'entity' => 'Track',
          'bao' => 'CRM_CiviDiscount_DAO_Track',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'contribution_id' => [
          'name' => 'contribution_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('FK to contribution table'),
          'where' => 'cividiscount_track.contribution_id',
          'table_name' => 'cividiscount_track',
          'entity' => 'Track',
          'bao' => 'CRM_CiviDiscount_DAO_Track',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_Contribution',
          'add' => '1.0',
        ],
        'event_id' => [
          'name' => 'event_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('FK to event table'),
          'where' => 'cividiscount_track.event_id',
          'table_name' => 'cividiscount_track',
          'entity' => 'Track',
          'bao' => 'CRM_CiviDiscount_DAO_Track',
          'localizable' => 0,
          'FKClassName' => 'CRM_Event_DAO_Event',
          'add' => '1.0',
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Entity Table'),
          'description' => E::ts('Table where referenced item is stored'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'cividiscount_track.entity_table',
          'table_name' => 'cividiscount_track',
          'entity' => 'Track',
          'bao' => 'CRM_CiviDiscount_DAO_Track',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Foreign key to the referenced item'),
          'required' => TRUE,
          'where' => 'cividiscount_track.entity_id',
          'table_name' => 'cividiscount_track',
          'entity' => 'Track',
          'bao' => 'CRM_CiviDiscount_DAO_Track',
          'localizable' => 0,
          'add' => '1.0',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'ount_track', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'ount_track', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
