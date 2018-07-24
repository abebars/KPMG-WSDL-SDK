<?php
/**
 * File for class KPMGStructQuantitiesType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructQuantitiesType originally named QuantitiesType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructQuantitiesType extends KPMGWsdlClass
{
    /**
     * The QUANTITY
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructQuantityType
     */
    public $QUANTITY;
    /**
     * Constructor method for QuantitiesType
     * @see parent::__construct()
     * @param KPMGStructQuantityType $_qUANTITY
     * @return KPMGStructQuantitiesType
     */
    public function __construct($_qUANTITY = NULL)
    {
        parent::__construct(array('QUANTITY'=>$_qUANTITY),false);
    }
    /**
     * Get QUANTITY value
     * @return KPMGStructQuantityType|null
     */
    public function getQUANTITY()
    {
        return $this->QUANTITY;
    }
    /**
     * Set QUANTITY value
     * @param KPMGStructQuantityType $_qUANTITY the QUANTITY
     * @return KPMGStructQuantityType
     */
    public function setQUANTITY($_qUANTITY)
    {
        return ($this->QUANTITY = $_qUANTITY);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructQuantitiesType
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
