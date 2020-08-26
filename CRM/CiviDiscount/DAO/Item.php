<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from org.civicrm.module.cividiscount/xml/schema/CRM/CiviDiscount/Item.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:da931382b7e4824da91a30c4b98240d6)
 */
use \CRM_CiviDiscount_ExtensionUtil as E;

/**
 * Database access object for the Item entity.
 */
class CRM_CiviDiscount_DAO_Item extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '1.0';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'cividiscount_item';

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
   * Discount Code
   *
   * @var string
   */
  public $code;

  /**
   * Discount Description
   *
   * @var string
   */
  public $description;

  /**
   * Amount of discount, actual or percentage
   *
   * @var string
   */
  public $amount;

  /**
   * Type of discount, actual or percentage
   *
   * @var string
   */
  public $amount_type;

  /**
   * Max number of times this code can be used
   *
   * @var int
   */
  public $count_max;

  /**
   * Number of times this code has been used
   *
   * @var int
   */
  public $count_use;

  /**
   * Serialized list of events for which this code can be used
   *
   * @var text
   */
  public $events;

  /**
   * Serialized list of pricesets for which this code can be used
   *
   * @var text
   */
  public $pricesets;

  /**
   * Serialized list of memberships for which this code can be used
   *
   * @var text
   */
  public $memberships;

  /**
   * Serialized list of entity-based attributes. A user with one of them has the discount automatically applied
   *
   * @var text
   */
  public $autodiscount;

  /**
   * FK to Contact ID for the organization that originated this discount
   *
   * @var int
   */
  public $organization_id;

  /**
   * Date this discount activated
   *
   * @var datetime
   */
  public $active_on;

  /**
   * Date this discount expires
   *
   * @var datetime
   */
  public $expire_on;

  /**
   * Is this discount active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * What filters apply to this discount (json array)
   *
   * @var string
   */
  public $filters;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'cividiscount_item';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return E::ts('Discount Items');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'organization_id', 'civicrm_contact', 'id');
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
          'where' => 'cividiscount_item.id',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'code' => [
          'name' => 'code',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Code'),
          'description' => E::ts('Discount Code'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'cividiscount_item.code',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Description'),
          'description' => E::ts('Discount Description'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'cividiscount_item.description',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'amount' => [
          'name' => 'amount',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Amount'),
          'description' => E::ts('Amount of discount, actual or percentage'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'cividiscount_item.amount',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'amount_type' => [
          'name' => 'amount_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Amount Type'),
          'description' => E::ts('Type of discount, actual or percentage'),
          'required' => TRUE,
          'maxlength' => 4,
          'size' => CRM_Utils_Type::FOUR,
          'where' => 'cividiscount_item.amount_type',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'count_max' => [
          'name' => 'count_max',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Count Max'),
          'description' => E::ts('Max number of times this code can be used'),
          'required' => TRUE,
          'where' => 'cividiscount_item.count_max',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'count_use' => [
          'name' => 'count_use',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Count Use'),
          'description' => E::ts('Number of times this code has been used'),
          'required' => TRUE,
          'where' => 'cividiscount_item.count_use',
          'default' => '0',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'events' => [
          'name' => 'events',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Events'),
          'description' => E::ts('Serialized list of events for which this code can be used'),
          'where' => 'cividiscount_item.events',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'pricesets' => [
          'name' => 'pricesets',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Pricesets'),
          'description' => E::ts('Serialized list of pricesets for which this code can be used'),
          'where' => 'cividiscount_item.pricesets',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'memberships' => [
          'name' => 'memberships',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Memberships'),
          'description' => E::ts('Serialized list of memberships for which this code can be used'),
          'where' => 'cividiscount_item.memberships',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'autodiscount' => [
          'name' => 'autodiscount',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Autodiscount'),
          'description' => E::ts('Serialized list of entity-based attributes. A user with one of them has the discount automatically applied'),
          'where' => 'cividiscount_item.autodiscount',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'add' => '1.0',
        ],
        'organization_id' => [
          'name' => 'organization_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('FK to Contact ID for the organization that originated this discount'),
          'where' => 'cividiscount_item.organization_id',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '1.0',
        ],
        'active_on' => [
          'name' => 'active_on',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => E::ts('Active On'),
          'description' => E::ts('Date this discount activated'),
          'where' => 'cividiscount_item.active_on',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'expire_on' => [
          'name' => 'expire_on',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => E::ts('Expire On'),
          'description' => E::ts('Date this discount expires'),
          'where' => 'cividiscount_item.expire_on',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'description' => E::ts('Is this discount active?'),
          'where' => 'cividiscount_item.is_active',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'filters' => [
          'name' => 'filters',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Discount Filters'),
          'description' => E::ts('What filters apply to this discount (json array)'),
          'where' => 'cividiscount_item.filters',
          'table_name' => 'cividiscount_item',
          'entity' => 'Item',
          'bao' => 'CRM_CiviDiscount_DAO_Item',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'add' => '2.6',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'ount_item', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'ount_item', $prefix, []);
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
