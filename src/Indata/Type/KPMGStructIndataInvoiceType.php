<?php
/**
 * File for class KPMGStructIndataInvoiceType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructIndataInvoiceType originally named IndataInvoiceType
 * Documentation : Serves as the container for an individual invoice. Each batch can contain multiple invoices.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructIndataInvoiceType extends KPMGWsdlClass
{
    /**
     * The ALLOCATION_GROUP_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Name of the Allocation Group to use for this transaction. Named Allocations will be looked up in this group.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $ALLOCATION_GROUP_NAME;
    /**
     * The ALLOCATION_GROUP_OWNER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Name of the Company owning the Allocation Group to use for this transaction. The named Allocation Group will be looked up in this company's data.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $ALLOCATION_GROUP_OWNER;
    /**
     * The ALLOCATION_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Name of the Allocation to use for this transaction. Named Allocations will be looked up in the specified group owned by the specified company - see above. Company default owner and group will be used if not specified in the transaction. Allocations are dated, so the named version active as of the <INVOICE_DATE> will be used. If none match, a message will be added to output indicating an active named Allocation was not found.Note: Allocation processing can be overridden at the line level. See <LINE>.<IS_ALLOCATABLE>.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $ALLOCATION_NAME;
    /**
     * The AUTO_CREATE_CERTIFICATES
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether or not to create exemption certificates automatically. Automatic creation occurs when an exemption is forced by the elements being passed into the system, but no existing certificate is on file. This element overrides Company Preferences that determine whether or not exemption certificates are created automatically.
     * @var BooleanType
     */
    public $AUTO_CREATE_CERTIFICATES;
    /**
     * The AUTO_CREATE_CUSTOMERS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether or not customers are created automatically when transactions are entered into the system. Exemption certificates can then be associated with these customers. This element overrides Company Preferences that determine whether or not customers are created automatically.
     * @var BooleanType
     */
    public $AUTO_CREATE_CUSTOMERS;
    /**
     * The BASIS_PERCENT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A percentage of the gross amount of the line used in tax calculation. .5 is equal to 50%, .6 is equal to 60%, and so on.If this element is provided, it overrides any data found on a tax rule or exemption certificate applied to this transaction.
     * @var NillableDecimalType
     */
    public $BASIS_PERCENT;
    /**
     * The BILL_TO
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructZoneAddressType
     */
    public $BILL_TO;
    /**
     * The BUYER_PRIMARY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructZoneAddressType
     */
    public $BUYER_PRIMARY;
    /**
     * The CALLING_SYSTEM_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A pass-through element that contains a descriptor of the calling system sending the transaction.<bold>Note</bold>: ONESOURCE Indirect Tax Determination supports two audit keys to enable the lookup of audit records. The two combinations are as follows:HOST_SYSTEMCALLING_SYSTEM_NUMBERUNIQUE_INVOICE_NUMBERorMERCHANT_IDINVOICE_NUMINVOICE_DATEConfiguration parameters can modify which keys are used and in which order. See Sabrix Config and then contact Customer Support for more information.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $CALLING_SYSTEM_NUMBER;
    /**
     * The CALCULATION_DIRECTION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : There are three calculation directions, each using different elements in the calculation: * Forward (F): This calculation uses GROSS_AMOUNT to determine tax. * Reverse-from-tax (R): This calculation uses TAX_AMOUNT (and optionally GROSS_AMOUNT) to determine how the tax amount should be distributed across authorities. Determination also computes a calculated gross amount. * Reverse-from-total (T): This uses TAX_PLUS_GROSS (and optionally GROSS_AMOUNT) to determine the tax amount and how it should be distributed across authorities. Determination also computes a calculated gross amount.(For more information, see the line-level output element GROSS_AMOUNT.
     * - maxLength : 1
     * - minLength : 0
     * @var string
     */
    public $CALCULATION_DIRECTION;
    /**
     * The COMPANY_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The internal Determination ID of the merchant.
     * @var long
     */
    public $COMPANY_ID;
    /**
     * The COMPANY_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The name of the company running the transaction. ONESOURCE Indirect Tax Determination uses this element to apply the correct company-specific settings for the transaction.Required if EXTERNAL_COMPANY_ID is not populated.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $COMPANY_NAME;
    /**
     * The COMPANY_ROLE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The role the company plays in a given transaction: Buyer (B). Each role results in different transaction tax and reporting requirements.
     * - maxLength : 20
     * - minLength : 0
     * @var string
     */
    public $COMPANY_ROLE;
    /**
     * The COUNTRY_OF_ORIGIN
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The country where the goods were manufactured. Used in Intrastat reporting.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $COUNTRY_OF_ORIGIN;
    /**
     * The CURRENCY_CODE
     * Meta informations extracted from the WSDL
     * - documentation : The currency associated with a transaction.
     * - maxLength : 3
     * - minLength : 0
     * @var string
     */
    public $CURRENCY_CODE;
    /**
     * The CUSTOMER_GROUP_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Name of the Customer Group to use for this transaction. Customers will be looked up in this group, overriding the settings of the transacting company's Company Preferences. Note that the list of valid groups for this element consists of Customer Groups owned by the transacting company and its ancestors.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $CUSTOMER_GROUP_NAME;
    /**
     * The CUSTOMER_GROUP_OWNER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Name of the Company owning the Customer Group to use for this transaction. This company must be a parent or grandparent of the transacting company.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $CUSTOMER_GROUP_OWNER;
    /**
     * The CUSTOMER_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The customer's name. Used in both VAT Registration Group member and Exemption Certificate Customer/License Customer matching:For VAT Registration Group members, this element is used as a fall-back if a match cannot be made using EXTERNAL_COMPANY_ID or CUSTOMER_NUMBER.For Exemption Certificate and License customer lookups, this element is no longer used by default; use CUSTOMER_NUMBER instead. To use CUSTOMER_NAME as well, set the Sabrix Config parameter STRICT_CUSTOMER_LOOKUP to N. See Sabrix Config for more information.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $CUSTOMER_NAME;
    /**
     * The CUSTOMER_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The customer's number as passed in by the ERP system.This element's value is used by Determination when searching for exemption certificates or licenses that are relevant to a transaction, or to auto-create a customer or an associated certificate if the system is so configured.This element's value can also be used to match VAT Registration Group members if no match is found using EXTERNAL_COMPANY_ID.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $CUSTOMER_NUMBER;
    /**
     * The DELIVERY_TERMS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates how goods were shipped and where title was transferred. Valid values include Incoterms 2000 codes and any other customer-defined codes specified on the Delivery Terms page.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $DELIVERY_TERMS;
    /**
     * The DEPT_OF_CONSIGN
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Department of consignment. Used in Intrastat reporting.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $DEPT_OF_CONSIGN;
    /**
     * The DOCUMENT_TYPE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Document Type references either a virtual or a physical document created and managed by the ERP system. Examples include invoice, order, or credit memo. The document type represents the type of transaction to be processed, including defining the types of entities in the transaction. For example, a sales quote will have different attributes than an invoice for purchased goods.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $DOCUMENT_TYPE;
    /**
     * The END_USE
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - documentation : End use of the product. Intended for use by Rule Qualifiers to govern the applicability of a rule.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $END_USE;
    /**
     * The END_USER_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Identifier of the user who made a change to the invoice in the calling ERP system.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $END_USER_NAME;
    /**
     * The ESTABLISHMENTS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructEstablishmentsType
     */
    public $ESTABLISHMENTS;
    /**
     * The EXEMPT_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructAmountType
     */
    public $EXEMPT_AMOUNT;
    /**
     * The EXEMPT_CERTIFICATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructCertificateLocationType
     */
    public $EXEMPT_CERTIFICATE;
    /**
     * The EXEMPT_REASON
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructCertificateLocationType
     */
    public $EXEMPT_REASON;
    /**
     * The EXTERNAL_COMPANY_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The unique identifier used by your business application to indicate which company to use in Determination. This identifier also distinguishes between different calling applications that may be used by your company. This element may be passed at the batch level or with each invoice, and is passed through to the Determination output and the audit tables.Required if COMPANY_NAME is not populated.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $EXTERNAL_COMPANY_ID;
    /**
     * The FILTER_GROUP_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The name of the TransEditor Group to be applied, if different than the company default.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $FILTER_GROUP_NAME;
    /**
     * The FILTER_GROUP_OWNER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The name of the company owning the TransEditor Group specified in FILTER_GROUP_NAME, if different than the transacting company.
     * - maxLength : 30
     * - minLength : 1
     * @var string
     */
    public $FILTER_GROUP_OWNER;
    /**
     * The FISCAL_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Stores a transaction by a fiscal date in addition to the invoice date. For example, you can use FISCAL_DATE to indicate when revenue was recognized.
     * @var YyyyMmDdDateType
     */
    public $FISCAL_DATE;
    /**
     * The FUNCTIONAL_CURRENCY_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Reserved for future use.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $FUNCTIONAL_CURRENCY_CODE;
    /**
     * The HOST_SYSTEM
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The name of the ERP instance sending the transaction.Note: Determination supports two audit keys to enable the lookup of audit records. The two combinations are as follows:HOST_SYSTEMCALLING_SYSTEM_NUMBERUNIQUE_INVOICE_NUMBERorMERCHANT_IDINVOICE_NUMINVOICE_DATEConfiguration parameters can modify which keys are used and in which order. See Sabrix Config and then contact Customer Support for more information.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $HOST_SYSTEM;
    /**
     * The INCLUSIVE_TAX_INDICATORS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructInclusiveTaxIndicatorsType
     */
    public $INCLUSIVE_TAX_INDICATORS;
    /**
     * The INPUT_RECOVERY_TYPE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A pass-through element which has been deprecated in favor of enhanced VAT calculation logic.See INPUT_RECOVERY_AMOUNT/PERCENT and Managing VAT Recoverability and Working with Rules for more information.
     * - maxLength : 50
     * - minLength : 1
     * @var string
     */
    public $INPUT_RECOVERY_TYPE;
    /**
     * The INVOICE_DATE
     * Meta informations extracted from the WSDL
     * - documentation : The date of the invoice.Note: Determination supports two audit keys to enable the lookup of audit records. The two combinations are as follows:HOST_SYSTEMCALLING_SYSTEM_NUMBERUNIQUE_INVOICE_NUMBERorMERCHANT_IDINVOICE_NUMINVOICE_DATEConfiguration parameters can modify which keys are used and in which order. See Sabrix Config and then contact Sabrix Technical Support for more information.
     * @var YyyyMmDdDateType
     */
    public $INVOICE_DATE;
    /**
     * The INVOICE_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This number is passed through to the audit tables and acts as a reference in the audit tables as well as for credit transactions. Required if IS_AUDITED is true.Note: Determination supports two audit keys to enable the lookup of audit records. The two combinations are as follows:HOST_SYSTEMCALLING_SYSTEM_NUMBERUNIQUE_INVOICE_NUMBERorMERCHANT_IDINVOICE_NUMINVOICE_DATEConfiguration parameters can modify which keys are used and in which order. See Sabrix Config and then contact Sabrix Technical Support for more information.
     * - maxLength : 200
     * - minLength : 0
     * @var string
     */
    public $INVOICE_NUMBER;
    /**
     * The IS_AUDITED
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The audit status; indicates whether a transaction should be saved to the audit tables. To avoid having records accidentally added to the audit record, the default is false.
     * @var BooleanType
     */
    public $IS_AUDITED;
    /**
     * The IS_AUDIT_UPDATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether or not to permit audit table update instead of overwrite. Updates provide for "Line at a Time" invoice submissions. The effect is that a duplicate invoice submission updates the invoice level record and replaces any matching line and tax level as determined by the LINE_NUMBER. Any new line numbers that are submitted will be added to the existing invoice in the audit tables.
     * @var BooleanType
     */
    public $IS_AUDIT_UPDATE;
    /**
     * The IS_BUSINESS_SUPPLY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether a supply is being used for business. In Brazilian ICMS and IPI transactions, whether a supply is being used for business or not impacts the tax and reporting requirements of the buyer and the seller.
     * @var BooleanType
     */
    public $IS_BUSINESS_SUPPLY;
    /**
     * The IS_CREDIT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether the current transaction is a credit transaction as identified by your ERP system. true indicates a credit transaction for both auditing and reporting purposes. When set to true, any amounts on the transaction should be passed in as negative values.
     * @var BooleanType
     */
    public $IS_CREDIT;
    /**
     * The IS_EXEMPT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructFlagAddressType
     */
    public $IS_EXEMPT;
    /**
     * The IS_NO_TAX
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructFlagAddressType
     */
    public $IS_NO_TAX;
    /**
     * The IS_REPORTED
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Controls whether the invoice being processed should be included in reports. An invoice can be included in the audit tables but restricted from appearing on VAT and other reports by passing in (N)o for this element. The default value is (Y)es.
     * @var BooleanType
     */
    public $IS_REPORTED;
    /**
     * The IS_REVERSED
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether the current transaction is part of an ERP-initiated reversal process.
     * @var BooleanType
     */
    public $IS_REVERSED;
    /**
     * The IS_ROUNDING
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates that the calling application requires Determination to return rounded amounts in the Output XML and save rounded amounts to the Audit Database. Rounding is performed within Determination based on the currency rules or specs applied to the transaction: see Working with Currencies. Valid values are false (return un-rounded amounts) and true (return rounded amounts). The default is true.Note: Sabrix always returns un-rounded amounts in the *_AMOUNT.UNROUNDED_*_AMOUNT output XML elements. This element only modifies the behavior of the *_AMOUNT output XML elements. For example, TAX_AMOUNT.UNROUNDED_DOCUMENT_AMOUNT will always contain an un-rounded amount, while TAX_AMOUNT.DOCUMENT_AMOUNT will contain a rounded amount if this parameter is true and an un-rounded amount if this parameter is false.
     * @var BooleanType
     */
    public $IS_ROUNDING;
    /**
     * The IS_SIMPLIFICATION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates an override to any triangulation simplification determinations.If set to true, you must pass registrations in for the Buyer, Seller, and Middleman in the transaction or a warning message will be returned.
     * @var BooleanType
     */
    public $IS_SIMPLIFICATION;
    /**
     * The LICENSES
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructIndataLicensesType
     */
    public $LICENSES;
    /**
     * The LOCATION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructLocationNameType
     */
    public $LOCATION;
    /**
     * The LOCATION_SET
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A named set of pre-defined locations defined by the LOCATION element. Instead of specifying several locations using the LOCATION element, you can specify all the locations in a transaction using a single LOCATION_SET element.See Understanding Location Taxability for more information.
     * - maxLength : 60
     * - minLength : 1
     * @var string
     */
    public $LOCATION_SET;
    /**
     * The MIDDLEMAN
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructZoneAddressType
     */
    public $MIDDLEMAN;
    /**
     * The MODE_OF_TRANSPORT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The method of transport. Used for Intrastat reporting in the EU.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $MODE_OF_TRANSPORT;
    /**
     * The MOVEMENT_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates the date of a movement of goods, such as via a pipeline, or the data of issue. Used in rule qualifiers and in date determination rules.
     * @var YyyyMmDdDateType
     */
    public $MOVEMENT_DATE;
    /**
     * The MOVEMENT_TYPE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates the type of movement, such as a pipeline. Used in rule qualifiers and in date determination rules.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $MOVEMENT_TYPE;
    /**
     * The NATURE_OF_TRANSACTION_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Used in Intrastat reports in all countries in the EU.
     * - maxLength : 2
     * - minLength : 0
     * @var string
     */
    public $NATURE_OF_TRANSACTION_CODE;
    /**
     * The ORDER_ACCEPTANCE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructZoneAddressType
     */
    public $ORDER_ACCEPTANCE;
    /**
     * The ORDER_ORIGIN
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructZoneAddressType
     */
    public $ORDER_ORIGIN;
    /**
     * The ORIGINAL_DOCUMENT_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The original document id as shown on the document in the ERP system. Not used in calculations.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $ORIGINAL_DOCUMENT_ID;
    /**
     * The ORIGINAL_DOCUMENT_ITEM
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The original document item as shown on the document in the ERP system. Not used in calculations.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $ORIGINAL_DOCUMENT_ITEM;
    /**
     * The ORIGINAL_DOCUMENT_TYPE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The original document type as shown on the document in the ERP system. Not used in calculations.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $ORIGINAL_DOCUMENT_TYPE;
    /**
     * The ORIGINAL_INVOICE_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The date of the original invoice. Used in Date Determination Rules.
     * @var YyyyMmDdDateType
     */
    public $ORIGINAL_INVOICE_DATE;
    /**
     * The ORIGINAL_INVOICE_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This number enables a credit invoice to be associated with an original invoice in the audit tables for reporting purposes.
     * - maxLength : 200
     * - minLength : 0
     * @var string
     */
    public $ORIGINAL_INVOICE_NUMBER;
    /**
     * The ORIGINAL_MOVEMENT_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The date of the original movement. Used in Date Determination Rules.
     * @var YyyyMmDdDateType
     */
    public $ORIGINAL_MOVEMENT_DATE;
    /**
     * The OVERRIDE_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructAmountType
     */
    public $OVERRIDE_AMOUNT;
    /**
     * The OVERRIDE_RATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructAmountType
     */
    public $OVERRIDE_RATE;
    /**
     * The POINT_OF_TITLE_TRANSFER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The Point of Title Transfer location. Valid values are (D)estination, (O)rigin, or (I)n transit. If no POINT_OF_TITLE_TRANSFER or DELIVERY_TERMS element is passed in at either the Invoice or Line level, the default for the Invoice is set to In Transit.See Specifying the Point of Title Transfer for more information about Delivery Terms processing logic.
     * - maxLength : 1
     * - minLength : 0
     * @var string
     */
    public $POINT_OF_TITLE_TRANSFER;
    /**
     * The PORT_OF_ENTRY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The Port of Entry, used for Intrastat reporting in the EU.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $PORT_OF_ENTRY;
    /**
     * The PORT_OF_LOADING
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The Port or Airport of Departure; used for Intrastat reporting in the EU.
     * - maxLength : 5
     * - minLength : 0
     * @var string
     */
    public $PORT_OF_LOADING;
    /**
     * The PRODUCT_MAPPING_GROUP_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The name of the Product Mapping Group that owns the product cross-reference.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $PRODUCT_MAPPING_GROUP_NAME;
    /**
     * The PRODUCT_MAPPING_GROUP_OWNER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The company owning the Product Mapping Group.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $PRODUCT_MAPPING_GROUP_OWNER;
    /**
     * The REGIME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The Regime, used for French Intrastat reports.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $REGIME;
    /**
     * The REGISTRATIONS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructRegistrationsType
     */
    public $REGISTRATIONS;
    /**
     * The SELLER_PRIMARY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructZoneAddressType
     */
    public $SELLER_PRIMARY;
    /**
     * The SHIP_FROM
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructZoneAddressType
     */
    public $SHIP_FROM;
    /**
     * The SHIP_TO
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructZoneAddressType
     */
    public $SHIP_TO;
    /**
     * The STATISTICAL_PROCEDURE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A statistical indicator used for large shipments. Used for Intrastat filing purposes in the EU.
     * - maxLength : 6
     * - minLength : 0
     * @var string
     */
    public $STATISTICAL_PROCEDURE;
    /**
     * The SUPPLY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructZoneAddressType
     */
    public $SUPPLY;
    /**
     * The SUPPLY_EXEMPT_PERCENT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructAmountType
     */
    public $SUPPLY_EXEMPT_PERCENT;
    /**
     * The TAX_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : An optional code which can be specified in the transaction to match a Tax Code specified on a Rule.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $TAX_CODE;
    /**
     * The TAX_DETERMINATION_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The date used in selecting all applicable system configuration including tax rates and rules. Overrides any Sabrix-determined date.
     * @var YyyyMmDdDateType
     */
    public $TAX_DETERMINATION_DATE;
    /**
     * The TAX_EXCHANGE_RATE_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The date used in selecting currency conversion data. Overrides any Sabrix-determined date.
     * @var YyyyMmDdDateType
     */
    public $TAX_EXCHANGE_RATE_DATE;
    /**
     * The TAX_POINT_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The date the signifies when the liability for tax arises. Overrides any Sabrix-determined date.
     * @var YyyyMmDdDateType
     */
    public $TAX_POINT_DATE;
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
     * The TAX_TYPE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructAddressType
     */
    public $TAX_TYPE;
    /**
     * The TITLE_TRANSFER_LOCATION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A pass-through element indicating where the location where title transferred for the associated delivery term.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $TITLE_TRANSFER_LOCATION;
    /**
     * The TRANSACTION_TYPE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The transaction type, which is required to apply the correct type of taxes to the transaction. In many countries, there are two transaction types: Goods and Services. In EU and other countries, additional transaction types apply.Valid types are:AT - Ancillary Transport ServicesCL - Customer Location ServicesDS - Default ServicesES - Electronic ServicesGS - GoodsIN - Installation ServicesIS - Intermediary ServiceMV - Movement for ExcisePC - Prime ContractingPP - Physical PerformanceRR - RentalSI - Supplied and Installed GoodsT1 - Chain Transaction 1T2 - Chain Transaction 2TS- Transport ServicesWG - Work on GoodsFor a complete description of these transaction types, see Understanding Transaction Types.
     * - maxLength : 2
     * - minLength : 0
     * @var string
     */
    public $TRANSACTION_TYPE;
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
     * The VENDOR_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The vendor's name. If this is a B2B transaction and the Company is the buyer, the Company becomes the Customer and the Vendor becomes the Company for the transaction.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $VENDOR_NAME;
    /**
     * The VENDOR_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The vendor's number. If this is a B2B transaction and the Company is the buyer, the Company becomes the Customer and the Vendor becomes the Company for the transaction.
     * - maxLength : 20
     * - minLength : 0
     * @var string
     */
    public $VENDOR_NUMBER;
    /**
     * The VENDOR_TAX
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The amount of tax charged by the Vendor on an Accounts Payable invoice.
     * @var NillableDecimalType
     */
    public $VENDOR_TAX;
    /**
     * The UNIQUE_INVOICE_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The unique identifier for this invoice, as assigned by the ERP system.Note: Determination supports two audit keys to enable the lookup of audit records. The two combinations are as follows:HOST_SYSTEMCALLING_SYSTEM_NUMBERUNIQUE_INVOICE_NUMBERorMERCHANT_IDINVOICE_NUMINVOICE_DATEConfiguration parameters can modify which keys are used and in which order. See Sabrix Config and then contact Technical Support for more information.Note: Unique Invoice Numbers must be unique within an individual batch of invoices. To re-process an invoice, include it in another batch.
     * - maxLength : 500
     * - minLength : 0
     * @var string
     */
    public $UNIQUE_INVOICE_NUMBER;
    /**
     * The USER_ELEMENT
     * Meta informations extracted from the WSDL
     * - maxOccurs : 50
     * - minOccurs : 0
     * @var KPMGStructUserElementType
     */
    public $USER_ELEMENT;
    /**
     * The LINE
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * @var KPMGStructIndataLineType
     */
    public $LINE;
    /**
     * Constructor method for IndataInvoiceType
     * @see parent::__construct()
     * @param string $_aLLOCATION_GROUP_NAME
     * @param string $_aLLOCATION_GROUP_OWNER
     * @param string $_aLLOCATION_NAME
     * @param BooleanType $_aUTO_CREATE_CERTIFICATES
     * @param BooleanType $_aUTO_CREATE_CUSTOMERS
     * @param NillableDecimalType $_bASIS_PERCENT
     * @param KPMGStructZoneAddressType $_bILL_TO
     * @param KPMGStructZoneAddressType $_bUYER_PRIMARY
     * @param string $_cALLING_SYSTEM_NUMBER
     * @param string $_cALCULATION_DIRECTION
     * @param long $_cOMPANY_ID
     * @param string $_cOMPANY_NAME
     * @param string $_cOMPANY_ROLE
     * @param string $_cOUNTRY_OF_ORIGIN
     * @param string $_cURRENCY_CODE
     * @param string $_cUSTOMER_GROUP_NAME
     * @param string $_cUSTOMER_GROUP_OWNER
     * @param string $_cUSTOMER_NAME
     * @param string $_cUSTOMER_NUMBER
     * @param string $_dELIVERY_TERMS
     * @param string $_dEPT_OF_CONSIGN
     * @param string $_dOCUMENT_TYPE
     * @param string $_eND_USE
     * @param string $_eND_USER_NAME
     * @param KPMGStructEstablishmentsType $_eSTABLISHMENTS
     * @param KPMGStructAmountType $_eXEMPT_AMOUNT
     * @param KPMGStructCertificateLocationType $_eXEMPT_CERTIFICATE
     * @param KPMGStructCertificateLocationType $_eXEMPT_REASON
     * @param string $_eXTERNAL_COMPANY_ID
     * @param string $_fILTER_GROUP_NAME
     * @param string $_fILTER_GROUP_OWNER
     * @param YyyyMmDdDateType $_fISCAL_DATE
     * @param string $_fUNCTIONAL_CURRENCY_CODE
     * @param string $_hOST_SYSTEM
     * @param KPMGStructInclusiveTaxIndicatorsType $_iNCLUSIVE_TAX_INDICATORS
     * @param string $_iNPUT_RECOVERY_TYPE
     * @param YyyyMmDdDateType $_iNVOICE_DATE
     * @param string $_iNVOICE_NUMBER
     * @param BooleanType $_iS_AUDITED
     * @param BooleanType $_iS_AUDIT_UPDATE
     * @param BooleanType $_iS_BUSINESS_SUPPLY
     * @param BooleanType $_iS_CREDIT
     * @param KPMGStructFlagAddressType $_iS_EXEMPT
     * @param KPMGStructFlagAddressType $_iS_NO_TAX
     * @param BooleanType $_iS_REPORTED
     * @param BooleanType $_iS_REVERSED
     * @param BooleanType $_iS_ROUNDING
     * @param BooleanType $_iS_SIMPLIFICATION
     * @param KPMGStructIndataLicensesType $_lICENSES
     * @param KPMGStructLocationNameType $_lOCATION
     * @param string $_lOCATION_SET
     * @param KPMGStructZoneAddressType $_mIDDLEMAN
     * @param string $_mODE_OF_TRANSPORT
     * @param YyyyMmDdDateType $_mOVEMENT_DATE
     * @param string $_mOVEMENT_TYPE
     * @param string $_nATURE_OF_TRANSACTION_CODE
     * @param KPMGStructZoneAddressType $_oRDER_ACCEPTANCE
     * @param KPMGStructZoneAddressType $_oRDER_ORIGIN
     * @param string $_oRIGINAL_DOCUMENT_ID
     * @param string $_oRIGINAL_DOCUMENT_ITEM
     * @param string $_oRIGINAL_DOCUMENT_TYPE
     * @param YyyyMmDdDateType $_oRIGINAL_INVOICE_DATE
     * @param string $_oRIGINAL_INVOICE_NUMBER
     * @param YyyyMmDdDateType $_oRIGINAL_MOVEMENT_DATE
     * @param KPMGStructAmountType $_oVERRIDE_AMOUNT
     * @param KPMGStructAmountType $_oVERRIDE_RATE
     * @param string $_pOINT_OF_TITLE_TRANSFER
     * @param string $_pORT_OF_ENTRY
     * @param string $_pORT_OF_LOADING
     * @param string $_pRODUCT_MAPPING_GROUP_NAME
     * @param string $_pRODUCT_MAPPING_GROUP_OWNER
     * @param string $_rEGIME
     * @param KPMGStructRegistrationsType $_rEGISTRATIONS
     * @param KPMGStructZoneAddressType $_sELLER_PRIMARY
     * @param KPMGStructZoneAddressType $_sHIP_FROM
     * @param KPMGStructZoneAddressType $_sHIP_TO
     * @param string $_sTATISTICAL_PROCEDURE
     * @param KPMGStructZoneAddressType $_sUPPLY
     * @param KPMGStructAmountType $_sUPPLY_EXEMPT_PERCENT
     * @param string $_tAX_CODE
     * @param YyyyMmDdDateType $_tAX_DETERMINATION_DATE
     * @param YyyyMmDdDateType $_tAX_EXCHANGE_RATE_DATE
     * @param YyyyMmDdDateType $_tAX_POINT_DATE
     * @param string $_tAX_TREATMENT
     * @param KPMGStructAddressType $_tAX_TYPE
     * @param string $_tITLE_TRANSFER_LOCATION
     * @param string $_tRANSACTION_TYPE
     * @param string $_vAT_GROUP_REGISTRATION
     * @param string $_vENDOR_NAME
     * @param string $_vENDOR_NUMBER
     * @param NillableDecimalType $_vENDOR_TAX
     * @param string $_uNIQUE_INVOICE_NUMBER
     * @param KPMGStructUserElementType $_uSER_ELEMENT
     * @param KPMGStructIndataLineType $_lINE
     * @return KPMGStructIndataInvoiceType
     */
    public function __construct($_aLLOCATION_GROUP_NAME = NULL,$_aLLOCATION_GROUP_OWNER = NULL,$_aLLOCATION_NAME = NULL,$_aUTO_CREATE_CERTIFICATES = NULL,$_aUTO_CREATE_CUSTOMERS = NULL,$_bASIS_PERCENT = NULL,$_bILL_TO = NULL,$_bUYER_PRIMARY = NULL,$_cALLING_SYSTEM_NUMBER = NULL,$_cALCULATION_DIRECTION = NULL,$_cOMPANY_ID = NULL,$_cOMPANY_NAME = NULL,$_cOMPANY_ROLE = NULL,$_cOUNTRY_OF_ORIGIN = NULL,$_cURRENCY_CODE = NULL,$_cUSTOMER_GROUP_NAME = NULL,$_cUSTOMER_GROUP_OWNER = NULL,$_cUSTOMER_NAME = NULL,$_cUSTOMER_NUMBER = NULL,$_dELIVERY_TERMS = NULL,$_dEPT_OF_CONSIGN = NULL,$_dOCUMENT_TYPE = NULL,$_eND_USE = NULL,$_eND_USER_NAME = NULL,$_eSTABLISHMENTS = NULL,$_eXEMPT_AMOUNT = NULL,$_eXEMPT_CERTIFICATE = NULL,$_eXEMPT_REASON = NULL,$_eXTERNAL_COMPANY_ID = NULL,$_fILTER_GROUP_NAME = NULL,$_fILTER_GROUP_OWNER = NULL,$_fISCAL_DATE = NULL,$_fUNCTIONAL_CURRENCY_CODE = NULL,$_hOST_SYSTEM = NULL,$_iNCLUSIVE_TAX_INDICATORS = NULL,$_iNPUT_RECOVERY_TYPE = NULL,$_iNVOICE_DATE = NULL,$_iNVOICE_NUMBER = NULL,$_iS_AUDITED = NULL,$_iS_AUDIT_UPDATE = NULL,$_iS_BUSINESS_SUPPLY = NULL,$_iS_CREDIT = NULL,$_iS_EXEMPT = NULL,$_iS_NO_TAX = NULL,$_iS_REPORTED = NULL,$_iS_REVERSED = NULL,$_iS_ROUNDING = NULL,$_iS_SIMPLIFICATION = NULL,$_lICENSES = NULL,$_lOCATION = NULL,$_lOCATION_SET = NULL,$_mIDDLEMAN = NULL,$_mODE_OF_TRANSPORT = NULL,$_mOVEMENT_DATE = NULL,$_mOVEMENT_TYPE = NULL,$_nATURE_OF_TRANSACTION_CODE = NULL,$_oRDER_ACCEPTANCE = NULL,$_oRDER_ORIGIN = NULL,$_oRIGINAL_DOCUMENT_ID = NULL,$_oRIGINAL_DOCUMENT_ITEM = NULL,$_oRIGINAL_DOCUMENT_TYPE = NULL,$_oRIGINAL_INVOICE_DATE = NULL,$_oRIGINAL_INVOICE_NUMBER = NULL,$_oRIGINAL_MOVEMENT_DATE = NULL,$_oVERRIDE_AMOUNT = NULL,$_oVERRIDE_RATE = NULL,$_pOINT_OF_TITLE_TRANSFER = NULL,$_pORT_OF_ENTRY = NULL,$_pORT_OF_LOADING = NULL,$_pRODUCT_MAPPING_GROUP_NAME = NULL,$_pRODUCT_MAPPING_GROUP_OWNER = NULL,$_rEGIME = NULL,$_rEGISTRATIONS = NULL,$_sELLER_PRIMARY = NULL,$_sHIP_FROM = NULL,$_sHIP_TO = NULL,$_sTATISTICAL_PROCEDURE = NULL,$_sUPPLY = NULL,$_sUPPLY_EXEMPT_PERCENT = NULL,$_tAX_CODE = NULL,$_tAX_DETERMINATION_DATE = NULL,$_tAX_EXCHANGE_RATE_DATE = NULL,$_tAX_POINT_DATE = NULL,$_tAX_TREATMENT = NULL,$_tAX_TYPE = NULL,$_tITLE_TRANSFER_LOCATION = NULL,$_tRANSACTION_TYPE = NULL,$_vAT_GROUP_REGISTRATION = NULL,$_vENDOR_NAME = NULL,$_vENDOR_NUMBER = NULL,$_vENDOR_TAX = NULL,$_uNIQUE_INVOICE_NUMBER = NULL,$_uSER_ELEMENT = NULL,$_lINE = NULL)
    {
        parent::__construct(array('ALLOCATION_GROUP_NAME'=>$_aLLOCATION_GROUP_NAME,'ALLOCATION_GROUP_OWNER'=>$_aLLOCATION_GROUP_OWNER,'ALLOCATION_NAME'=>$_aLLOCATION_NAME,'AUTO_CREATE_CERTIFICATES'=>$_aUTO_CREATE_CERTIFICATES,'AUTO_CREATE_CUSTOMERS'=>$_aUTO_CREATE_CUSTOMERS,'BASIS_PERCENT'=>$_bASIS_PERCENT,'BILL_TO'=>$_bILL_TO,'BUYER_PRIMARY'=>$_bUYER_PRIMARY,'CALLING_SYSTEM_NUMBER'=>$_cALLING_SYSTEM_NUMBER,'CALCULATION_DIRECTION'=>$_cALCULATION_DIRECTION,'COMPANY_ID'=>$_cOMPANY_ID,'COMPANY_NAME'=>$_cOMPANY_NAME,'COMPANY_ROLE'=>$_cOMPANY_ROLE,'COUNTRY_OF_ORIGIN'=>$_cOUNTRY_OF_ORIGIN,'CURRENCY_CODE'=>$_cURRENCY_CODE,'CUSTOMER_GROUP_NAME'=>$_cUSTOMER_GROUP_NAME,'CUSTOMER_GROUP_OWNER'=>$_cUSTOMER_GROUP_OWNER,'CUSTOMER_NAME'=>$_cUSTOMER_NAME,'CUSTOMER_NUMBER'=>$_cUSTOMER_NUMBER,'DELIVERY_TERMS'=>$_dELIVERY_TERMS,'DEPT_OF_CONSIGN'=>$_dEPT_OF_CONSIGN,'DOCUMENT_TYPE'=>$_dOCUMENT_TYPE,'END_USE'=>$_eND_USE,'END_USER_NAME'=>$_eND_USER_NAME,'ESTABLISHMENTS'=>$_eSTABLISHMENTS,'EXEMPT_AMOUNT'=>$_eXEMPT_AMOUNT,'EXEMPT_CERTIFICATE'=>$_eXEMPT_CERTIFICATE,'EXEMPT_REASON'=>$_eXEMPT_REASON,'EXTERNAL_COMPANY_ID'=>$_eXTERNAL_COMPANY_ID,'FILTER_GROUP_NAME'=>$_fILTER_GROUP_NAME,'FILTER_GROUP_OWNER'=>$_fILTER_GROUP_OWNER,'FISCAL_DATE'=>$_fISCAL_DATE,'FUNCTIONAL_CURRENCY_CODE'=>$_fUNCTIONAL_CURRENCY_CODE,'HOST_SYSTEM'=>$_hOST_SYSTEM,'INCLUSIVE_TAX_INDICATORS'=>$_iNCLUSIVE_TAX_INDICATORS,'INPUT_RECOVERY_TYPE'=>$_iNPUT_RECOVERY_TYPE,'INVOICE_DATE'=>$_iNVOICE_DATE,'INVOICE_NUMBER'=>$_iNVOICE_NUMBER,'IS_AUDITED'=>$_iS_AUDITED,'IS_AUDIT_UPDATE'=>$_iS_AUDIT_UPDATE,'IS_BUSINESS_SUPPLY'=>$_iS_BUSINESS_SUPPLY,'IS_CREDIT'=>$_iS_CREDIT,'IS_EXEMPT'=>$_iS_EXEMPT,'IS_NO_TAX'=>$_iS_NO_TAX,'IS_REPORTED'=>$_iS_REPORTED,'IS_REVERSED'=>$_iS_REVERSED,'IS_ROUNDING'=>$_iS_ROUNDING,'IS_SIMPLIFICATION'=>$_iS_SIMPLIFICATION,'LICENSES'=>$_lICENSES,'LOCATION'=>$_lOCATION,'LOCATION_SET'=>$_lOCATION_SET,'MIDDLEMAN'=>$_mIDDLEMAN,'MODE_OF_TRANSPORT'=>$_mODE_OF_TRANSPORT,'MOVEMENT_DATE'=>$_mOVEMENT_DATE,'MOVEMENT_TYPE'=>$_mOVEMENT_TYPE,'NATURE_OF_TRANSACTION_CODE'=>$_nATURE_OF_TRANSACTION_CODE,'ORDER_ACCEPTANCE'=>$_oRDER_ACCEPTANCE,'ORDER_ORIGIN'=>$_oRDER_ORIGIN,'ORIGINAL_DOCUMENT_ID'=>$_oRIGINAL_DOCUMENT_ID,'ORIGINAL_DOCUMENT_ITEM'=>$_oRIGINAL_DOCUMENT_ITEM,'ORIGINAL_DOCUMENT_TYPE'=>$_oRIGINAL_DOCUMENT_TYPE,'ORIGINAL_INVOICE_DATE'=>$_oRIGINAL_INVOICE_DATE,'ORIGINAL_INVOICE_NUMBER'=>$_oRIGINAL_INVOICE_NUMBER,'ORIGINAL_MOVEMENT_DATE'=>$_oRIGINAL_MOVEMENT_DATE,'OVERRIDE_AMOUNT'=>$_oVERRIDE_AMOUNT,'OVERRIDE_RATE'=>$_oVERRIDE_RATE,'POINT_OF_TITLE_TRANSFER'=>$_pOINT_OF_TITLE_TRANSFER,'PORT_OF_ENTRY'=>$_pORT_OF_ENTRY,'PORT_OF_LOADING'=>$_pORT_OF_LOADING,'PRODUCT_MAPPING_GROUP_NAME'=>$_pRODUCT_MAPPING_GROUP_NAME,'PRODUCT_MAPPING_GROUP_OWNER'=>$_pRODUCT_MAPPING_GROUP_OWNER,'REGIME'=>$_rEGIME,'REGISTRATIONS'=>$_rEGISTRATIONS,'SELLER_PRIMARY'=>$_sELLER_PRIMARY,'SHIP_FROM'=>$_sHIP_FROM,'SHIP_TO'=>$_sHIP_TO,'STATISTICAL_PROCEDURE'=>$_sTATISTICAL_PROCEDURE,'SUPPLY'=>$_sUPPLY,'SUPPLY_EXEMPT_PERCENT'=>$_sUPPLY_EXEMPT_PERCENT,'TAX_CODE'=>$_tAX_CODE,'TAX_DETERMINATION_DATE'=>$_tAX_DETERMINATION_DATE,'TAX_EXCHANGE_RATE_DATE'=>$_tAX_EXCHANGE_RATE_DATE,'TAX_POINT_DATE'=>$_tAX_POINT_DATE,'TAX_TREATMENT'=>$_tAX_TREATMENT,'TAX_TYPE'=>$_tAX_TYPE,'TITLE_TRANSFER_LOCATION'=>$_tITLE_TRANSFER_LOCATION,'TRANSACTION_TYPE'=>$_tRANSACTION_TYPE,'VAT_GROUP_REGISTRATION'=>$_vAT_GROUP_REGISTRATION,'VENDOR_NAME'=>$_vENDOR_NAME,'VENDOR_NUMBER'=>$_vENDOR_NUMBER,'VENDOR_TAX'=>$_vENDOR_TAX,'UNIQUE_INVOICE_NUMBER'=>$_uNIQUE_INVOICE_NUMBER,'USER_ELEMENT'=>$_uSER_ELEMENT,'LINE'=>$_lINE),false);
    }
    /**
     * Get ALLOCATION_GROUP_NAME value
     * @return string|null
     */
    public function getALLOCATION_GROUP_NAME()
    {
        return $this->ALLOCATION_GROUP_NAME;
    }
    /**
     * Set ALLOCATION_GROUP_NAME value
     * @param string $_aLLOCATION_GROUP_NAME the ALLOCATION_GROUP_NAME
     * @return string
     */
    public function setALLOCATION_GROUP_NAME($_aLLOCATION_GROUP_NAME)
    {
        return ($this->ALLOCATION_GROUP_NAME = $_aLLOCATION_GROUP_NAME);
    }
    /**
     * Get ALLOCATION_GROUP_OWNER value
     * @return string|null
     */
    public function getALLOCATION_GROUP_OWNER()
    {
        return $this->ALLOCATION_GROUP_OWNER;
    }
    /**
     * Set ALLOCATION_GROUP_OWNER value
     * @param string $_aLLOCATION_GROUP_OWNER the ALLOCATION_GROUP_OWNER
     * @return string
     */
    public function setALLOCATION_GROUP_OWNER($_aLLOCATION_GROUP_OWNER)
    {
        return ($this->ALLOCATION_GROUP_OWNER = $_aLLOCATION_GROUP_OWNER);
    }
    /**
     * Get ALLOCATION_NAME value
     * @return string|null
     */
    public function getALLOCATION_NAME()
    {
        return $this->ALLOCATION_NAME;
    }
    /**
     * Set ALLOCATION_NAME value
     * @param string $_aLLOCATION_NAME the ALLOCATION_NAME
     * @return string
     */
    public function setALLOCATION_NAME($_aLLOCATION_NAME)
    {
        return ($this->ALLOCATION_NAME = $_aLLOCATION_NAME);
    }
    /**
     * Get AUTO_CREATE_CERTIFICATES value
     * @return BooleanType|null
     */
    public function getAUTO_CREATE_CERTIFICATES()
    {
        return $this->AUTO_CREATE_CERTIFICATES;
    }
    /**
     * Set AUTO_CREATE_CERTIFICATES value
     * @param BooleanType $_aUTO_CREATE_CERTIFICATES the AUTO_CREATE_CERTIFICATES
     * @return BooleanType
     */
    public function setAUTO_CREATE_CERTIFICATES($_aUTO_CREATE_CERTIFICATES)
    {
        return ($this->AUTO_CREATE_CERTIFICATES = $_aUTO_CREATE_CERTIFICATES);
    }
    /**
     * Get AUTO_CREATE_CUSTOMERS value
     * @return BooleanType|null
     */
    public function getAUTO_CREATE_CUSTOMERS()
    {
        return $this->AUTO_CREATE_CUSTOMERS;
    }
    /**
     * Set AUTO_CREATE_CUSTOMERS value
     * @param BooleanType $_aUTO_CREATE_CUSTOMERS the AUTO_CREATE_CUSTOMERS
     * @return BooleanType
     */
    public function setAUTO_CREATE_CUSTOMERS($_aUTO_CREATE_CUSTOMERS)
    {
        return ($this->AUTO_CREATE_CUSTOMERS = $_aUTO_CREATE_CUSTOMERS);
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
     * Get BILL_TO value
     * @return KPMGStructZoneAddressType|null
     */
    public function getBILL_TO()
    {
        return $this->BILL_TO;
    }
    /**
     * Set BILL_TO value
     * @param KPMGStructZoneAddressType $_bILL_TO the BILL_TO
     * @return KPMGStructZoneAddressType
     */
    public function setBILL_TO($_bILL_TO)
    {
        return ($this->BILL_TO = $_bILL_TO);
    }
    /**
     * Get BUYER_PRIMARY value
     * @return KPMGStructZoneAddressType|null
     */
    public function getBUYER_PRIMARY()
    {
        return $this->BUYER_PRIMARY;
    }
    /**
     * Set BUYER_PRIMARY value
     * @param KPMGStructZoneAddressType $_bUYER_PRIMARY the BUYER_PRIMARY
     * @return KPMGStructZoneAddressType
     */
    public function setBUYER_PRIMARY($_bUYER_PRIMARY)
    {
        return ($this->BUYER_PRIMARY = $_bUYER_PRIMARY);
    }
    /**
     * Get CALLING_SYSTEM_NUMBER value
     * @return string|null
     */
    public function getCALLING_SYSTEM_NUMBER()
    {
        return $this->CALLING_SYSTEM_NUMBER;
    }
    /**
     * Set CALLING_SYSTEM_NUMBER value
     * @param string $_cALLING_SYSTEM_NUMBER the CALLING_SYSTEM_NUMBER
     * @return string
     */
    public function setCALLING_SYSTEM_NUMBER($_cALLING_SYSTEM_NUMBER)
    {
        return ($this->CALLING_SYSTEM_NUMBER = $_cALLING_SYSTEM_NUMBER);
    }
    /**
     * Get CALCULATION_DIRECTION value
     * @return string|null
     */
    public function getCALCULATION_DIRECTION()
    {
        return $this->CALCULATION_DIRECTION;
    }
    /**
     * Set CALCULATION_DIRECTION value
     * @param string $_cALCULATION_DIRECTION the CALCULATION_DIRECTION
     * @return string
     */
    public function setCALCULATION_DIRECTION($_cALCULATION_DIRECTION)
    {
        return ($this->CALCULATION_DIRECTION = $_cALCULATION_DIRECTION);
    }
    /**
     * Get COMPANY_ID value
     * @return long|null
     */
    public function getCOMPANY_ID()
    {
        return $this->COMPANY_ID;
    }
    /**
     * Set COMPANY_ID value
     * @param long $_cOMPANY_ID the COMPANY_ID
     * @return long
     */
    public function setCOMPANY_ID($_cOMPANY_ID)
    {
        return ($this->COMPANY_ID = $_cOMPANY_ID);
    }
    /**
     * Get COMPANY_NAME value
     * @return string|null
     */
    public function getCOMPANY_NAME()
    {
        return $this->COMPANY_NAME;
    }
    /**
     * Set COMPANY_NAME value
     * @param string $_cOMPANY_NAME the COMPANY_NAME
     * @return string
     */
    public function setCOMPANY_NAME($_cOMPANY_NAME)
    {
        return ($this->COMPANY_NAME = $_cOMPANY_NAME);
    }
    /**
     * Get COMPANY_ROLE value
     * @return string|null
     */
    public function getCOMPANY_ROLE()
    {
        return $this->COMPANY_ROLE;
    }
    /**
     * Set COMPANY_ROLE value
     * @param string $_cOMPANY_ROLE the COMPANY_ROLE
     * @return string
     */
    public function setCOMPANY_ROLE($_cOMPANY_ROLE)
    {
        return ($this->COMPANY_ROLE = $_cOMPANY_ROLE);
    }
    /**
     * Get COUNTRY_OF_ORIGIN value
     * @return string|null
     */
    public function getCOUNTRY_OF_ORIGIN()
    {
        return $this->COUNTRY_OF_ORIGIN;
    }
    /**
     * Set COUNTRY_OF_ORIGIN value
     * @param string $_cOUNTRY_OF_ORIGIN the COUNTRY_OF_ORIGIN
     * @return string
     */
    public function setCOUNTRY_OF_ORIGIN($_cOUNTRY_OF_ORIGIN)
    {
        return ($this->COUNTRY_OF_ORIGIN = $_cOUNTRY_OF_ORIGIN);
    }
    /**
     * Get CURRENCY_CODE value
     * @return string|null
     */
    public function getCURRENCY_CODE()
    {
        return $this->CURRENCY_CODE;
    }
    /**
     * Set CURRENCY_CODE value
     * @param string $_cURRENCY_CODE the CURRENCY_CODE
     * @return string
     */
    public function setCURRENCY_CODE($_cURRENCY_CODE)
    {
        return ($this->CURRENCY_CODE = $_cURRENCY_CODE);
    }
    /**
     * Get CUSTOMER_GROUP_NAME value
     * @return string|null
     */
    public function getCUSTOMER_GROUP_NAME()
    {
        return $this->CUSTOMER_GROUP_NAME;
    }
    /**
     * Set CUSTOMER_GROUP_NAME value
     * @param string $_cUSTOMER_GROUP_NAME the CUSTOMER_GROUP_NAME
     * @return string
     */
    public function setCUSTOMER_GROUP_NAME($_cUSTOMER_GROUP_NAME)
    {
        return ($this->CUSTOMER_GROUP_NAME = $_cUSTOMER_GROUP_NAME);
    }
    /**
     * Get CUSTOMER_GROUP_OWNER value
     * @return string|null
     */
    public function getCUSTOMER_GROUP_OWNER()
    {
        return $this->CUSTOMER_GROUP_OWNER;
    }
    /**
     * Set CUSTOMER_GROUP_OWNER value
     * @param string $_cUSTOMER_GROUP_OWNER the CUSTOMER_GROUP_OWNER
     * @return string
     */
    public function setCUSTOMER_GROUP_OWNER($_cUSTOMER_GROUP_OWNER)
    {
        return ($this->CUSTOMER_GROUP_OWNER = $_cUSTOMER_GROUP_OWNER);
    }
    /**
     * Get CUSTOMER_NAME value
     * @return string|null
     */
    public function getCUSTOMER_NAME()
    {
        return $this->CUSTOMER_NAME;
    }
    /**
     * Set CUSTOMER_NAME value
     * @param string $_cUSTOMER_NAME the CUSTOMER_NAME
     * @return string
     */
    public function setCUSTOMER_NAME($_cUSTOMER_NAME)
    {
        return ($this->CUSTOMER_NAME = $_cUSTOMER_NAME);
    }
    /**
     * Get CUSTOMER_NUMBER value
     * @return string|null
     */
    public function getCUSTOMER_NUMBER()
    {
        return $this->CUSTOMER_NUMBER;
    }
    /**
     * Set CUSTOMER_NUMBER value
     * @param string $_cUSTOMER_NUMBER the CUSTOMER_NUMBER
     * @return string
     */
    public function setCUSTOMER_NUMBER($_cUSTOMER_NUMBER)
    {
        return ($this->CUSTOMER_NUMBER = $_cUSTOMER_NUMBER);
    }
    /**
     * Get DELIVERY_TERMS value
     * @return string|null
     */
    public function getDELIVERY_TERMS()
    {
        return $this->DELIVERY_TERMS;
    }
    /**
     * Set DELIVERY_TERMS value
     * @param string $_dELIVERY_TERMS the DELIVERY_TERMS
     * @return string
     */
    public function setDELIVERY_TERMS($_dELIVERY_TERMS)
    {
        return ($this->DELIVERY_TERMS = $_dELIVERY_TERMS);
    }
    /**
     * Get DEPT_OF_CONSIGN value
     * @return string|null
     */
    public function getDEPT_OF_CONSIGN()
    {
        return $this->DEPT_OF_CONSIGN;
    }
    /**
     * Set DEPT_OF_CONSIGN value
     * @param string $_dEPT_OF_CONSIGN the DEPT_OF_CONSIGN
     * @return string
     */
    public function setDEPT_OF_CONSIGN($_dEPT_OF_CONSIGN)
    {
        return ($this->DEPT_OF_CONSIGN = $_dEPT_OF_CONSIGN);
    }
    /**
     * Get DOCUMENT_TYPE value
     * @return string|null
     */
    public function getDOCUMENT_TYPE()
    {
        return $this->DOCUMENT_TYPE;
    }
    /**
     * Set DOCUMENT_TYPE value
     * @param string $_dOCUMENT_TYPE the DOCUMENT_TYPE
     * @return string
     */
    public function setDOCUMENT_TYPE($_dOCUMENT_TYPE)
    {
        return ($this->DOCUMENT_TYPE = $_dOCUMENT_TYPE);
    }
    /**
     * Get END_USE value
     * @return string|null
     */
    public function getEND_USE()
    {
        return $this->END_USE;
    }
    /**
     * Set END_USE value
     * @param string $_eND_USE the END_USE
     * @return string
     */
    public function setEND_USE($_eND_USE)
    {
        return ($this->END_USE = $_eND_USE);
    }
    /**
     * Get END_USER_NAME value
     * @return string|null
     */
    public function getEND_USER_NAME()
    {
        return $this->END_USER_NAME;
    }
    /**
     * Set END_USER_NAME value
     * @param string $_eND_USER_NAME the END_USER_NAME
     * @return string
     */
    public function setEND_USER_NAME($_eND_USER_NAME)
    {
        return ($this->END_USER_NAME = $_eND_USER_NAME);
    }
    /**
     * Get ESTABLISHMENTS value
     * @return KPMGStructEstablishmentsType|null
     */
    public function getESTABLISHMENTS()
    {
        return $this->ESTABLISHMENTS;
    }
    /**
     * Set ESTABLISHMENTS value
     * @param KPMGStructEstablishmentsType $_eSTABLISHMENTS the ESTABLISHMENTS
     * @return KPMGStructEstablishmentsType
     */
    public function setESTABLISHMENTS($_eSTABLISHMENTS)
    {
        return ($this->ESTABLISHMENTS = $_eSTABLISHMENTS);
    }
    /**
     * Get EXEMPT_AMOUNT value
     * @return KPMGStructAmountType|null
     */
    public function getEXEMPT_AMOUNT()
    {
        return $this->EXEMPT_AMOUNT;
    }
    /**
     * Set EXEMPT_AMOUNT value
     * @param KPMGStructAmountType $_eXEMPT_AMOUNT the EXEMPT_AMOUNT
     * @return KPMGStructAmountType
     */
    public function setEXEMPT_AMOUNT($_eXEMPT_AMOUNT)
    {
        return ($this->EXEMPT_AMOUNT = $_eXEMPT_AMOUNT);
    }
    /**
     * Get EXEMPT_CERTIFICATE value
     * @return KPMGStructCertificateLocationType|null
     */
    public function getEXEMPT_CERTIFICATE()
    {
        return $this->EXEMPT_CERTIFICATE;
    }
    /**
     * Set EXEMPT_CERTIFICATE value
     * @param KPMGStructCertificateLocationType $_eXEMPT_CERTIFICATE the EXEMPT_CERTIFICATE
     * @return KPMGStructCertificateLocationType
     */
    public function setEXEMPT_CERTIFICATE($_eXEMPT_CERTIFICATE)
    {
        return ($this->EXEMPT_CERTIFICATE = $_eXEMPT_CERTIFICATE);
    }
    /**
     * Get EXEMPT_REASON value
     * @return KPMGStructCertificateLocationType|null
     */
    public function getEXEMPT_REASON()
    {
        return $this->EXEMPT_REASON;
    }
    /**
     * Set EXEMPT_REASON value
     * @param KPMGStructCertificateLocationType $_eXEMPT_REASON the EXEMPT_REASON
     * @return KPMGStructCertificateLocationType
     */
    public function setEXEMPT_REASON($_eXEMPT_REASON)
    {
        return ($this->EXEMPT_REASON = $_eXEMPT_REASON);
    }
    /**
     * Get EXTERNAL_COMPANY_ID value
     * @return string|null
     */
    public function getEXTERNAL_COMPANY_ID()
    {
        return $this->EXTERNAL_COMPANY_ID;
    }
    /**
     * Set EXTERNAL_COMPANY_ID value
     * @param string $_eXTERNAL_COMPANY_ID the EXTERNAL_COMPANY_ID
     * @return string
     */
    public function setEXTERNAL_COMPANY_ID($_eXTERNAL_COMPANY_ID)
    {
        return ($this->EXTERNAL_COMPANY_ID = $_eXTERNAL_COMPANY_ID);
    }
    /**
     * Get FILTER_GROUP_NAME value
     * @return string|null
     */
    public function getFILTER_GROUP_NAME()
    {
        return $this->FILTER_GROUP_NAME;
    }
    /**
     * Set FILTER_GROUP_NAME value
     * @param string $_fILTER_GROUP_NAME the FILTER_GROUP_NAME
     * @return string
     */
    public function setFILTER_GROUP_NAME($_fILTER_GROUP_NAME)
    {
        return ($this->FILTER_GROUP_NAME = $_fILTER_GROUP_NAME);
    }
    /**
     * Get FILTER_GROUP_OWNER value
     * @return string|null
     */
    public function getFILTER_GROUP_OWNER()
    {
        return $this->FILTER_GROUP_OWNER;
    }
    /**
     * Set FILTER_GROUP_OWNER value
     * @param string $_fILTER_GROUP_OWNER the FILTER_GROUP_OWNER
     * @return string
     */
    public function setFILTER_GROUP_OWNER($_fILTER_GROUP_OWNER)
    {
        return ($this->FILTER_GROUP_OWNER = $_fILTER_GROUP_OWNER);
    }
    /**
     * Get FISCAL_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getFISCAL_DATE()
    {
        return $this->FISCAL_DATE;
    }
    /**
     * Set FISCAL_DATE value
     * @param YyyyMmDdDateType $_fISCAL_DATE the FISCAL_DATE
     * @return YyyyMmDdDateType
     */
    public function setFISCAL_DATE($_fISCAL_DATE)
    {
        return ($this->FISCAL_DATE = $_fISCAL_DATE);
    }
    /**
     * Get FUNCTIONAL_CURRENCY_CODE value
     * @return string|null
     */
    public function getFUNCTIONAL_CURRENCY_CODE()
    {
        return $this->FUNCTIONAL_CURRENCY_CODE;
    }
    /**
     * Set FUNCTIONAL_CURRENCY_CODE value
     * @param string $_fUNCTIONAL_CURRENCY_CODE the FUNCTIONAL_CURRENCY_CODE
     * @return string
     */
    public function setFUNCTIONAL_CURRENCY_CODE($_fUNCTIONAL_CURRENCY_CODE)
    {
        return ($this->FUNCTIONAL_CURRENCY_CODE = $_fUNCTIONAL_CURRENCY_CODE);
    }
    /**
     * Get HOST_SYSTEM value
     * @return string|null
     */
    public function getHOST_SYSTEM()
    {
        return $this->HOST_SYSTEM;
    }
    /**
     * Set HOST_SYSTEM value
     * @param string $_hOST_SYSTEM the HOST_SYSTEM
     * @return string
     */
    public function setHOST_SYSTEM($_hOST_SYSTEM)
    {
        return ($this->HOST_SYSTEM = $_hOST_SYSTEM);
    }
    /**
     * Get INCLUSIVE_TAX_INDICATORS value
     * @return KPMGStructInclusiveTaxIndicatorsType|null
     */
    public function getINCLUSIVE_TAX_INDICATORS()
    {
        return $this->INCLUSIVE_TAX_INDICATORS;
    }
    /**
     * Set INCLUSIVE_TAX_INDICATORS value
     * @param KPMGStructInclusiveTaxIndicatorsType $_iNCLUSIVE_TAX_INDICATORS the INCLUSIVE_TAX_INDICATORS
     * @return KPMGStructInclusiveTaxIndicatorsType
     */
    public function setINCLUSIVE_TAX_INDICATORS($_iNCLUSIVE_TAX_INDICATORS)
    {
        return ($this->INCLUSIVE_TAX_INDICATORS = $_iNCLUSIVE_TAX_INDICATORS);
    }
    /**
     * Get INPUT_RECOVERY_TYPE value
     * @return string|null
     */
    public function getINPUT_RECOVERY_TYPE()
    {
        return $this->INPUT_RECOVERY_TYPE;
    }
    /**
     * Set INPUT_RECOVERY_TYPE value
     * @param string $_iNPUT_RECOVERY_TYPE the INPUT_RECOVERY_TYPE
     * @return string
     */
    public function setINPUT_RECOVERY_TYPE($_iNPUT_RECOVERY_TYPE)
    {
        return ($this->INPUT_RECOVERY_TYPE = $_iNPUT_RECOVERY_TYPE);
    }
    /**
     * Get INVOICE_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getINVOICE_DATE()
    {
        return $this->INVOICE_DATE;
    }
    /**
     * Set INVOICE_DATE value
     * @param YyyyMmDdDateType $_iNVOICE_DATE the INVOICE_DATE
     * @return YyyyMmDdDateType
     */
    public function setINVOICE_DATE($_iNVOICE_DATE)
    {
        return ($this->INVOICE_DATE = $_iNVOICE_DATE);
    }
    /**
     * Get INVOICE_NUMBER value
     * @return string|null
     */
    public function getINVOICE_NUMBER()
    {
        return $this->INVOICE_NUMBER;
    }
    /**
     * Set INVOICE_NUMBER value
     * @param string $_iNVOICE_NUMBER the INVOICE_NUMBER
     * @return string
     */
    public function setINVOICE_NUMBER($_iNVOICE_NUMBER)
    {
        return ($this->INVOICE_NUMBER = $_iNVOICE_NUMBER);
    }
    /**
     * Get IS_AUDITED value
     * @return BooleanType|null
     */
    public function getIS_AUDITED()
    {
        return $this->IS_AUDITED;
    }
    /**
     * Set IS_AUDITED value
     * @param BooleanType $_iS_AUDITED the IS_AUDITED
     * @return BooleanType
     */
    public function setIS_AUDITED($_iS_AUDITED)
    {
        return ($this->IS_AUDITED = $_iS_AUDITED);
    }
    /**
     * Get IS_AUDIT_UPDATE value
     * @return BooleanType|null
     */
    public function getIS_AUDIT_UPDATE()
    {
        return $this->IS_AUDIT_UPDATE;
    }
    /**
     * Set IS_AUDIT_UPDATE value
     * @param BooleanType $_iS_AUDIT_UPDATE the IS_AUDIT_UPDATE
     * @return BooleanType
     */
    public function setIS_AUDIT_UPDATE($_iS_AUDIT_UPDATE)
    {
        return ($this->IS_AUDIT_UPDATE = $_iS_AUDIT_UPDATE);
    }
    /**
     * Get IS_BUSINESS_SUPPLY value
     * @return BooleanType|null
     */
    public function getIS_BUSINESS_SUPPLY()
    {
        return $this->IS_BUSINESS_SUPPLY;
    }
    /**
     * Set IS_BUSINESS_SUPPLY value
     * @param BooleanType $_iS_BUSINESS_SUPPLY the IS_BUSINESS_SUPPLY
     * @return BooleanType
     */
    public function setIS_BUSINESS_SUPPLY($_iS_BUSINESS_SUPPLY)
    {
        return ($this->IS_BUSINESS_SUPPLY = $_iS_BUSINESS_SUPPLY);
    }
    /**
     * Get IS_CREDIT value
     * @return BooleanType|null
     */
    public function getIS_CREDIT()
    {
        return $this->IS_CREDIT;
    }
    /**
     * Set IS_CREDIT value
     * @param BooleanType $_iS_CREDIT the IS_CREDIT
     * @return BooleanType
     */
    public function setIS_CREDIT($_iS_CREDIT)
    {
        return ($this->IS_CREDIT = $_iS_CREDIT);
    }
    /**
     * Get IS_EXEMPT value
     * @return KPMGStructFlagAddressType|null
     */
    public function getIS_EXEMPT()
    {
        return $this->IS_EXEMPT;
    }
    /**
     * Set IS_EXEMPT value
     * @param KPMGStructFlagAddressType $_iS_EXEMPT the IS_EXEMPT
     * @return KPMGStructFlagAddressType
     */
    public function setIS_EXEMPT($_iS_EXEMPT)
    {
        return ($this->IS_EXEMPT = $_iS_EXEMPT);
    }
    /**
     * Get IS_NO_TAX value
     * @return KPMGStructFlagAddressType|null
     */
    public function getIS_NO_TAX()
    {
        return $this->IS_NO_TAX;
    }
    /**
     * Set IS_NO_TAX value
     * @param KPMGStructFlagAddressType $_iS_NO_TAX the IS_NO_TAX
     * @return KPMGStructFlagAddressType
     */
    public function setIS_NO_TAX($_iS_NO_TAX)
    {
        return ($this->IS_NO_TAX = $_iS_NO_TAX);
    }
    /**
     * Get IS_REPORTED value
     * @return BooleanType|null
     */
    public function getIS_REPORTED()
    {
        return $this->IS_REPORTED;
    }
    /**
     * Set IS_REPORTED value
     * @param BooleanType $_iS_REPORTED the IS_REPORTED
     * @return BooleanType
     */
    public function setIS_REPORTED($_iS_REPORTED)
    {
        return ($this->IS_REPORTED = $_iS_REPORTED);
    }
    /**
     * Get IS_REVERSED value
     * @return BooleanType|null
     */
    public function getIS_REVERSED()
    {
        return $this->IS_REVERSED;
    }
    /**
     * Set IS_REVERSED value
     * @param BooleanType $_iS_REVERSED the IS_REVERSED
     * @return BooleanType
     */
    public function setIS_REVERSED($_iS_REVERSED)
    {
        return ($this->IS_REVERSED = $_iS_REVERSED);
    }
    /**
     * Get IS_ROUNDING value
     * @return BooleanType|null
     */
    public function getIS_ROUNDING()
    {
        return $this->IS_ROUNDING;
    }
    /**
     * Set IS_ROUNDING value
     * @param BooleanType $_iS_ROUNDING the IS_ROUNDING
     * @return BooleanType
     */
    public function setIS_ROUNDING($_iS_ROUNDING)
    {
        return ($this->IS_ROUNDING = $_iS_ROUNDING);
    }
    /**
     * Get IS_SIMPLIFICATION value
     * @return BooleanType|null
     */
    public function getIS_SIMPLIFICATION()
    {
        return $this->IS_SIMPLIFICATION;
    }
    /**
     * Set IS_SIMPLIFICATION value
     * @param BooleanType $_iS_SIMPLIFICATION the IS_SIMPLIFICATION
     * @return BooleanType
     */
    public function setIS_SIMPLIFICATION($_iS_SIMPLIFICATION)
    {
        return ($this->IS_SIMPLIFICATION = $_iS_SIMPLIFICATION);
    }
    /**
     * Get LICENSES value
     * @return KPMGStructIndataLicensesType|null
     */
    public function getLICENSES()
    {
        return $this->LICENSES;
    }
    /**
     * Set LICENSES value
     * @param KPMGStructIndataLicensesType $_lICENSES the LICENSES
     * @return KPMGStructIndataLicensesType
     */
    public function setLICENSES($_lICENSES)
    {
        return ($this->LICENSES = $_lICENSES);
    }
    /**
     * Get LOCATION value
     * @return KPMGStructLocationNameType|null
     */
    public function getLOCATION()
    {
        return $this->LOCATION;
    }
    /**
     * Set LOCATION value
     * @param KPMGStructLocationNameType $_lOCATION the LOCATION
     * @return KPMGStructLocationNameType
     */
    public function setLOCATION($_lOCATION)
    {
        return ($this->LOCATION = $_lOCATION);
    }
    /**
     * Get LOCATION_SET value
     * @return string|null
     */
    public function getLOCATION_SET()
    {
        return $this->LOCATION_SET;
    }
    /**
     * Set LOCATION_SET value
     * @param string $_lOCATION_SET the LOCATION_SET
     * @return string
     */
    public function setLOCATION_SET($_lOCATION_SET)
    {
        return ($this->LOCATION_SET = $_lOCATION_SET);
    }
    /**
     * Get MIDDLEMAN value
     * @return KPMGStructZoneAddressType|null
     */
    public function getMIDDLEMAN()
    {
        return $this->MIDDLEMAN;
    }
    /**
     * Set MIDDLEMAN value
     * @param KPMGStructZoneAddressType $_mIDDLEMAN the MIDDLEMAN
     * @return KPMGStructZoneAddressType
     */
    public function setMIDDLEMAN($_mIDDLEMAN)
    {
        return ($this->MIDDLEMAN = $_mIDDLEMAN);
    }
    /**
     * Get MODE_OF_TRANSPORT value
     * @return string|null
     */
    public function getMODE_OF_TRANSPORT()
    {
        return $this->MODE_OF_TRANSPORT;
    }
    /**
     * Set MODE_OF_TRANSPORT value
     * @param string $_mODE_OF_TRANSPORT the MODE_OF_TRANSPORT
     * @return string
     */
    public function setMODE_OF_TRANSPORT($_mODE_OF_TRANSPORT)
    {
        return ($this->MODE_OF_TRANSPORT = $_mODE_OF_TRANSPORT);
    }
    /**
     * Get MOVEMENT_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getMOVEMENT_DATE()
    {
        return $this->MOVEMENT_DATE;
    }
    /**
     * Set MOVEMENT_DATE value
     * @param YyyyMmDdDateType $_mOVEMENT_DATE the MOVEMENT_DATE
     * @return YyyyMmDdDateType
     */
    public function setMOVEMENT_DATE($_mOVEMENT_DATE)
    {
        return ($this->MOVEMENT_DATE = $_mOVEMENT_DATE);
    }
    /**
     * Get MOVEMENT_TYPE value
     * @return string|null
     */
    public function getMOVEMENT_TYPE()
    {
        return $this->MOVEMENT_TYPE;
    }
    /**
     * Set MOVEMENT_TYPE value
     * @param string $_mOVEMENT_TYPE the MOVEMENT_TYPE
     * @return string
     */
    public function setMOVEMENT_TYPE($_mOVEMENT_TYPE)
    {
        return ($this->MOVEMENT_TYPE = $_mOVEMENT_TYPE);
    }
    /**
     * Get NATURE_OF_TRANSACTION_CODE value
     * @return string|null
     */
    public function getNATURE_OF_TRANSACTION_CODE()
    {
        return $this->NATURE_OF_TRANSACTION_CODE;
    }
    /**
     * Set NATURE_OF_TRANSACTION_CODE value
     * @param string $_nATURE_OF_TRANSACTION_CODE the NATURE_OF_TRANSACTION_CODE
     * @return string
     */
    public function setNATURE_OF_TRANSACTION_CODE($_nATURE_OF_TRANSACTION_CODE)
    {
        return ($this->NATURE_OF_TRANSACTION_CODE = $_nATURE_OF_TRANSACTION_CODE);
    }
    /**
     * Get ORDER_ACCEPTANCE value
     * @return KPMGStructZoneAddressType|null
     */
    public function getORDER_ACCEPTANCE()
    {
        return $this->ORDER_ACCEPTANCE;
    }
    /**
     * Set ORDER_ACCEPTANCE value
     * @param KPMGStructZoneAddressType $_oRDER_ACCEPTANCE the ORDER_ACCEPTANCE
     * @return KPMGStructZoneAddressType
     */
    public function setORDER_ACCEPTANCE($_oRDER_ACCEPTANCE)
    {
        return ($this->ORDER_ACCEPTANCE = $_oRDER_ACCEPTANCE);
    }
    /**
     * Get ORDER_ORIGIN value
     * @return KPMGStructZoneAddressType|null
     */
    public function getORDER_ORIGIN()
    {
        return $this->ORDER_ORIGIN;
    }
    /**
     * Set ORDER_ORIGIN value
     * @param KPMGStructZoneAddressType $_oRDER_ORIGIN the ORDER_ORIGIN
     * @return KPMGStructZoneAddressType
     */
    public function setORDER_ORIGIN($_oRDER_ORIGIN)
    {
        return ($this->ORDER_ORIGIN = $_oRDER_ORIGIN);
    }
    /**
     * Get ORIGINAL_DOCUMENT_ID value
     * @return string|null
     */
    public function getORIGINAL_DOCUMENT_ID()
    {
        return $this->ORIGINAL_DOCUMENT_ID;
    }
    /**
     * Set ORIGINAL_DOCUMENT_ID value
     * @param string $_oRIGINAL_DOCUMENT_ID the ORIGINAL_DOCUMENT_ID
     * @return string
     */
    public function setORIGINAL_DOCUMENT_ID($_oRIGINAL_DOCUMENT_ID)
    {
        return ($this->ORIGINAL_DOCUMENT_ID = $_oRIGINAL_DOCUMENT_ID);
    }
    /**
     * Get ORIGINAL_DOCUMENT_ITEM value
     * @return string|null
     */
    public function getORIGINAL_DOCUMENT_ITEM()
    {
        return $this->ORIGINAL_DOCUMENT_ITEM;
    }
    /**
     * Set ORIGINAL_DOCUMENT_ITEM value
     * @param string $_oRIGINAL_DOCUMENT_ITEM the ORIGINAL_DOCUMENT_ITEM
     * @return string
     */
    public function setORIGINAL_DOCUMENT_ITEM($_oRIGINAL_DOCUMENT_ITEM)
    {
        return ($this->ORIGINAL_DOCUMENT_ITEM = $_oRIGINAL_DOCUMENT_ITEM);
    }
    /**
     * Get ORIGINAL_DOCUMENT_TYPE value
     * @return string|null
     */
    public function getORIGINAL_DOCUMENT_TYPE()
    {
        return $this->ORIGINAL_DOCUMENT_TYPE;
    }
    /**
     * Set ORIGINAL_DOCUMENT_TYPE value
     * @param string $_oRIGINAL_DOCUMENT_TYPE the ORIGINAL_DOCUMENT_TYPE
     * @return string
     */
    public function setORIGINAL_DOCUMENT_TYPE($_oRIGINAL_DOCUMENT_TYPE)
    {
        return ($this->ORIGINAL_DOCUMENT_TYPE = $_oRIGINAL_DOCUMENT_TYPE);
    }
    /**
     * Get ORIGINAL_INVOICE_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getORIGINAL_INVOICE_DATE()
    {
        return $this->ORIGINAL_INVOICE_DATE;
    }
    /**
     * Set ORIGINAL_INVOICE_DATE value
     * @param YyyyMmDdDateType $_oRIGINAL_INVOICE_DATE the ORIGINAL_INVOICE_DATE
     * @return YyyyMmDdDateType
     */
    public function setORIGINAL_INVOICE_DATE($_oRIGINAL_INVOICE_DATE)
    {
        return ($this->ORIGINAL_INVOICE_DATE = $_oRIGINAL_INVOICE_DATE);
    }
    /**
     * Get ORIGINAL_INVOICE_NUMBER value
     * @return string|null
     */
    public function getORIGINAL_INVOICE_NUMBER()
    {
        return $this->ORIGINAL_INVOICE_NUMBER;
    }
    /**
     * Set ORIGINAL_INVOICE_NUMBER value
     * @param string $_oRIGINAL_INVOICE_NUMBER the ORIGINAL_INVOICE_NUMBER
     * @return string
     */
    public function setORIGINAL_INVOICE_NUMBER($_oRIGINAL_INVOICE_NUMBER)
    {
        return ($this->ORIGINAL_INVOICE_NUMBER = $_oRIGINAL_INVOICE_NUMBER);
    }
    /**
     * Get ORIGINAL_MOVEMENT_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getORIGINAL_MOVEMENT_DATE()
    {
        return $this->ORIGINAL_MOVEMENT_DATE;
    }
    /**
     * Set ORIGINAL_MOVEMENT_DATE value
     * @param YyyyMmDdDateType $_oRIGINAL_MOVEMENT_DATE the ORIGINAL_MOVEMENT_DATE
     * @return YyyyMmDdDateType
     */
    public function setORIGINAL_MOVEMENT_DATE($_oRIGINAL_MOVEMENT_DATE)
    {
        return ($this->ORIGINAL_MOVEMENT_DATE = $_oRIGINAL_MOVEMENT_DATE);
    }
    /**
     * Get OVERRIDE_AMOUNT value
     * @return KPMGStructAmountType|null
     */
    public function getOVERRIDE_AMOUNT()
    {
        return $this->OVERRIDE_AMOUNT;
    }
    /**
     * Set OVERRIDE_AMOUNT value
     * @param KPMGStructAmountType $_oVERRIDE_AMOUNT the OVERRIDE_AMOUNT
     * @return KPMGStructAmountType
     */
    public function setOVERRIDE_AMOUNT($_oVERRIDE_AMOUNT)
    {
        return ($this->OVERRIDE_AMOUNT = $_oVERRIDE_AMOUNT);
    }
    /**
     * Get OVERRIDE_RATE value
     * @return KPMGStructAmountType|null
     */
    public function getOVERRIDE_RATE()
    {
        return $this->OVERRIDE_RATE;
    }
    /**
     * Set OVERRIDE_RATE value
     * @param KPMGStructAmountType $_oVERRIDE_RATE the OVERRIDE_RATE
     * @return KPMGStructAmountType
     */
    public function setOVERRIDE_RATE($_oVERRIDE_RATE)
    {
        return ($this->OVERRIDE_RATE = $_oVERRIDE_RATE);
    }
    /**
     * Get POINT_OF_TITLE_TRANSFER value
     * @return string|null
     */
    public function getPOINT_OF_TITLE_TRANSFER()
    {
        return $this->POINT_OF_TITLE_TRANSFER;
    }
    /**
     * Set POINT_OF_TITLE_TRANSFER value
     * @param string $_pOINT_OF_TITLE_TRANSFER the POINT_OF_TITLE_TRANSFER
     * @return string
     */
    public function setPOINT_OF_TITLE_TRANSFER($_pOINT_OF_TITLE_TRANSFER)
    {
        return ($this->POINT_OF_TITLE_TRANSFER = $_pOINT_OF_TITLE_TRANSFER);
    }
    /**
     * Get PORT_OF_ENTRY value
     * @return string|null
     */
    public function getPORT_OF_ENTRY()
    {
        return $this->PORT_OF_ENTRY;
    }
    /**
     * Set PORT_OF_ENTRY value
     * @param string $_pORT_OF_ENTRY the PORT_OF_ENTRY
     * @return string
     */
    public function setPORT_OF_ENTRY($_pORT_OF_ENTRY)
    {
        return ($this->PORT_OF_ENTRY = $_pORT_OF_ENTRY);
    }
    /**
     * Get PORT_OF_LOADING value
     * @return string|null
     */
    public function getPORT_OF_LOADING()
    {
        return $this->PORT_OF_LOADING;
    }
    /**
     * Set PORT_OF_LOADING value
     * @param string $_pORT_OF_LOADING the PORT_OF_LOADING
     * @return string
     */
    public function setPORT_OF_LOADING($_pORT_OF_LOADING)
    {
        return ($this->PORT_OF_LOADING = $_pORT_OF_LOADING);
    }
    /**
     * Get PRODUCT_MAPPING_GROUP_NAME value
     * @return string|null
     */
    public function getPRODUCT_MAPPING_GROUP_NAME()
    {
        return $this->PRODUCT_MAPPING_GROUP_NAME;
    }
    /**
     * Set PRODUCT_MAPPING_GROUP_NAME value
     * @param string $_pRODUCT_MAPPING_GROUP_NAME the PRODUCT_MAPPING_GROUP_NAME
     * @return string
     */
    public function setPRODUCT_MAPPING_GROUP_NAME($_pRODUCT_MAPPING_GROUP_NAME)
    {
        return ($this->PRODUCT_MAPPING_GROUP_NAME = $_pRODUCT_MAPPING_GROUP_NAME);
    }
    /**
     * Get PRODUCT_MAPPING_GROUP_OWNER value
     * @return string|null
     */
    public function getPRODUCT_MAPPING_GROUP_OWNER()
    {
        return $this->PRODUCT_MAPPING_GROUP_OWNER;
    }
    /**
     * Set PRODUCT_MAPPING_GROUP_OWNER value
     * @param string $_pRODUCT_MAPPING_GROUP_OWNER the PRODUCT_MAPPING_GROUP_OWNER
     * @return string
     */
    public function setPRODUCT_MAPPING_GROUP_OWNER($_pRODUCT_MAPPING_GROUP_OWNER)
    {
        return ($this->PRODUCT_MAPPING_GROUP_OWNER = $_pRODUCT_MAPPING_GROUP_OWNER);
    }
    /**
     * Get REGIME value
     * @return string|null
     */
    public function getREGIME()
    {
        return $this->REGIME;
    }
    /**
     * Set REGIME value
     * @param string $_rEGIME the REGIME
     * @return string
     */
    public function setREGIME($_rEGIME)
    {
        return ($this->REGIME = $_rEGIME);
    }
    /**
     * Get REGISTRATIONS value
     * @return KPMGStructRegistrationsType|null
     */
    public function getREGISTRATIONS()
    {
        return $this->REGISTRATIONS;
    }
    /**
     * Set REGISTRATIONS value
     * @param KPMGStructRegistrationsType $_rEGISTRATIONS the REGISTRATIONS
     * @return KPMGStructRegistrationsType
     */
    public function setREGISTRATIONS($_rEGISTRATIONS)
    {
        return ($this->REGISTRATIONS = $_rEGISTRATIONS);
    }
    /**
     * Get SELLER_PRIMARY value
     * @return KPMGStructZoneAddressType|null
     */
    public function getSELLER_PRIMARY()
    {
        return $this->SELLER_PRIMARY;
    }
    /**
     * Set SELLER_PRIMARY value
     * @param KPMGStructZoneAddressType $_sELLER_PRIMARY the SELLER_PRIMARY
     * @return KPMGStructZoneAddressType
     */
    public function setSELLER_PRIMARY($_sELLER_PRIMARY)
    {
        return ($this->SELLER_PRIMARY = $_sELLER_PRIMARY);
    }
    /**
     * Get SHIP_FROM value
     * @return KPMGStructZoneAddressType|null
     */
    public function getSHIP_FROM()
    {
        return $this->SHIP_FROM;
    }
    /**
     * Set SHIP_FROM value
     * @param KPMGStructZoneAddressType $_sHIP_FROM the SHIP_FROM
     * @return KPMGStructZoneAddressType
     */
    public function setSHIP_FROM($_sHIP_FROM)
    {
        return ($this->SHIP_FROM = $_sHIP_FROM);
    }
    /**
     * Get SHIP_TO value
     * @return KPMGStructZoneAddressType|null
     */
    public function getSHIP_TO()
    {
        return $this->SHIP_TO;
    }
    /**
     * Set SHIP_TO value
     * @param KPMGStructZoneAddressType $_sHIP_TO the SHIP_TO
     * @return KPMGStructZoneAddressType
     */
    public function setSHIP_TO($_sHIP_TO)
    {
        return ($this->SHIP_TO = $_sHIP_TO);
    }
    /**
     * Get STATISTICAL_PROCEDURE value
     * @return string|null
     */
    public function getSTATISTICAL_PROCEDURE()
    {
        return $this->STATISTICAL_PROCEDURE;
    }
    /**
     * Set STATISTICAL_PROCEDURE value
     * @param string $_sTATISTICAL_PROCEDURE the STATISTICAL_PROCEDURE
     * @return string
     */
    public function setSTATISTICAL_PROCEDURE($_sTATISTICAL_PROCEDURE)
    {
        return ($this->STATISTICAL_PROCEDURE = $_sTATISTICAL_PROCEDURE);
    }
    /**
     * Get SUPPLY value
     * @return KPMGStructZoneAddressType|null
     */
    public function getSUPPLY()
    {
        return $this->SUPPLY;
    }
    /**
     * Set SUPPLY value
     * @param KPMGStructZoneAddressType $_sUPPLY the SUPPLY
     * @return KPMGStructZoneAddressType
     */
    public function setSUPPLY($_sUPPLY)
    {
        return ($this->SUPPLY = $_sUPPLY);
    }
    /**
     * Get SUPPLY_EXEMPT_PERCENT value
     * @return KPMGStructAmountType|null
     */
    public function getSUPPLY_EXEMPT_PERCENT()
    {
        return $this->SUPPLY_EXEMPT_PERCENT;
    }
    /**
     * Set SUPPLY_EXEMPT_PERCENT value
     * @param KPMGStructAmountType $_sUPPLY_EXEMPT_PERCENT the SUPPLY_EXEMPT_PERCENT
     * @return KPMGStructAmountType
     */
    public function setSUPPLY_EXEMPT_PERCENT($_sUPPLY_EXEMPT_PERCENT)
    {
        return ($this->SUPPLY_EXEMPT_PERCENT = $_sUPPLY_EXEMPT_PERCENT);
    }
    /**
     * Get TAX_CODE value
     * @return string|null
     */
    public function getTAX_CODE()
    {
        return $this->TAX_CODE;
    }
    /**
     * Set TAX_CODE value
     * @param string $_tAX_CODE the TAX_CODE
     * @return string
     */
    public function setTAX_CODE($_tAX_CODE)
    {
        return ($this->TAX_CODE = $_tAX_CODE);
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
     * Get TAX_EXCHANGE_RATE_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getTAX_EXCHANGE_RATE_DATE()
    {
        return $this->TAX_EXCHANGE_RATE_DATE;
    }
    /**
     * Set TAX_EXCHANGE_RATE_DATE value
     * @param YyyyMmDdDateType $_tAX_EXCHANGE_RATE_DATE the TAX_EXCHANGE_RATE_DATE
     * @return YyyyMmDdDateType
     */
    public function setTAX_EXCHANGE_RATE_DATE($_tAX_EXCHANGE_RATE_DATE)
    {
        return ($this->TAX_EXCHANGE_RATE_DATE = $_tAX_EXCHANGE_RATE_DATE);
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
     * Get TAX_TYPE value
     * @return KPMGStructAddressType|null
     */
    public function getTAX_TYPE()
    {
        return $this->TAX_TYPE;
    }
    /**
     * Set TAX_TYPE value
     * @param KPMGStructAddressType $_tAX_TYPE the TAX_TYPE
     * @return KPMGStructAddressType
     */
    public function setTAX_TYPE($_tAX_TYPE)
    {
        return ($this->TAX_TYPE = $_tAX_TYPE);
    }
    /**
     * Get TITLE_TRANSFER_LOCATION value
     * @return string|null
     */
    public function getTITLE_TRANSFER_LOCATION()
    {
        return $this->TITLE_TRANSFER_LOCATION;
    }
    /**
     * Set TITLE_TRANSFER_LOCATION value
     * @param string $_tITLE_TRANSFER_LOCATION the TITLE_TRANSFER_LOCATION
     * @return string
     */
    public function setTITLE_TRANSFER_LOCATION($_tITLE_TRANSFER_LOCATION)
    {
        return ($this->TITLE_TRANSFER_LOCATION = $_tITLE_TRANSFER_LOCATION);
    }
    /**
     * Get TRANSACTION_TYPE value
     * @return string|null
     */
    public function getTRANSACTION_TYPE()
    {
        return $this->TRANSACTION_TYPE;
    }
    /**
     * Set TRANSACTION_TYPE value
     * @param string $_tRANSACTION_TYPE the TRANSACTION_TYPE
     * @return string
     */
    public function setTRANSACTION_TYPE($_tRANSACTION_TYPE)
    {
        return ($this->TRANSACTION_TYPE = $_tRANSACTION_TYPE);
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
     * Get VENDOR_NAME value
     * @return string|null
     */
    public function getVENDOR_NAME()
    {
        return $this->VENDOR_NAME;
    }
    /**
     * Set VENDOR_NAME value
     * @param string $_vENDOR_NAME the VENDOR_NAME
     * @return string
     */
    public function setVENDOR_NAME($_vENDOR_NAME)
    {
        return ($this->VENDOR_NAME = $_vENDOR_NAME);
    }
    /**
     * Get VENDOR_NUMBER value
     * @return string|null
     */
    public function getVENDOR_NUMBER()
    {
        return $this->VENDOR_NUMBER;
    }
    /**
     * Set VENDOR_NUMBER value
     * @param string $_vENDOR_NUMBER the VENDOR_NUMBER
     * @return string
     */
    public function setVENDOR_NUMBER($_vENDOR_NUMBER)
    {
        return ($this->VENDOR_NUMBER = $_vENDOR_NUMBER);
    }
    /**
     * Get VENDOR_TAX value
     * @return NillableDecimalType|null
     */
    public function getVENDOR_TAX()
    {
        return $this->VENDOR_TAX;
    }
    /**
     * Set VENDOR_TAX value
     * @param NillableDecimalType $_vENDOR_TAX the VENDOR_TAX
     * @return NillableDecimalType
     */
    public function setVENDOR_TAX($_vENDOR_TAX)
    {
        return ($this->VENDOR_TAX = $_vENDOR_TAX);
    }
    /**
     * Get UNIQUE_INVOICE_NUMBER value
     * @return string|null
     */
    public function getUNIQUE_INVOICE_NUMBER()
    {
        return $this->UNIQUE_INVOICE_NUMBER;
    }
    /**
     * Set UNIQUE_INVOICE_NUMBER value
     * @param string $_uNIQUE_INVOICE_NUMBER the UNIQUE_INVOICE_NUMBER
     * @return string
     */
    public function setUNIQUE_INVOICE_NUMBER($_uNIQUE_INVOICE_NUMBER)
    {
        return ($this->UNIQUE_INVOICE_NUMBER = $_uNIQUE_INVOICE_NUMBER);
    }
    /**
     * Get USER_ELEMENT value
     * @return KPMGStructUserElementType|null
     */
    public function getUSER_ELEMENT()
    {
        return $this->USER_ELEMENT;
    }
    /**
     * Set USER_ELEMENT value
     * @param KPMGStructUserElementType $_uSER_ELEMENT the USER_ELEMENT
     * @return KPMGStructUserElementType
     */
    public function setUSER_ELEMENT($_uSER_ELEMENT)
    {
        return ($this->USER_ELEMENT = $_uSER_ELEMENT);
    }
    /**
     * Get LINE value
     * @return KPMGStructIndataLineType|null
     */
    public function getLINE()
    {
        return $this->LINE;
    }
    /**
     * Set LINE value
     * @param KPMGStructIndataLineType $_lINE the LINE
     * @return KPMGStructIndataLineType
     */
    public function setLINE($_lINE)
    {
        return ($this->LINE = $_lINE);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructIndataInvoiceType
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
