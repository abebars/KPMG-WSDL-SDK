<?php
/**
 * File for class KPMGStructOutdataErrorType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataErrorType originally named OutdataErrorType
 * Documentation : A structure containing one or more severe errors associated with the request. If no severe errors are encountered, this structure will not be returned.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataErrorType extends KPMGWsdlClass
{
    /**
     * The CODE
     * Meta informations extracted from the WSDL
     * - documentation : The severe error's code.
     * @var string
     */
    public $CODE;
    /**
     * The DESCRIPTION
     * Meta informations extracted from the WSDL
     * - documentation : The severe error's description.
     * @var string
     */
    public $DESCRIPTION;
    /**
     * The ERROR_LOCATION_PATH
     * Meta informations extracted from the WSDL
     * - documentation : An XML path to the element containing the severe error.
     * @var string
     */
    public $ERROR_LOCATION_PATH;
    /**
     * Constructor method for OutdataErrorType
     * @see parent::__construct()
     * @param string $_cODE
     * @param string $_dESCRIPTION
     * @param string $_eRROR_LOCATION_PATH
     * @return KPMGStructOutdataErrorType
     */
    public function __construct($_cODE = NULL,$_dESCRIPTION = NULL,$_eRROR_LOCATION_PATH = NULL)
    {
        parent::__construct(array('CODE'=>$_cODE,'DESCRIPTION'=>$_dESCRIPTION,'ERROR_LOCATION_PATH'=>$_eRROR_LOCATION_PATH),false);
    }
    /**
     * Get CODE value
     * @return string|null
     */
    public function getCODE()
    {
        return $this->CODE;
    }
    /**
     * Set CODE value
     * @param string $_cODE the CODE
     * @return string
     */
    public function setCODE($_cODE)
    {
        return ($this->CODE = $_cODE);
    }
    /**
     * Get DESCRIPTION value
     * @return string|null
     */
    public function getDESCRIPTION()
    {
        return $this->DESCRIPTION;
    }
    /**
     * Set DESCRIPTION value
     * @param string $_dESCRIPTION the DESCRIPTION
     * @return string
     */
    public function setDESCRIPTION($_dESCRIPTION)
    {
        return ($this->DESCRIPTION = $_dESCRIPTION);
    }
    /**
     * Get ERROR_LOCATION_PATH value
     * @return string|null
     */
    public function getERROR_LOCATION_PATH()
    {
        return $this->ERROR_LOCATION_PATH;
    }
    /**
     * Set ERROR_LOCATION_PATH value
     * @param string $_eRROR_LOCATION_PATH the ERROR_LOCATION_PATH
     * @return string
     */
    public function setERROR_LOCATION_PATH($_eRROR_LOCATION_PATH)
    {
        return ($this->ERROR_LOCATION_PATH = $_eRROR_LOCATION_PATH);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructOutdataErrorType
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
