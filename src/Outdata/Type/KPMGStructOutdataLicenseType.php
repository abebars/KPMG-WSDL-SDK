<?php
/**
 * File for class KPMGStructOutdataLicenseType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataLicenseType originally named OutdataLicenseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataLicenseType extends KPMGWsdlClass
{
    /**
     * The LICENSE_NUMBER
     * @var string
     */
    public $LICENSE_NUMBER;
    /**
     * The LICENSE_TYPE_NAME
     * @var string
     */
    public $LICENSE_TYPE_NAME;
    /**
     * The LICENSE_END_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $LICENSE_END_DATE;
    /**
     * The LICENSE_CATEGORY
     * @var string
     */
    public $LICENSE_CATEGORY;
    /**
     * The LICENSE_EXTERNAL_IDENTIFIER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $LICENSE_EXTERNAL_IDENTIFIER;
    /**
     * Constructor method for OutdataLicenseType
     * @see parent::__construct()
     * @param string $_lICENSE_NUMBER
     * @param string $_lICENSE_TYPE_NAME
     * @param string $_lICENSE_END_DATE
     * @param string $_lICENSE_CATEGORY
     * @param string $_lICENSE_EXTERNAL_IDENTIFIER
     * @return KPMGStructOutdataLicenseType
     */
    public function __construct($_lICENSE_NUMBER = NULL,$_lICENSE_TYPE_NAME = NULL,$_lICENSE_END_DATE = NULL,$_lICENSE_CATEGORY = NULL,$_lICENSE_EXTERNAL_IDENTIFIER = NULL)
    {
        parent::__construct(array('LICENSE_NUMBER'=>$_lICENSE_NUMBER,'LICENSE_TYPE_NAME'=>$_lICENSE_TYPE_NAME,'LICENSE_END_DATE'=>$_lICENSE_END_DATE,'LICENSE_CATEGORY'=>$_lICENSE_CATEGORY,'LICENSE_EXTERNAL_IDENTIFIER'=>$_lICENSE_EXTERNAL_IDENTIFIER),false);
    }
    /**
     * Get LICENSE_NUMBER value
     * @return string|null
     */
    public function getLICENSE_NUMBER()
    {
        return $this->LICENSE_NUMBER;
    }
    /**
     * Set LICENSE_NUMBER value
     * @param string $_lICENSE_NUMBER the LICENSE_NUMBER
     * @return string
     */
    public function setLICENSE_NUMBER($_lICENSE_NUMBER)
    {
        return ($this->LICENSE_NUMBER = $_lICENSE_NUMBER);
    }
    /**
     * Get LICENSE_TYPE_NAME value
     * @return string|null
     */
    public function getLICENSE_TYPE_NAME()
    {
        return $this->LICENSE_TYPE_NAME;
    }
    /**
     * Set LICENSE_TYPE_NAME value
     * @param string $_lICENSE_TYPE_NAME the LICENSE_TYPE_NAME
     * @return string
     */
    public function setLICENSE_TYPE_NAME($_lICENSE_TYPE_NAME)
    {
        return ($this->LICENSE_TYPE_NAME = $_lICENSE_TYPE_NAME);
    }
    /**
     * Get LICENSE_END_DATE value
     * @return string|null
     */
    public function getLICENSE_END_DATE()
    {
        return $this->LICENSE_END_DATE;
    }
    /**
     * Set LICENSE_END_DATE value
     * @param string $_lICENSE_END_DATE the LICENSE_END_DATE
     * @return string
     */
    public function setLICENSE_END_DATE($_lICENSE_END_DATE)
    {
        return ($this->LICENSE_END_DATE = $_lICENSE_END_DATE);
    }
    /**
     * Get LICENSE_CATEGORY value
     * @return string|null
     */
    public function getLICENSE_CATEGORY()
    {
        return $this->LICENSE_CATEGORY;
    }
    /**
     * Set LICENSE_CATEGORY value
     * @param string $_lICENSE_CATEGORY the LICENSE_CATEGORY
     * @return string
     */
    public function setLICENSE_CATEGORY($_lICENSE_CATEGORY)
    {
        return ($this->LICENSE_CATEGORY = $_lICENSE_CATEGORY);
    }
    /**
     * Get LICENSE_EXTERNAL_IDENTIFIER value
     * @return string|null
     */
    public function getLICENSE_EXTERNAL_IDENTIFIER()
    {
        return $this->LICENSE_EXTERNAL_IDENTIFIER;
    }
    /**
     * Set LICENSE_EXTERNAL_IDENTIFIER value
     * @param string $_lICENSE_EXTERNAL_IDENTIFIER the LICENSE_EXTERNAL_IDENTIFIER
     * @return string
     */
    public function setLICENSE_EXTERNAL_IDENTIFIER($_lICENSE_EXTERNAL_IDENTIFIER)
    {
        return ($this->LICENSE_EXTERNAL_IDENTIFIER = $_lICENSE_EXTERNAL_IDENTIFIER);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructOutdataLicenseType
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
