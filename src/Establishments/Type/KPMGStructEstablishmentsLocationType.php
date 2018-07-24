<?php
/**
 * File for class KPMGStructEstablishmentsLocationType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructEstablishmentsLocationType originally named EstablishmentsLocationType
 * Documentation : Establishment for each location type (true or false).
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructEstablishmentsLocationType extends KPMGWsdlClass
{
    /**
     * The BILL_TO
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $BILL_TO;
    /**
     * The BUYER_PRIMARY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $BUYER_PRIMARY;
    /**
     * The MIDDLEMAN
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $MIDDLEMAN;
    /**
     * The ORDER_ACCEPTANCE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $ORDER_ACCEPTANCE;
    /**
     * The ORDER_ORIGIN
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $ORDER_ORIGIN;
    /**
     * The SELLER_PRIMARY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $SELLER_PRIMARY;
    /**
     * The SHIP_FROM
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $SHIP_FROM;
    /**
     * The SHIP_TO
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $SHIP_TO;
    /**
     * The SUPPLY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $SUPPLY;
    /**
     * Constructor method for EstablishmentsLocationType
     * @see parent::__construct()
     * @param string,boolean,EmptyStringType $_bILL_TO
     * @param string,boolean,EmptyStringType $_bUYER_PRIMARY
     * @param string,boolean,EmptyStringType $_mIDDLEMAN
     * @param string,boolean,EmptyStringType $_oRDER_ACCEPTANCE
     * @param string,boolean,EmptyStringType $_oRDER_ORIGIN
     * @param string,boolean,EmptyStringType $_sELLER_PRIMARY
     * @param string,boolean,EmptyStringType $_sHIP_FROM
     * @param string,boolean,EmptyStringType $_sHIP_TO
     * @param string,boolean,EmptyStringType $_sUPPLY
     * @return KPMGStructEstablishmentsLocationType
     */
    public function __construct($_bILL_TO = NULL,$_bUYER_PRIMARY = NULL,$_mIDDLEMAN = NULL,$_oRDER_ACCEPTANCE = NULL,$_oRDER_ORIGIN = NULL,$_sELLER_PRIMARY = NULL,$_sHIP_FROM = NULL,$_sHIP_TO = NULL,$_sUPPLY = NULL)
    {
        parent::__construct(array('BILL_TO'=>$_bILL_TO,'BUYER_PRIMARY'=>$_bUYER_PRIMARY,'MIDDLEMAN'=>$_mIDDLEMAN,'ORDER_ACCEPTANCE'=>$_oRDER_ACCEPTANCE,'ORDER_ORIGIN'=>$_oRDER_ORIGIN,'SELLER_PRIMARY'=>$_sELLER_PRIMARY,'SHIP_FROM'=>$_sHIP_FROM,'SHIP_TO'=>$_sHIP_TO,'SUPPLY'=>$_sUPPLY),false);
    }
    /**
     * Get BILL_TO value
     * @return string,boolean,EmptyStringType|null
     */
    public function getBILL_TO()
    {
        return $this->BILL_TO;
    }
    /**
     * Set BILL_TO value
     * @param string,boolean,EmptyStringType $_bILL_TO the BILL_TO
     * @return string,boolean,EmptyStringType
     */
    public function setBILL_TO($_bILL_TO)
    {
        return ($this->BILL_TO = $_bILL_TO);
    }
    /**
     * Get BUYER_PRIMARY value
     * @return string,boolean,EmptyStringType|null
     */
    public function getBUYER_PRIMARY()
    {
        return $this->BUYER_PRIMARY;
    }
    /**
     * Set BUYER_PRIMARY value
     * @param string,boolean,EmptyStringType $_bUYER_PRIMARY the BUYER_PRIMARY
     * @return string,boolean,EmptyStringType
     */
    public function setBUYER_PRIMARY($_bUYER_PRIMARY)
    {
        return ($this->BUYER_PRIMARY = $_bUYER_PRIMARY);
    }
    /**
     * Get MIDDLEMAN value
     * @return string,boolean,EmptyStringType|null
     */
    public function getMIDDLEMAN()
    {
        return $this->MIDDLEMAN;
    }
    /**
     * Set MIDDLEMAN value
     * @param string,boolean,EmptyStringType $_mIDDLEMAN the MIDDLEMAN
     * @return string,boolean,EmptyStringType
     */
    public function setMIDDLEMAN($_mIDDLEMAN)
    {
        return ($this->MIDDLEMAN = $_mIDDLEMAN);
    }
    /**
     * Get ORDER_ACCEPTANCE value
     * @return string,boolean,EmptyStringType|null
     */
    public function getORDER_ACCEPTANCE()
    {
        return $this->ORDER_ACCEPTANCE;
    }
    /**
     * Set ORDER_ACCEPTANCE value
     * @param string,boolean,EmptyStringType $_oRDER_ACCEPTANCE the ORDER_ACCEPTANCE
     * @return string,boolean,EmptyStringType
     */
    public function setORDER_ACCEPTANCE($_oRDER_ACCEPTANCE)
    {
        return ($this->ORDER_ACCEPTANCE = $_oRDER_ACCEPTANCE);
    }
    /**
     * Get ORDER_ORIGIN value
     * @return string,boolean,EmptyStringType|null
     */
    public function getORDER_ORIGIN()
    {
        return $this->ORDER_ORIGIN;
    }
    /**
     * Set ORDER_ORIGIN value
     * @param string,boolean,EmptyStringType $_oRDER_ORIGIN the ORDER_ORIGIN
     * @return string,boolean,EmptyStringType
     */
    public function setORDER_ORIGIN($_oRDER_ORIGIN)
    {
        return ($this->ORDER_ORIGIN = $_oRDER_ORIGIN);
    }
    /**
     * Get SELLER_PRIMARY value
     * @return string,boolean,EmptyStringType|null
     */
    public function getSELLER_PRIMARY()
    {
        return $this->SELLER_PRIMARY;
    }
    /**
     * Set SELLER_PRIMARY value
     * @param string,boolean,EmptyStringType $_sELLER_PRIMARY the SELLER_PRIMARY
     * @return string,boolean,EmptyStringType
     */
    public function setSELLER_PRIMARY($_sELLER_PRIMARY)
    {
        return ($this->SELLER_PRIMARY = $_sELLER_PRIMARY);
    }
    /**
     * Get SHIP_FROM value
     * @return string,boolean,EmptyStringType|null
     */
    public function getSHIP_FROM()
    {
        return $this->SHIP_FROM;
    }
    /**
     * Set SHIP_FROM value
     * @param string,boolean,EmptyStringType $_sHIP_FROM the SHIP_FROM
     * @return string,boolean,EmptyStringType
     */
    public function setSHIP_FROM($_sHIP_FROM)
    {
        return ($this->SHIP_FROM = $_sHIP_FROM);
    }
    /**
     * Get SHIP_TO value
     * @return string,boolean,EmptyStringType|null
     */
    public function getSHIP_TO()
    {
        return $this->SHIP_TO;
    }
    /**
     * Set SHIP_TO value
     * @param string,boolean,EmptyStringType $_sHIP_TO the SHIP_TO
     * @return string,boolean,EmptyStringType
     */
    public function setSHIP_TO($_sHIP_TO)
    {
        return ($this->SHIP_TO = $_sHIP_TO);
    }
    /**
     * Get SUPPLY value
     * @return string,boolean,EmptyStringType|null
     */
    public function getSUPPLY()
    {
        return $this->SUPPLY;
    }
    /**
     * Set SUPPLY value
     * @param string,boolean,EmptyStringType $_sUPPLY the SUPPLY
     * @return string,boolean,EmptyStringType
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
     * @return KPMGStructEstablishmentsLocationType
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
