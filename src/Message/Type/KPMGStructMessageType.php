<?php
/**
 * File for class KPMGStructMessageType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructMessageType originally named MessageType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructMessageType extends KPMGWsdlClass
{
    /**
     * The LOCATION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $LOCATION;
    /**
     * The CATEGORY
     * @var string
     */
    public $CATEGORY;
    /**
     * The CODE
     * @var string
     */
    public $CODE;
    /**
     * The MESSAGE_TEXT
     * @var string
     */
    public $MESSAGE_TEXT;
    /**
     * The SEVERITY
     * @var nonNegativeInteger
     */
    public $SEVERITY;
    /**
     * Constructor method for MessageType
     * @see parent::__construct()
     * @param string $_lOCATION
     * @param string $_cATEGORY
     * @param string $_cODE
     * @param string $_mESSAGE_TEXT
     * @param nonNegativeInteger $_sEVERITY
     * @return KPMGStructMessageType
     */
    public function __construct($_lOCATION = NULL,$_cATEGORY = NULL,$_cODE = NULL,$_mESSAGE_TEXT = NULL,$_sEVERITY = NULL)
    {
        parent::__construct(array('LOCATION'=>$_lOCATION,'CATEGORY'=>$_cATEGORY,'CODE'=>$_cODE,'MESSAGE_TEXT'=>$_mESSAGE_TEXT,'SEVERITY'=>$_sEVERITY),false);
    }
    /**
     * Get LOCATION value
     * @return string|null
     */
    public function getLOCATION()
    {
        return $this->LOCATION;
    }
    /**
     * Set LOCATION value
     * @param string $_lOCATION the LOCATION
     * @return string
     */
    public function setLOCATION($_lOCATION)
    {
        return ($this->LOCATION = $_lOCATION);
    }
    /**
     * Get CATEGORY value
     * @return string|null
     */
    public function getCATEGORY()
    {
        return $this->CATEGORY;
    }
    /**
     * Set CATEGORY value
     * @param string $_cATEGORY the CATEGORY
     * @return string
     */
    public function setCATEGORY($_cATEGORY)
    {
        return ($this->CATEGORY = $_cATEGORY);
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
     * Get MESSAGE_TEXT value
     * @return string|null
     */
    public function getMESSAGE_TEXT()
    {
        return $this->MESSAGE_TEXT;
    }
    /**
     * Set MESSAGE_TEXT value
     * @param string $_mESSAGE_TEXT the MESSAGE_TEXT
     * @return string
     */
    public function setMESSAGE_TEXT($_mESSAGE_TEXT)
    {
        return ($this->MESSAGE_TEXT = $_mESSAGE_TEXT);
    }
    /**
     * Get SEVERITY value
     * @return nonNegativeInteger|null
     */
    public function getSEVERITY()
    {
        return $this->SEVERITY;
    }
    /**
     * Set SEVERITY value
     * @param nonNegativeInteger $_sEVERITY the SEVERITY
     * @return nonNegativeInteger
     */
    public function setSEVERITY($_sEVERITY)
    {
        return ($this->SEVERITY = $_sEVERITY);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructMessageType
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
