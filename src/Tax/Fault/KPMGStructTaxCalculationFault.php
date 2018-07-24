<?php
/**
 * File for class KPMGStructTaxCalculationFault
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructTaxCalculationFault originally named TaxCalculationFault
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructTaxCalculationFault extends KPMGWsdlClass
{
    /**
     * The additionalMessage
     * @var string
     */
    public $additionalMessage;
    /**
     * The errorLocation
     * @var string
     */
    public $errorLocation;
    /**
     * The errorSource
     * @var string
     */
    public $errorSource;
    /**
     * Constructor method for TaxCalculationFault
     * @see parent::__construct()
     * @param string $_additionalMessage
     * @param string $_errorLocation
     * @param string $_errorSource
     * @return KPMGStructTaxCalculationFault
     */
    public function __construct($_additionalMessage = NULL,$_errorLocation = NULL,$_errorSource = NULL)
    {
        parent::__construct(array('additionalMessage'=>$_additionalMessage,'errorLocation'=>$_errorLocation,'errorSource'=>$_errorSource),false);
    }
    /**
     * Get additionalMessage value
     * @return string|null
     */
    public function getAdditionalMessage()
    {
        return $this->additionalMessage;
    }
    /**
     * Set additionalMessage value
     * @param string $_additionalMessage the additionalMessage
     * @return string
     */
    public function setAdditionalMessage($_additionalMessage)
    {
        return ($this->additionalMessage = $_additionalMessage);
    }
    /**
     * Get errorLocation value
     * @return string|null
     */
    public function getErrorLocation()
    {
        return $this->errorLocation;
    }
    /**
     * Set errorLocation value
     * @param string $_errorLocation the errorLocation
     * @return string
     */
    public function setErrorLocation($_errorLocation)
    {
        return ($this->errorLocation = $_errorLocation);
    }
    /**
     * Get errorSource value
     * @return string|null
     */
    public function getErrorSource()
    {
        return $this->errorSource;
    }
    /**
     * Set errorSource value
     * @param string $_errorSource the errorSource
     * @return string
     */
    public function setErrorSource($_errorSource)
    {
        return ($this->errorSource = $_errorSource);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructTaxCalculationFault
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
