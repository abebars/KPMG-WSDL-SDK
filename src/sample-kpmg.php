<?php
/**
 * Test with KPMG for 'https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?wsdl'
 * @package KPMG
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/KPMGAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a KPMGWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[KPMGWsdlClass::WSDL_URL] = 'https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?wsdl';
 * $wsdl[KPMGWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[KPMGWsdlClass::WSDL_TRACE] = true;
 * $wsdl[KPMGWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[KPMGWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new KPMGWsdlClass($wsdl);
 */
/**
 * Examples
 */


/**********************************
 * Example for KPMGServiceCalculate
 */
$kPMGServiceCalculate = new KPMGServiceCalculate();
// sample call for KPMGServiceCalculate::CalculateTax()
if($kPMGServiceCalculate->CalculateTax(new KPMGStructTaxCalculationRequest(/*** update parameters list ***/)))
    print_r($kPMGServiceCalculate->getResult());
else
    print_r($kPMGServiceCalculate->getLastError());
