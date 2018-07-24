<?php
/**
 * File for class KPMGStructFlagAddressType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructFlagAddressType originally named FlagAddressType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructFlagAddressType extends KPMGWsdlClass
{
    /**
     * The ALL
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $ALL;
    /**
     * The COUNTRY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $COUNTRY;
    /**
     * The PROVINCE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $PROVINCE;
    /**
     * The STATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $STATE;
    /**
     * The COUNTY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $COUNTY;
    /**
     * The CITY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $CITY;
    /**
     * The DISTRICT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $DISTRICT;
    /**
     * The POSTCODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $POSTCODE;
    /**
     * The GEOCODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $GEOCODE;
    /**
     * Constructor method for FlagAddressType
     * @see parent::__construct()
     * @param string,boolean,EmptyStringType $_aLL
     * @param string,boolean,EmptyStringType $_cOUNTRY
     * @param string,boolean,EmptyStringType $_pROVINCE
     * @param string,boolean,EmptyStringType $_sTATE
     * @param string,boolean,EmptyStringType $_cOUNTY
     * @param string,boolean,EmptyStringType $_cITY
     * @param string,boolean,EmptyStringType $_dISTRICT
     * @param string,boolean,EmptyStringType $_pOSTCODE
     * @param string,boolean,EmptyStringType $_gEOCODE
     * @return KPMGStructFlagAddressType
     */
    public function __construct($_aLL = NULL,$_cOUNTRY = NULL,$_pROVINCE = NULL,$_sTATE = NULL,$_cOUNTY = NULL,$_cITY = NULL,$_dISTRICT = NULL,$_pOSTCODE = NULL,$_gEOCODE = NULL)
    {
        parent::__construct(array('ALL'=>$_aLL,'COUNTRY'=>$_cOUNTRY,'PROVINCE'=>$_pROVINCE,'STATE'=>$_sTATE,'COUNTY'=>$_cOUNTY,'CITY'=>$_cITY,'DISTRICT'=>$_dISTRICT,'POSTCODE'=>$_pOSTCODE,'GEOCODE'=>$_gEOCODE),false);
    }
    /**
     * Get ALL value
     * @return string,boolean,EmptyStringType|null
     */
    public function getALL()
    {
        return $this->ALL;
    }
    /**
     * Set ALL value
     * @param string,boolean,EmptyStringType $_aLL the ALL
     * @return string,boolean,EmptyStringType
     */
    public function setALL($_aLL)
    {
        return ($this->ALL = $_aLL);
    }
    /**
     * Get COUNTRY value
     * @return string,boolean,EmptyStringType|null
     */
    public function getCOUNTRY()
    {
        return $this->COUNTRY;
    }
    /**
     * Set COUNTRY value
     * @param string,boolean,EmptyStringType $_cOUNTRY the COUNTRY
     * @return string,boolean,EmptyStringType
     */
    public function setCOUNTRY($_cOUNTRY)
    {
        return ($this->COUNTRY = $_cOUNTRY);
    }
    /**
     * Get PROVINCE value
     * @return string,boolean,EmptyStringType|null
     */
    public function getPROVINCE()
    {
        return $this->PROVINCE;
    }
    /**
     * Set PROVINCE value
     * @param string,boolean,EmptyStringType $_pROVINCE the PROVINCE
     * @return string,boolean,EmptyStringType
     */
    public function setPROVINCE($_pROVINCE)
    {
        return ($this->PROVINCE = $_pROVINCE);
    }
    /**
     * Get STATE value
     * @return string,boolean,EmptyStringType|null
     */
    public function getSTATE()
    {
        return $this->STATE;
    }
    /**
     * Set STATE value
     * @param string,boolean,EmptyStringType $_sTATE the STATE
     * @return string,boolean,EmptyStringType
     */
    public function setSTATE($_sTATE)
    {
        return ($this->STATE = $_sTATE);
    }
    /**
     * Get COUNTY value
     * @return string,boolean,EmptyStringType|null
     */
    public function getCOUNTY()
    {
        return $this->COUNTY;
    }
    /**
     * Set COUNTY value
     * @param string,boolean,EmptyStringType $_cOUNTY the COUNTY
     * @return string,boolean,EmptyStringType
     */
    public function setCOUNTY($_cOUNTY)
    {
        return ($this->COUNTY = $_cOUNTY);
    }
    /**
     * Get CITY value
     * @return string,boolean,EmptyStringType|null
     */
    public function getCITY()
    {
        return $this->CITY;
    }
    /**
     * Set CITY value
     * @param string,boolean,EmptyStringType $_cITY the CITY
     * @return string,boolean,EmptyStringType
     */
    public function setCITY($_cITY)
    {
        return ($this->CITY = $_cITY);
    }
    /**
     * Get DISTRICT value
     * @return string,boolean,EmptyStringType|null
     */
    public function getDISTRICT()
    {
        return $this->DISTRICT;
    }
    /**
     * Set DISTRICT value
     * @param string,boolean,EmptyStringType $_dISTRICT the DISTRICT
     * @return string,boolean,EmptyStringType
     */
    public function setDISTRICT($_dISTRICT)
    {
        return ($this->DISTRICT = $_dISTRICT);
    }
    /**
     * Get POSTCODE value
     * @return string,boolean,EmptyStringType|null
     */
    public function getPOSTCODE()
    {
        return $this->POSTCODE;
    }
    /**
     * Set POSTCODE value
     * @param string,boolean,EmptyStringType $_pOSTCODE the POSTCODE
     * @return string,boolean,EmptyStringType
     */
    public function setPOSTCODE($_pOSTCODE)
    {
        return ($this->POSTCODE = $_pOSTCODE);
    }
    /**
     * Get GEOCODE value
     * @return string,boolean,EmptyStringType|null
     */
    public function getGEOCODE()
    {
        return $this->GEOCODE;
    }
    /**
     * Set GEOCODE value
     * @param string,boolean,EmptyStringType $_gEOCODE the GEOCODE
     * @return string,boolean,EmptyStringType
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
     * @return KPMGStructFlagAddressType
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
