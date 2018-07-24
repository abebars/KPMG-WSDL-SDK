<?php
/**
 * File for class KPMGStructAddressType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructAddressType originally named AddressType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructAddressType extends KPMGStructCommonAddressType
{
    /**
     * The ALL
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ALL;
    /**
     * Constructor method for AddressType
     * @see parent::__construct()
     * @param string $_aLL
     * @return KPMGStructAddressType
     */
    public function __construct($_aLL = NULL)
    {
        KPMGWsdlClass::__construct(array('ALL'=>$_aLL),false);
    }
    /**
     * Get ALL value
     * @return string|null
     */
    public function getALL()
    {
        return $this->ALL;
    }
    /**
     * Set ALL value
     * @param string $_aLL the ALL
     * @return string
     */
    public function setALL($_aLL)
    {
        return ($this->ALL = $_aLL);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructAddressType
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
