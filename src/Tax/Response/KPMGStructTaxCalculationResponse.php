<?php
/**
 * File for class KPMGStructTaxCalculationResponse
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructTaxCalculationResponse originally named TaxCalculationResponse
 * Documentation : The top level response to a request for tax calculation.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructTaxCalculationResponse extends KPMGWsdlClass
{
    /**
     * The OUTDATA
     * Meta informations extracted from the WSDL
     * - minOccurs : 1
     * @var KPMGStructOutdataType
     */
    public $OUTDATA;
    /**
     * Constructor method for TaxCalculationResponse
     * @see parent::__construct()
     * @param KPMGStructOutdataType $_oUTDATA
     * @return KPMGStructTaxCalculationResponse
     */
    public function __construct($_oUTDATA)
    {
        parent::__construct(array('OUTDATA'=>$_oUTDATA),false);
    }
    /**
     * Get OUTDATA value
     * @return KPMGStructOutdataType
     */
    public function getOUTDATA()
    {
        return $this->OUTDATA;
    }
    /**
     * Set OUTDATA value
     * @param KPMGStructOutdataType $_oUTDATA the OUTDATA
     * @return KPMGStructOutdataType
     */
    public function setOUTDATA($_oUTDATA)
    {
        return ($this->OUTDATA = $_oUTDATA);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructTaxCalculationResponse
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
