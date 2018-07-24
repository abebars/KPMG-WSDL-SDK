<?php
/**
 * File for class KPMGStructCommonAddressType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructCommonAddressType originally named CommonAddressType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructCommonAddressType extends KPMGWsdlClass
{
    /**
     * The COUNTRY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Country.Defaults to US if the US_DEFAULT_COUNTRY configuration parameter is set to Y on the Tax Control Panel. Otherwise, COUNTRY is a REQUIRED element in the address block.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $COUNTRY;
    /**
     * The PROVINCE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Province, or non-US state.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $PROVINCE;
    /**
     * The STATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : State.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $STATE;
    /**
     * The COUNTY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : County.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $COUNTY;
    /**
     * The CITY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : City.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $CITY;
    /**
     * The DISTRICT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : District.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $DISTRICT;
    /**
     * The POSTCODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The Postal or Zip Code For US ZIP Codes, the first 5 digits.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $POSTCODE;
    /**
     * The GEOCODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Geocode (the most granular geographic division) For US ZIP Codes, the +4 portion of the code.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $GEOCODE;
    /**
     * Constructor method for CommonAddressType
     * @see parent::__construct()
     * @param string $_cOUNTRY
     * @param string $_pROVINCE
     * @param string $_sTATE
     * @param string $_cOUNTY
     * @param string $_cITY
     * @param string $_dISTRICT
     * @param string $_pOSTCODE
     * @param string $_gEOCODE
     * @return KPMGStructCommonAddressType
     */
    public function __construct($_cOUNTRY = NULL,$_pROVINCE = NULL,$_sTATE = NULL,$_cOUNTY = NULL,$_cITY = NULL,$_dISTRICT = NULL,$_pOSTCODE = NULL,$_gEOCODE = NULL)
    {
        parent::__construct(array('COUNTRY'=>$_cOUNTRY,'PROVINCE'=>$_pROVINCE,'STATE'=>$_sTATE,'COUNTY'=>$_cOUNTY,'CITY'=>$_cITY,'DISTRICT'=>$_dISTRICT,'POSTCODE'=>$_pOSTCODE,'GEOCODE'=>$_gEOCODE),false);
    }
    /**
     * Get COUNTRY value
     * @return string|null
     */
    public function getCOUNTRY()
    {
        return $this->COUNTRY;
    }
    /**
     * Set COUNTRY value
     * @param string $_cOUNTRY the COUNTRY
     * @return string
     */
    public function setCOUNTRY($_cOUNTRY)
    {
        return ($this->COUNTRY = $_cOUNTRY);
    }
    /**
     * Get PROVINCE value
     * @return string|null
     */
    public function getPROVINCE()
    {
        return $this->PROVINCE;
    }
    /**
     * Set PROVINCE value
     * @param string $_pROVINCE the PROVINCE
     * @return string
     */
    public function setPROVINCE($_pROVINCE)
    {
        return ($this->PROVINCE = $_pROVINCE);
    }
    /**
     * Get STATE value
     * @return string|null
     */
    public function getSTATE()
    {
        return $this->STATE;
    }
    /**
     * Set STATE value
     * @param string $_sTATE the STATE
     * @return string
     */
    public function setSTATE($_sTATE)
    {
        return ($this->STATE = $_sTATE);
    }
    /**
     * Get COUNTY value
     * @return string|null
     */
    public function getCOUNTY()
    {
        return $this->COUNTY;
    }
    /**
     * Set COUNTY value
     * @param string $_cOUNTY the COUNTY
     * @return string
     */
    public function setCOUNTY($_cOUNTY)
    {
        return ($this->COUNTY = $_cOUNTY);
    }
    /**
     * Get CITY value
     * @return string|null
     */
    public function getCITY()
    {
        return $this->CITY;
    }
    /**
     * Set CITY value
     * @param string $_cITY the CITY
     * @return string
     */
    public function setCITY($_cITY)
    {
        return ($this->CITY = $_cITY);
    }
    /**
     * Get DISTRICT value
     * @return string|null
     */
    public function getDISTRICT()
    {
        return $this->DISTRICT;
    }
    /**
     * Set DISTRICT value
     * @param string $_dISTRICT the DISTRICT
     * @return string
     */
    public function setDISTRICT($_dISTRICT)
    {
        return ($this->DISTRICT = $_dISTRICT);
    }
    /**
     * Get POSTCODE value
     * @return string|null
     */
    public function getPOSTCODE()
    {
        return $this->POSTCODE;
    }
    /**
     * Set POSTCODE value
     * @param string $_pOSTCODE the POSTCODE
     * @return string
     */
    public function setPOSTCODE($_pOSTCODE)
    {
        return ($this->POSTCODE = $_pOSTCODE);
    }
    /**
     * Get GEOCODE value
     * @return string|null
     */
    public function getGEOCODE()
    {
        return $this->GEOCODE;
    }
    /**
     * Set GEOCODE value
     * @param string $_gEOCODE the GEOCODE
     * @return string
     */
    public function setGEOCODE($_gEOCODE)
    {
        return ($this->GEOCODE = $_gEOCODE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructCommonAddressType
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
