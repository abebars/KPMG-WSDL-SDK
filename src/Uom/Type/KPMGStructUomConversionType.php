<?php
/**
 * File for class KPMGStructUomConversionType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructUomConversionType originally named UomConversionType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructUomConversionType extends KPMGWsdlClass
{
    /**
     * The FACTOR
     * Meta informations extracted from the WSDL
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $FACTOR;
    /**
     * The OPERATOR
     * @var string
     */
    public $OPERATOR;
    /**
     * The FROM
     * @var KPMGStructQuantityType
     */
    public $FROM;
    /**
     * The TO_ROUNDED
     * @var KPMGStructQuantityType
     */
    public $TO_ROUNDED;
    /**
     * The TO_UNROUNDED
     * @var KPMGStructQuantityType
     */
    public $TO_UNROUNDED;
    /**
     * Constructor method for UomConversionType
     * @see parent::__construct()
     * @param decimal,EmptyStringType $_fACTOR
     * @param string $_oPERATOR
     * @param KPMGStructQuantityType $_fROM
     * @param KPMGStructQuantityType $_tO_ROUNDED
     * @param KPMGStructQuantityType $_tO_UNROUNDED
     * @return KPMGStructUomConversionType
     */
    public function __construct($_fACTOR = NULL,$_oPERATOR = NULL,$_fROM = NULL,$_tO_ROUNDED = NULL,$_tO_UNROUNDED = NULL)
    {
        parent::__construct(array('FACTOR'=>$_fACTOR,'OPERATOR'=>$_oPERATOR,'FROM'=>$_fROM,'TO_ROUNDED'=>$_tO_ROUNDED,'TO_UNROUNDED'=>$_tO_UNROUNDED),false);
    }
    /**
     * Get FACTOR value
     * @return decimal,EmptyStringType|null
     */
    public function getFACTOR()
    {
        return $this->FACTOR;
    }
    /**
     * Set FACTOR value
     * @param decimal,EmptyStringType $_fACTOR the FACTOR
     * @return decimal,EmptyStringType
     */
    public function setFACTOR($_fACTOR)
    {
        return ($this->FACTOR = $_fACTOR);
    }
    /**
     * Get OPERATOR value
     * @return string|null
     */
    public function getOPERATOR()
    {
        return $this->OPERATOR;
    }
    /**
     * Set OPERATOR value
     * @param string $_oPERATOR the OPERATOR
     * @return string
     */
    public function setOPERATOR($_oPERATOR)
    {
        return ($this->OPERATOR = $_oPERATOR);
    }
    /**
     * Get FROM value
     * @return KPMGStructQuantityType|null
     */
    public function getFROM()
    {
        return $this->FROM;
    }
    /**
     * Set FROM value
     * @param KPMGStructQuantityType $_fROM the FROM
     * @return KPMGStructQuantityType
     */
    public function setFROM($_fROM)
    {
        return ($this->FROM = $_fROM);
    }
    /**
     * Get TO_ROUNDED value
     * @return KPMGStructQuantityType|null
     */
    public function getTO_ROUNDED()
    {
        return $this->TO_ROUNDED;
    }
    /**
     * Set TO_ROUNDED value
     * @param KPMGStructQuantityType $_tO_ROUNDED the TO_ROUNDED
     * @return KPMGStructQuantityType
     */
    public function setTO_ROUNDED($_tO_ROUNDED)
    {
        return ($this->TO_ROUNDED = $_tO_ROUNDED);
    }
    /**
     * Get TO_UNROUNDED value
     * @return KPMGStructQuantityType|null
     */
    public function getTO_UNROUNDED()
    {
        return $this->TO_UNROUNDED;
    }
    /**
     * Set TO_UNROUNDED value
     * @param KPMGStructQuantityType $_tO_UNROUNDED the TO_UNROUNDED
     * @return KPMGStructQuantityType
     */
    public function setTO_UNROUNDED($_tO_UNROUNDED)
    {
        return ($this->TO_UNROUNDED = $_tO_UNROUNDED);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructUomConversionType
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
