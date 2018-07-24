<?php
/**
 * File for class KPMGEnumEmptyStringType
 * @package KPMG
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGEnumEmptyStringType originally named EmptyStringType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGEnumEmptyStringType extends KPMGWsdlClass
{
    /**
     * Constant for value ''
     * @return string ''
     */
    const VALUE_ = '';
    /**
     * Return true if value is allowed
     * @uses KPMGEnumEmptyStringType::VALUE_
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(KPMGEnumEmptyStringType::VALUE_));
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
