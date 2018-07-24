<?php
/**
 * File for class KPMGStructAuthorityAttributeType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructAuthorityAttributeType originally named AuthorityAttributeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructAuthorityAttributeType extends KPMGWsdlClass
{
    /**
     * The NAME
     * @var string
     */
    public $NAME;
    /**
     * The VALUE
     * @var string
     */
    public $VALUE;
    /**
     * Constructor method for AuthorityAttributeType
     * @see parent::__construct()
     * @param string $_nAME
     * @param string $_vALUE
     * @return KPMGStructAuthorityAttributeType
     */
    public function __construct($_nAME = NULL,$_vALUE = NULL)
    {
        parent::__construct(array('NAME'=>$_nAME,'VALUE'=>$_vALUE),false);
    }
    /**
     * Get NAME value
     * @return string|null
     */
    public function getNAME()
    {
        return $this->NAME;
    }
    /**
     * Set NAME value
     * @param string $_nAME the NAME
     * @return string
     */
    public function setNAME($_nAME)
    {
        return ($this->NAME = $_nAME);
    }
    /**
     * Get VALUE value
     * @return string|null
     */
    public function getVALUE()
    {
        return $this->VALUE;
    }
    /**
     * Set VALUE value
     * @param string $_vALUE the VALUE
     * @return string
     */
    public function setVALUE($_vALUE)
    {
        return ($this->VALUE = $_vALUE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructAuthorityAttributeType
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
