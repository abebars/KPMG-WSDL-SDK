<?php
/**
 * File for class KPMGStructOutdataTaxType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataTaxType originally named OutdataTaxType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataTaxType extends KPMGWsdlClass
{
    /**
     * The ADDRESS_TYPE
     * Meta informations extracted from the WSDL
     * - documentation : Indicates the address type (for example, 'SHIP_FROM', 'BILL_TO') which resulted in this tax.Values returned in this field include: * SF (SHIP_FROM) * ST (SHIP_TO) * OO (ORDER_ORIGIN) * OA (ORDER_ACCEPTANCE) * BT (BILL_TO) * SU (SUPPLY) * MM (MIDDLEMAN) * SC (SELLER_PRIMARY) * BC (BUYER_PRIMARY)
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $ADDRESS_TYPE;
    /**
     * The ADMIN_ZONE_LEVEL
     * Meta informations extracted from the WSDL
     * - documentation : The zone level in which the tax is actually administered. For example, many US states administer both state and county taxes.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $ADMIN_ZONE_LEVEL;
    /**
     * The AUTHORITY_NAME
     * Meta informations extracted from the WSDL
     * - documentation : The name of the current authority for which data is being returned.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $AUTHORITY_NAME;
    /**
     * The AUTHORITY_TYPE
     * Meta informations extracted from the WSDL
     * - documentation : The type of authority. Returned value is one of: * City Rental, City Sales/Use, County Rental, County Sales/Use, District Rental, District Sales/Use, EXC, State Rental, State Sales/Use (US) * CST, DPH, EXC, GCT, GIT, GST, HST, ICMS, IGIC, IGV, IMI, IPI, IPSI, ISS, IST, ISV, ITBIS, ITBM, IVA, KDV, MOT, MVA, MWST, PIS, PST, PVM, QST, ST, TVA, VAT (INTL).
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $AUTHORITY_TYPE;
    /**
     * The BASIS_PERCENT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A percentage of the gross amount of the line used in tax calculation. .5 is equal to 50%, .6 is equal to 60%, and so on.If this element is provided, it overrides any data found on a tax rule or exemption certificate applied to this transaction.
     * @var NillableDecimalType
     */
    public $BASIS_PERCENT;
    /**
     * The CALCULATION_METHOD
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Text identifying the behavior of the calculation algorithm. From the property on the rule applied for this tax.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $CALCULATION_METHOD;
    /**
     * The COMMENT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The optional comment from the rule which was applied for this tax.
     * - maxLength : 2000
     * - minLength : 0
     * @var string
     */
    public $COMMENT;
    /**
     * The ERP_TAX_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A default tax code to be used by the ERP system if the rule does not return an Oracle tax code.
     * - maxLength : 200
     * - minLength : 0
     * @var string
     */
    public $ERP_TAX_CODE;
    /**
     * The AUTHORITY_FIPS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The FIPS Code associated with a US authority.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $AUTHORITY_FIPS;
    /**
     * The EFFECTIVE_ZONE_LEVEL
     * Meta informations extracted from the WSDL
     * - documentation : The zone level in which the tax logically applies. If a US state administers both state and county taxes, the effective tax level defines who the tax is being collected for regardless of who is administering it.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $EFFECTIVE_ZONE_LEVEL;
    /**
     * The EXEMPT_CERTIFICATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The exempt certificate number applied to this tax result.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $EXEMPT_CERTIFICATE;
    /**
     * The EXEMPT_CERTIFICATE_EXPIRE_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The expiration date of the exemption certificate applied to this tax result.
     * @var YyyyMmDdDateType
     */
    public $EXEMPT_CERTIFICATE_EXPIRE_DATE;
    /**
     * The EXEMPT_REASON
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The exempt reason code that was used to select the tax rule resulting in this tax.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $EXEMPT_REASON;
    /**
     * The INPUT_RECOVERY_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Overrides any Input Recovery Amount specified by the transaction's rule.
     * @var NillableDecimalType
     */
    public $INPUT_RECOVERY_AMOUNT;
    /**
     * The INPUT_RECOVERY_PERCENT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Overrides the Input Recovery Percentage specified by the transaction's rule.
     * @var NillableDecimalType
     */
    public $INPUT_RECOVERY_PERCENT;
    /**
     * The INVOICE_DESCRIPTION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A text description of the tax which you may choose to print on customer invoices. This value comes from the Authority or Rule used to generate the tax.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $INVOICE_DESCRIPTION;
    /**
     * The JURISDICTION_TEXT
     * Meta informations extracted from the WSDL
     * - documentation : The text returned by this authority's jurisdiction determination logic. This may be text explaining why the authority was selected to tax this address or it may be a situation-specific warning message related to the tax scenario such as "May require proof of export".
     * - maxLength : 2000
     * - minLength : 0
     * @var string
     */
    public $JURISDICTION_TEXT;
    /**
     * The IS_EXEMPT
     * Meta informations extracted from the WSDL
     * - documentation : Indicates that this line was exempt from tax. Exemption is different from zero tax as in VAT countries exemption completely excludes the transaction from the VAT system. In the case of a sale, VAT paid to make the supply cannot be recovered if the supply is exempt. In Sales Tax countries such as the US, the exempt indicator prevents tax from being charged. If (N)o is explicitly passed the exemption certificate lookup is bypassed; tax will be charged even though an apparently valid certificate may exist in ONESOURCE Indirect Tax Determination.
     * - minOccurs : 0
     * @var boolean
     */
    public $IS_EXEMPT;
    /**
     * The IS_INTRASTAT_REPORTED
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether this transaction applies for Intrastat reporting. Based on Jurisdiction logic.
     * - maxLength : 20
     * - minLength : 0
     * @var string
     */
    public $IS_INTRASTAT_REPORTED;
    /**
     * The IS_NOTAX
     * Meta informations extracted from the WSDL
     * - documentation : Indicates whether this authority was told not to tax this line.
     * - minOccurs : 0
     * @var boolean
     */
    public $IS_NOTAX;
    /**
     * The IS_TRIANGULATION
     * Meta informations extracted from the WSDL
     * - documentation : Indicates whether triangulation simplification was used on this transaction. If the tag is not generated, simplification was not used.For more information, see Triangulation Simplification.
     * - minOccurs : 0
     * @var boolean
     */
    public $IS_TRIANGULATION;
    /**
     * The IS_VAT_REPORTED
     * Meta informations extracted from the WSDL
     * - documentation : Indicates whether this transaction applies for VAT reporting. Based on Jurisdiction logic.
     * - minOccurs : 0
     * @var boolean
     */
    public $IS_VAT_REPORTED;
    /**
     * The IS_VIES_REPORTED
     * Meta informations extracted from the WSDL
     * - documentation : Indicates whether this transaction applies for VIES reporting. Based on Jurisdiction logic.
     * - minOccurs : 0
     * @var boolean
     */
    public $IS_VIES_REPORTED;
    /**
     * The LOCATION_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Authority location code, from the Authorities Edit page.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $LOCATION_CODE;
    /**
     * The MESSAGE
     * Meta informations extracted from the WSDL
     * - documentation : A message related to this tax amount. There can be multiple MESSAGE elements returned with each tax amount.
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructMessageType
     */
    public $MESSAGE;
    /**
     * The BUYER_REGISTRATION
     * Meta informations extracted from the WSDL
     * - documentation : Buyer registration number used by this tax calculation. Derived from registration found in input or from value in database.
     * - minOccurs : 0
     * - documentation : Type used for buyer, seller, and middleman registration numbers.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $BUYER_REGISTRATION;
    /**
     * The SELLER_REGISTRATION
     * Meta informations extracted from the WSDL
     * - documentation : Seller registration number used by this tax calculation. Derived from registration found in input or from value in database.
     * - minOccurs : 0
     * - documentation : Type used for buyer, seller, and middleman registration numbers.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $SELLER_REGISTRATION;
    /**
     * The MIDDLEMAN_REGISTRATION
     * Meta informations extracted from the WSDL
     * - documentation : Middleman registration number used by this tax calculation. Derived from registration found in input or from value in database.
     * - minOccurs : 0
     * - documentation : Type used for buyer, seller, and middleman registration numbers.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $MIDDLEMAN_REGISTRATION;
    /**
     * The OVERRIDE_AMOUNT
     * Meta informations extracted from the WSDL
     * - documentation : Tax amount applied without calculation.
     * - minOccurs : 0
     * @var decimal
     */
    public $OVERRIDE_AMOUNT;
    /**
     * The OVERRIDE_RATE
     * Meta informations extracted from the WSDL
     * - documentation : Tax rate applied regardless of rule rate for this authority.
     * - minOccurs : 0
     * @var decimal
     */
    public $OVERRIDE_RATE;
    /**
     * The REVISED_GROSS_AMOUNT
     * Meta informations extracted from the WSDL
     * - documentation : The revised amount used by certain tax authorities, primarily in Brazil. These authorities revise the gross amount as part of the process of tax calculation and base the tax on this amount.
     * - minOccurs : 0
     * @var decimal
     */
    public $REVISED_GROSS_AMOUNT;
    /**
     * The RULE_ORDER
     * Meta informations extracted from the WSDL
     * - documentation : The order of the rule applied to calculate this tax.
     * - minOccurs : 0
     * @var decimal
     */
    public $RULE_ORDER;
    /**
     * The SUPPLY_EXEMPT_PERCENT
     * Meta informations extracted from the WSDL
     * - documentation : A pass-through element which has been deprecated in favor of enhanced VAT calculation logic.See INPUT_RECOVERY_AMOUNT/PERCENT and Managing VAT Recoverability and Working with Rules for more information.
     * - minOccurs : 0
     * @var decimal
     */
    public $SUPPLY_EXEMPT_PERCENT;
    /**
     * The TAXABLE_COUNTRY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Country code from address that triggered this tax.
     * - maxLength : 3
     * - minLength : 0
     * @var string
     */
    public $TAXABLE_COUNTRY;
    /**
     * The TAXABLE_COUNTRY_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Country name from the address that triggered this tax.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $TAXABLE_COUNTRY_NAME;
    /**
     * The TAXABLE_PROVINCE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Province from the address that triggered this tax.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $TAXABLE_PROVINCE;
    /**
     * The TAXABLE_STATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : State from the address that triggered this tax.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $TAXABLE_STATE;
    /**
     * The TAXABLE_COUNTY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : County from the address that triggered this tax.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $TAXABLE_COUNTY;
    /**
     * The TAXABLE_CITY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : City from the address that triggered this tax.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $TAXABLE_CITY;
    /**
     * The TAXABLE_DISTRICT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : District from the address that triggered this tax.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $TAXABLE_DISTRICT;
    /**
     * The TAXABLE_GEOCODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Geocode from the address that triggered this tax.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $TAXABLE_GEOCODE;
    /**
     * The TAXABLE_POSTCODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Postcode from the address that triggered this tax.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $TAXABLE_POSTCODE;
    /**
     * The TAX_DIRECTION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The tax direction specifies Input/Output values for VAT recovery identification.
     * - maxLength : 1
     * - minLength : 0
     * @var string
     */
    public $TAX_DIRECTION;
    /**
     * The TAX_RATE_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The tax rate code associated with the applied rate.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $TAX_RATE_CODE;
    /**
     * The TAX_TYPE
     * Meta informations extracted from the WSDL
     * - documentation : An override tax type determined when the Jurisdiction Location is determined. Use only to override the automatic tax type for a transaction:AC - AcquisitionCA - Custom Authority(see Note 1 below)CA1 - Custom Authority 1(see Note 1 below)CU - Consumer UseDS - Distance SaleEC - European Community SalesER -Intra EU Reverse ChargeES - Exported ServiceEXC - ExciseIC - Intra-CompanyIM - ImportIR - International Reverse Charge (supplier outside the EU)IS - Imported ServicesMVT - MovementNL - Not LiableRC - Reverse Charge or Rental Consumer's UseRS - Rental SalesRU - Rental UseS - StandardSA - SalesSI - Standard InterstateSN - Special Rate(see Note 2 below)STK - StockTE - Taxable ExportTR - TriangulationUN - Unregistered SellerUS - UseVG - VAT GroupZC - Zero-ratedIntra-Community Dispatches within the European Union (EU)ZE - Zero-rated Exports leaving the EU, or Zero-rated Exports from non-EU countriesZR - Zero-rated Item (rule specifies rate of zero)
     * - maxLength : 3
     * - minLength : 0
     * @var string
     */
    public $TAX_TYPE;
    /**
     * The VAT_GROUP_REGISTRATION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The value of the VAT Group registration number for the invoice. Used as the primary way of looking up VAT Registration Groups during calculation.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $VAT_GROUP_REGISTRATION;
    /**
     * The ZONE_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The name of the zone for which authority level information is being supplied.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $ZONE_NAME;
    /**
     * The ZONE_LEVEL
     * Meta informations extracted from the WSDL
     * - documentation : The zone level of the zone where this tax applies.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $ZONE_LEVEL;
    /**
     * The FISCAL_REP_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The name of the fiscal representative associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $FISCAL_REP_NAME;
    /**
     * The FISCAL_REP_ADDRESS1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The first address line of the fiscal representative associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $FISCAL_REP_ADDRESS1;
    /**
     * The FISCAL_REP_ADDRESS2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The second address line of the fiscal representative associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $FISCAL_REP_ADDRESS2;
    /**
     * The FISCAL_REP_CONTACT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The contact name of the fiscal representative associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $FISCAL_REP_CONTACT;
    /**
     * The REGISTRATION_ATTRIBUTE_1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_1;
    /**
     * The REGISTRATION_ATTRIBUTE_2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_2;
    /**
     * The REGISTRATION_ATTRIBUTE_3
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_3;
    /**
     * The REGISTRATION_ATTRIBUTE_4
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_4;
    /**
     * The REGISTRATION_ATTRIBUTE_5
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_5;
    /**
     * The REGISTRATION_ATTRIBUTE_6
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_6;
    /**
     * The REGISTRATION_ATTRIBUTE_7
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_7;
    /**
     * The REGISTRATION_ATTRIBUTE_8
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_8;
    /**
     * The REGISTRATION_ATTRIBUTE_9
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_9;
    /**
     * The REGISTRATION_ATTRIBUTE_10
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_10;
    /**
     * The REGISTRATION_ATTRIBUTE_11
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_11;
    /**
     * The REGISTRATION_ATTRIBUTE_12
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_12;
    /**
     * The REGISTRATION_ATTRIBUTE_13
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_13;
    /**
     * The REGISTRATION_ATTRIBUTE_14
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_14;
    /**
     * The REGISTRATION_ATTRIBUTE_15
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_15;
    /**
     * The REGISTRATION_ATTRIBUTE_16
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_16;
    /**
     * The REGISTRATION_ATTRIBUTE_17
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_17;
    /**
     * The REGISTRATION_ATTRIBUTE_18
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_18;
    /**
     * The REGISTRATION_ATTRIBUTE_19
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_19;
    /**
     * The REGISTRATION_ATTRIBUTE_20
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_20;
    /**
     * The REGISTRATION_ATTRIBUTE_21
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_21;
    /**
     * The REGISTRATION_ATTRIBUTE_22
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_22;
    /**
     * The REGISTRATION_ATTRIBUTE_23
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_23;
    /**
     * The REGISTRATION_ATTRIBUTE_24
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_24;
    /**
     * The REGISTRATION_ATTRIBUTE_25
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_25;
    /**
     * The REGISTRATION_ATTRIBUTE_26
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_26;
    /**
     * The REGISTRATION_ATTRIBUTE_27
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_27;
    /**
     * The REGISTRATION_ATTRIBUTE_28
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_28;
    /**
     * The REGISTRATION_ATTRIBUTE_29
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_29;
    /**
     * The REGISTRATION_ATTRIBUTE_30
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_30;
    /**
     * The REGISTRATION_ATTRIBUTE_31
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_31;
    /**
     * The REGISTRATION_ATTRIBUTE_32
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_32;
    /**
     * The REGISTRATION_ATTRIBUTE_33
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_33;
    /**
     * The REGISTRATION_ATTRIBUTE_34
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_34;
    /**
     * The REGISTRATION_ATTRIBUTE_35
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_35;
    /**
     * The REGISTRATION_ATTRIBUTE_36
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_36;
    /**
     * The REGISTRATION_ATTRIBUTE_37
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_37;
    /**
     * The REGISTRATION_ATTRIBUTE_38
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_38;
    /**
     * The REGISTRATION_ATTRIBUTE_39
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_39;
    /**
     * The REGISTRATION_ATTRIBUTE_40
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_40;
    /**
     * The REGISTRATION_ATTRIBUTE_41
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_41;
    /**
     * The REGISTRATION_ATTRIBUTE_42
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_42;
    /**
     * The REGISTRATION_ATTRIBUTE_43
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_43;
    /**
     * The REGISTRATION_ATTRIBUTE_44
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_44;
    /**
     * The REGISTRATION_ATTRIBUTE_45
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_45;
    /**
     * The REGISTRATION_ATTRIBUTE_46
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_46;
    /**
     * The REGISTRATION_ATTRIBUTE_47
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_47;
    /**
     * The REGISTRATION_ATTRIBUTE_48
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_48;
    /**
     * The REGISTRATION_ATTRIBUTE_49
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_49;
    /**
     * The REGISTRATION_ATTRIBUTE_50
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Custom attributes associated with the registration number for the company running the transaction. For example: If the role is S this data is associated with the SELLER_REGISTRATION.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGISTRATION_ATTRIBUTE_50;
    /**
     * The AUTHORITY_ATTRIBUTE
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructAuthorityAttributeType
     */
    public $AUTHORITY_ATTRIBUTE;
    /**
     * The TAX_RATE
     * Meta informations extracted from the WSDL
     * - documentation : The rate of taxation for the authority.
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $TAX_RATE;
    /**
     * The UOM_CONVERSION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructUomConversionType
     */
    public $UOM_CONVERSION;
    /**
     * The NATURE_OF_TAX
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether the value stored in <TAX_AMOUNT> represents a (P)ercentage, (F)ee, or is (E)xempt (no tax).
     * - maxLength : 1
     * - minLength : 0
     * @var string
     */
    public $NATURE_OF_TAX;
    /**
     * The EU_TRANSACTION
     * Meta informations extracted from the WSDL
     * - documentation : Indicates whether this tax result was generated by an EU authority or not.
     * - minOccurs : 0
     * @var boolean
     */
    public $EU_TRANSACTION;
    /**
     * The AUTHORITY_CATEGORY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The category of the current authority for which data is being returned. From the Authorities Edit page.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $AUTHORITY_CATEGORY;
    /**
     * The AUTHORITY_OFFICIAL_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The official name of the current authority for which data is being returned, if it differs from the Determination-provided authority name.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $AUTHORITY_OFFICIAL_NAME;
    /**
     * The AUTHORITY_TYPE_ALIAS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This is an alternative name for an authority type name that can be set in TransEditors.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $AUTHORITY_TYPE_ALIAS;
    /**
     * The AUTHORITY_UUID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Unique identifier of the current authority being returned. Determined by Determination default data.
     * - maxLength : 36
     * - minLength : 0
     * @var string
     */
    public $AUTHORITY_UUID;
    /**
     * The RELATED_LINE_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Identifies that this line should have the same tax treatment as the product on the related line. See Related Charges for more information.
     * @var decimal
     */
    public $RELATED_LINE_NUMBER;
    /**
     * The RELATED_ALLOCATION_LINE_NUMBER
     * Meta informations extracted from the WSDL
     * - documentation : The related allocation line number based on the related line number.
     * - minOccurs : 0
     * @var decimal
     */
    public $RELATED_ALLOCATION_LINE_NUMBER;
    /**
     * The RULE_REPORTING_CATEGORY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The reporting category of the rule applied to calculate this tax, as maintained on the Rules Edit page.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $RULE_REPORTING_CATEGORY;
    /**
     * The TAX_TREATMENT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The flag that indicates alternative tax treatment after Determination performs its calculation:D (Deferred).DI (Deferred Invoice).DP (Deferred Payment).For more information, see the Deferred Taxes in Help.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $TAX_TREATMENT;
    /**
     * The AUTHORITY_CURRENCY_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The currency code used by the authority.
     * - maxLength : 3
     * - minLength : 0
     * @var string
     */
    public $AUTHORITY_CURRENCY_CODE;
    /**
     * The CURRENCY_CONVERSION
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructCurrencyConversionType
     */
    public $CURRENCY_CONVERSION;
    /**
     * The EXEMPT_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructConvertedCurrencyAmountType
     */
    public $EXEMPT_AMOUNT;
    /**
     * The GROSS_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructConvertedCurrencyAmountType
     */
    public $GROSS_AMOUNT;
    /**
     * The NON_TAXABLE_BASIS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructConvertedCurrencyAmountType
     */
    public $NON_TAXABLE_BASIS;
    /**
     * The TAXABLE_BASIS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructConvertedCurrencyAmountType
     */
    public $TAXABLE_BASIS;
    /**
     * The TAX_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructConvertedCurrencyAmountType
     */
    public $TAX_AMOUNT;
    /**
     * The FEE
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructFeeType
     */
    public $FEE;
    /**
     * The TAX_DETERMINATION_DATE
     * Meta informations extracted from the WSDL
     * - documentation : The date used in selecting all applicable system configuration including tax rates and rules. Overrides any Sabrix-determined date.
     * @var YyyyMmDdDateType
     */
    public $TAX_DETERMINATION_DATE;
    /**
     * The TAX_POINT_DATE
     * Meta informations extracted from the WSDL
     * - documentation : The date the signifies when the liability for tax arises. Overrides any Sabrix-determined date.
     * @var YyyyMmDdDateType
     */
    public $TAX_POINT_DATE;
    /**
     * The INCLUSIVE_TAX
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : "Y" indicates that this tax is an inclusive tax (included in the gross amount).
     * - maxLength : 1
     * - minLength : 0
     * @var string
     */
    public $INCLUSIVE_TAX;
    /**
     * The LICENSES
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructOutdataLicensesType
     */
    public $LICENSES;
    /**
     * Constructor method for OutdataTaxType
     * @see parent::__construct()
     * @param string $_aDDRESS_TYPE
     * @param string $_aDMIN_ZONE_LEVEL
     * @param string $_aUTHORITY_NAME
     * @param string $_aUTHORITY_TYPE
     * @param NillableDecimalType $_bASIS_PERCENT
     * @param string $_cALCULATION_METHOD
     * @param string $_cOMMENT
     * @param string $_eRP_TAX_CODE
     * @param string $_aUTHORITY_FIPS
     * @param string $_eFFECTIVE_ZONE_LEVEL
     * @param string $_eXEMPT_CERTIFICATE
     * @param YyyyMmDdDateType $_eXEMPT_CERTIFICATE_EXPIRE_DATE
     * @param string $_eXEMPT_REASON
     * @param NillableDecimalType $_iNPUT_RECOVERY_AMOUNT
     * @param NillableDecimalType $_iNPUT_RECOVERY_PERCENT
     * @param string $_iNVOICE_DESCRIPTION
     * @param string $_jURISDICTION_TEXT
     * @param boolean $_iS_EXEMPT
     * @param string $_iS_INTRASTAT_REPORTED
     * @param boolean $_iS_NOTAX
     * @param boolean $_iS_TRIANGULATION
     * @param boolean $_iS_VAT_REPORTED
     * @param boolean $_iS_VIES_REPORTED
     * @param string $_lOCATION_CODE
     * @param KPMGStructMessageType $_mESSAGE
     * @param string $_bUYER_REGISTRATION
     * @param string $_sELLER_REGISTRATION
     * @param string $_mIDDLEMAN_REGISTRATION
     * @param decimal $_oVERRIDE_AMOUNT
     * @param decimal $_oVERRIDE_RATE
     * @param decimal $_rEVISED_GROSS_AMOUNT
     * @param decimal $_rULE_ORDER
     * @param decimal $_sUPPLY_EXEMPT_PERCENT
     * @param string $_tAXABLE_COUNTRY
     * @param string $_tAXABLE_COUNTRY_NAME
     * @param string $_tAXABLE_PROVINCE
     * @param string $_tAXABLE_STATE
     * @param string $_tAXABLE_COUNTY
     * @param string $_tAXABLE_CITY
     * @param string $_tAXABLE_DISTRICT
     * @param string $_tAXABLE_GEOCODE
     * @param string $_tAXABLE_POSTCODE
     * @param string $_tAX_DIRECTION
     * @param string $_tAX_RATE_CODE
     * @param string $_tAX_TYPE
     * @param string $_vAT_GROUP_REGISTRATION
     * @param string $_zONE_NAME
     * @param string $_zONE_LEVEL
     * @param string $_fISCAL_REP_NAME
     * @param string $_fISCAL_REP_ADDRESS1
     * @param string $_fISCAL_REP_ADDRESS2
     * @param string $_fISCAL_REP_CONTACT
     * @param string $_rEGISTRATION_ATTRIBUTE_1
     * @param string $_rEGISTRATION_ATTRIBUTE_2
     * @param string $_rEGISTRATION_ATTRIBUTE_3
     * @param string $_rEGISTRATION_ATTRIBUTE_4
     * @param string $_rEGISTRATION_ATTRIBUTE_5
     * @param string $_rEGISTRATION_ATTRIBUTE_6
     * @param string $_rEGISTRATION_ATTRIBUTE_7
     * @param string $_rEGISTRATION_ATTRIBUTE_8
     * @param string $_rEGISTRATION_ATTRIBUTE_9
     * @param string $_rEGISTRATION_ATTRIBUTE_10
     * @param string $_rEGISTRATION_ATTRIBUTE_11
     * @param string $_rEGISTRATION_ATTRIBUTE_12
     * @param string $_rEGISTRATION_ATTRIBUTE_13
     * @param string $_rEGISTRATION_ATTRIBUTE_14
     * @param string $_rEGISTRATION_ATTRIBUTE_15
     * @param string $_rEGISTRATION_ATTRIBUTE_16
     * @param string $_rEGISTRATION_ATTRIBUTE_17
     * @param string $_rEGISTRATION_ATTRIBUTE_18
     * @param string $_rEGISTRATION_ATTRIBUTE_19
     * @param string $_rEGISTRATION_ATTRIBUTE_20
     * @param string $_rEGISTRATION_ATTRIBUTE_21
     * @param string $_rEGISTRATION_ATTRIBUTE_22
     * @param string $_rEGISTRATION_ATTRIBUTE_23
     * @param string $_rEGISTRATION_ATTRIBUTE_24
     * @param string $_rEGISTRATION_ATTRIBUTE_25
     * @param string $_rEGISTRATION_ATTRIBUTE_26
     * @param string $_rEGISTRATION_ATTRIBUTE_27
     * @param string $_rEGISTRATION_ATTRIBUTE_28
     * @param string $_rEGISTRATION_ATTRIBUTE_29
     * @param string $_rEGISTRATION_ATTRIBUTE_30
     * @param string $_rEGISTRATION_ATTRIBUTE_31
     * @param string $_rEGISTRATION_ATTRIBUTE_32
     * @param string $_rEGISTRATION_ATTRIBUTE_33
     * @param string $_rEGISTRATION_ATTRIBUTE_34
     * @param string $_rEGISTRATION_ATTRIBUTE_35
     * @param string $_rEGISTRATION_ATTRIBUTE_36
     * @param string $_rEGISTRATION_ATTRIBUTE_37
     * @param string $_rEGISTRATION_ATTRIBUTE_38
     * @param string $_rEGISTRATION_ATTRIBUTE_39
     * @param string $_rEGISTRATION_ATTRIBUTE_40
     * @param string $_rEGISTRATION_ATTRIBUTE_41
     * @param string $_rEGISTRATION_ATTRIBUTE_42
     * @param string $_rEGISTRATION_ATTRIBUTE_43
     * @param string $_rEGISTRATION_ATTRIBUTE_44
     * @param string $_rEGISTRATION_ATTRIBUTE_45
     * @param string $_rEGISTRATION_ATTRIBUTE_46
     * @param string $_rEGISTRATION_ATTRIBUTE_47
     * @param string $_rEGISTRATION_ATTRIBUTE_48
     * @param string $_rEGISTRATION_ATTRIBUTE_49
     * @param string $_rEGISTRATION_ATTRIBUTE_50
     * @param KPMGStructAuthorityAttributeType $_aUTHORITY_ATTRIBUTE
     * @param decimal,EmptyStringType $_tAX_RATE
     * @param KPMGStructUomConversionType $_uOM_CONVERSION
     * @param string $_nATURE_OF_TAX
     * @param boolean $_eU_TRANSACTION
     * @param string $_aUTHORITY_CATEGORY
     * @param string $_aUTHORITY_OFFICIAL_NAME
     * @param string $_aUTHORITY_TYPE_ALIAS
     * @param string $_aUTHORITY_UUID
     * @param decimal $_rELATED_LINE_NUMBER
     * @param decimal $_rELATED_ALLOCATION_LINE_NUMBER
     * @param string $_rULE_REPORTING_CATEGORY
     * @param string $_tAX_TREATMENT
     * @param string $_aUTHORITY_CURRENCY_CODE
     * @param KPMGStructCurrencyConversionType $_cURRENCY_CONVERSION
     * @param KPMGStructConvertedCurrencyAmountType $_eXEMPT_AMOUNT
     * @param KPMGStructConvertedCurrencyAmountType $_gROSS_AMOUNT
     * @param KPMGStructConvertedCurrencyAmountType $_nON_TAXABLE_BASIS
     * @param KPMGStructConvertedCurrencyAmountType $_tAXABLE_BASIS
     * @param KPMGStructConvertedCurrencyAmountType $_tAX_AMOUNT
     * @param KPMGStructFeeType $_fEE
     * @param YyyyMmDdDateType $_tAX_DETERMINATION_DATE
     * @param YyyyMmDdDateType $_tAX_POINT_DATE
     * @param string $_iNCLUSIVE_TAX
     * @param KPMGStructOutdataLicensesType $_lICENSES
     * @return KPMGStructOutdataTaxType
     */
    public function __construct($_aDDRESS_TYPE = NULL,$_aDMIN_ZONE_LEVEL = NULL,$_aUTHORITY_NAME = NULL,$_aUTHORITY_TYPE = NULL,$_bASIS_PERCENT = NULL,$_cALCULATION_METHOD = NULL,$_cOMMENT = NULL,$_eRP_TAX_CODE = NULL,$_aUTHORITY_FIPS = NULL,$_eFFECTIVE_ZONE_LEVEL = NULL,$_eXEMPT_CERTIFICATE = NULL,$_eXEMPT_CERTIFICATE_EXPIRE_DATE = NULL,$_eXEMPT_REASON = NULL,$_iNPUT_RECOVERY_AMOUNT = NULL,$_iNPUT_RECOVERY_PERCENT = NULL,$_iNVOICE_DESCRIPTION = NULL,$_jURISDICTION_TEXT = NULL,$_iS_EXEMPT = NULL,$_iS_INTRASTAT_REPORTED = NULL,$_iS_NOTAX = NULL,$_iS_TRIANGULATION = NULL,$_iS_VAT_REPORTED = NULL,$_iS_VIES_REPORTED = NULL,$_lOCATION_CODE = NULL,$_mESSAGE = NULL,$_bUYER_REGISTRATION = NULL,$_sELLER_REGISTRATION = NULL,$_mIDDLEMAN_REGISTRATION = NULL,$_oVERRIDE_AMOUNT = NULL,$_oVERRIDE_RATE = NULL,$_rEVISED_GROSS_AMOUNT = NULL,$_rULE_ORDER = NULL,$_sUPPLY_EXEMPT_PERCENT = NULL,$_tAXABLE_COUNTRY = NULL,$_tAXABLE_COUNTRY_NAME = NULL,$_tAXABLE_PROVINCE = NULL,$_tAXABLE_STATE = NULL,$_tAXABLE_COUNTY = NULL,$_tAXABLE_CITY = NULL,$_tAXABLE_DISTRICT = NULL,$_tAXABLE_GEOCODE = NULL,$_tAXABLE_POSTCODE = NULL,$_tAX_DIRECTION = NULL,$_tAX_RATE_CODE = NULL,$_tAX_TYPE = NULL,$_vAT_GROUP_REGISTRATION = NULL,$_zONE_NAME = NULL,$_zONE_LEVEL = NULL,$_fISCAL_REP_NAME = NULL,$_fISCAL_REP_ADDRESS1 = NULL,$_fISCAL_REP_ADDRESS2 = NULL,$_fISCAL_REP_CONTACT = NULL,$_rEGISTRATION_ATTRIBUTE_1 = NULL,$_rEGISTRATION_ATTRIBUTE_2 = NULL,$_rEGISTRATION_ATTRIBUTE_3 = NULL,$_rEGISTRATION_ATTRIBUTE_4 = NULL,$_rEGISTRATION_ATTRIBUTE_5 = NULL,$_rEGISTRATION_ATTRIBUTE_6 = NULL,$_rEGISTRATION_ATTRIBUTE_7 = NULL,$_rEGISTRATION_ATTRIBUTE_8 = NULL,$_rEGISTRATION_ATTRIBUTE_9 = NULL,$_rEGISTRATION_ATTRIBUTE_10 = NULL,$_rEGISTRATION_ATTRIBUTE_11 = NULL,$_rEGISTRATION_ATTRIBUTE_12 = NULL,$_rEGISTRATION_ATTRIBUTE_13 = NULL,$_rEGISTRATION_ATTRIBUTE_14 = NULL,$_rEGISTRATION_ATTRIBUTE_15 = NULL,$_rEGISTRATION_ATTRIBUTE_16 = NULL,$_rEGISTRATION_ATTRIBUTE_17 = NULL,$_rEGISTRATION_ATTRIBUTE_18 = NULL,$_rEGISTRATION_ATTRIBUTE_19 = NULL,$_rEGISTRATION_ATTRIBUTE_20 = NULL,$_rEGISTRATION_ATTRIBUTE_21 = NULL,$_rEGISTRATION_ATTRIBUTE_22 = NULL,$_rEGISTRATION_ATTRIBUTE_23 = NULL,$_rEGISTRATION_ATTRIBUTE_24 = NULL,$_rEGISTRATION_ATTRIBUTE_25 = NULL,$_rEGISTRATION_ATTRIBUTE_26 = NULL,$_rEGISTRATION_ATTRIBUTE_27 = NULL,$_rEGISTRATION_ATTRIBUTE_28 = NULL,$_rEGISTRATION_ATTRIBUTE_29 = NULL,$_rEGISTRATION_ATTRIBUTE_30 = NULL,$_rEGISTRATION_ATTRIBUTE_31 = NULL,$_rEGISTRATION_ATTRIBUTE_32 = NULL,$_rEGISTRATION_ATTRIBUTE_33 = NULL,$_rEGISTRATION_ATTRIBUTE_34 = NULL,$_rEGISTRATION_ATTRIBUTE_35 = NULL,$_rEGISTRATION_ATTRIBUTE_36 = NULL,$_rEGISTRATION_ATTRIBUTE_37 = NULL,$_rEGISTRATION_ATTRIBUTE_38 = NULL,$_rEGISTRATION_ATTRIBUTE_39 = NULL,$_rEGISTRATION_ATTRIBUTE_40 = NULL,$_rEGISTRATION_ATTRIBUTE_41 = NULL,$_rEGISTRATION_ATTRIBUTE_42 = NULL,$_rEGISTRATION_ATTRIBUTE_43 = NULL,$_rEGISTRATION_ATTRIBUTE_44 = NULL,$_rEGISTRATION_ATTRIBUTE_45 = NULL,$_rEGISTRATION_ATTRIBUTE_46 = NULL,$_rEGISTRATION_ATTRIBUTE_47 = NULL,$_rEGISTRATION_ATTRIBUTE_48 = NULL,$_rEGISTRATION_ATTRIBUTE_49 = NULL,$_rEGISTRATION_ATTRIBUTE_50 = NULL,$_aUTHORITY_ATTRIBUTE = NULL,$_tAX_RATE = NULL,$_uOM_CONVERSION = NULL,$_nATURE_OF_TAX = NULL,$_eU_TRANSACTION = NULL,$_aUTHORITY_CATEGORY = NULL,$_aUTHORITY_OFFICIAL_NAME = NULL,$_aUTHORITY_TYPE_ALIAS = NULL,$_aUTHORITY_UUID = NULL,$_rELATED_LINE_NUMBER = NULL,$_rELATED_ALLOCATION_LINE_NUMBER = NULL,$_rULE_REPORTING_CATEGORY = NULL,$_tAX_TREATMENT = NULL,$_aUTHORITY_CURRENCY_CODE = NULL,$_cURRENCY_CONVERSION = NULL,$_eXEMPT_AMOUNT = NULL,$_gROSS_AMOUNT = NULL,$_nON_TAXABLE_BASIS = NULL,$_tAXABLE_BASIS = NULL,$_tAX_AMOUNT = NULL,$_fEE = NULL,$_tAX_DETERMINATION_DATE = NULL,$_tAX_POINT_DATE = NULL,$_iNCLUSIVE_TAX = NULL,$_lICENSES = NULL)
    {
        parent::__construct(array('ADDRESS_TYPE'=>$_aDDRESS_TYPE,'ADMIN_ZONE_LEVEL'=>$_aDMIN_ZONE_LEVEL,'AUTHORITY_NAME'=>$_aUTHORITY_NAME,'AUTHORITY_TYPE'=>$_aUTHORITY_TYPE,'BASIS_PERCENT'=>$_bASIS_PERCENT,'CALCULATION_METHOD'=>$_cALCULATION_METHOD,'COMMENT'=>$_cOMMENT,'ERP_TAX_CODE'=>$_eRP_TAX_CODE,'AUTHORITY_FIPS'=>$_aUTHORITY_FIPS,'EFFECTIVE_ZONE_LEVEL'=>$_eFFECTIVE_ZONE_LEVEL,'EXEMPT_CERTIFICATE'=>$_eXEMPT_CERTIFICATE,'EXEMPT_CERTIFICATE_EXPIRE_DATE'=>$_eXEMPT_CERTIFICATE_EXPIRE_DATE,'EXEMPT_REASON'=>$_eXEMPT_REASON,'INPUT_RECOVERY_AMOUNT'=>$_iNPUT_RECOVERY_AMOUNT,'INPUT_RECOVERY_PERCENT'=>$_iNPUT_RECOVERY_PERCENT,'INVOICE_DESCRIPTION'=>$_iNVOICE_DESCRIPTION,'JURISDICTION_TEXT'=>$_jURISDICTION_TEXT,'IS_EXEMPT'=>$_iS_EXEMPT,'IS_INTRASTAT_REPORTED'=>$_iS_INTRASTAT_REPORTED,'IS_NOTAX'=>$_iS_NOTAX,'IS_TRIANGULATION'=>$_iS_TRIANGULATION,'IS_VAT_REPORTED'=>$_iS_VAT_REPORTED,'IS_VIES_REPORTED'=>$_iS_VIES_REPORTED,'LOCATION_CODE'=>$_lOCATION_CODE,'MESSAGE'=>$_mESSAGE,'BUYER_REGISTRATION'=>$_bUYER_REGISTRATION,'SELLER_REGISTRATION'=>$_sELLER_REGISTRATION,'MIDDLEMAN_REGISTRATION'=>$_mIDDLEMAN_REGISTRATION,'OVERRIDE_AMOUNT'=>$_oVERRIDE_AMOUNT,'OVERRIDE_RATE'=>$_oVERRIDE_RATE,'REVISED_GROSS_AMOUNT'=>$_rEVISED_GROSS_AMOUNT,'RULE_ORDER'=>$_rULE_ORDER,'SUPPLY_EXEMPT_PERCENT'=>$_sUPPLY_EXEMPT_PERCENT,'TAXABLE_COUNTRY'=>$_tAXABLE_COUNTRY,'TAXABLE_COUNTRY_NAME'=>$_tAXABLE_COUNTRY_NAME,'TAXABLE_PROVINCE'=>$_tAXABLE_PROVINCE,'TAXABLE_STATE'=>$_tAXABLE_STATE,'TAXABLE_COUNTY'=>$_tAXABLE_COUNTY,'TAXABLE_CITY'=>$_tAXABLE_CITY,'TAXABLE_DISTRICT'=>$_tAXABLE_DISTRICT,'TAXABLE_GEOCODE'=>$_tAXABLE_GEOCODE,'TAXABLE_POSTCODE'=>$_tAXABLE_POSTCODE,'TAX_DIRECTION'=>$_tAX_DIRECTION,'TAX_RATE_CODE'=>$_tAX_RATE_CODE,'TAX_TYPE'=>$_tAX_TYPE,'VAT_GROUP_REGISTRATION'=>$_vAT_GROUP_REGISTRATION,'ZONE_NAME'=>$_zONE_NAME,'ZONE_LEVEL'=>$_zONE_LEVEL,'FISCAL_REP_NAME'=>$_fISCAL_REP_NAME,'FISCAL_REP_ADDRESS1'=>$_fISCAL_REP_ADDRESS1,'FISCAL_REP_ADDRESS2'=>$_fISCAL_REP_ADDRESS2,'FISCAL_REP_CONTACT'=>$_fISCAL_REP_CONTACT,'REGISTRATION_ATTRIBUTE_1'=>$_rEGISTRATION_ATTRIBUTE_1,'REGISTRATION_ATTRIBUTE_2'=>$_rEGISTRATION_ATTRIBUTE_2,'REGISTRATION_ATTRIBUTE_3'=>$_rEGISTRATION_ATTRIBUTE_3,'REGISTRATION_ATTRIBUTE_4'=>$_rEGISTRATION_ATTRIBUTE_4,'REGISTRATION_ATTRIBUTE_5'=>$_rEGISTRATION_ATTRIBUTE_5,'REGISTRATION_ATTRIBUTE_6'=>$_rEGISTRATION_ATTRIBUTE_6,'REGISTRATION_ATTRIBUTE_7'=>$_rEGISTRATION_ATTRIBUTE_7,'REGISTRATION_ATTRIBUTE_8'=>$_rEGISTRATION_ATTRIBUTE_8,'REGISTRATION_ATTRIBUTE_9'=>$_rEGISTRATION_ATTRIBUTE_9,'REGISTRATION_ATTRIBUTE_10'=>$_rEGISTRATION_ATTRIBUTE_10,'REGISTRATION_ATTRIBUTE_11'=>$_rEGISTRATION_ATTRIBUTE_11,'REGISTRATION_ATTRIBUTE_12'=>$_rEGISTRATION_ATTRIBUTE_12,'REGISTRATION_ATTRIBUTE_13'=>$_rEGISTRATION_ATTRIBUTE_13,'REGISTRATION_ATTRIBUTE_14'=>$_rEGISTRATION_ATTRIBUTE_14,'REGISTRATION_ATTRIBUTE_15'=>$_rEGISTRATION_ATTRIBUTE_15,'REGISTRATION_ATTRIBUTE_16'=>$_rEGISTRATION_ATTRIBUTE_16,'REGISTRATION_ATTRIBUTE_17'=>$_rEGISTRATION_ATTRIBUTE_17,'REGISTRATION_ATTRIBUTE_18'=>$_rEGISTRATION_ATTRIBUTE_18,'REGISTRATION_ATTRIBUTE_19'=>$_rEGISTRATION_ATTRIBUTE_19,'REGISTRATION_ATTRIBUTE_20'=>$_rEGISTRATION_ATTRIBUTE_20,'REGISTRATION_ATTRIBUTE_21'=>$_rEGISTRATION_ATTRIBUTE_21,'REGISTRATION_ATTRIBUTE_22'=>$_rEGISTRATION_ATTRIBUTE_22,'REGISTRATION_ATTRIBUTE_23'=>$_rEGISTRATION_ATTRIBUTE_23,'REGISTRATION_ATTRIBUTE_24'=>$_rEGISTRATION_ATTRIBUTE_24,'REGISTRATION_ATTRIBUTE_25'=>$_rEGISTRATION_ATTRIBUTE_25,'REGISTRATION_ATTRIBUTE_26'=>$_rEGISTRATION_ATTRIBUTE_26,'REGISTRATION_ATTRIBUTE_27'=>$_rEGISTRATION_ATTRIBUTE_27,'REGISTRATION_ATTRIBUTE_28'=>$_rEGISTRATION_ATTRIBUTE_28,'REGISTRATION_ATTRIBUTE_29'=>$_rEGISTRATION_ATTRIBUTE_29,'REGISTRATION_ATTRIBUTE_30'=>$_rEGISTRATION_ATTRIBUTE_30,'REGISTRATION_ATTRIBUTE_31'=>$_rEGISTRATION_ATTRIBUTE_31,'REGISTRATION_ATTRIBUTE_32'=>$_rEGISTRATION_ATTRIBUTE_32,'REGISTRATION_ATTRIBUTE_33'=>$_rEGISTRATION_ATTRIBUTE_33,'REGISTRATION_ATTRIBUTE_34'=>$_rEGISTRATION_ATTRIBUTE_34,'REGISTRATION_ATTRIBUTE_35'=>$_rEGISTRATION_ATTRIBUTE_35,'REGISTRATION_ATTRIBUTE_36'=>$_rEGISTRATION_ATTRIBUTE_36,'REGISTRATION_ATTRIBUTE_37'=>$_rEGISTRATION_ATTRIBUTE_37,'REGISTRATION_ATTRIBUTE_38'=>$_rEGISTRATION_ATTRIBUTE_38,'REGISTRATION_ATTRIBUTE_39'=>$_rEGISTRATION_ATTRIBUTE_39,'REGISTRATION_ATTRIBUTE_40'=>$_rEGISTRATION_ATTRIBUTE_40,'REGISTRATION_ATTRIBUTE_41'=>$_rEGISTRATION_ATTRIBUTE_41,'REGISTRATION_ATTRIBUTE_42'=>$_rEGISTRATION_ATTRIBUTE_42,'REGISTRATION_ATTRIBUTE_43'=>$_rEGISTRATION_ATTRIBUTE_43,'REGISTRATION_ATTRIBUTE_44'=>$_rEGISTRATION_ATTRIBUTE_44,'REGISTRATION_ATTRIBUTE_45'=>$_rEGISTRATION_ATTRIBUTE_45,'REGISTRATION_ATTRIBUTE_46'=>$_rEGISTRATION_ATTRIBUTE_46,'REGISTRATION_ATTRIBUTE_47'=>$_rEGISTRATION_ATTRIBUTE_47,'REGISTRATION_ATTRIBUTE_48'=>$_rEGISTRATION_ATTRIBUTE_48,'REGISTRATION_ATTRIBUTE_49'=>$_rEGISTRATION_ATTRIBUTE_49,'REGISTRATION_ATTRIBUTE_50'=>$_rEGISTRATION_ATTRIBUTE_50,'AUTHORITY_ATTRIBUTE'=>$_aUTHORITY_ATTRIBUTE,'TAX_RATE'=>$_tAX_RATE,'UOM_CONVERSION'=>$_uOM_CONVERSION,'NATURE_OF_TAX'=>$_nATURE_OF_TAX,'EU_TRANSACTION'=>$_eU_TRANSACTION,'AUTHORITY_CATEGORY'=>$_aUTHORITY_CATEGORY,'AUTHORITY_OFFICIAL_NAME'=>$_aUTHORITY_OFFICIAL_NAME,'AUTHORITY_TYPE_ALIAS'=>$_aUTHORITY_TYPE_ALIAS,'AUTHORITY_UUID'=>$_aUTHORITY_UUID,'RELATED_LINE_NUMBER'=>$_rELATED_LINE_NUMBER,'RELATED_ALLOCATION_LINE_NUMBER'=>$_rELATED_ALLOCATION_LINE_NUMBER,'RULE_REPORTING_CATEGORY'=>$_rULE_REPORTING_CATEGORY,'TAX_TREATMENT'=>$_tAX_TREATMENT,'AUTHORITY_CURRENCY_CODE'=>$_aUTHORITY_CURRENCY_CODE,'CURRENCY_CONVERSION'=>$_cURRENCY_CONVERSION,'EXEMPT_AMOUNT'=>$_eXEMPT_AMOUNT,'GROSS_AMOUNT'=>$_gROSS_AMOUNT,'NON_TAXABLE_BASIS'=>$_nON_TAXABLE_BASIS,'TAXABLE_BASIS'=>$_tAXABLE_BASIS,'TAX_AMOUNT'=>$_tAX_AMOUNT,'FEE'=>$_fEE,'TAX_DETERMINATION_DATE'=>$_tAX_DETERMINATION_DATE,'TAX_POINT_DATE'=>$_tAX_POINT_DATE,'INCLUSIVE_TAX'=>$_iNCLUSIVE_TAX,'LICENSES'=>$_lICENSES),false);
    }
    /**
     * Get ADDRESS_TYPE value
     * @return string|null
     */
    public function getADDRESS_TYPE()
    {
        return $this->ADDRESS_TYPE;
    }
    /**
     * Set ADDRESS_TYPE value
     * @param string $_aDDRESS_TYPE the ADDRESS_TYPE
     * @return string
     */
    public function setADDRESS_TYPE($_aDDRESS_TYPE)
    {
        return ($this->ADDRESS_TYPE = $_aDDRESS_TYPE);
    }
    /**
     * Get ADMIN_ZONE_LEVEL value
     * @return string|null
     */
    public function getADMIN_ZONE_LEVEL()
    {
        return $this->ADMIN_ZONE_LEVEL;
    }
    /**
     * Set ADMIN_ZONE_LEVEL value
     * @param string $_aDMIN_ZONE_LEVEL the ADMIN_ZONE_LEVEL
     * @return string
     */
    public function setADMIN_ZONE_LEVEL($_aDMIN_ZONE_LEVEL)
    {
        return ($this->ADMIN_ZONE_LEVEL = $_aDMIN_ZONE_LEVEL);
    }
    /**
     * Get AUTHORITY_NAME value
     * @return string|null
     */
    public function getAUTHORITY_NAME()
    {
        return $this->AUTHORITY_NAME;
    }
    /**
     * Set AUTHORITY_NAME value
     * @param string $_aUTHORITY_NAME the AUTHORITY_NAME
     * @return string
     */
    public function setAUTHORITY_NAME($_aUTHORITY_NAME)
    {
        return ($this->AUTHORITY_NAME = $_aUTHORITY_NAME);
    }
    /**
     * Get AUTHORITY_TYPE value
     * @return string|null
     */
    public function getAUTHORITY_TYPE()
    {
        return $this->AUTHORITY_TYPE;
    }
    /**
     * Set AUTHORITY_TYPE value
     * @param string $_aUTHORITY_TYPE the AUTHORITY_TYPE
     * @return string
     */
    public function setAUTHORITY_TYPE($_aUTHORITY_TYPE)
    {
        return ($this->AUTHORITY_TYPE = $_aUTHORITY_TYPE);
    }
    /**
     * Get BASIS_PERCENT value
     * @return NillableDecimalType|null
     */
    public function getBASIS_PERCENT()
    {
        return $this->BASIS_PERCENT;
    }
    /**
     * Set BASIS_PERCENT value
     * @param NillableDecimalType $_bASIS_PERCENT the BASIS_PERCENT
     * @return NillableDecimalType
     */
    public function setBASIS_PERCENT($_bASIS_PERCENT)
    {
        return ($this->BASIS_PERCENT = $_bASIS_PERCENT);
    }
    /**
     * Get CALCULATION_METHOD value
     * @return string|null
     */
    public function getCALCULATION_METHOD()
    {
        return $this->CALCULATION_METHOD;
    }
    /**
     * Set CALCULATION_METHOD value
     * @param string $_cALCULATION_METHOD the CALCULATION_METHOD
     * @return string
     */
    public function setCALCULATION_METHOD($_cALCULATION_METHOD)
    {
        return ($this->CALCULATION_METHOD = $_cALCULATION_METHOD);
    }
    /**
     * Get COMMENT value
     * @return string|null
     */
    public function getCOMMENT()
    {
        return $this->COMMENT;
    }
    /**
     * Set COMMENT value
     * @param string $_cOMMENT the COMMENT
     * @return string
     */
    public function setCOMMENT($_cOMMENT)
    {
        return ($this->COMMENT = $_cOMMENT);
    }
    /**
     * Get ERP_TAX_CODE value
     * @return string|null
     */
    public function getERP_TAX_CODE()
    {
        return $this->ERP_TAX_CODE;
    }
    /**
     * Set ERP_TAX_CODE value
     * @param string $_eRP_TAX_CODE the ERP_TAX_CODE
     * @return string
     */
    public function setERP_TAX_CODE($_eRP_TAX_CODE)
    {
        return ($this->ERP_TAX_CODE = $_eRP_TAX_CODE);
    }
    /**
     * Get AUTHORITY_FIPS value
     * @return string|null
     */
    public function getAUTHORITY_FIPS()
    {
        return $this->AUTHORITY_FIPS;
    }
    /**
     * Set AUTHORITY_FIPS value
     * @param string $_aUTHORITY_FIPS the AUTHORITY_FIPS
     * @return string
     */
    public function setAUTHORITY_FIPS($_aUTHORITY_FIPS)
    {
        return ($this->AUTHORITY_FIPS = $_aUTHORITY_FIPS);
    }
    /**
     * Get EFFECTIVE_ZONE_LEVEL value
     * @return string|null
     */
    public function getEFFECTIVE_ZONE_LEVEL()
    {
        return $this->EFFECTIVE_ZONE_LEVEL;
    }
    /**
     * Set EFFECTIVE_ZONE_LEVEL value
     * @param string $_eFFECTIVE_ZONE_LEVEL the EFFECTIVE_ZONE_LEVEL
     * @return string
     */
    public function setEFFECTIVE_ZONE_LEVEL($_eFFECTIVE_ZONE_LEVEL)
    {
        return ($this->EFFECTIVE_ZONE_LEVEL = $_eFFECTIVE_ZONE_LEVEL);
    }
    /**
     * Get EXEMPT_CERTIFICATE value
     * @return string|null
     */
    public function getEXEMPT_CERTIFICATE()
    {
        return $this->EXEMPT_CERTIFICATE;
    }
    /**
     * Set EXEMPT_CERTIFICATE value
     * @param string $_eXEMPT_CERTIFICATE the EXEMPT_CERTIFICATE
     * @return string
     */
    public function setEXEMPT_CERTIFICATE($_eXEMPT_CERTIFICATE)
    {
        return ($this->EXEMPT_CERTIFICATE = $_eXEMPT_CERTIFICATE);
    }
    /**
     * Get EXEMPT_CERTIFICATE_EXPIRE_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getEXEMPT_CERTIFICATE_EXPIRE_DATE()
    {
        return $this->EXEMPT_CERTIFICATE_EXPIRE_DATE;
    }
    /**
     * Set EXEMPT_CERTIFICATE_EXPIRE_DATE value
     * @param YyyyMmDdDateType $_eXEMPT_CERTIFICATE_EXPIRE_DATE the EXEMPT_CERTIFICATE_EXPIRE_DATE
     * @return YyyyMmDdDateType
     */
    public function setEXEMPT_CERTIFICATE_EXPIRE_DATE($_eXEMPT_CERTIFICATE_EXPIRE_DATE)
    {
        return ($this->EXEMPT_CERTIFICATE_EXPIRE_DATE = $_eXEMPT_CERTIFICATE_EXPIRE_DATE);
    }
    /**
     * Get EXEMPT_REASON value
     * @return string|null
     */
    public function getEXEMPT_REASON()
    {
        return $this->EXEMPT_REASON;
    }
    /**
     * Set EXEMPT_REASON value
     * @param string $_eXEMPT_REASON the EXEMPT_REASON
     * @return string
     */
    public function setEXEMPT_REASON($_eXEMPT_REASON)
    {
        return ($this->EXEMPT_REASON = $_eXEMPT_REASON);
    }
    /**
     * Get INPUT_RECOVERY_AMOUNT value
     * @return NillableDecimalType|null
     */
    public function getINPUT_RECOVERY_AMOUNT()
    {
        return $this->INPUT_RECOVERY_AMOUNT;
    }
    /**
     * Set INPUT_RECOVERY_AMOUNT value
     * @param NillableDecimalType $_iNPUT_RECOVERY_AMOUNT the INPUT_RECOVERY_AMOUNT
     * @return NillableDecimalType
     */
    public function setINPUT_RECOVERY_AMOUNT($_iNPUT_RECOVERY_AMOUNT)
    {
        return ($this->INPUT_RECOVERY_AMOUNT = $_iNPUT_RECOVERY_AMOUNT);
    }
    /**
     * Get INPUT_RECOVERY_PERCENT value
     * @return NillableDecimalType|null
     */
    public function getINPUT_RECOVERY_PERCENT()
    {
        return $this->INPUT_RECOVERY_PERCENT;
    }
    /**
     * Set INPUT_RECOVERY_PERCENT value
     * @param NillableDecimalType $_iNPUT_RECOVERY_PERCENT the INPUT_RECOVERY_PERCENT
     * @return NillableDecimalType
     */
    public function setINPUT_RECOVERY_PERCENT($_iNPUT_RECOVERY_PERCENT)
    {
        return ($this->INPUT_RECOVERY_PERCENT = $_iNPUT_RECOVERY_PERCENT);
    }
    /**
     * Get INVOICE_DESCRIPTION value
     * @return string|null
     */
    public function getINVOICE_DESCRIPTION()
    {
        return $this->INVOICE_DESCRIPTION;
    }
    /**
     * Set INVOICE_DESCRIPTION value
     * @param string $_iNVOICE_DESCRIPTION the INVOICE_DESCRIPTION
     * @return string
     */
    public function setINVOICE_DESCRIPTION($_iNVOICE_DESCRIPTION)
    {
        return ($this->INVOICE_DESCRIPTION = $_iNVOICE_DESCRIPTION);
    }
    /**
     * Get JURISDICTION_TEXT value
     * @return string|null
     */
    public function getJURISDICTION_TEXT()
    {
        return $this->JURISDICTION_TEXT;
    }
    /**
     * Set JURISDICTION_TEXT value
     * @param string $_jURISDICTION_TEXT the JURISDICTION_TEXT
     * @return string
     */
    public function setJURISDICTION_TEXT($_jURISDICTION_TEXT)
    {
        return ($this->JURISDICTION_TEXT = $_jURISDICTION_TEXT);
    }
    /**
     * Get IS_EXEMPT value
     * @return boolean|null
     */
    public function getIS_EXEMPT()
    {
        return $this->IS_EXEMPT;
    }
    /**
     * Set IS_EXEMPT value
     * @param boolean $_iS_EXEMPT the IS_EXEMPT
     * @return boolean
     */
    public function setIS_EXEMPT($_iS_EXEMPT)
    {
        return ($this->IS_EXEMPT = $_iS_EXEMPT);
    }
    /**
     * Get IS_INTRASTAT_REPORTED value
     * @return string|null
     */
    public function getIS_INTRASTAT_REPORTED()
    {
        return $this->IS_INTRASTAT_REPORTED;
    }
    /**
     * Set IS_INTRASTAT_REPORTED value
     * @param string $_iS_INTRASTAT_REPORTED the IS_INTRASTAT_REPORTED
     * @return string
     */
    public function setIS_INTRASTAT_REPORTED($_iS_INTRASTAT_REPORTED)
    {
        return ($this->IS_INTRASTAT_REPORTED = $_iS_INTRASTAT_REPORTED);
    }
    /**
     * Get IS_NOTAX value
     * @return boolean|null
     */
    public function getIS_NOTAX()
    {
        return $this->IS_NOTAX;
    }
    /**
     * Set IS_NOTAX value
     * @param boolean $_iS_NOTAX the IS_NOTAX
     * @return boolean
     */
    public function setIS_NOTAX($_iS_NOTAX)
    {
        return ($this->IS_NOTAX = $_iS_NOTAX);
    }
    /**
     * Get IS_TRIANGULATION value
     * @return boolean|null
     */
    public function getIS_TRIANGULATION()
    {
        return $this->IS_TRIANGULATION;
    }
    /**
     * Set IS_TRIANGULATION value
     * @param boolean $_iS_TRIANGULATION the IS_TRIANGULATION
     * @return boolean
     */
    public function setIS_TRIANGULATION($_iS_TRIANGULATION)
    {
        return ($this->IS_TRIANGULATION = $_iS_TRIANGULATION);
    }
    /**
     * Get IS_VAT_REPORTED value
     * @return boolean|null
     */
    public function getIS_VAT_REPORTED()
    {
        return $this->IS_VAT_REPORTED;
    }
    /**
     * Set IS_VAT_REPORTED value
     * @param boolean $_iS_VAT_REPORTED the IS_VAT_REPORTED
     * @return boolean
     */
    public function setIS_VAT_REPORTED($_iS_VAT_REPORTED)
    {
        return ($this->IS_VAT_REPORTED = $_iS_VAT_REPORTED);
    }
    /**
     * Get IS_VIES_REPORTED value
     * @return boolean|null
     */
    public function getIS_VIES_REPORTED()
    {
        return $this->IS_VIES_REPORTED;
    }
    /**
     * Set IS_VIES_REPORTED value
     * @param boolean $_iS_VIES_REPORTED the IS_VIES_REPORTED
     * @return boolean
     */
    public function setIS_VIES_REPORTED($_iS_VIES_REPORTED)
    {
        return ($this->IS_VIES_REPORTED = $_iS_VIES_REPORTED);
    }
    /**
     * Get LOCATION_CODE value
     * @return string|null
     */
    public function getLOCATION_CODE()
    {
        return $this->LOCATION_CODE;
    }
    /**
     * Set LOCATION_CODE value
     * @param string $_lOCATION_CODE the LOCATION_CODE
     * @return string
     */
    public function setLOCATION_CODE($_lOCATION_CODE)
    {
        return ($this->LOCATION_CODE = $_lOCATION_CODE);
    }
    /**
     * Get MESSAGE value
     * @return KPMGStructMessageType|null
     */
    public function getMESSAGE()
    {
        return $this->MESSAGE;
    }
    /**
     * Set MESSAGE value
     * @param KPMGStructMessageType $_mESSAGE the MESSAGE
     * @return KPMGStructMessageType
     */
    public function setMESSAGE($_mESSAGE)
    {
        return ($this->MESSAGE = $_mESSAGE);
    }
    /**
     * Get BUYER_REGISTRATION value
     * @return string|null
     */
    public function getBUYER_REGISTRATION()
    {
        return $this->BUYER_REGISTRATION;
    }
    /**
     * Set BUYER_REGISTRATION value
     * @param string $_bUYER_REGISTRATION the BUYER_REGISTRATION
     * @return string
     */
    public function setBUYER_REGISTRATION($_bUYER_REGISTRATION)
    {
        return ($this->BUYER_REGISTRATION = $_bUYER_REGISTRATION);
    }
    /**
     * Get SELLER_REGISTRATION value
     * @return string|null
     */
    public function getSELLER_REGISTRATION()
    {
        return $this->SELLER_REGISTRATION;
    }
    /**
     * Set SELLER_REGISTRATION value
     * @param string $_sELLER_REGISTRATION the SELLER_REGISTRATION
     * @return string
     */
    public function setSELLER_REGISTRATION($_sELLER_REGISTRATION)
    {
        return ($this->SELLER_REGISTRATION = $_sELLER_REGISTRATION);
    }
    /**
     * Get MIDDLEMAN_REGISTRATION value
     * @return string|null
     */
    public function getMIDDLEMAN_REGISTRATION()
    {
        return $this->MIDDLEMAN_REGISTRATION;
    }
    /**
     * Set MIDDLEMAN_REGISTRATION value
     * @param string $_mIDDLEMAN_REGISTRATION the MIDDLEMAN_REGISTRATION
     * @return string
     */
    public function setMIDDLEMAN_REGISTRATION($_mIDDLEMAN_REGISTRATION)
    {
        return ($this->MIDDLEMAN_REGISTRATION = $_mIDDLEMAN_REGISTRATION);
    }
    /**
     * Get OVERRIDE_AMOUNT value
     * @return decimal|null
     */
    public function getOVERRIDE_AMOUNT()
    {
        return $this->OVERRIDE_AMOUNT;
    }
    /**
     * Set OVERRIDE_AMOUNT value
     * @param decimal $_oVERRIDE_AMOUNT the OVERRIDE_AMOUNT
     * @return decimal
     */
    public function setOVERRIDE_AMOUNT($_oVERRIDE_AMOUNT)
    {
        return ($this->OVERRIDE_AMOUNT = $_oVERRIDE_AMOUNT);
    }
    /**
     * Get OVERRIDE_RATE value
     * @return decimal|null
     */
    public function getOVERRIDE_RATE()
    {
        return $this->OVERRIDE_RATE;
    }
    /**
     * Set OVERRIDE_RATE value
     * @param decimal $_oVERRIDE_RATE the OVERRIDE_RATE
     * @return decimal
     */
    public function setOVERRIDE_RATE($_oVERRIDE_RATE)
    {
        return ($this->OVERRIDE_RATE = $_oVERRIDE_RATE);
    }
    /**
     * Get REVISED_GROSS_AMOUNT value
     * @return decimal|null
     */
    public function getREVISED_GROSS_AMOUNT()
    {
        return $this->REVISED_GROSS_AMOUNT;
    }
    /**
     * Set REVISED_GROSS_AMOUNT value
     * @param decimal $_rEVISED_GROSS_AMOUNT the REVISED_GROSS_AMOUNT
     * @return decimal
     */
    public function setREVISED_GROSS_AMOUNT($_rEVISED_GROSS_AMOUNT)
    {
        return ($this->REVISED_GROSS_AMOUNT = $_rEVISED_GROSS_AMOUNT);
    }
    /**
     * Get RULE_ORDER value
     * @return decimal|null
     */
    public function getRULE_ORDER()
    {
        return $this->RULE_ORDER;
    }
    /**
     * Set RULE_ORDER value
     * @param decimal $_rULE_ORDER the RULE_ORDER
     * @return decimal
     */
    public function setRULE_ORDER($_rULE_ORDER)
    {
        return ($this->RULE_ORDER = $_rULE_ORDER);
    }
    /**
     * Get SUPPLY_EXEMPT_PERCENT value
     * @return decimal|null
     */
    public function getSUPPLY_EXEMPT_PERCENT()
    {
        return $this->SUPPLY_EXEMPT_PERCENT;
    }
    /**
     * Set SUPPLY_EXEMPT_PERCENT value
     * @param decimal $_sUPPLY_EXEMPT_PERCENT the SUPPLY_EXEMPT_PERCENT
     * @return decimal
     */
    public function setSUPPLY_EXEMPT_PERCENT($_sUPPLY_EXEMPT_PERCENT)
    {
        return ($this->SUPPLY_EXEMPT_PERCENT = $_sUPPLY_EXEMPT_PERCENT);
    }
    /**
     * Get TAXABLE_COUNTRY value
     * @return string|null
     */
    public function getTAXABLE_COUNTRY()
    {
        return $this->TAXABLE_COUNTRY;
    }
    /**
     * Set TAXABLE_COUNTRY value
     * @param string $_tAXABLE_COUNTRY the TAXABLE_COUNTRY
     * @return string
     */
    public function setTAXABLE_COUNTRY($_tAXABLE_COUNTRY)
    {
        return ($this->TAXABLE_COUNTRY = $_tAXABLE_COUNTRY);
    }
    /**
     * Get TAXABLE_COUNTRY_NAME value
     * @return string|null
     */
    public function getTAXABLE_COUNTRY_NAME()
    {
        return $this->TAXABLE_COUNTRY_NAME;
    }
    /**
     * Set TAXABLE_COUNTRY_NAME value
     * @param string $_tAXABLE_COUNTRY_NAME the TAXABLE_COUNTRY_NAME
     * @return string
     */
    public function setTAXABLE_COUNTRY_NAME($_tAXABLE_COUNTRY_NAME)
    {
        return ($this->TAXABLE_COUNTRY_NAME = $_tAXABLE_COUNTRY_NAME);
    }
    /**
     * Get TAXABLE_PROVINCE value
     * @return string|null
     */
    public function getTAXABLE_PROVINCE()
    {
        return $this->TAXABLE_PROVINCE;
    }
    /**
     * Set TAXABLE_PROVINCE value
     * @param string $_tAXABLE_PROVINCE the TAXABLE_PROVINCE
     * @return string
     */
    public function setTAXABLE_PROVINCE($_tAXABLE_PROVINCE)
    {
        return ($this->TAXABLE_PROVINCE = $_tAXABLE_PROVINCE);
    }
    /**
     * Get TAXABLE_STATE value
     * @return string|null
     */
    public function getTAXABLE_STATE()
    {
        return $this->TAXABLE_STATE;
    }
    /**
     * Set TAXABLE_STATE value
     * @param string $_tAXABLE_STATE the TAXABLE_STATE
     * @return string
     */
    public function setTAXABLE_STATE($_tAXABLE_STATE)
    {
        return ($this->TAXABLE_STATE = $_tAXABLE_STATE);
    }
    /**
     * Get TAXABLE_COUNTY value
     * @return string|null
     */
    public function getTAXABLE_COUNTY()
    {
        return $this->TAXABLE_COUNTY;
    }
    /**
     * Set TAXABLE_COUNTY value
     * @param string $_tAXABLE_COUNTY the TAXABLE_COUNTY
     * @return string
     */
    public function setTAXABLE_COUNTY($_tAXABLE_COUNTY)
    {
        return ($this->TAXABLE_COUNTY = $_tAXABLE_COUNTY);
    }
    /**
     * Get TAXABLE_CITY value
     * @return string|null
     */
    public function getTAXABLE_CITY()
    {
        return $this->TAXABLE_CITY;
    }
    /**
     * Set TAXABLE_CITY value
     * @param string $_tAXABLE_CITY the TAXABLE_CITY
     * @return string
     */
    public function setTAXABLE_CITY($_tAXABLE_CITY)
    {
        return ($this->TAXABLE_CITY = $_tAXABLE_CITY);
    }
    /**
     * Get TAXABLE_DISTRICT value
     * @return string|null
     */
    public function getTAXABLE_DISTRICT()
    {
        return $this->TAXABLE_DISTRICT;
    }
    /**
     * Set TAXABLE_DISTRICT value
     * @param string $_tAXABLE_DISTRICT the TAXABLE_DISTRICT
     * @return string
     */
    public function setTAXABLE_DISTRICT($_tAXABLE_DISTRICT)
    {
        return ($this->TAXABLE_DISTRICT = $_tAXABLE_DISTRICT);
    }
    /**
     * Get TAXABLE_GEOCODE value
     * @return string|null
     */
    public function getTAXABLE_GEOCODE()
    {
        return $this->TAXABLE_GEOCODE;
    }
    /**
     * Set TAXABLE_GEOCODE value
     * @param string $_tAXABLE_GEOCODE the TAXABLE_GEOCODE
     * @return string
     */
    public function setTAXABLE_GEOCODE($_tAXABLE_GEOCODE)
    {
        return ($this->TAXABLE_GEOCODE = $_tAXABLE_GEOCODE);
    }
    /**
     * Get TAXABLE_POSTCODE value
     * @return string|null
     */
    public function getTAXABLE_POSTCODE()
    {
        return $this->TAXABLE_POSTCODE;
    }
    /**
     * Set TAXABLE_POSTCODE value
     * @param string $_tAXABLE_POSTCODE the TAXABLE_POSTCODE
     * @return string
     */
    public function setTAXABLE_POSTCODE($_tAXABLE_POSTCODE)
    {
        return ($this->TAXABLE_POSTCODE = $_tAXABLE_POSTCODE);
    }
    /**
     * Get TAX_DIRECTION value
     * @return string|null
     */
    public function getTAX_DIRECTION()
    {
        return $this->TAX_DIRECTION;
    }
    /**
     * Set TAX_DIRECTION value
     * @param string $_tAX_DIRECTION the TAX_DIRECTION
     * @return string
     */
    public function setTAX_DIRECTION($_tAX_DIRECTION)
    {
        return ($this->TAX_DIRECTION = $_tAX_DIRECTION);
    }
    /**
     * Get TAX_RATE_CODE value
     * @return string|null
     */
    public function getTAX_RATE_CODE()
    {
        return $this->TAX_RATE_CODE;
    }
    /**
     * Set TAX_RATE_CODE value
     * @param string $_tAX_RATE_CODE the TAX_RATE_CODE
     * @return string
     */
    public function setTAX_RATE_CODE($_tAX_RATE_CODE)
    {
        return ($this->TAX_RATE_CODE = $_tAX_RATE_CODE);
    }
    /**
     * Get TAX_TYPE value
     * @return string|null
     */
    public function getTAX_TYPE()
    {
        return $this->TAX_TYPE;
    }
    /**
     * Set TAX_TYPE value
     * @param string $_tAX_TYPE the TAX_TYPE
     * @return string
     */
    public function setTAX_TYPE($_tAX_TYPE)
    {
        return ($this->TAX_TYPE = $_tAX_TYPE);
    }
    /**
     * Get VAT_GROUP_REGISTRATION value
     * @return string|null
     */
    public function getVAT_GROUP_REGISTRATION()
    {
        return $this->VAT_GROUP_REGISTRATION;
    }
    /**
     * Set VAT_GROUP_REGISTRATION value
     * @param string $_vAT_GROUP_REGISTRATION the VAT_GROUP_REGISTRATION
     * @return string
     */
    public function setVAT_GROUP_REGISTRATION($_vAT_GROUP_REGISTRATION)
    {
        return ($this->VAT_GROUP_REGISTRATION = $_vAT_GROUP_REGISTRATION);
    }
    /**
     * Get ZONE_NAME value
     * @return string|null
     */
    public function getZONE_NAME()
    {
        return $this->ZONE_NAME;
    }
    /**
     * Set ZONE_NAME value
     * @param string $_zONE_NAME the ZONE_NAME
     * @return string
     */
    public function setZONE_NAME($_zONE_NAME)
    {
        return ($this->ZONE_NAME = $_zONE_NAME);
    }
    /**
     * Get ZONE_LEVEL value
     * @return string|null
     */
    public function getZONE_LEVEL()
    {
        return $this->ZONE_LEVEL;
    }
    /**
     * Set ZONE_LEVEL value
     * @param string $_zONE_LEVEL the ZONE_LEVEL
     * @return string
     */
    public function setZONE_LEVEL($_zONE_LEVEL)
    {
        return ($this->ZONE_LEVEL = $_zONE_LEVEL);
    }
    /**
     * Get FISCAL_REP_NAME value
     * @return string|null
     */
    public function getFISCAL_REP_NAME()
    {
        return $this->FISCAL_REP_NAME;
    }
    /**
     * Set FISCAL_REP_NAME value
     * @param string $_fISCAL_REP_NAME the FISCAL_REP_NAME
     * @return string
     */
    public function setFISCAL_REP_NAME($_fISCAL_REP_NAME)
    {
        return ($this->FISCAL_REP_NAME = $_fISCAL_REP_NAME);
    }
    /**
     * Get FISCAL_REP_ADDRESS1 value
     * @return string|null
     */
    public function getFISCAL_REP_ADDRESS1()
    {
        return $this->FISCAL_REP_ADDRESS1;
    }
    /**
     * Set FISCAL_REP_ADDRESS1 value
     * @param string $_fISCAL_REP_ADDRESS1 the FISCAL_REP_ADDRESS1
     * @return string
     */
    public function setFISCAL_REP_ADDRESS1($_fISCAL_REP_ADDRESS1)
    {
        return ($this->FISCAL_REP_ADDRESS1 = $_fISCAL_REP_ADDRESS1);
    }
    /**
     * Get FISCAL_REP_ADDRESS2 value
     * @return string|null
     */
    public function getFISCAL_REP_ADDRESS2()
    {
        return $this->FISCAL_REP_ADDRESS2;
    }
    /**
     * Set FISCAL_REP_ADDRESS2 value
     * @param string $_fISCAL_REP_ADDRESS2 the FISCAL_REP_ADDRESS2
     * @return string
     */
    public function setFISCAL_REP_ADDRESS2($_fISCAL_REP_ADDRESS2)
    {
        return ($this->FISCAL_REP_ADDRESS2 = $_fISCAL_REP_ADDRESS2);
    }
    /**
     * Get FISCAL_REP_CONTACT value
     * @return string|null
     */
    public function getFISCAL_REP_CONTACT()
    {
        return $this->FISCAL_REP_CONTACT;
    }
    /**
     * Set FISCAL_REP_CONTACT value
     * @param string $_fISCAL_REP_CONTACT the FISCAL_REP_CONTACT
     * @return string
     */
    public function setFISCAL_REP_CONTACT($_fISCAL_REP_CONTACT)
    {
        return ($this->FISCAL_REP_CONTACT = $_fISCAL_REP_CONTACT);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_1 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_1()
    {
        return $this->REGISTRATION_ATTRIBUTE_1;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_1 value
     * @param string $_rEGISTRATION_ATTRIBUTE_1 the REGISTRATION_ATTRIBUTE_1
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_1($_rEGISTRATION_ATTRIBUTE_1)
    {
        return ($this->REGISTRATION_ATTRIBUTE_1 = $_rEGISTRATION_ATTRIBUTE_1);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_2 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_2()
    {
        return $this->REGISTRATION_ATTRIBUTE_2;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_2 value
     * @param string $_rEGISTRATION_ATTRIBUTE_2 the REGISTRATION_ATTRIBUTE_2
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_2($_rEGISTRATION_ATTRIBUTE_2)
    {
        return ($this->REGISTRATION_ATTRIBUTE_2 = $_rEGISTRATION_ATTRIBUTE_2);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_3 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_3()
    {
        return $this->REGISTRATION_ATTRIBUTE_3;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_3 value
     * @param string $_rEGISTRATION_ATTRIBUTE_3 the REGISTRATION_ATTRIBUTE_3
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_3($_rEGISTRATION_ATTRIBUTE_3)
    {
        return ($this->REGISTRATION_ATTRIBUTE_3 = $_rEGISTRATION_ATTRIBUTE_3);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_4 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_4()
    {
        return $this->REGISTRATION_ATTRIBUTE_4;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_4 value
     * @param string $_rEGISTRATION_ATTRIBUTE_4 the REGISTRATION_ATTRIBUTE_4
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_4($_rEGISTRATION_ATTRIBUTE_4)
    {
        return ($this->REGISTRATION_ATTRIBUTE_4 = $_rEGISTRATION_ATTRIBUTE_4);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_5 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_5()
    {
        return $this->REGISTRATION_ATTRIBUTE_5;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_5 value
     * @param string $_rEGISTRATION_ATTRIBUTE_5 the REGISTRATION_ATTRIBUTE_5
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_5($_rEGISTRATION_ATTRIBUTE_5)
    {
        return ($this->REGISTRATION_ATTRIBUTE_5 = $_rEGISTRATION_ATTRIBUTE_5);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_6 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_6()
    {
        return $this->REGISTRATION_ATTRIBUTE_6;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_6 value
     * @param string $_rEGISTRATION_ATTRIBUTE_6 the REGISTRATION_ATTRIBUTE_6
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_6($_rEGISTRATION_ATTRIBUTE_6)
    {
        return ($this->REGISTRATION_ATTRIBUTE_6 = $_rEGISTRATION_ATTRIBUTE_6);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_7 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_7()
    {
        return $this->REGISTRATION_ATTRIBUTE_7;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_7 value
     * @param string $_rEGISTRATION_ATTRIBUTE_7 the REGISTRATION_ATTRIBUTE_7
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_7($_rEGISTRATION_ATTRIBUTE_7)
    {
        return ($this->REGISTRATION_ATTRIBUTE_7 = $_rEGISTRATION_ATTRIBUTE_7);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_8 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_8()
    {
        return $this->REGISTRATION_ATTRIBUTE_8;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_8 value
     * @param string $_rEGISTRATION_ATTRIBUTE_8 the REGISTRATION_ATTRIBUTE_8
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_8($_rEGISTRATION_ATTRIBUTE_8)
    {
        return ($this->REGISTRATION_ATTRIBUTE_8 = $_rEGISTRATION_ATTRIBUTE_8);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_9 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_9()
    {
        return $this->REGISTRATION_ATTRIBUTE_9;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_9 value
     * @param string $_rEGISTRATION_ATTRIBUTE_9 the REGISTRATION_ATTRIBUTE_9
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_9($_rEGISTRATION_ATTRIBUTE_9)
    {
        return ($this->REGISTRATION_ATTRIBUTE_9 = $_rEGISTRATION_ATTRIBUTE_9);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_10 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_10()
    {
        return $this->REGISTRATION_ATTRIBUTE_10;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_10 value
     * @param string $_rEGISTRATION_ATTRIBUTE_10 the REGISTRATION_ATTRIBUTE_10
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_10($_rEGISTRATION_ATTRIBUTE_10)
    {
        return ($this->REGISTRATION_ATTRIBUTE_10 = $_rEGISTRATION_ATTRIBUTE_10);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_11 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_11()
    {
        return $this->REGISTRATION_ATTRIBUTE_11;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_11 value
     * @param string $_rEGISTRATION_ATTRIBUTE_11 the REGISTRATION_ATTRIBUTE_11
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_11($_rEGISTRATION_ATTRIBUTE_11)
    {
        return ($this->REGISTRATION_ATTRIBUTE_11 = $_rEGISTRATION_ATTRIBUTE_11);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_12 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_12()
    {
        return $this->REGISTRATION_ATTRIBUTE_12;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_12 value
     * @param string $_rEGISTRATION_ATTRIBUTE_12 the REGISTRATION_ATTRIBUTE_12
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_12($_rEGISTRATION_ATTRIBUTE_12)
    {
        return ($this->REGISTRATION_ATTRIBUTE_12 = $_rEGISTRATION_ATTRIBUTE_12);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_13 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_13()
    {
        return $this->REGISTRATION_ATTRIBUTE_13;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_13 value
     * @param string $_rEGISTRATION_ATTRIBUTE_13 the REGISTRATION_ATTRIBUTE_13
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_13($_rEGISTRATION_ATTRIBUTE_13)
    {
        return ($this->REGISTRATION_ATTRIBUTE_13 = $_rEGISTRATION_ATTRIBUTE_13);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_14 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_14()
    {
        return $this->REGISTRATION_ATTRIBUTE_14;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_14 value
     * @param string $_rEGISTRATION_ATTRIBUTE_14 the REGISTRATION_ATTRIBUTE_14
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_14($_rEGISTRATION_ATTRIBUTE_14)
    {
        return ($this->REGISTRATION_ATTRIBUTE_14 = $_rEGISTRATION_ATTRIBUTE_14);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_15 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_15()
    {
        return $this->REGISTRATION_ATTRIBUTE_15;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_15 value
     * @param string $_rEGISTRATION_ATTRIBUTE_15 the REGISTRATION_ATTRIBUTE_15
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_15($_rEGISTRATION_ATTRIBUTE_15)
    {
        return ($this->REGISTRATION_ATTRIBUTE_15 = $_rEGISTRATION_ATTRIBUTE_15);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_16 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_16()
    {
        return $this->REGISTRATION_ATTRIBUTE_16;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_16 value
     * @param string $_rEGISTRATION_ATTRIBUTE_16 the REGISTRATION_ATTRIBUTE_16
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_16($_rEGISTRATION_ATTRIBUTE_16)
    {
        return ($this->REGISTRATION_ATTRIBUTE_16 = $_rEGISTRATION_ATTRIBUTE_16);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_17 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_17()
    {
        return $this->REGISTRATION_ATTRIBUTE_17;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_17 value
     * @param string $_rEGISTRATION_ATTRIBUTE_17 the REGISTRATION_ATTRIBUTE_17
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_17($_rEGISTRATION_ATTRIBUTE_17)
    {
        return ($this->REGISTRATION_ATTRIBUTE_17 = $_rEGISTRATION_ATTRIBUTE_17);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_18 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_18()
    {
        return $this->REGISTRATION_ATTRIBUTE_18;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_18 value
     * @param string $_rEGISTRATION_ATTRIBUTE_18 the REGISTRATION_ATTRIBUTE_18
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_18($_rEGISTRATION_ATTRIBUTE_18)
    {
        return ($this->REGISTRATION_ATTRIBUTE_18 = $_rEGISTRATION_ATTRIBUTE_18);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_19 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_19()
    {
        return $this->REGISTRATION_ATTRIBUTE_19;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_19 value
     * @param string $_rEGISTRATION_ATTRIBUTE_19 the REGISTRATION_ATTRIBUTE_19
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_19($_rEGISTRATION_ATTRIBUTE_19)
    {
        return ($this->REGISTRATION_ATTRIBUTE_19 = $_rEGISTRATION_ATTRIBUTE_19);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_20 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_20()
    {
        return $this->REGISTRATION_ATTRIBUTE_20;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_20 value
     * @param string $_rEGISTRATION_ATTRIBUTE_20 the REGISTRATION_ATTRIBUTE_20
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_20($_rEGISTRATION_ATTRIBUTE_20)
    {
        return ($this->REGISTRATION_ATTRIBUTE_20 = $_rEGISTRATION_ATTRIBUTE_20);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_21 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_21()
    {
        return $this->REGISTRATION_ATTRIBUTE_21;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_21 value
     * @param string $_rEGISTRATION_ATTRIBUTE_21 the REGISTRATION_ATTRIBUTE_21
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_21($_rEGISTRATION_ATTRIBUTE_21)
    {
        return ($this->REGISTRATION_ATTRIBUTE_21 = $_rEGISTRATION_ATTRIBUTE_21);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_22 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_22()
    {
        return $this->REGISTRATION_ATTRIBUTE_22;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_22 value
     * @param string $_rEGISTRATION_ATTRIBUTE_22 the REGISTRATION_ATTRIBUTE_22
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_22($_rEGISTRATION_ATTRIBUTE_22)
    {
        return ($this->REGISTRATION_ATTRIBUTE_22 = $_rEGISTRATION_ATTRIBUTE_22);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_23 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_23()
    {
        return $this->REGISTRATION_ATTRIBUTE_23;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_23 value
     * @param string $_rEGISTRATION_ATTRIBUTE_23 the REGISTRATION_ATTRIBUTE_23
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_23($_rEGISTRATION_ATTRIBUTE_23)
    {
        return ($this->REGISTRATION_ATTRIBUTE_23 = $_rEGISTRATION_ATTRIBUTE_23);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_24 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_24()
    {
        return $this->REGISTRATION_ATTRIBUTE_24;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_24 value
     * @param string $_rEGISTRATION_ATTRIBUTE_24 the REGISTRATION_ATTRIBUTE_24
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_24($_rEGISTRATION_ATTRIBUTE_24)
    {
        return ($this->REGISTRATION_ATTRIBUTE_24 = $_rEGISTRATION_ATTRIBUTE_24);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_25 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_25()
    {
        return $this->REGISTRATION_ATTRIBUTE_25;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_25 value
     * @param string $_rEGISTRATION_ATTRIBUTE_25 the REGISTRATION_ATTRIBUTE_25
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_25($_rEGISTRATION_ATTRIBUTE_25)
    {
        return ($this->REGISTRATION_ATTRIBUTE_25 = $_rEGISTRATION_ATTRIBUTE_25);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_26 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_26()
    {
        return $this->REGISTRATION_ATTRIBUTE_26;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_26 value
     * @param string $_rEGISTRATION_ATTRIBUTE_26 the REGISTRATION_ATTRIBUTE_26
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_26($_rEGISTRATION_ATTRIBUTE_26)
    {
        return ($this->REGISTRATION_ATTRIBUTE_26 = $_rEGISTRATION_ATTRIBUTE_26);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_27 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_27()
    {
        return $this->REGISTRATION_ATTRIBUTE_27;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_27 value
     * @param string $_rEGISTRATION_ATTRIBUTE_27 the REGISTRATION_ATTRIBUTE_27
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_27($_rEGISTRATION_ATTRIBUTE_27)
    {
        return ($this->REGISTRATION_ATTRIBUTE_27 = $_rEGISTRATION_ATTRIBUTE_27);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_28 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_28()
    {
        return $this->REGISTRATION_ATTRIBUTE_28;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_28 value
     * @param string $_rEGISTRATION_ATTRIBUTE_28 the REGISTRATION_ATTRIBUTE_28
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_28($_rEGISTRATION_ATTRIBUTE_28)
    {
        return ($this->REGISTRATION_ATTRIBUTE_28 = $_rEGISTRATION_ATTRIBUTE_28);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_29 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_29()
    {
        return $this->REGISTRATION_ATTRIBUTE_29;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_29 value
     * @param string $_rEGISTRATION_ATTRIBUTE_29 the REGISTRATION_ATTRIBUTE_29
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_29($_rEGISTRATION_ATTRIBUTE_29)
    {
        return ($this->REGISTRATION_ATTRIBUTE_29 = $_rEGISTRATION_ATTRIBUTE_29);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_30 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_30()
    {
        return $this->REGISTRATION_ATTRIBUTE_30;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_30 value
     * @param string $_rEGISTRATION_ATTRIBUTE_30 the REGISTRATION_ATTRIBUTE_30
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_30($_rEGISTRATION_ATTRIBUTE_30)
    {
        return ($this->REGISTRATION_ATTRIBUTE_30 = $_rEGISTRATION_ATTRIBUTE_30);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_31 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_31()
    {
        return $this->REGISTRATION_ATTRIBUTE_31;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_31 value
     * @param string $_rEGISTRATION_ATTRIBUTE_31 the REGISTRATION_ATTRIBUTE_31
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_31($_rEGISTRATION_ATTRIBUTE_31)
    {
        return ($this->REGISTRATION_ATTRIBUTE_31 = $_rEGISTRATION_ATTRIBUTE_31);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_32 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_32()
    {
        return $this->REGISTRATION_ATTRIBUTE_32;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_32 value
     * @param string $_rEGISTRATION_ATTRIBUTE_32 the REGISTRATION_ATTRIBUTE_32
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_32($_rEGISTRATION_ATTRIBUTE_32)
    {
        return ($this->REGISTRATION_ATTRIBUTE_32 = $_rEGISTRATION_ATTRIBUTE_32);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_33 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_33()
    {
        return $this->REGISTRATION_ATTRIBUTE_33;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_33 value
     * @param string $_rEGISTRATION_ATTRIBUTE_33 the REGISTRATION_ATTRIBUTE_33
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_33($_rEGISTRATION_ATTRIBUTE_33)
    {
        return ($this->REGISTRATION_ATTRIBUTE_33 = $_rEGISTRATION_ATTRIBUTE_33);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_34 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_34()
    {
        return $this->REGISTRATION_ATTRIBUTE_34;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_34 value
     * @param string $_rEGISTRATION_ATTRIBUTE_34 the REGISTRATION_ATTRIBUTE_34
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_34($_rEGISTRATION_ATTRIBUTE_34)
    {
        return ($this->REGISTRATION_ATTRIBUTE_34 = $_rEGISTRATION_ATTRIBUTE_34);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_35 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_35()
    {
        return $this->REGISTRATION_ATTRIBUTE_35;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_35 value
     * @param string $_rEGISTRATION_ATTRIBUTE_35 the REGISTRATION_ATTRIBUTE_35
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_35($_rEGISTRATION_ATTRIBUTE_35)
    {
        return ($this->REGISTRATION_ATTRIBUTE_35 = $_rEGISTRATION_ATTRIBUTE_35);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_36 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_36()
    {
        return $this->REGISTRATION_ATTRIBUTE_36;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_36 value
     * @param string $_rEGISTRATION_ATTRIBUTE_36 the REGISTRATION_ATTRIBUTE_36
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_36($_rEGISTRATION_ATTRIBUTE_36)
    {
        return ($this->REGISTRATION_ATTRIBUTE_36 = $_rEGISTRATION_ATTRIBUTE_36);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_37 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_37()
    {
        return $this->REGISTRATION_ATTRIBUTE_37;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_37 value
     * @param string $_rEGISTRATION_ATTRIBUTE_37 the REGISTRATION_ATTRIBUTE_37
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_37($_rEGISTRATION_ATTRIBUTE_37)
    {
        return ($this->REGISTRATION_ATTRIBUTE_37 = $_rEGISTRATION_ATTRIBUTE_37);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_38 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_38()
    {
        return $this->REGISTRATION_ATTRIBUTE_38;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_38 value
     * @param string $_rEGISTRATION_ATTRIBUTE_38 the REGISTRATION_ATTRIBUTE_38
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_38($_rEGISTRATION_ATTRIBUTE_38)
    {
        return ($this->REGISTRATION_ATTRIBUTE_38 = $_rEGISTRATION_ATTRIBUTE_38);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_39 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_39()
    {
        return $this->REGISTRATION_ATTRIBUTE_39;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_39 value
     * @param string $_rEGISTRATION_ATTRIBUTE_39 the REGISTRATION_ATTRIBUTE_39
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_39($_rEGISTRATION_ATTRIBUTE_39)
    {
        return ($this->REGISTRATION_ATTRIBUTE_39 = $_rEGISTRATION_ATTRIBUTE_39);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_40 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_40()
    {
        return $this->REGISTRATION_ATTRIBUTE_40;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_40 value
     * @param string $_rEGISTRATION_ATTRIBUTE_40 the REGISTRATION_ATTRIBUTE_40
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_40($_rEGISTRATION_ATTRIBUTE_40)
    {
        return ($this->REGISTRATION_ATTRIBUTE_40 = $_rEGISTRATION_ATTRIBUTE_40);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_41 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_41()
    {
        return $this->REGISTRATION_ATTRIBUTE_41;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_41 value
     * @param string $_rEGISTRATION_ATTRIBUTE_41 the REGISTRATION_ATTRIBUTE_41
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_41($_rEGISTRATION_ATTRIBUTE_41)
    {
        return ($this->REGISTRATION_ATTRIBUTE_41 = $_rEGISTRATION_ATTRIBUTE_41);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_42 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_42()
    {
        return $this->REGISTRATION_ATTRIBUTE_42;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_42 value
     * @param string $_rEGISTRATION_ATTRIBUTE_42 the REGISTRATION_ATTRIBUTE_42
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_42($_rEGISTRATION_ATTRIBUTE_42)
    {
        return ($this->REGISTRATION_ATTRIBUTE_42 = $_rEGISTRATION_ATTRIBUTE_42);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_43 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_43()
    {
        return $this->REGISTRATION_ATTRIBUTE_43;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_43 value
     * @param string $_rEGISTRATION_ATTRIBUTE_43 the REGISTRATION_ATTRIBUTE_43
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_43($_rEGISTRATION_ATTRIBUTE_43)
    {
        return ($this->REGISTRATION_ATTRIBUTE_43 = $_rEGISTRATION_ATTRIBUTE_43);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_44 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_44()
    {
        return $this->REGISTRATION_ATTRIBUTE_44;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_44 value
     * @param string $_rEGISTRATION_ATTRIBUTE_44 the REGISTRATION_ATTRIBUTE_44
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_44($_rEGISTRATION_ATTRIBUTE_44)
    {
        return ($this->REGISTRATION_ATTRIBUTE_44 = $_rEGISTRATION_ATTRIBUTE_44);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_45 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_45()
    {
        return $this->REGISTRATION_ATTRIBUTE_45;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_45 value
     * @param string $_rEGISTRATION_ATTRIBUTE_45 the REGISTRATION_ATTRIBUTE_45
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_45($_rEGISTRATION_ATTRIBUTE_45)
    {
        return ($this->REGISTRATION_ATTRIBUTE_45 = $_rEGISTRATION_ATTRIBUTE_45);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_46 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_46()
    {
        return $this->REGISTRATION_ATTRIBUTE_46;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_46 value
     * @param string $_rEGISTRATION_ATTRIBUTE_46 the REGISTRATION_ATTRIBUTE_46
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_46($_rEGISTRATION_ATTRIBUTE_46)
    {
        return ($this->REGISTRATION_ATTRIBUTE_46 = $_rEGISTRATION_ATTRIBUTE_46);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_47 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_47()
    {
        return $this->REGISTRATION_ATTRIBUTE_47;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_47 value
     * @param string $_rEGISTRATION_ATTRIBUTE_47 the REGISTRATION_ATTRIBUTE_47
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_47($_rEGISTRATION_ATTRIBUTE_47)
    {
        return ($this->REGISTRATION_ATTRIBUTE_47 = $_rEGISTRATION_ATTRIBUTE_47);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_48 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_48()
    {
        return $this->REGISTRATION_ATTRIBUTE_48;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_48 value
     * @param string $_rEGISTRATION_ATTRIBUTE_48 the REGISTRATION_ATTRIBUTE_48
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_48($_rEGISTRATION_ATTRIBUTE_48)
    {
        return ($this->REGISTRATION_ATTRIBUTE_48 = $_rEGISTRATION_ATTRIBUTE_48);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_49 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_49()
    {
        return $this->REGISTRATION_ATTRIBUTE_49;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_49 value
     * @param string $_rEGISTRATION_ATTRIBUTE_49 the REGISTRATION_ATTRIBUTE_49
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_49($_rEGISTRATION_ATTRIBUTE_49)
    {
        return ($this->REGISTRATION_ATTRIBUTE_49 = $_rEGISTRATION_ATTRIBUTE_49);
    }
    /**
     * Get REGISTRATION_ATTRIBUTE_50 value
     * @return string|null
     */
    public function getREGISTRATION_ATTRIBUTE_50()
    {
        return $this->REGISTRATION_ATTRIBUTE_50;
    }
    /**
     * Set REGISTRATION_ATTRIBUTE_50 value
     * @param string $_rEGISTRATION_ATTRIBUTE_50 the REGISTRATION_ATTRIBUTE_50
     * @return string
     */
    public function setREGISTRATION_ATTRIBUTE_50($_rEGISTRATION_ATTRIBUTE_50)
    {
        return ($this->REGISTRATION_ATTRIBUTE_50 = $_rEGISTRATION_ATTRIBUTE_50);
    }
    /**
     * Get AUTHORITY_ATTRIBUTE value
     * @return KPMGStructAuthorityAttributeType|null
     */
    public function getAUTHORITY_ATTRIBUTE()
    {
        return $this->AUTHORITY_ATTRIBUTE;
    }
    /**
     * Set AUTHORITY_ATTRIBUTE value
     * @param KPMGStructAuthorityAttributeType $_aUTHORITY_ATTRIBUTE the AUTHORITY_ATTRIBUTE
     * @return KPMGStructAuthorityAttributeType
     */
    public function setAUTHORITY_ATTRIBUTE($_aUTHORITY_ATTRIBUTE)
    {
        return ($this->AUTHORITY_ATTRIBUTE = $_aUTHORITY_ATTRIBUTE);
    }
    /**
     * Get TAX_RATE value
     * @return decimal,EmptyStringType|null
     */
    public function getTAX_RATE()
    {
        return $this->TAX_RATE;
    }
    /**
     * Set TAX_RATE value
     * @param decimal,EmptyStringType $_tAX_RATE the TAX_RATE
     * @return decimal,EmptyStringType
     */
    public function setTAX_RATE($_tAX_RATE)
    {
        return ($this->TAX_RATE = $_tAX_RATE);
    }
    /**
     * Get UOM_CONVERSION value
     * @return KPMGStructUomConversionType|null
     */
    public function getUOM_CONVERSION()
    {
        return $this->UOM_CONVERSION;
    }
    /**
     * Set UOM_CONVERSION value
     * @param KPMGStructUomConversionType $_uOM_CONVERSION the UOM_CONVERSION
     * @return KPMGStructUomConversionType
     */
    public function setUOM_CONVERSION($_uOM_CONVERSION)
    {
        return ($this->UOM_CONVERSION = $_uOM_CONVERSION);
    }
    /**
     * Get NATURE_OF_TAX value
     * @return string|null
     */
    public function getNATURE_OF_TAX()
    {
        return $this->NATURE_OF_TAX;
    }
    /**
     * Set NATURE_OF_TAX value
     * @param string $_nATURE_OF_TAX the NATURE_OF_TAX
     * @return string
     */
    public function setNATURE_OF_TAX($_nATURE_OF_TAX)
    {
        return ($this->NATURE_OF_TAX = $_nATURE_OF_TAX);
    }
    /**
     * Get EU_TRANSACTION value
     * @return boolean|null
     */
    public function getEU_TRANSACTION()
    {
        return $this->EU_TRANSACTION;
    }
    /**
     * Set EU_TRANSACTION value
     * @param boolean $_eU_TRANSACTION the EU_TRANSACTION
     * @return boolean
     */
    public function setEU_TRANSACTION($_eU_TRANSACTION)
    {
        return ($this->EU_TRANSACTION = $_eU_TRANSACTION);
    }
    /**
     * Get AUTHORITY_CATEGORY value
     * @return string|null
     */
    public function getAUTHORITY_CATEGORY()
    {
        return $this->AUTHORITY_CATEGORY;
    }
    /**
     * Set AUTHORITY_CATEGORY value
     * @param string $_aUTHORITY_CATEGORY the AUTHORITY_CATEGORY
     * @return string
     */
    public function setAUTHORITY_CATEGORY($_aUTHORITY_CATEGORY)
    {
        return ($this->AUTHORITY_CATEGORY = $_aUTHORITY_CATEGORY);
    }
    /**
     * Get AUTHORITY_OFFICIAL_NAME value
     * @return string|null
     */
    public function getAUTHORITY_OFFICIAL_NAME()
    {
        return $this->AUTHORITY_OFFICIAL_NAME;
    }
    /**
     * Set AUTHORITY_OFFICIAL_NAME value
     * @param string $_aUTHORITY_OFFICIAL_NAME the AUTHORITY_OFFICIAL_NAME
     * @return string
     */
    public function setAUTHORITY_OFFICIAL_NAME($_aUTHORITY_OFFICIAL_NAME)
    {
        return ($this->AUTHORITY_OFFICIAL_NAME = $_aUTHORITY_OFFICIAL_NAME);
    }
    /**
     * Get AUTHORITY_TYPE_ALIAS value
     * @return string|null
     */
    public function getAUTHORITY_TYPE_ALIAS()
    {
        return $this->AUTHORITY_TYPE_ALIAS;
    }
    /**
     * Set AUTHORITY_TYPE_ALIAS value
     * @param string $_aUTHORITY_TYPE_ALIAS the AUTHORITY_TYPE_ALIAS
     * @return string
     */
    public function setAUTHORITY_TYPE_ALIAS($_aUTHORITY_TYPE_ALIAS)
    {
        return ($this->AUTHORITY_TYPE_ALIAS = $_aUTHORITY_TYPE_ALIAS);
    }
    /**
     * Get AUTHORITY_UUID value
     * @return string|null
     */
    public function getAUTHORITY_UUID()
    {
        return $this->AUTHORITY_UUID;
    }
    /**
     * Set AUTHORITY_UUID value
     * @param string $_aUTHORITY_UUID the AUTHORITY_UUID
     * @return string
     */
    public function setAUTHORITY_UUID($_aUTHORITY_UUID)
    {
        return ($this->AUTHORITY_UUID = $_aUTHORITY_UUID);
    }
    /**
     * Get RELATED_LINE_NUMBER value
     * @return decimal|null
     */
    public function getRELATED_LINE_NUMBER()
    {
        return $this->RELATED_LINE_NUMBER;
    }
    /**
     * Set RELATED_LINE_NUMBER value
     * @param decimal $_rELATED_LINE_NUMBER the RELATED_LINE_NUMBER
     * @return decimal
     */
    public function setRELATED_LINE_NUMBER($_rELATED_LINE_NUMBER)
    {
        return ($this->RELATED_LINE_NUMBER = $_rELATED_LINE_NUMBER);
    }
    /**
     * Get RELATED_ALLOCATION_LINE_NUMBER value
     * @return decimal|null
     */
    public function getRELATED_ALLOCATION_LINE_NUMBER()
    {
        return $this->RELATED_ALLOCATION_LINE_NUMBER;
    }
    /**
     * Set RELATED_ALLOCATION_LINE_NUMBER value
     * @param decimal $_rELATED_ALLOCATION_LINE_NUMBER the RELATED_ALLOCATION_LINE_NUMBER
     * @return decimal
     */
    public function setRELATED_ALLOCATION_LINE_NUMBER($_rELATED_ALLOCATION_LINE_NUMBER)
    {
        return ($this->RELATED_ALLOCATION_LINE_NUMBER = $_rELATED_ALLOCATION_LINE_NUMBER);
    }
    /**
     * Get RULE_REPORTING_CATEGORY value
     * @return string|null
     */
    public function getRULE_REPORTING_CATEGORY()
    {
        return $this->RULE_REPORTING_CATEGORY;
    }
    /**
     * Set RULE_REPORTING_CATEGORY value
     * @param string $_rULE_REPORTING_CATEGORY the RULE_REPORTING_CATEGORY
     * @return string
     */
    public function setRULE_REPORTING_CATEGORY($_rULE_REPORTING_CATEGORY)
    {
        return ($this->RULE_REPORTING_CATEGORY = $_rULE_REPORTING_CATEGORY);
    }
    /**
     * Get TAX_TREATMENT value
     * @return string|null
     */
    public function getTAX_TREATMENT()
    {
        return $this->TAX_TREATMENT;
    }
    /**
     * Set TAX_TREATMENT value
     * @param string $_tAX_TREATMENT the TAX_TREATMENT
     * @return string
     */
    public function setTAX_TREATMENT($_tAX_TREATMENT)
    {
        return ($this->TAX_TREATMENT = $_tAX_TREATMENT);
    }
    /**
     * Get AUTHORITY_CURRENCY_CODE value
     * @return string|null
     */
    public function getAUTHORITY_CURRENCY_CODE()
    {
        return $this->AUTHORITY_CURRENCY_CODE;
    }
    /**
     * Set AUTHORITY_CURRENCY_CODE value
     * @param string $_aUTHORITY_CURRENCY_CODE the AUTHORITY_CURRENCY_CODE
     * @return string
     */
    public function setAUTHORITY_CURRENCY_CODE($_aUTHORITY_CURRENCY_CODE)
    {
        return ($this->AUTHORITY_CURRENCY_CODE = $_aUTHORITY_CURRENCY_CODE);
    }
    /**
     * Get CURRENCY_CONVERSION value
     * @return KPMGStructCurrencyConversionType|null
     */
    public function getCURRENCY_CONVERSION()
    {
        return $this->CURRENCY_CONVERSION;
    }
    /**
     * Set CURRENCY_CONVERSION value
     * @param KPMGStructCurrencyConversionType $_cURRENCY_CONVERSION the CURRENCY_CONVERSION
     * @return KPMGStructCurrencyConversionType
     */
    public function setCURRENCY_CONVERSION($_cURRENCY_CONVERSION)
    {
        return ($this->CURRENCY_CONVERSION = $_cURRENCY_CONVERSION);
    }
    /**
     * Get EXEMPT_AMOUNT value
     * @return KPMGStructConvertedCurrencyAmountType|null
     */
    public function getEXEMPT_AMOUNT()
    {
        return $this->EXEMPT_AMOUNT;
    }
    /**
     * Set EXEMPT_AMOUNT value
     * @param KPMGStructConvertedCurrencyAmountType $_eXEMPT_AMOUNT the EXEMPT_AMOUNT
     * @return KPMGStructConvertedCurrencyAmountType
     */
    public function setEXEMPT_AMOUNT($_eXEMPT_AMOUNT)
    {
        return ($this->EXEMPT_AMOUNT = $_eXEMPT_AMOUNT);
    }
    /**
     * Get GROSS_AMOUNT value
     * @return KPMGStructConvertedCurrencyAmountType|null
     */
    public function getGROSS_AMOUNT()
    {
        return $this->GROSS_AMOUNT;
    }
    /**
     * Set GROSS_AMOUNT value
     * @param KPMGStructConvertedCurrencyAmountType $_gROSS_AMOUNT the GROSS_AMOUNT
     * @return KPMGStructConvertedCurrencyAmountType
     */
    public function setGROSS_AMOUNT($_gROSS_AMOUNT)
    {
        return ($this->GROSS_AMOUNT = $_gROSS_AMOUNT);
    }
    /**
     * Get NON_TAXABLE_BASIS value
     * @return KPMGStructConvertedCurrencyAmountType|null
     */
    public function getNON_TAXABLE_BASIS()
    {
        return $this->NON_TAXABLE_BASIS;
    }
    /**
     * Set NON_TAXABLE_BASIS value
     * @param KPMGStructConvertedCurrencyAmountType $_nON_TAXABLE_BASIS the NON_TAXABLE_BASIS
     * @return KPMGStructConvertedCurrencyAmountType
     */
    public function setNON_TAXABLE_BASIS($_nON_TAXABLE_BASIS)
    {
        return ($this->NON_TAXABLE_BASIS = $_nON_TAXABLE_BASIS);
    }
    /**
     * Get TAXABLE_BASIS value
     * @return KPMGStructConvertedCurrencyAmountType|null
     */
    public function getTAXABLE_BASIS()
    {
        return $this->TAXABLE_BASIS;
    }
    /**
     * Set TAXABLE_BASIS value
     * @param KPMGStructConvertedCurrencyAmountType $_tAXABLE_BASIS the TAXABLE_BASIS
     * @return KPMGStructConvertedCurrencyAmountType
     */
    public function setTAXABLE_BASIS($_tAXABLE_BASIS)
    {
        return ($this->TAXABLE_BASIS = $_tAXABLE_BASIS);
    }
    /**
     * Get TAX_AMOUNT value
     * @return KPMGStructConvertedCurrencyAmountType|null
     */
    public function getTAX_AMOUNT()
    {
        return $this->TAX_AMOUNT;
    }
    /**
     * Set TAX_AMOUNT value
     * @param KPMGStructConvertedCurrencyAmountType $_tAX_AMOUNT the TAX_AMOUNT
     * @return KPMGStructConvertedCurrencyAmountType
     */
    public function setTAX_AMOUNT($_tAX_AMOUNT)
    {
        return ($this->TAX_AMOUNT = $_tAX_AMOUNT);
    }
    /**
     * Get FEE value
     * @return KPMGStructFeeType|null
     */
    public function getFEE()
    {
        return $this->FEE;
    }
    /**
     * Set FEE value
     * @param KPMGStructFeeType $_fEE the FEE
     * @return KPMGStructFeeType
     */
    public function setFEE($_fEE)
    {
        return ($this->FEE = $_fEE);
    }
    /**
     * Get TAX_DETERMINATION_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getTAX_DETERMINATION_DATE()
    {
        return $this->TAX_DETERMINATION_DATE;
    }
    /**
     * Set TAX_DETERMINATION_DATE value
     * @param YyyyMmDdDateType $_tAX_DETERMINATION_DATE the TAX_DETERMINATION_DATE
     * @return YyyyMmDdDateType
     */
    public function setTAX_DETERMINATION_DATE($_tAX_DETERMINATION_DATE)
    {
        return ($this->TAX_DETERMINATION_DATE = $_tAX_DETERMINATION_DATE);
    }
    /**
     * Get TAX_POINT_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getTAX_POINT_DATE()
    {
        return $this->TAX_POINT_DATE;
    }
    /**
     * Set TAX_POINT_DATE value
     * @param YyyyMmDdDateType $_tAX_POINT_DATE the TAX_POINT_DATE
     * @return YyyyMmDdDateType
     */
    public function setTAX_POINT_DATE($_tAX_POINT_DATE)
    {
        return ($this->TAX_POINT_DATE = $_tAX_POINT_DATE);
    }
    /**
     * Get INCLUSIVE_TAX value
     * @return string|null
     */
    public function getINCLUSIVE_TAX()
    {
        return $this->INCLUSIVE_TAX;
    }
    /**
     * Set INCLUSIVE_TAX value
     * @param string $_iNCLUSIVE_TAX the INCLUSIVE_TAX
     * @return string
     */
    public function setINCLUSIVE_TAX($_iNCLUSIVE_TAX)
    {
        return ($this->INCLUSIVE_TAX = $_iNCLUSIVE_TAX);
    }
    /**
     * Get LICENSES value
     * @return KPMGStructOutdataLicensesType|null
     */
    public function getLICENSES()
    {
        return $this->LICENSES;
    }
    /**
     * Set LICENSES value
     * @param KPMGStructOutdataLicensesType $_lICENSES the LICENSES
     * @return KPMGStructOutdataLicensesType
     */
    public function setLICENSES($_lICENSES)
    {
        return ($this->LICENSES = $_lICENSES);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructOutdataTaxType
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
