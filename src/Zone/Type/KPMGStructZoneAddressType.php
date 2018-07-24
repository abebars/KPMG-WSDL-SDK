<?php
/**
 * File for class KPMGStructZoneAddressType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructZoneAddressType originally named ZoneAddressType
 * Documentation : The following elements are contained in the Invoice and Line level address structures for the nine location types supported by ONESOURCE Indirect Tax Determination (Bill To, Buyer Primary, Middleman, Order Acceptance, Order Origin, Seller Primary, Ship From, Ship To, and Supply).For all levels other than Geocode and Branch ID, you can submit either a full name or a valid ISO, 2 Character, or 3 Character code that is associated with a valid Zone name in ONESOURCE Indirect Tax Determination. These codes can be viewed on the Tax Control Panel's Zones Edit page for the associated Zone.For Geocode and Branch ID you must submit the full name.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructZoneAddressType extends KPMGStructCommonAddressType
{
    /**
     * The COMPANY_BRANCH_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The branch ID of a company, passed with registration numbers for VAT Returns in several countries. For example, in the UK, companies must file their VAT Returns with Branch ID information included.
     * - maxLength : 25
     * - minLength : 1
     * @var string
     */
    public $COMPANY_BRANCH_ID;
    /**
     * The IS_BONDED
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : If set to (Y)es, indicates that this is a Bonded Warehouse. This status can then be used as a rule qualifier during rule selection.
     * - maxLength : 1
     * - minLength : 1
     * @var string
     */
    public $IS_BONDED;
    /**
     * The LOCATION_TAX_CATEGORY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates the type of location for this address; for example, Refinery. This value can then be used as a rule qualifier during rule selection.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $LOCATION_TAX_CATEGORY;
    /**
     * The ADDRESS_1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Reserved for future use.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $ADDRESS_1;
    /**
     * The ADDRESS_2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Reserved for future use.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $ADDRESS_2;
    /**
     * The ADDRESS_3
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Reserved for future use.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $ADDRESS_3;
    /**
     * The ADDRESS_VALIDATION_MODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Reserved for future use.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $ADDRESS_VALIDATION_MODE;
    /**
     * The DEFAULT_ADDRESS_VALIDATION_MODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Reserved for future use.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $DEFAULT_ADDRESS_VALIDATION_MODE;
    /**
     * Constructor method for ZoneAddressType
     * @see parent::__construct()
     * @param string $_cOMPANY_BRANCH_ID
     * @param string $_iS_BONDED
     * @param string $_lOCATION_TAX_CATEGORY
     * @param string $_aDDRESS_1
     * @param string $_aDDRESS_2
     * @param string $_aDDRESS_3
     * @param string $_aDDRESS_VALIDATION_MODE
     * @param string $_dEFAULT_ADDRESS_VALIDATION_MODE
     * @return KPMGStructZoneAddressType
     */
    public function __construct($_cOMPANY_BRANCH_ID = NULL,$_iS_BONDED = NULL,$_lOCATION_TAX_CATEGORY = NULL,$_aDDRESS_1 = NULL,$_aDDRESS_2 = NULL,$_aDDRESS_3 = NULL,$_aDDRESS_VALIDATION_MODE = NULL,$_dEFAULT_ADDRESS_VALIDATION_MODE = NULL)
    {
        KPMGWsdlClass::__construct(array('COMPANY_BRANCH_ID'=>$_cOMPANY_BRANCH_ID,'IS_BONDED'=>$_iS_BONDED,'LOCATION_TAX_CATEGORY'=>$_lOCATION_TAX_CATEGORY,'ADDRESS_1'=>$_aDDRESS_1,'ADDRESS_2'=>$_aDDRESS_2,'ADDRESS_3'=>$_aDDRESS_3,'ADDRESS_VALIDATION_MODE'=>$_aDDRESS_VALIDATION_MODE,'DEFAULT_ADDRESS_VALIDATION_MODE'=>$_dEFAULT_ADDRESS_VALIDATION_MODE),false);
    }
    /**
     * Get COMPANY_BRANCH_ID value
     * @return string|null
     */
    public function getCOMPANY_BRANCH_ID()
    {
        return $this->COMPANY_BRANCH_ID;
    }
    /**
     * Set COMPANY_BRANCH_ID value
     * @param string $_cOMPANY_BRANCH_ID the COMPANY_BRANCH_ID
     * @return string
     */
    public function setCOMPANY_BRANCH_ID($_cOMPANY_BRANCH_ID)
    {
        return ($this->COMPANY_BRANCH_ID = $_cOMPANY_BRANCH_ID);
    }
    /**
     * Get IS_BONDED value
     * @return string|null
     */
    public function getIS_BONDED()
    {
        return $this->IS_BONDED;
    }
    /**
     * Set IS_BONDED value
     * @param string $_iS_BONDED the IS_BONDED
     * @return string
     */
    public function setIS_BONDED($_iS_BONDED)
    {
        return ($this->IS_BONDED = $_iS_BONDED);
    }
    /**
     * Get LOCATION_TAX_CATEGORY value
     * @return string|null
     */
    public function getLOCATION_TAX_CATEGORY()
    {
        return $this->LOCATION_TAX_CATEGORY;
    }
    /**
     * Set LOCATION_TAX_CATEGORY value
     * @param string $_lOCATION_TAX_CATEGORY the LOCATION_TAX_CATEGORY
     * @return string
     */
    public function setLOCATION_TAX_CATEGORY($_lOCATION_TAX_CATEGORY)
    {
        return ($this->LOCATION_TAX_CATEGORY = $_lOCATION_TAX_CATEGORY);
    }
    /**
     * Get ADDRESS_1 value
     * @return string|null
     */
    public function getADDRESS_1()
    {
        return $this->ADDRESS_1;
    }
    /**
     * Set ADDRESS_1 value
     * @param string $_aDDRESS_1 the ADDRESS_1
     * @return string
     */
    public function setADDRESS_1($_aDDRESS_1)
    {
        return ($this->ADDRESS_1 = $_aDDRESS_1);
    }
    /**
     * Get ADDRESS_2 value
     * @return string|null
     */
    public function getADDRESS_2()
    {
        return $this->ADDRESS_2;
    }
    /**
     * Set ADDRESS_2 value
     * @param string $_aDDRESS_2 the ADDRESS_2
     * @return string
     */
    public function setADDRESS_2($_aDDRESS_2)
    {
        return ($this->ADDRESS_2 = $_aDDRESS_2);
    }
    /**
     * Get ADDRESS_3 value
     * @return string|null
     */
    public function getADDRESS_3()
    {
        return $this->ADDRESS_3;
    }
    /**
     * Set ADDRESS_3 value
     * @param string $_aDDRESS_3 the ADDRESS_3
     * @return string
     */
    public function setADDRESS_3($_aDDRESS_3)
    {
        return ($this->ADDRESS_3 = $_aDDRESS_3);
    }
    /**
     * Get ADDRESS_VALIDATION_MODE value
     * @return string|null
     */
    public function getADDRESS_VALIDATION_MODE()
    {
        return $this->ADDRESS_VALIDATION_MODE;
    }
    /**
     * Set ADDRESS_VALIDATION_MODE value
     * @param string $_aDDRESS_VALIDATION_MODE the ADDRESS_VALIDATION_MODE
     * @return string
     */
    public function setADDRESS_VALIDATION_MODE($_aDDRESS_VALIDATION_MODE)
    {
        return ($this->ADDRESS_VALIDATION_MODE = $_aDDRESS_VALIDATION_MODE);
    }
    /**
     * Get DEFAULT_ADDRESS_VALIDATION_MODE value
     * @return string|null
     */
    public function getDEFAULT_ADDRESS_VALIDATION_MODE()
    {
        return $this->DEFAULT_ADDRESS_VALIDATION_MODE;
    }
    /**
     * Set DEFAULT_ADDRESS_VALIDATION_MODE value
     * @param string $_dEFAULT_ADDRESS_VALIDATION_MODE the DEFAULT_ADDRESS_VALIDATION_MODE
     * @return string
     */
    public function setDEFAULT_ADDRESS_VALIDATION_MODE($_dEFAULT_ADDRESS_VALIDATION_MODE)
    {
        return ($this->DEFAULT_ADDRESS_VALIDATION_MODE = $_dEFAULT_ADDRESS_VALIDATION_MODE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructZoneAddressType
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
