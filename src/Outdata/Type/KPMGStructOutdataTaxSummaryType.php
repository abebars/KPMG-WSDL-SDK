<?php
/**
 * File for class KPMGStructOutdataTaxSummaryType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataTaxSummaryType originally named OutdataTaxSummaryType
 * Documentation : A summary of tax amounts and warnings.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataTaxSummaryType extends KPMGWsdlClass
{
    /**
     * The TAXABLE_BASIS
     * Meta informations extracted from the WSDL
     * - documentation : Contains the maximum taxable basis from the amount on the authority tax lines. If an authority tax line is a tier, all tiers for the authority have their tax basis summed and treated like a single tax line for purposes of determining the maximum taxable basis.If the total exceeds gross amount, the taxable basis is set to the gross amount.If no tax results, the value is zero.
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $TAXABLE_BASIS;
    /**
     * The NON_TAXABLE_BASIS
     * Meta informations extracted from the WSDL
     * - documentation : Contains the maximum non-taxable basis from the tax results. No special process occurs for tiered results. If no tax results, the value is zero.
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $NON_TAXABLE_BASIS;
    /**
     * The EXEMPT_AMOUNT
     * Meta informations extracted from the WSDL
     * - documentation : Contains the maximum exempt amount from the tax results. If no tax, the value is zero.
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $EXEMPT_AMOUNT;
    /**
     * The TAX_RATE
     * Meta informations extracted from the WSDL
     * - documentation : Sum of all taxes. No distinction is made for rates from tiers. If all taxes are fees, the value is zero.
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $TAX_RATE;
    /**
     * The EFFECTIVE_TAX_RATE
     * Meta informations extracted from the WSDL
     * - documentation : Total taxes on the line divided by the maximum taxable basis.
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $EFFECTIVE_TAX_RATE;
    /**
     * The ADVISORIES
     * Meta informations extracted from the WSDL
     * - documentation : Notify you of special summary conditions that may produce unexpected results. List of flagged conditions you may want to be aware, including: * Allocations * Custom Authorities * Fees * Tiers * Variable Exempt Amounts * Tax Treatment
     * - minOccurs : 0
     * @var KPMGStructOutdataAdvisoriesType
     */
    public $ADVISORIES;
    /**
     * Constructor method for OutdataTaxSummaryType
     * @see parent::__construct()
     * @param decimal,EmptyStringType $_tAXABLE_BASIS
     * @param decimal,EmptyStringType $_nON_TAXABLE_BASIS
     * @param decimal,EmptyStringType $_eXEMPT_AMOUNT
     * @param decimal,EmptyStringType $_tAX_RATE
     * @param decimal,EmptyStringType $_eFFECTIVE_TAX_RATE
     * @param KPMGStructOutdataAdvisoriesType $_aDVISORIES
     * @return KPMGStructOutdataTaxSummaryType
     */
    public function __construct($_tAXABLE_BASIS = NULL,$_nON_TAXABLE_BASIS = NULL,$_eXEMPT_AMOUNT = NULL,$_tAX_RATE = NULL,$_eFFECTIVE_TAX_RATE = NULL,$_aDVISORIES = NULL)
    {
        parent::__construct(array('TAXABLE_BASIS'=>$_tAXABLE_BASIS,'NON_TAXABLE_BASIS'=>$_nON_TAXABLE_BASIS,'EXEMPT_AMOUNT'=>$_eXEMPT_AMOUNT,'TAX_RATE'=>$_tAX_RATE,'EFFECTIVE_TAX_RATE'=>$_eFFECTIVE_TAX_RATE,'ADVISORIES'=>$_aDVISORIES),false);
    }
    /**
     * Get TAXABLE_BASIS value
     * @return decimal,EmptyStringType|null
     */
    public function getTAXABLE_BASIS()
    {
        return $this->TAXABLE_BASIS;
    }
    /**
     * Set TAXABLE_BASIS value
     * @param decimal,EmptyStringType $_tAXABLE_BASIS the TAXABLE_BASIS
     * @return decimal,EmptyStringType
     */
    public function setTAXABLE_BASIS($_tAXABLE_BASIS)
    {
        return ($this->TAXABLE_BASIS = $_tAXABLE_BASIS);
    }
    /**
     * Get NON_TAXABLE_BASIS value
     * @return decimal,EmptyStringType|null
     */
    public function getNON_TAXABLE_BASIS()
    {
        return $this->NON_TAXABLE_BASIS;
    }
    /**
     * Set NON_TAXABLE_BASIS value
     * @param decimal,EmptyStringType $_nON_TAXABLE_BASIS the NON_TAXABLE_BASIS
     * @return decimal,EmptyStringType
     */
    public function setNON_TAXABLE_BASIS($_nON_TAXABLE_BASIS)
    {
        return ($this->NON_TAXABLE_BASIS = $_nON_TAXABLE_BASIS);
    }
    /**
     * Get EXEMPT_AMOUNT value
     * @return decimal,EmptyStringType|null
     */
    public function getEXEMPT_AMOUNT()
    {
        return $this->EXEMPT_AMOUNT;
    }
    /**
     * Set EXEMPT_AMOUNT value
     * @param decimal,EmptyStringType $_eXEMPT_AMOUNT the EXEMPT_AMOUNT
     * @return decimal,EmptyStringType
     */
    public function setEXEMPT_AMOUNT($_eXEMPT_AMOUNT)
    {
        return ($this->EXEMPT_AMOUNT = $_eXEMPT_AMOUNT);
    }
    /**
     * Get TAX_RATE value
     * @return decimal,EmptyStringType|null
     */
    public function getTAX_RATE()
    {
        return $this->TAX_RATE;
    }
    /**
     * Set TAX_RATE value
     * @param decimal,EmptyStringType $_tAX_RATE the TAX_RATE
     * @return decimal,EmptyStringType
     */
    public function setTAX_RATE($_tAX_RATE)
    {
        return ($this->TAX_RATE = $_tAX_RATE);
    }
    /**
     * Get EFFECTIVE_TAX_RATE value
     * @return decimal,EmptyStringType|null
     */
    public function getEFFECTIVE_TAX_RATE()
    {
        return $this->EFFECTIVE_TAX_RATE;
    }
    /**
     * Set EFFECTIVE_TAX_RATE value
     * @param decimal,EmptyStringType $_eFFECTIVE_TAX_RATE the EFFECTIVE_TAX_RATE
     * @return decimal,EmptyStringType
     */
    public function setEFFECTIVE_TAX_RATE($_eFFECTIVE_TAX_RATE)
    {
        return ($this->EFFECTIVE_TAX_RATE = $_eFFECTIVE_TAX_RATE);
    }
    /**
     * Get ADVISORIES value
     * @return KPMGStructOutdataAdvisoriesType|null
     */
    public function getADVISORIES()
    {
        return $this->ADVISORIES;
    }
    /**
     * Set ADVISORIES value
     * @param KPMGStructOutdataAdvisoriesType $_aDVISORIES the ADVISORIES
     * @return KPMGStructOutdataAdvisoriesType
     */
    public function setADVISORIES($_aDVISORIES)
    {
        return ($this->ADVISORIES = $_aDVISORIES);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructOutdataTaxSummaryType
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
