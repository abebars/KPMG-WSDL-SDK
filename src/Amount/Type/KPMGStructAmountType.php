<?php
/**
 * File for class KPMGStructAmountType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructAmountType originally named AmountType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructAmountType extends KPMGWsdlClass
{
    /**
     * The COUNTRY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $COUNTRY;
    /**
     * The PROVINCE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $PROVINCE;
    /**
     * The STATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $STATE;
    /**
     * The COUNTY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $COUNTY;
    /**
     * The CITY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $CITY;
    /**
     * The DISTRICT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $DISTRICT;
    /**
     * The POSTCODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $POSTCODE;
    /**
     * The GEOCODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $GEOCODE;
    /**
     * Constructor method for AmountType
     * @see parent::__construct()
     * @param decimal,EmptyStringType $_cOUNTRY
     * @param decimal,EmptyStringType $_pROVINCE
     * @param decimal,EmptyStringType $_sTATE
     * @param decimal,EmptyStringType $_cOUNTY
     * @param decimal,EmptyStringType $_cITY
     * @param decimal,EmptyStringType $_dISTRICT
     * @param decimal,EmptyStringType $_pOSTCODE
     * @param decimal,EmptyStringType $_gEOCODE
     * @return KPMGStructAmountType
     */
    public function __construct($_cOUNTRY = NULL,$_pROVINCE = NULL,$_sTATE = NULL,$_cOUNTY = NULL,$_cITY = NULL,$_dISTRICT = NULL,$_pOSTCODE = NULL,$_gEOCODE = NULL)
    {
        parent::__construct(array('COUNTRY'=>$_cOUNTRY,'PROVINCE'=>$_pROVINCE,'STATE'=>$_sTATE,'COUNTY'=>$_cOUNTY,'CITY'=>$_cITY,'DISTRICT'=>$_dISTRICT,'POSTCODE'=>$_pOSTCODE,'GEOCODE'=>$_gEOCODE),false);
    }
    /**
     * Get COUNTRY value
     * @return decimal,EmptyStringType|null
     */
    public function getCOUNTRY()
    {
        return $this->COUNTRY;
    }
    /**
     * Set COUNTRY value
     * @param decimal,EmptyStringType $_cOUNTRY the COUNTRY
     * @return decimal,EmptyStringType
     */
    public function setCOUNTRY($_cOUNTRY)
    {
        return ($this->COUNTRY = $_cOUNTRY);
    }
    /**
     * Get PROVINCE value
     * @return decimal,EmptyStringType|null
     */
    public function getPROVINCE()
    {
        return $this->PROVINCE;
    }
    /**
     * Set PROVINCE value
     * @param decimal,EmptyStringType $_pROVINCE the PROVINCE
     * @return decimal,EmptyStringType
     */
    public function setPROVINCE($_pROVINCE)
    {
        return ($this->PROVINCE = $_pROVINCE);
    }
    /**
     * Get STATE value
     * @return decimal,EmptyStringType|null
     */
    public function getSTATE()
    {
        return $this->STATE;
    }
    /**
     * Set STATE value
     * @param decimal,EmptyStringType $_sTATE the STATE
     * @return decimal,EmptyStringType
     */
    public function setSTATE($_sTATE)
    {
        return ($this->STATE = $_sTATE);
    }
    /**
     * Get COUNTY value
     * @return decimal,EmptyStringType|null
     */
    public function getCOUNTY()
    {
        return $this->COUNTY;
    }
    /**
     * Set COUNTY value
     * @param decimal,EmptyStringType $_cOUNTY the COUNTY
     * @return decimal,EmptyStringType
     */
    public function setCOUNTY($_cOUNTY)
    {
        return ($this->COUNTY = $_cOUNTY);
    }
    /**
     * Get CITY value
     * @return decimal,EmptyStringType|null
     */
    public function getCITY()
    {
        return $this->CITY;
    }
    /**
     * Set CITY value
     * @param decimal,EmptyStringType $_cITY the CITY
     * @return decimal,EmptyStringType
     */
    public function setCITY($_cITY)
    {
        return ($this->CITY = $_cITY);
    }
    /**
     * Get DISTRICT value
     * @return decimal,EmptyStringType|null
     */
    public function getDISTRICT()
    {
        return $this->DISTRICT;
    }
    /**
     * Set DISTRICT value
     * @param decimal,EmptyStringType $_dISTRICT the DISTRICT
     * @return decimal,EmptyStringType
     */
    public function setDISTRICT($_dISTRICT)
    {
        return ($this->DISTRICT = $_dISTRICT);
    }
    /**
     * Get POSTCODE value
     * @return decimal,EmptyStringType|null
     */
    public function getPOSTCODE()
    {
        return $this->POSTCODE;
    }
    /**
     * Set POSTCODE value
     * @param decimal,EmptyStringType $_pOSTCODE the POSTCODE
     * @return decimal,EmptyStringType
     */
    public function setPOSTCODE($_pOSTCODE)
    {
        return ($this->POSTCODE = $_pOSTCODE);
    }
    /**
     * Get GEOCODE value
     * @return decimal,EmptyStringType|null
     */
    public function getGEOCODE()
    {
        return $this->GEOCODE;
    }
    /**
     * Set GEOCODE value
     * @param decimal,EmptyStringType $_gEOCODE the GEOCODE
     * @return decimal,EmptyStringType
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
     * @return KPMGStructAmountType
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
