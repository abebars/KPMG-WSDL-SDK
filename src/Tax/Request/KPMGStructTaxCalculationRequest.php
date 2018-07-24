<?php
/**
 * File for class KPMGStructTaxCalculationRequest
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructTaxCalculationRequest originally named TaxCalculationRequest
 * Documentation : Top level request for a tax calculation call.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructTaxCalculationRequest extends KPMGWsdlClass
{
    /**
     * The INDATA
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var KPMGStructIndataType
     */
    public $INDATA;
    /**
     * Constructor method for TaxCalculationRequest
     * @see parent::__construct()
     * @param KPMGStructIndataType $_iNDATA
     * @return KPMGStructTaxCalculationRequest
     */
    public function __construct($_iNDATA)
    {
        parent::__construct(array('INDATA'=>$_iNDATA),false);
    }
    /**
     * Get INDATA value
     * @return KPMGStructIndataType
     */
    public function getINDATA()
    {
        return $this->INDATA;
    }
    /**
     * Set INDATA value
     * @param KPMGStructIndataType $_iNDATA the INDATA
     * @return KPMGStructIndataType
     */
    public function setINDATA($_iNDATA)
    {
        return ($this->INDATA = $_iNDATA);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructTaxCalculationRequest
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
