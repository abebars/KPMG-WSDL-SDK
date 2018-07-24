<?php
/**
 * File for class KPMGStructFeeType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructFeeType originally named FeeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructFeeType extends KPMGWsdlClass
{
    /**
     * The AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $AMOUNT;
    /**
     * The CURRENCY_CODE
     * @var string
     */
    public $CURRENCY_CODE;
    /**
     * The UNIT_OF_MEASURE
     * @var string
     */
    public $UNIT_OF_MEASURE;
    /**
     * Constructor method for FeeType
     * @see parent::__construct()
     * @param decimal $_aMOUNT
     * @param string $_cURRENCY_CODE
     * @param string $_uNIT_OF_MEASURE
     * @return KPMGStructFeeType
     */
    public function __construct($_aMOUNT = NULL,$_cURRENCY_CODE = NULL,$_uNIT_OF_MEASURE = NULL)
    {
        parent::__construct(array('AMOUNT'=>$_aMOUNT,'CURRENCY_CODE'=>$_cURRENCY_CODE,'UNIT_OF_MEASURE'=>$_uNIT_OF_MEASURE),false);
    }
    /**
     * Get AMOUNT value
     * @return decimal|null
     */
    public function getAMOUNT()
    {
        return $this->AMOUNT;
    }
    /**
     * Set AMOUNT value
     * @param decimal $_aMOUNT the AMOUNT
     * @return decimal
     */
    public function setAMOUNT($_aMOUNT)
    {
        return ($this->AMOUNT = $_aMOUNT);
    }
    /**
     * Get CURRENCY_CODE value
     * @return string|null
     */
    public function getCURRENCY_CODE()
    {
        return $this->CURRENCY_CODE;
    }
    /**
     * Set CURRENCY_CODE value
     * @param string $_cURRENCY_CODE the CURRENCY_CODE
     * @return string
     */
    public function setCURRENCY_CODE($_cURRENCY_CODE)
    {
        return ($this->CURRENCY_CODE = $_cURRENCY_CODE);
    }
    /**
     * Get UNIT_OF_MEASURE value
     * @return string|null
     */
    public function getUNIT_OF_MEASURE()
    {
        return $this->UNIT_OF_MEASURE;
    }
    /**
     * Set UNIT_OF_MEASURE value
     * @param string $_uNIT_OF_MEASURE the UNIT_OF_MEASURE
     * @return string
     */
    public function setUNIT_OF_MEASURE($_uNIT_OF_MEASURE)
    {
        return ($this->UNIT_OF_MEASURE = $_uNIT_OF_MEASURE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructFeeType
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
