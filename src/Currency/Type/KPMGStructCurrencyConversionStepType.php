<?php
/**
 * File for class KPMGStructCurrencyConversionStepType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructCurrencyConversionStepType originally named CurrencyConversionStepType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructCurrencyConversionStepType extends KPMGWsdlClass
{
    /**
     * The CONVERSION_STEP
     * @var decimal
     */
    public $CONVERSION_STEP;
    /**
     * The FROM_CURRENCY_CODE
     * @var string
     */
    public $FROM_CURRENCY_CODE;
    /**
     * The TO_CURRENCY_CODE
     * @var string
     */
    public $TO_CURRENCY_CODE;
    /**
     * The EXCHANGE_RATE
     * @var decimal
     */
    public $EXCHANGE_RATE;
    /**
     * Constructor method for CurrencyConversionStepType
     * @see parent::__construct()
     * @param decimal $_cONVERSION_STEP
     * @param string $_fROM_CURRENCY_CODE
     * @param string $_tO_CURRENCY_CODE
     * @param decimal $_eXCHANGE_RATE
     * @return KPMGStructCurrencyConversionStepType
     */
    public function __construct($_cONVERSION_STEP = NULL,$_fROM_CURRENCY_CODE = NULL,$_tO_CURRENCY_CODE = NULL,$_eXCHANGE_RATE = NULL)
    {
        parent::__construct(array('CONVERSION_STEP'=>$_cONVERSION_STEP,'FROM_CURRENCY_CODE'=>$_fROM_CURRENCY_CODE,'TO_CURRENCY_CODE'=>$_tO_CURRENCY_CODE,'EXCHANGE_RATE'=>$_eXCHANGE_RATE),false);
    }
    /**
     * Get CONVERSION_STEP value
     * @return decimal|null
     */
    public function getCONVERSION_STEP()
    {
        return $this->CONVERSION_STEP;
    }
    /**
     * Set CONVERSION_STEP value
     * @param decimal $_cONVERSION_STEP the CONVERSION_STEP
     * @return decimal
     */
    public function setCONVERSION_STEP($_cONVERSION_STEP)
    {
        return ($this->CONVERSION_STEP = $_cONVERSION_STEP);
    }
    /**
     * Get FROM_CURRENCY_CODE value
     * @return string|null
     */
    public function getFROM_CURRENCY_CODE()
    {
        return $this->FROM_CURRENCY_CODE;
    }
    /**
     * Set FROM_CURRENCY_CODE value
     * @param string $_fROM_CURRENCY_CODE the FROM_CURRENCY_CODE
     * @return string
     */
    public function setFROM_CURRENCY_CODE($_fROM_CURRENCY_CODE)
    {
        return ($this->FROM_CURRENCY_CODE = $_fROM_CURRENCY_CODE);
    }
    /**
     * Get TO_CURRENCY_CODE value
     * @return string|null
     */
    public function getTO_CURRENCY_CODE()
    {
        return $this->TO_CURRENCY_CODE;
    }
    /**
     * Set TO_CURRENCY_CODE value
     * @param string $_tO_CURRENCY_CODE the TO_CURRENCY_CODE
     * @return string
     */
    public function setTO_CURRENCY_CODE($_tO_CURRENCY_CODE)
    {
        return ($this->TO_CURRENCY_CODE = $_tO_CURRENCY_CODE);
    }
    /**
     * Get EXCHANGE_RATE value
     * @return decimal|null
     */
    public function getEXCHANGE_RATE()
    {
        return $this->EXCHANGE_RATE;
    }
    /**
     * Set EXCHANGE_RATE value
     * @param decimal $_eXCHANGE_RATE the EXCHANGE_RATE
     * @return decimal
     */
    public function setEXCHANGE_RATE($_eXCHANGE_RATE)
    {
        return ($this->EXCHANGE_RATE = $_eXCHANGE_RATE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructCurrencyConversionStepType
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
