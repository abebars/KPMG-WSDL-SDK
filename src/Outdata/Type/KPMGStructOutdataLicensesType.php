<?php
/**
 * File for class KPMGStructOutdataLicensesType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataLicensesType originally named OutdataLicensesType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataLicensesType extends KPMGWsdlClass
{
    /**
     * The LICENSE
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructOutdataLicenseType
     */
    public $LICENSE;
    /**
     * Constructor method for OutdataLicensesType
     * @see parent::__construct()
     * @param KPMGStructOutdataLicenseType $_lICENSE
     * @return KPMGStructOutdataLicensesType
     */
    public function __construct($_lICENSE = NULL)
    {
        parent::__construct(array('LICENSE'=>$_lICENSE),false);
    }
    /**
     * Get LICENSE value
     * @return KPMGStructOutdataLicenseType|null
     */
    public function getLICENSE()
    {
        return $this->LICENSE;
    }
    /**
     * Set LICENSE value
     * @param KPMGStructOutdataLicenseType $_lICENSE the LICENSE
     * @return KPMGStructOutdataLicenseType
     */
    public function setLICENSE($_lICENSE)
    {
        return ($this->LICENSE = $_lICENSE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructOutdataLicensesType
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
