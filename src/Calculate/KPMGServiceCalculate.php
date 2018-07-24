<?php
/**
 * File for class KPMGServiceCalculate
 * @package KPMG
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGServiceCalculate originally named Calculate
 * @package KPMG
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGServiceCalculate extends KPMGWsdlClass
{
    /**
     * Method to call the operation originally named CalculateTax
     * @uses KPMGWsdlClass::getSoapClient()
     * @uses KPMGWsdlClass::setResult()
     * @uses KPMGWsdlClass::saveLastError()
     * @param KPMGStructTaxCalculationRequest $_kPMGStructTaxCalculationRequest
     * @return KPMGStructTaxCalculationResponse
     */
    public function CalculateTax(KPMGStructTaxCalculationRequest $_kPMGStructTaxCalculationRequest)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CalculateTax($_kPMGStructTaxCalculationRequest));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see KPMGWsdlClass::getResult()
     * @return KPMGStructTaxCalculationResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
