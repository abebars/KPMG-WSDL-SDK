<?php
/**
 * File for class KPMGStructRegistrationsType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructRegistrationsType originally named RegistrationsType
 * Documentation : List of registrations by role.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructRegistrationsType extends KPMGWsdlClass
{
    /**
     * The BUYER_ROLE
     * Meta informations extracted from the WSDL
     * - documentation : Buyer role registrations. Audited if used in calculation.Note: When a buyer passes a registration in the Input XML, other configured registrations for the company are ignored. For an explanation of this treatment, see Registration Numbers in XML Input.
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $BUYER_ROLE;
    /**
     * The MIDDLEMAN_ROLE
     * Meta informations extracted from the WSDL
     * - documentation : Middleman role registrations. Audited if used in calculation.
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $MIDDLEMAN_ROLE;
    /**
     * The SELLER_ROLE
     * Meta informations extracted from the WSDL
     * - documentation : Seller role registrations. Audited if used in calculation.Note: When a seller passes a registration in the Input XML, other configured registrations for the company are ignored. For an explanation of this treatment, see Registration Numbers in XML Input.
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $SELLER_ROLE;
    /**
     * Constructor method for RegistrationsType
     * @see parent::__construct()
     * @param string $_bUYER_ROLE
     * @param string $_mIDDLEMAN_ROLE
     * @param string $_sELLER_ROLE
     * @return KPMGStructRegistrationsType
     */
    public function __construct($_bUYER_ROLE = NULL,$_mIDDLEMAN_ROLE = NULL,$_sELLER_ROLE = NULL)
    {
        parent::__construct(array('BUYER_ROLE'=>$_bUYER_ROLE,'MIDDLEMAN_ROLE'=>$_mIDDLEMAN_ROLE,'SELLER_ROLE'=>$_sELLER_ROLE),false);
    }
    /**
     * Get BUYER_ROLE value
     * @return string|null
     */
    public function getBUYER_ROLE()
    {
        return $this->BUYER_ROLE;
    }
    /**
     * Set BUYER_ROLE value
     * @param string $_bUYER_ROLE the BUYER_ROLE
     * @return string
     */
    public function setBUYER_ROLE($_bUYER_ROLE)
    {
        return ($this->BUYER_ROLE = $_bUYER_ROLE);
    }
    /**
     * Get MIDDLEMAN_ROLE value
     * @return string|null
     */
    public function getMIDDLEMAN_ROLE()
    {
        return $this->MIDDLEMAN_ROLE;
    }
    /**
     * Set MIDDLEMAN_ROLE value
     * @param string $_mIDDLEMAN_ROLE the MIDDLEMAN_ROLE
     * @return string
     */
    public function setMIDDLEMAN_ROLE($_mIDDLEMAN_ROLE)
    {
        return ($this->MIDDLEMAN_ROLE = $_mIDDLEMAN_ROLE);
    }
    /**
     * Get SELLER_ROLE value
     * @return string|null
     */
    public function getSELLER_ROLE()
    {
        return $this->SELLER_ROLE;
    }
    /**
     * Set SELLER_ROLE value
     * @param string $_sELLER_ROLE the SELLER_ROLE
     * @return string
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
     * @return KPMGStructRegistrationsType
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
