<?php
/**
 * File for the class which returns the class map definition
 * @package KPMG
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * Class which returns the class map definition by the static method KPMGClassMap::classMap()
 * @package KPMG
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AddressType' => 'KPMGStructAddressType',
  'AmountType' => 'KPMGStructAmountType',
  'AuthorityAttributeType' => 'KPMGStructAuthorityAttributeType',
  'CertificateLocationType' => 'KPMGStructCertificateLocationType',
  'CommonAddressType' => 'KPMGStructCommonAddressType',
  'ConvertedCurrencyAmountType' => 'KPMGStructConvertedCurrencyAmountType',
  'CurrencyConversionStepType' => 'KPMGStructCurrencyConversionStepType',
  'CurrencyConversionType' => 'KPMGStructCurrencyConversionType',
  'EmptyStringType' => 'KPMGEnumEmptyStringType',
  'EstablishmentsLocationType' => 'KPMGStructEstablishmentsLocationType',
  'EstablishmentsType' => 'KPMGStructEstablishmentsType',
  'FeeType' => 'KPMGStructFeeType',
  'FlagAddressType' => 'KPMGStructFlagAddressType',
  'HostRequestInfoType' => 'KPMGStructHostRequestInfoType',
  'InclusiveTaxIndicatorsType' => 'KPMGStructInclusiveTaxIndicatorsType',
  'IndataInvoiceType' => 'KPMGStructIndataInvoiceType',
  'IndataLicensesDetailType' => 'KPMGStructIndataLicensesDetailType',
  'IndataLicensesType' => 'KPMGStructIndataLicensesType',
  'IndataLineType' => 'KPMGStructIndataLineType',
  'IndataType' => 'KPMGStructIndataType',
  'LocationNameType' => 'KPMGStructLocationNameType',
  'MessageType' => 'KPMGStructMessageType',
  'OutdataAdvisoriesType' => 'KPMGStructOutdataAdvisoriesType',
  'OutdataErrorType' => 'KPMGStructOutdataErrorType',
  'OutdataInvoiceType' => 'KPMGStructOutdataInvoiceType',
  'OutdataLicenseType' => 'KPMGStructOutdataLicenseType',
  'OutdataLicensesType' => 'KPMGStructOutdataLicensesType',
  'OutdataLineType' => 'KPMGStructOutdataLineType',
  'OutdataRequestStatusType' => 'KPMGStructOutdataRequestStatusType',
  'OutdataTaxSummaryType' => 'KPMGStructOutdataTaxSummaryType',
  'OutdataTaxType' => 'KPMGStructOutdataTaxType',
  'OutdataType' => 'KPMGStructOutdataType',
  'QuantitiesType' => 'KPMGStructQuantitiesType',
  'QuantityType' => 'KPMGStructQuantityType',
  'RegistrationsType' => 'KPMGStructRegistrationsType',
  'TaxCalculationFault' => 'KPMGStructTaxCalculationFault',
  'TaxCalculationRequest' => 'KPMGStructTaxCalculationRequest',
  'TaxCalculationResponse' => 'KPMGStructTaxCalculationResponse',
  'UomConversionType' => 'KPMGStructUomConversionType',
  'UserElementType' => 'KPMGStructUserElementType',
  'VersionType' => 'KPMGEnumVersionType',
  'ZoneAddressType' => 'KPMGStructZoneAddressType',
);
    }
}
