<?php
/**
 * File for class KPMGStructOutdataAdvisoriesType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataAdvisoriesType originally named OutdataAdvisoriesType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataAdvisoriesType extends KPMGWsdlClass
{
    /**
     * The ADVISORY
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * @var string
     */
    public $ADVISORY;
    /**
     * Constructor method for OutdataAdvisoriesType
     * @see parent::__construct()
     * @param string $_aDVISORY
     * @return KPMGStructOutdataAdvisoriesType
     */
    public function __construct($_aDVISORY = NULL)
    {
        parent::__construct(array('ADVISORY'=>$_aDVISORY),false);
    }
    /**
     * Get ADVISORY value
     * @return string|null
     */
    public function getADVISORY()
    {
        return $this->ADVISORY;
    }
    /**
     * Set ADVISORY value
     * @param string $_aDVISORY the ADVISORY
     * @return string
     */
    public function setADVISORY($_aDVISORY)
    {
        return ($this->ADVISORY = $_aDVISORY);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructOutdataAdvisoriesType
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
