<?php
/**
 * File for class KPMGStructLocationNameType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructLocationNameType originally named LocationNameType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructLocationNameType extends KPMGWsdlClass
{
    /**
     * The BILL_TO
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $BILL_TO;
    /**
     * The ORDER_ACCEPTANCE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ORDER_ACCEPTANCE;
    /**
     * The MIDDLEMAN
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $MIDDLEMAN;
    /**
     * The ORDER_ORIGIN
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ORDER_ORIGIN;
    /**
     * The SHIP_FROM
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $SHIP_FROM;
    /**
     * The SHIP_TO
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $SHIP_TO;
    /**
     * The SUPPLY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $SUPPLY;
    /**
     * Constructor method for LocationNameType
     * @see parent::__construct()
     * @param string $_bILL_TO
     * @param string $_oRDER_ACCEPTANCE
     * @param string $_mIDDLEMAN
     * @param string $_oRDER_ORIGIN
     * @param string $_sHIP_FROM
     * @param string $_sHIP_TO
     * @param string $_sUPPLY
     * @return KPMGStructLocationNameType
     */
    public function __construct($_bILL_TO = NULL,$_oRDER_ACCEPTANCE = NULL,$_mIDDLEMAN = NULL,$_oRDER_ORIGIN = NULL,$_sHIP_FROM = NULL,$_sHIP_TO = NULL,$_sUPPLY = NULL)
    {
        parent::__construct(array('BILL_TO'=>$_bILL_TO,'ORDER_ACCEPTANCE'=>$_oRDER_ACCEPTANCE,'MIDDLEMAN'=>$_mIDDLEMAN,'ORDER_ORIGIN'=>$_oRDER_ORIGIN,'SHIP_FROM'=>$_sHIP_FROM,'SHIP_TO'=>$_sHIP_TO,'SUPPLY'=>$_sUPPLY),false);
    }
    /**
     * Get BILL_TO value
     * @return string|null
     */
    public function getBILL_TO()
    {
        return $this->BILL_TO;
    }
    /**
     * Set BILL_TO value
     * @param string $_bILL_TO the BILL_TO
     * @return string
     */
    public function setBILL_TO($_bILL_TO)
    {
        return ($this->BILL_TO = $_bILL_TO);
    }
    /**
     * Get ORDER_ACCEPTANCE value
     * @return string|null
     */
    public function getORDER_ACCEPTANCE()
    {
        return $this->ORDER_ACCEPTANCE;
    }
    /**
     * Set ORDER_ACCEPTANCE value
     * @param string $_oRDER_ACCEPTANCE the ORDER_ACCEPTANCE
     * @return string
     */
    public function setORDER_ACCEPTANCE($_oRDER_ACCEPTANCE)
    {
        return ($this->ORDER_ACCEPTANCE = $_oRDER_ACCEPTANCE);
    }
    /**
     * Get MIDDLEMAN value
     * @return string|null
     */
    public function getMIDDLEMAN()
    {
        return $this->MIDDLEMAN;
    }
    /**
     * Set MIDDLEMAN value
     * @param string $_mIDDLEMAN the MIDDLEMAN
     * @return string
     */
    public function setMIDDLEMAN($_mIDDLEMAN)
    {
        return ($this->MIDDLEMAN = $_mIDDLEMAN);
    }
    /**
     * Get ORDER_ORIGIN value
     * @return string|null
     */
    public function getORDER_ORIGIN()
    {
        return $this->ORDER_ORIGIN;
    }
    /**
     * Set ORDER_ORIGIN value
     * @param string $_oRDER_ORIGIN the ORDER_ORIGIN
     * @return string
     */
    public function setORDER_ORIGIN($_oRDER_ORIGIN)
    {
        return ($this->ORDER_ORIGIN = $_oRDER_ORIGIN);
    }
    /**
     * Get SHIP_FROM value
     * @return string|null
     */
    public function getSHIP_FROM()
    {
        return $this->SHIP_FROM;
    }
    /**
     * Set SHIP_FROM value
     * @param string $_sHIP_FROM the SHIP_FROM
     * @return string
     */
    public function setSHIP_FROM($_sHIP_FROM)
    {
        return ($this->SHIP_FROM = $_sHIP_FROM);
    }
    /**
     * Get SHIP_TO value
     * @return string|null
     */
    public function getSHIP_TO()
    {
        return $this->SHIP_TO;
    }
    /**
     * Set SHIP_TO value
     * @param string $_sHIP_TO the SHIP_TO
     * @return string
     */
    public function setSHIP_TO($_sHIP_TO)
    {
        return ($this->SHIP_TO = $_sHIP_TO);
    }
    /**
     * Get SUPPLY value
     * @return string|null
     */
    public function getSUPPLY()
    {
        return $this->SUPPLY;
    }
    /**
     * Set SUPPLY value
     * @param string $_sUPPLY the SUPPLY
     * @return string
     */
    public function setSUPPLY($_sUPPLY)
    {
        return ($this->SUPPLY = $_sUPPLY);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructLocationNameType
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
