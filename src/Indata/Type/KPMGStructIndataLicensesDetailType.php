<?php
/**
 * File for class KPMGStructIndataLicensesDetailType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructIndataLicensesDetailType originally named IndataLicensesDetailType
 * Documentation : Contains data pertaining to a single license, consisting of a number-type pair.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructIndataLicensesDetailType extends KPMGWsdlClass
{
    /**
     * The NUMBER
     * Meta informations extracted from the WSDL
     * - documentation : The number of the license to be created.
     * - minOccurs : 0
     * @var string
     */
    public $NUMBER;
    /**
     * The TYPE
     * Meta informations extracted from the WSDL
     * - documentation : The type of license to be created.
     * - minOccurs : 0
     * @var string
     */
    public $TYPE;
    /**
     * Constructor method for IndataLicensesDetailType
     * @see parent::__construct()
     * @param string $_nUMBER
     * @param string $_tYPE
     * @return KPMGStructIndataLicensesDetailType
     */
    public function __construct($_nUMBER = NULL,$_tYPE = NULL)
    {
        parent::__construct(array('NUMBER'=>$_nUMBER,'TYPE'=>$_tYPE),false);
    }
    /**
     * Get NUMBER value
     * @return string|null
     */
    public function getNUMBER()
    {
        return $this->NUMBER;
    }
    /**
     * Set NUMBER value
     * @param string $_nUMBER the NUMBER
     * @return string
     */
    public function setNUMBER($_nUMBER)
    {
        return ($this->NUMBER = $_nUMBER);
    }
    /**
     * Get TYPE value
     * @return string|null
     */
    public function getTYPE()
    {
        return $this->TYPE;
    }
    /**
     * Set TYPE value
     * @param string $_tYPE the TYPE
     * @return string
     */
    public function setTYPE($_tYPE)
    {
        return ($this->TYPE = $_tYPE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructIndataLicensesDetailType
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
