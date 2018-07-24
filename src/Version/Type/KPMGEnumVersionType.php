<?php
/**
 * File for class KPMGEnumVersionType
 * @package KPMG
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGEnumVersionType originally named VersionType
 * Documentation : The version of the determination object model schema.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGEnumVersionType extends KPMGWsdlClass
{
    /**
     * Constant for value 'G'
     * @return string 'G'
     */
    const VALUE_G = 'G';
    /**
     * Return true if value is allowed
     * @uses KPMGEnumVersionType::VALUE_G
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(KPMGEnumVersionType::VALUE_G));
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
