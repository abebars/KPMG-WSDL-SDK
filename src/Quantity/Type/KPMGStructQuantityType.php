<?php
/**
 * File for class KPMGStructQuantityType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructQuantityType originally named QuantityType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructQuantityType extends KPMGWsdlClass
{
    /**
     * The DEFAULT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - union : FlagType,boolean,EmptyStringType
     * @var string,boolean,EmptyStringType
     */
    public $DEFAULT;
    /**
     * The AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $AMOUNT;
    /**
     * The UOM
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This field has been deprecated. Use the QUANTITIES structure instead.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $UOM;
    /**
     * Constructor method for QuantityType
     * @see parent::__construct()
     * @param string,boolean,EmptyStringType $_dEFAULT
     * @param decimal,EmptyStringType $_aMOUNT
     * @param string $_uOM
     * @return KPMGStructQuantityType
     */
    public function __construct($_dEFAULT = NULL,$_aMOUNT = NULL,$_uOM = NULL)
    {
        parent::__construct(array('DEFAULT'=>$_dEFAULT,'AMOUNT'=>$_aMOUNT,'UOM'=>$_uOM),false);
    }
    /**
     * Get DEFAULT value
     * @return string,boolean,EmptyStringType|null
     */
    public function getDEFAULT()
    {
        return $this->DEFAULT;
    }
    /**
     * Set DEFAULT value
     * @param string,boolean,EmptyStringType $_dEFAULT the DEFAULT
     * @return string,boolean,EmptyStringType
     */
    public function setDEFAULT($_dEFAULT)
    {
        return ($this->DEFAULT = $_dEFAULT);
    }
    /**
     * Get AMOUNT value
     * @return decimal,EmptyStringType|null
     */
    public function getAMOUNT()
    {
        return $this->AMOUNT;
    }
    /**
     * Set AMOUNT value
     * @param decimal,EmptyStringType $_aMOUNT the AMOUNT
     * @return decimal,EmptyStringType
     */
    public function setAMOUNT($_aMOUNT)
    {
        return ($this->AMOUNT = $_aMOUNT);
    }
    /**
     * Get UOM value
     * @return string|null
     */
    public function getUOM()
    {
        return $this->UOM;
    }
    /**
     * Set UOM value
     * @param string $_uOM the UOM
     * @return string
     */
    public function setUOM($_uOM)
    {
        return ($this->UOM = $_uOM);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructQuantityType
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
