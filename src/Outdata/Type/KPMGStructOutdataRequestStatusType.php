<?php
/**
 * File for class KPMGStructOutdataRequestStatusType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataRequestStatusType originally named OutdataRequestStatusType
 * Documentation : A structure which contains a summary of the status of the entire request, included aggregation of severe errors.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataRequestStatusType extends KPMGWsdlClass
{
    /**
     * The IS_SUCCESS
     * Meta informations extracted from the WSDL
     * - documentation : Indicates whether the request was successful. All invoices must process successfully for this tag to be set to true.
     * @var boolean
     */
    public $IS_SUCCESS;
    /**
     * The IS_PARTIAL_SUCCESS
     * Meta informations extracted from the WSDL
     * - documentation : Indicates whether the request was partially successful. At least one invoice, but not all, must process successfully for this tag to be set to true.
     * @var boolean
     */
    public $IS_PARTIAL_SUCCESS;
    /**
     * The ERROR
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructOutdataErrorType
     */
    public $ERROR;
    /**
     * Constructor method for OutdataRequestStatusType
     * @see parent::__construct()
     * @param boolean $_iS_SUCCESS
     * @param boolean $_iS_PARTIAL_SUCCESS
     * @param KPMGStructOutdataErrorType $_eRROR
     * @return KPMGStructOutdataRequestStatusType
     */
    public function __construct($_iS_SUCCESS = NULL,$_iS_PARTIAL_SUCCESS = NULL,$_eRROR = NULL)
    {
        parent::__construct(array('IS_SUCCESS'=>$_iS_SUCCESS,'IS_PARTIAL_SUCCESS'=>$_iS_PARTIAL_SUCCESS,'ERROR'=>$_eRROR),false);
    }
    /**
     * Get IS_SUCCESS value
     * @return boolean|null
     */
    public function getIS_SUCCESS()
    {
        return $this->IS_SUCCESS;
    }
    /**
     * Set IS_SUCCESS value
     * @param boolean $_iS_SUCCESS the IS_SUCCESS
     * @return boolean
     */
    public function setIS_SUCCESS($_iS_SUCCESS)
    {
        return ($this->IS_SUCCESS = $_iS_SUCCESS);
    }
    /**
     * Get IS_PARTIAL_SUCCESS value
     * @return boolean|null
     */
    public function getIS_PARTIAL_SUCCESS()
    {
        return $this->IS_PARTIAL_SUCCESS;
    }
    /**
     * Set IS_PARTIAL_SUCCESS value
     * @param boolean $_iS_PARTIAL_SUCCESS the IS_PARTIAL_SUCCESS
     * @return boolean
     */
    public function setIS_PARTIAL_SUCCESS($_iS_PARTIAL_SUCCESS)
    {
        return ($this->IS_PARTIAL_SUCCESS = $_iS_PARTIAL_SUCCESS);
    }
    /**
     * Get ERROR value
     * @return KPMGStructOutdataErrorType|null
     */
    public function getERROR()
    {
        return $this->ERROR;
    }
    /**
     * Set ERROR value
     * @param KPMGStructOutdataErrorType $_eRROR the ERROR
     * @return KPMGStructOutdataErrorType
     */
    public function setERROR($_eRROR)
    {
        return ($this->ERROR = $_eRROR);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructOutdataRequestStatusType
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
