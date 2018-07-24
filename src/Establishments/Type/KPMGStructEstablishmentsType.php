<?php
/**
 * File for class KPMGStructEstablishmentsType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructEstablishmentsType originally named EstablishmentsType
 * Documentation : List of established locations.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructEstablishmentsType extends KPMGWsdlClass
{
    /**
     * The BUYER_ROLE
     * Meta informations extracted from the WSDL
     * - documentation : List of buyer's established locations.
     * - minOccurs : 0
     * @var KPMGStructEstablishmentsLocationType
     */
    public $BUYER_ROLE;
    /**
     * The MIDDLEMAN_ROLE
     * Meta informations extracted from the WSDL
     * - documentation : List of middleman's established locations.
     * - minOccurs : 0
     * @var KPMGStructEstablishmentsLocationType
     */
    public $MIDDLEMAN_ROLE;
    /**
     * The SELLER_ROLE
     * Meta informations extracted from the WSDL
     * - documentation : List of seller's established locations.
     * - minOccurs : 0
     * @var KPMGStructEstablishmentsLocationType
     */
    public $SELLER_ROLE;
    /**
     * Constructor method for EstablishmentsType
     * @see parent::__construct()
     * @param KPMGStructEstablishmentsLocationType $_bUYER_ROLE
     * @param KPMGStructEstablishmentsLocationType $_mIDDLEMAN_ROLE
     * @param KPMGStructEstablishmentsLocationType $_sELLER_ROLE
     * @return KPMGStructEstablishmentsType
     */
    public function __construct($_bUYER_ROLE = NULL,$_mIDDLEMAN_ROLE = NULL,$_sELLER_ROLE = NULL)
    {
        parent::__construct(array('BUYER_ROLE'=>$_bUYER_ROLE,'MIDDLEMAN_ROLE'=>$_mIDDLEMAN_ROLE,'SELLER_ROLE'=>$_sELLER_ROLE),false);
    }
    /**
     * Get BUYER_ROLE value
     * @return KPMGStructEstablishmentsLocationType|null
     */
    public function getBUYER_ROLE()
    {
        return $this->BUYER_ROLE;
    }
    /**
     * Set BUYER_ROLE value
     * @param KPMGStructEstablishmentsLocationType $_bUYER_ROLE the BUYER_ROLE
     * @return KPMGStructEstablishmentsLocationType
     */
    public function setBUYER_ROLE($_bUYER_ROLE)
    {
        return ($this->BUYER_ROLE = $_bUYER_ROLE);
    }
    /**
     * Get MIDDLEMAN_ROLE value
     * @return KPMGStructEstablishmentsLocationType|null
     */
    public function getMIDDLEMAN_ROLE()
    {
        return $this->MIDDLEMAN_ROLE;
    }
    /**
     * Set MIDDLEMAN_ROLE value
     * @param KPMGStructEstablishmentsLocationType $_mIDDLEMAN_ROLE the MIDDLEMAN_ROLE
     * @return KPMGStructEstablishmentsLocationType
     */
    public function setMIDDLEMAN_ROLE($_mIDDLEMAN_ROLE)
    {
        return ($this->MIDDLEMAN_ROLE = $_mIDDLEMAN_ROLE);
    }
    /**
     * Get SELLER_ROLE value
     * @return KPMGStructEstablishmentsLocationType|null
     */
    public function getSELLER_ROLE()
    {
        return $this->SELLER_ROLE;
    }
    /**
     * Set SELLER_ROLE value
     * @param KPMGStructEstablishmentsLocationType $_sELLER_ROLE the SELLER_ROLE
     * @return KPMGStructEstablishmentsLocationType
     */
    public function setSELLER_ROLE($_sELLER_ROLE)
    {
        return ($this->SELLER_ROLE = $_sELLER_ROLE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructEstablishmentsType
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
