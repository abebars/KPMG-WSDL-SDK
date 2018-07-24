<?php
/**
 * File for class KPMGStructConvertedCurrencyAmountType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructConvertedCurrencyAmountType originally named ConvertedCurrencyAmountType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructConvertedCurrencyAmountType extends KPMGWsdlClass
{
    /**
     * The DOCUMENT_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $DOCUMENT_AMOUNT;
    /**
     * The UNROUNDED_DOCUMENT_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $UNROUNDED_DOCUMENT_AMOUNT;
    /**
     * The AUTHORITY_AMOUNT
     * Meta informations extracted from the WSDL
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $AUTHORITY_AMOUNT;
    /**
     * The UNROUNDED_AUTHORITY_AMOUNT
     * Meta informations extracted from the WSDL
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $UNROUNDED_AUTHORITY_AMOUNT;
    /**
     * Constructor method for ConvertedCurrencyAmountType
     * @see parent::__construct()
     * @param decimal,EmptyStringType $_dOCUMENT_AMOUNT
     * @param decimal,EmptyStringType $_uNROUNDED_DOCUMENT_AMOUNT
     * @param decimal,EmptyStringType $_aUTHORITY_AMOUNT
     * @param decimal,EmptyStringType $_uNROUNDED_AUTHORITY_AMOUNT
     * @return KPMGStructConvertedCurrencyAmountType
     */
    public function __construct($_dOCUMENT_AMOUNT = NULL,$_uNROUNDED_DOCUMENT_AMOUNT = NULL,$_aUTHORITY_AMOUNT = NULL,$_uNROUNDED_AUTHORITY_AMOUNT = NULL)
    {
        parent::__construct(array('DOCUMENT_AMOUNT'=>$_dOCUMENT_AMOUNT,'UNROUNDED_DOCUMENT_AMOUNT'=>$_uNROUNDED_DOCUMENT_AMOUNT,'AUTHORITY_AMOUNT'=>$_aUTHORITY_AMOUNT,'UNROUNDED_AUTHORITY_AMOUNT'=>$_uNROUNDED_AUTHORITY_AMOUNT),false);
    }
    /**
     * Get DOCUMENT_AMOUNT value
     * @return decimal,EmptyStringType|null
     */
    public function getDOCUMENT_AMOUNT()
    {
        return $this->DOCUMENT_AMOUNT;
    }
    /**
     * Set DOCUMENT_AMOUNT value
     * @param decimal,EmptyStringType $_dOCUMENT_AMOUNT the DOCUMENT_AMOUNT
     * @return decimal,EmptyStringType
     */
    public function setDOCUMENT_AMOUNT($_dOCUMENT_AMOUNT)
    {
        return ($this->DOCUMENT_AMOUNT = $_dOCUMENT_AMOUNT);
    }
    /**
     * Get UNROUNDED_DOCUMENT_AMOUNT value
     * @return decimal,EmptyStringType|null
     */
    public function getUNROUNDED_DOCUMENT_AMOUNT()
    {
        return $this->UNROUNDED_DOCUMENT_AMOUNT;
    }
    /**
     * Set UNROUNDED_DOCUMENT_AMOUNT value
     * @param decimal,EmptyStringType $_uNROUNDED_DOCUMENT_AMOUNT the UNROUNDED_DOCUMENT_AMOUNT
     * @return decimal,EmptyStringType
     */
    public function setUNROUNDED_DOCUMENT_AMOUNT($_uNROUNDED_DOCUMENT_AMOUNT)
    {
        return ($this->UNROUNDED_DOCUMENT_AMOUNT = $_uNROUNDED_DOCUMENT_AMOUNT);
    }
    /**
     * Get AUTHORITY_AMOUNT value
     * @return decimal,EmptyStringType|null
     */
    public function getAUTHORITY_AMOUNT()
    {
        return $this->AUTHORITY_AMOUNT;
    }
    /**
     * Set AUTHORITY_AMOUNT value
     * @param decimal,EmptyStringType $_aUTHORITY_AMOUNT the AUTHORITY_AMOUNT
     * @return decimal,EmptyStringType
     */
    public function setAUTHORITY_AMOUNT($_aUTHORITY_AMOUNT)
    {
        return ($this->AUTHORITY_AMOUNT = $_aUTHORITY_AMOUNT);
    }
    /**
     * Get UNROUNDED_AUTHORITY_AMOUNT value
     * @return decimal,EmptyStringType|null
     */
    public function getUNROUNDED_AUTHORITY_AMOUNT()
    {
        return $this->UNROUNDED_AUTHORITY_AMOUNT;
    }
    /**
     * Set UNROUNDED_AUTHORITY_AMOUNT value
     * @param decimal,EmptyStringType $_uNROUNDED_AUTHORITY_AMOUNT the UNROUNDED_AUTHORITY_AMOUNT
     * @return decimal,EmptyStringType
     */
    public function setUNROUNDED_AUTHORITY_AMOUNT($_uNROUNDED_AUTHORITY_AMOUNT)
    {
        return ($this->UNROUNDED_AUTHORITY_AMOUNT = $_uNROUNDED_AUTHORITY_AMOUNT);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructConvertedCurrencyAmountType
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
