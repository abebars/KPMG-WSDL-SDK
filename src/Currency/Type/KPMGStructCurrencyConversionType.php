<?php
/**
 * File for class KPMGStructCurrencyConversionType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructCurrencyConversionType originally named CurrencyConversionType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructCurrencyConversionType extends KPMGWsdlClass
{
    /**
     * The TAX_EXCHANGE_RATE_DATE
     * Meta informations extracted from the WSDL
     * - documentation : The date used in selecting currency conversion data. Overrides any Sabrix-determined date.
     * @var YyyyMmDdDateType
     */
    public $TAX_EXCHANGE_RATE_DATE;
    /**
     * The EXCHANGE_RATE_SOURCE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $EXCHANGE_RATE_SOURCE;
    /**
     * The CONVERSION_STEPS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 2
     * - minOccurs : 0
     * @var KPMGStructCurrencyConversionStepType
     */
    public $CONVERSION_STEPS;
    /**
     * Constructor method for CurrencyConversionType
     * @see parent::__construct()
     * @param YyyyMmDdDateType $_tAX_EXCHANGE_RATE_DATE
     * @param string $_eXCHANGE_RATE_SOURCE
     * @param KPMGStructCurrencyConversionStepType $_cONVERSION_STEPS
     * @return KPMGStructCurrencyConversionType
     */
    public function __construct($_tAX_EXCHANGE_RATE_DATE = NULL,$_eXCHANGE_RATE_SOURCE = NULL,$_cONVERSION_STEPS = NULL)
    {
        parent::__construct(array('TAX_EXCHANGE_RATE_DATE'=>$_tAX_EXCHANGE_RATE_DATE,'EXCHANGE_RATE_SOURCE'=>$_eXCHANGE_RATE_SOURCE,'CONVERSION_STEPS'=>$_cONVERSION_STEPS),false);
    }
    /**
     * Get TAX_EXCHANGE_RATE_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getTAX_EXCHANGE_RATE_DATE()
    {
        return $this->TAX_EXCHANGE_RATE_DATE;
    }
    /**
     * Set TAX_EXCHANGE_RATE_DATE value
     * @param YyyyMmDdDateType $_tAX_EXCHANGE_RATE_DATE the TAX_EXCHANGE_RATE_DATE
     * @return YyyyMmDdDateType
     */
    public function setTAX_EXCHANGE_RATE_DATE($_tAX_EXCHANGE_RATE_DATE)
    {
        return ($this->TAX_EXCHANGE_RATE_DATE = $_tAX_EXCHANGE_RATE_DATE);
    }
    /**
     * Get EXCHANGE_RATE_SOURCE value
     * @return string|null
     */
    public function getEXCHANGE_RATE_SOURCE()
    {
        return $this->EXCHANGE_RATE_SOURCE;
    }
    /**
     * Set EXCHANGE_RATE_SOURCE value
     * @param string $_eXCHANGE_RATE_SOURCE the EXCHANGE_RATE_SOURCE
     * @return string
     */
    public function setEXCHANGE_RATE_SOURCE($_eXCHANGE_RATE_SOURCE)
    {
        return ($this->EXCHANGE_RATE_SOURCE = $_eXCHANGE_RATE_SOURCE);
    }
    /**
     * Get CONVERSION_STEPS value
     * @return KPMGStructCurrencyConversionStepType|null
     */
    public function getCONVERSION_STEPS()
    {
        return $this->CONVERSION_STEPS;
    }
    /**
     * Set CONVERSION_STEPS value
     * @param KPMGStructCurrencyConversionStepType $_cONVERSION_STEPS the CONVERSION_STEPS
     * @return KPMGStructCurrencyConversionStepType
     */
    public function setCONVERSION_STEPS($_cONVERSION_STEPS)
    {
        return ($this->CONVERSION_STEPS = $_cONVERSION_STEPS);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructCurrencyConversionType
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
