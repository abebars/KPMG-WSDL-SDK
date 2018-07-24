<?php
/**
 * File for class KPMGStructHostRequestInfoType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructHostRequestInfoType originally named HostRequestInfoType
 * Documentation : Contains pass-through elements used to identify the originating request from the ERP source.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructHostRequestInfoType extends KPMGWsdlClass
{
    /**
     * The HOST_REQUEST_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A pass-through element used to identify the document with the originating request from the ERP source.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $HOST_REQUEST_ID;
    /**
     * The HOST_REQUEST_LOG_ENTRY_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A pass-through element used to identify the originating request from the ERP source in log files.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $HOST_REQUEST_LOG_ENTRY_ID;
    /**
     * Constructor method for HostRequestInfoType
     * @see parent::__construct()
     * @param string $_hOST_REQUEST_ID
     * @param string $_hOST_REQUEST_LOG_ENTRY_ID
     * @return KPMGStructHostRequestInfoType
     */
    public function __construct($_hOST_REQUEST_ID = NULL,$_hOST_REQUEST_LOG_ENTRY_ID = NULL)
    {
        parent::__construct(array('HOST_REQUEST_ID'=>$_hOST_REQUEST_ID,'HOST_REQUEST_LOG_ENTRY_ID'=>$_hOST_REQUEST_LOG_ENTRY_ID),false);
    }
    /**
     * Get HOST_REQUEST_ID value
     * @return string|null
     */
    public function getHOST_REQUEST_ID()
    {
        return $this->HOST_REQUEST_ID;
    }
    /**
     * Set HOST_REQUEST_ID value
     * @param string $_hOST_REQUEST_ID the HOST_REQUEST_ID
     * @return string
     */
    public function setHOST_REQUEST_ID($_hOST_REQUEST_ID)
    {
        return ($this->HOST_REQUEST_ID = $_hOST_REQUEST_ID);
    }
    /**
     * Get HOST_REQUEST_LOG_ENTRY_ID value
     * @return string|null
     */
    public function getHOST_REQUEST_LOG_ENTRY_ID()
    {
        return $this->HOST_REQUEST_LOG_ENTRY_ID;
    }
    /**
     * Set HOST_REQUEST_LOG_ENTRY_ID value
     * @param string $_hOST_REQUEST_LOG_ENTRY_ID the HOST_REQUEST_LOG_ENTRY_ID
     * @return string
     */
    public function setHOST_REQUEST_LOG_ENTRY_ID($_hOST_REQUEST_LOG_ENTRY_ID)
    {
        return ($this->HOST_REQUEST_LOG_ENTRY_ID = $_hOST_REQUEST_LOG_ENTRY_ID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructHostRequestInfoType
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
