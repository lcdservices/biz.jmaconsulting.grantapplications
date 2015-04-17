<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.5                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2014                                |
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
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 *
 * Generated from xml/schema/CRM/Grant/GrantApplicationPage.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Grant_DAO_GrantApplicationPage extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_grant_app_page';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = true;
  /**
   * Grant Application Page Id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Grant Application Page title. For top of page display
   *
   * @var string
   */
  public $title;
  /**
   * Text and html allowed. Displayed below title.
   *
   * @var text
   */
  public $intro_text;
  /**
   * Text and html allowed. Displayed at the bottom of the first page of the grant application wizard.
   *
   * @var text
   */
  public $footer_text;
  /**
   * default Grant type assigned to applications submitted via this page
   *
   * @var int unsigned
   */
  public $grant_type_id;
  /**
   * Default amount of grant applied for.
   *
   * @var float
   */
  public $default_amount;
  /**
   * If the application page supports saving as drafts.
   *
   * @var boolean
   */
  public $is_draft;
  /**
   * Title for Save as Draft page.
   *
   * @var text
   */
  public $draft_title;
  /**
   * Text and Html allowed. displayed above result on Save as Draft success page
   *
   * @var text
   */
  public $draft_text;
  /**
   * Text and html allowed. displayed at the bottom of the Save as Draft success page. Common usage is to include link(s) to other pages such as tell-a-friend, etc.
   *
   * @var text
   */
  public $draft_footer;
  
  /**
   * Title for Thank-you page (header title tag, and display at the top of the page).
   *
   * @var string
   */
  public $thankyou_title;
  /**
   * Text and Html allowed. displayed above result on success page
   *
   * @var text
   */
  public $thankyou_text;
  /**
   * Text and html allowed. displayed at the bottom of the success page. Common usage is to include link(s) to other pages such as tell-a-friend, etc.
   *
   * @var text
   */
  public $thankyou_footer;
  /**
   * if true, signup is done on behalf of an organization
   *
   * @var boolean
   */
  public $is_for_organization;
  /**
   * This text field is shown when is_for_organization is checked. For example - I am applying for a grant on behalf on an organization.
   *
   * @var text
   */
  public $for_organization;
  /**
   * if true, receipt is automatically emailed to contact on success
   *
   * @var boolean
   */
  public $is_email_receipt;
  /**
   * FROM email name used for receipts generated by applications to this grant application page.
   *
   * @var string
   */
  public $receipt_from_name;
  /**
   * FROM email address used for receipts generated by applications to this grant application page.
   *
   * @var string
   */
  public $receipt_from_email;
  /**
   * Comma-separated list of email addresses to cc each time a receipt is sent
   *
   * @var string
   */
  public $cc_receipt;
  /**
   * Comma-separated list of email addresses to bcc each time a receipt is sent
   *
   * @var string
   */
  public $bcc_receipt;
  /**
   * Text to include above standard receipt info on receipt email. emails are text-only, so do not allow html for now
   *
   * @var text
   */
  public $receipt_text;
  /**
   * Is this grant application page active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Date and time that this page starts.
   *
   * @var datetime
   */
  public $start_date;
  /**
   * Date and time that this page ends. May be NULL if no defined end date/time
   *
   * @var datetime
   */
  public $end_date;
  /**
   * FK to civicrm_contact, who created this grant application page
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * Date and time that grant application page was created.
   *
   * @var datetime
   */
  public $created_date;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_grant_app_page
   */
  function __construct()
  {
    $this->__table = 'civicrm_grant_app_page';
    parent::__construct();
  }
  /**
   * return foreign keys and entity references
   *
   * @static
   * @access public
   * @return array of CRM_Core_Reference_Interface
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
    }
    return self::$_links;
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Title') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'intro_text' => array(
          'name' => 'intro_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Intro Text') ,
        ) ,
        'footer_text' => array(
          'name' => 'footer_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Footer Text') ,
        ) ,
        'grant_type_id' => array(
          'name' => 'grant_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
        ) ,
        'default_amount' => array(
          'name' => 'default_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Default Amount') ,
          'precision' => array(
            20,
            2
          ) ,
        ) ,
        'is_draft' => array(
          'name' => 'is_draft',
          'type' => CRM_Utils_Type::T_BOOLEAN,
        ) ,
        'draft_title' => array(
          'name' => 'draft_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Save as Draft Title') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'draft_text' => array(
          'name' => 'draft_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Save as Draft Text') ,
          'rows' => 8,
          'cols' => 60,
        ) ,
        'draft_footer' => array(
          'name' => 'draft_footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Save as Draft Footer') ,
          'rows' => 8,
          'cols' => 60,
        ) ,
        'thankyou_title' => array(
          'name' => 'thankyou_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Thank-you Title') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'thankyou_text' => array(
          'name' => 'thankyou_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Thank-you Text') ,
        ) ,
        'thankyou_footer' => array(
          'name' => 'thankyou_footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Thank-you Footer') ,
        ) ,
        'is_for_organization' => array(
          'name' => 'is_for_organization',
          'type' => CRM_Utils_Type::T_BOOLEAN,
        ) ,
        'for_organization' => array(
          'name' => 'for_organization',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('On Behalf Of Organization') ,
          'rows' => 2,
          'cols' => 50,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'is_email_receipt' => array(
          'name' => 'is_email_receipt',
          'type' => CRM_Utils_Type::T_BOOLEAN,
        ) ,
        'receipt_from_name' => array(
          'name' => 'receipt_from_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt From Name') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'receipt_from_email' => array(
          'name' => 'receipt_from_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt From Email') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'cc_receipt' => array(
          'name' => 'cc_receipt',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Cc Receipt') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'bcc_receipt' => array(
          'name' => 'bcc_receipt',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Bcc Receipt') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'receipt_text' => array(
          'name' => 'receipt_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Receipt Text'), 
          'rows' => 6,
          'cols' => 50,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
        ) ,
        'start_date' => array(
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Grant Application Page Start Date') ,
        ) ,
        'end_date' => array(
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Grant Application Page End Date') ,
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Grant Application Page Created Date') ,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'title' => 'title',
        'intro_text' => 'intro_text',
        'footer_text' => 'footer_text',
        'grant_type_id' => 'grant_type_id',
        'default_amount' => 'default_amount',
        'is_draft' => 'is_draft',
        'draft_title' => 'draft_title',
        'draft_text' => 'draft_text',
        'draft_footer' => 'draft_footer',
        'thankyou_title' => 'thankyou_title',
        'thankyou_text' => 'thankyou_text',
        'thankyou_footer' => 'thankyou_footer',
        'is_for_organization' => 'is_for_organization',
        'for_organization' => 'for_organization',
        'is_email_receipt' => 'is_email_receipt',
        'receipt_from_name' => 'receipt_from_name',
        'receipt_from_email' => 'receipt_from_email',
        'cc_receipt' => 'cc_receipt',
        'bcc_receipt' => 'bcc_receipt',
        'receipt_text' => 'receipt_text',
        'is_active' => 'is_active',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'created_id' => 'created_id',
        'created_date' => 'created_date',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['grant_app_page'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['grant_app_page'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
