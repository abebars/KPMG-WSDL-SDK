<?php
/**
 * File for class KPMGStructInclusiveTaxIndicatorsType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructInclusiveTaxIndicatorsType originally named InclusiveTaxIndicatorsType
 * Documentation : Contains information on whether to treat some or all authority taxes for this invoice as inclusive, regardless of the selected rule.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructInclusiveTaxIndicatorsType extends KPMGWsdlClass
{
    /**
     * The FULLY_INCLUSIVE
     * Meta informations extracted from the WSDL
     * - documentation : If set to true, indicates that all authorities that Sabrix will select for taxing will be considered as Inclusive Tax. This element overrides the calculation method set for the selected rule by forcing inclusive tax.
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $FULLY_INCLUSIVE;
    /**
     * The AUTHORITY_TYPE
     * Meta informations extracted from the WSDL
     * - documentation : If the authority selected for a transaction matches the type indicated here, all taxes for that authority are considered as inclusive.
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $AUTHORITY_TYPE;
    /**
     * Constructor method for InclusiveTaxIndicatorsType
     * @see parent::__construct()
     * @param string,boolean,EmptyStringType $_fULLY_INCLUSIVE
     * @param string $_aUTHORITY_TYPE
     * @return KPMGStructInclusiveTaxIndicatorsType
     */
    public function __construct($_fULLY_INCLUSIVE = NULL,$_aUTHORITY_TYPE = NULL)
    {
        parent::__construct(array('FULLY_INCLUSIVE'=>$_fULLY_INCLUSIVE,'AUTHORITY_TYPE'=>$_aUTHORITY_TYPE),false);
    }
    /**
     * Get FULLY_INCLUSIVE value
     * @return string,boolean,EmptyStringType|null
     */
    public function getFULLY_INCLUSIVE()
    {
        return $this->FULLY_INCLUSIVE;
    }
    /**
     * Set FULLY_INCLUSIVE value
     * @param string,boolean,EmptyStringType $_fULLY_INCLUSIVE the FULLY_INCLUSIVE
     * @return string,boolean,EmptyStringType
     */
    public function setFULLY_INCLUSIVE($_fULLY_INCLUSIVE)
    {
        return ($this->FULLY_INCLUSIVE = $_fULLY_INCLUSIVE);
    }
    /**
     * Get AUTHORITY_TYPE value
     * @return string|null
     */
    public function getAUTHORITY_TYPE()
    {
        return $this->AUTHORITY_TYPE;
    }
    /**
     * Set AUTHORITY_TYPE value
     * @param string $_aUTHORITY_TYPE the AUTHORITY_TYPE
     * @return string
     */
    public function setAUTHORITY_TYPE($_aUTHORITY_TYPE)
    {
        return ($this->AUTHORITY_TYPE = $_aUTHORITY_TYPE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructInclusiveTaxIndicatorsType
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
