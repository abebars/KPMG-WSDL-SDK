<?php
/**
 * File for class KPMGStructOutdataInvoiceType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataInvoiceType originally named OutdataInvoiceType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataInvoiceType extends KPMGWsdlClass
{
    /**
     * The REQUEST_STATUS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructOutdataRequestStatusType
     */
    public $REQUEST_STATUS;
    /**
     * The BASIS_PERCENT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A percentage of the gross amount of the line used in tax calculation. .5 is equal to 50%, .6 is equal to 60%, and so on.If this element is provided, it overrides any data found on a tax rule or exemption certificate applied to this transaction.
     * @var NillableDecimalType
     */
    public $BASIS_PERCENT;
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
     * - documentation : The role the company plays in a given transaction: Buyer (B). Each role results in different transaction tax and reporting requirements.
     * - maxLength : 20
     * - minLength : 0
     * @var string
     */
    public $COMPANY_ROLE;
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
     * The CURRENCY_NAME
     * Meta informations extracted from the WSDL
     * - documentation : The currency used for this invoice. Looked up from the CURRENCY_CODE.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $CURRENCY_NAME;
    /**
     * The MIN_ACCOUNTABLE_UNIT
     * Meta informations extracted from the WSDL
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $MIN_ACCOUNTABLE_UNIT;
    /**
     * The ROUNDING_PRECISION
     * Meta informations extracted from the WSDL
     * - documentation : Number of decimal places to round the currency values to. From the TB_CURRENCIES entry.
     * @var decimal
     */
    public $ROUNDING_PRECISION;
    /**
     * The ROUNDING_RULE
     * Meta informations extracted from the WSDL
     * - documentation : The rounding rule from the TB_CURRENCIES entry for the transaction currency.
     * - maxLength : 10
     * - minLength : 0
     * @var string
     */
    public $ROUNDING_RULE;
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
     * The INDATA
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructIndataType
     */
    public $INDATA;
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
     * The MESSAGE
     * Meta informations extracted from the WSDL
     * - documentation : A message related to this invoice. There can be multiple MESSAGE elements returned with each invoice.
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructMessageType
     */
    public $MESSAGE;
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
     * The TOTAL_TAX_AMOUNT
     * @var NillableDecimalType
     */
    public $TOTAL_TAX_AMOUNT;
    /**
     * The TRANSACTION_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The system date at the time the transaction was processed, GMT.
     * @var YyyyMmDdDateType
     */
    public $TRANSACTION_DATE;
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
     * The USER_ELEMENT
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructUserElementType
     */
    public $USER_ELEMENT;
    /**
     * The LINE
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * @var KPMGStructOutdataLineType
     */
    public $LINE;
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
     * The ORIGINAL_MOVEMENT_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The date of the original movement. Used in Date Determination Rules.
     * @var YyyyMmDdDateType
     */
    public $ORIGINAL_MOVEMENT_DATE;
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
     * The TAX_SUMMARY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructOutdataTaxSummaryType
     */
    public $TAX_SUMMARY;
    /**
     * Constructor method for OutdataInvoiceType
     * @see parent::__construct()
     * @param KPMGStructOutdataRequestStatusType $_rEQUEST_STATUS
     * @param NillableDecimalType $_bASIS_PERCENT
     * @param string $_cALCULATION_DIRECTION
     * @param string $_cALLING_SYSTEM_NUMBER
     * @param long $_cOMPANY_ID
     * @param string $_cOMPANY_NAME
     * @param string $_cOMPANY_ROLE
     * @param string $_cURRENCY_CODE
     * @param string $_cURRENCY_NAME
     * @param decimal,EmptyStringType $_mIN_ACCOUNTABLE_UNIT
     * @param decimal $_rOUNDING_PRECISION
     * @param string $_rOUNDING_RULE
     * @param string $_cUSTOMER_NAME
     * @param string $_cUSTOMER_NUMBER
     * @param string $_eND_USER_NAME
     * @param string $_eXTERNAL_COMPANY_ID
     * @param YyyyMmDdDateType $_fISCAL_DATE
     * @param string $_fUNCTIONAL_CURRENCY_CODE
     * @param string $_hOST_SYSTEM
     * @param KPMGStructIndataType $_iNDATA
     * @param YyyyMmDdDateType $_iNVOICE_DATE
     * @param string $_iNVOICE_NUMBER
     * @param BooleanType $_iS_AUDIT_UPDATE
     * @param BooleanType $_iS_BUSINESS_SUPPLY
     * @param BooleanType $_iS_CREDIT
     * @param BooleanType $_iS_REPORTED
     * @param BooleanType $_iS_REVERSED
     * @param KPMGStructMessageType $_mESSAGE
     * @param string $_nATURE_OF_TRANSACTION_CODE
     * @param string $_oRIGINAL_INVOICE_NUMBER
     * @param string $_sTATISTICAL_PROCEDURE
     * @param NillableDecimalType $_tOTAL_TAX_AMOUNT
     * @param YyyyMmDdDateType $_tRANSACTION_DATE
     * @param string $_uNIQUE_INVOICE_NUMBER
     * @param string $_vENDOR_NAME
     * @param string $_vENDOR_NUMBER
     * @param NillableDecimalType $_vENDOR_TAX
     * @param KPMGStructUserElementType $_uSER_ELEMENT
     * @param KPMGStructOutdataLineType $_lINE
     * @param string $_oRIGINAL_DOCUMENT_ID
     * @param string $_oRIGINAL_DOCUMENT_ITEM
     * @param string $_oRIGINAL_DOCUMENT_TYPE
     * @param YyyyMmDdDateType $_oRIGINAL_INVOICE_DATE
     * @param YyyyMmDdDateType $_oRIGINAL_MOVEMENT_DATE
     * @param string $_cUSTOMER_GROUP_NAME
     * @param string $_cUSTOMER_GROUP_OWNER
     * @param KPMGStructOutdataTaxSummaryType $_tAX_SUMMARY
     * @return KPMGStructOutdataInvoiceType
     */
    public function __construct($_rEQUEST_STATUS = NULL,$_bASIS_PERCENT = NULL,$_cALCULATION_DIRECTION = NULL,$_cALLING_SYSTEM_NUMBER = NULL,$_cOMPANY_ID = NULL,$_cOMPANY_NAME = NULL,$_cOMPANY_ROLE = NULL,$_cURRENCY_CODE = NULL,$_cURRENCY_NAME = NULL,$_mIN_ACCOUNTABLE_UNIT = NULL,$_rOUNDING_PRECISION = NULL,$_rOUNDING_RULE = NULL,$_cUSTOMER_NAME = NULL,$_cUSTOMER_NUMBER = NULL,$_eND_USER_NAME = NULL,$_eXTERNAL_COMPANY_ID = NULL,$_fISCAL_DATE = NULL,$_fUNCTIONAL_CURRENCY_CODE = NULL,$_hOST_SYSTEM = NULL,$_iNDATA = NULL,$_iNVOICE_DATE = NULL,$_iNVOICE_NUMBER = NULL,$_iS_AUDIT_UPDATE = NULL,$_iS_BUSINESS_SUPPLY = NULL,$_iS_CREDIT = NULL,$_iS_REPORTED = NULL,$_iS_REVERSED = NULL,$_mESSAGE = NULL,$_nATURE_OF_TRANSACTION_CODE = NULL,$_oRIGINAL_INVOICE_NUMBER = NULL,$_sTATISTICAL_PROCEDURE = NULL,$_tOTAL_TAX_AMOUNT = NULL,$_tRANSACTION_DATE = NULL,$_uNIQUE_INVOICE_NUMBER = NULL,$_vENDOR_NAME = NULL,$_vENDOR_NUMBER = NULL,$_vENDOR_TAX = NULL,$_uSER_ELEMENT = NULL,$_lINE = NULL,$_oRIGINAL_DOCUMENT_ID = NULL,$_oRIGINAL_DOCUMENT_ITEM = NULL,$_oRIGINAL_DOCUMENT_TYPE = NULL,$_oRIGINAL_INVOICE_DATE = NULL,$_oRIGINAL_MOVEMENT_DATE = NULL,$_cUSTOMER_GROUP_NAME = NULL,$_cUSTOMER_GROUP_OWNER = NULL,$_tAX_SUMMARY = NULL)
    {
        parent::__construct(array('REQUEST_STATUS'=>$_rEQUEST_STATUS,'BASIS_PERCENT'=>$_bASIS_PERCENT,'CALCULATION_DIRECTION'=>$_cALCULATION_DIRECTION,'CALLING_SYSTEM_NUMBER'=>$_cALLING_SYSTEM_NUMBER,'COMPANY_ID'=>$_cOMPANY_ID,'COMPANY_NAME'=>$_cOMPANY_NAME,'COMPANY_ROLE'=>$_cOMPANY_ROLE,'CURRENCY_CODE'=>$_cURRENCY_CODE,'CURRENCY_NAME'=>$_cURRENCY_NAME,'MIN_ACCOUNTABLE_UNIT'=>$_mIN_ACCOUNTABLE_UNIT,'ROUNDING_PRECISION'=>$_rOUNDING_PRECISION,'ROUNDING_RULE'=>$_rOUNDING_RULE,'CUSTOMER_NAME'=>$_cUSTOMER_NAME,'CUSTOMER_NUMBER'=>$_cUSTOMER_NUMBER,'END_USER_NAME'=>$_eND_USER_NAME,'EXTERNAL_COMPANY_ID'=>$_eXTERNAL_COMPANY_ID,'FISCAL_DATE'=>$_fISCAL_DATE,'FUNCTIONAL_CURRENCY_CODE'=>$_fUNCTIONAL_CURRENCY_CODE,'HOST_SYSTEM'=>$_hOST_SYSTEM,'INDATA'=>$_iNDATA,'INVOICE_DATE'=>$_iNVOICE_DATE,'INVOICE_NUMBER'=>$_iNVOICE_NUMBER,'IS_AUDIT_UPDATE'=>$_iS_AUDIT_UPDATE,'IS_BUSINESS_SUPPLY'=>$_iS_BUSINESS_SUPPLY,'IS_CREDIT'=>$_iS_CREDIT,'IS_REPORTED'=>$_iS_REPORTED,'IS_REVERSED'=>$_iS_REVERSED,'MESSAGE'=>$_mESSAGE,'NATURE_OF_TRANSACTION_CODE'=>$_nATURE_OF_TRANSACTION_CODE,'ORIGINAL_INVOICE_NUMBER'=>$_oRIGINAL_INVOICE_NUMBER,'STATISTICAL_PROCEDURE'=>$_sTATISTICAL_PROCEDURE,'TOTAL_TAX_AMOUNT'=>$_tOTAL_TAX_AMOUNT,'TRANSACTION_DATE'=>$_tRANSACTION_DATE,'UNIQUE_INVOICE_NUMBER'=>$_uNIQUE_INVOICE_NUMBER,'VENDOR_NAME'=>$_vENDOR_NAME,'VENDOR_NUMBER'=>$_vENDOR_NUMBER,'VENDOR_TAX'=>$_vENDOR_TAX,'USER_ELEMENT'=>$_uSER_ELEMENT,'LINE'=>$_lINE,'ORIGINAL_DOCUMENT_ID'=>$_oRIGINAL_DOCUMENT_ID,'ORIGINAL_DOCUMENT_ITEM'=>$_oRIGINAL_DOCUMENT_ITEM,'ORIGINAL_DOCUMENT_TYPE'=>$_oRIGINAL_DOCUMENT_TYPE,'ORIGINAL_INVOICE_DATE'=>$_oRIGINAL_INVOICE_DATE,'ORIGINAL_MOVEMENT_DATE'=>$_oRIGINAL_MOVEMENT_DATE,'CUSTOMER_GROUP_NAME'=>$_cUSTOMER_GROUP_NAME,'CUSTOMER_GROUP_OWNER'=>$_cUSTOMER_GROUP_OWNER,'TAX_SUMMARY'=>$_tAX_SUMMARY),false);
    }
    /**
     * Get REQUEST_STATUS value
     * @return KPMGStructOutdataRequestStatusType|null
     */
    public function getREQUEST_STATUS()
    {
        return $this->REQUEST_STATUS;
    }
    /**
     * Set REQUEST_STATUS value
     * @param KPMGStructOutdataRequestStatusType $_rEQUEST_STATUS the REQUEST_STATUS
     * @return KPMGStructOutdataRequestStatusType
     */
    public function setREQUEST_STATUS($_rEQUEST_STATUS)
    {
        return ($this->REQUEST_STATUS = $_rEQUEST_STATUS);
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
     * Get CURRENCY_NAME value
     * @return string|null
     */
    public function getCURRENCY_NAME()
    {
        return $this->CURRENCY_NAME;
    }
    /**
     * Set CURRENCY_NAME value
     * @param string $_cURRENCY_NAME the CURRENCY_NAME
     * @return string
     */
    public function setCURRENCY_NAME($_cURRENCY_NAME)
    {
        return ($this->CURRENCY_NAME = $_cURRENCY_NAME);
    }
    /**
     * Get MIN_ACCOUNTABLE_UNIT value
     * @return decimal,EmptyStringType|null
     */
    public function getMIN_ACCOUNTABLE_UNIT()
    {
        return $this->MIN_ACCOUNTABLE_UNIT;
    }
    /**
     * Set MIN_ACCOUNTABLE_UNIT value
     * @param decimal,EmptyStringType $_mIN_ACCOUNTABLE_UNIT the MIN_ACCOUNTABLE_UNIT
     * @return decimal,EmptyStringType
     */
    public function setMIN_ACCOUNTABLE_UNIT($_mIN_ACCOUNTABLE_UNIT)
    {
        return ($this->MIN_ACCOUNTABLE_UNIT = $_mIN_ACCOUNTABLE_UNIT);
    }
    /**
     * Get ROUNDING_PRECISION value
     * @return decimal|null
     */
    public function getROUNDING_PRECISION()
    {
        return $this->ROUNDING_PRECISION;
    }
    /**
     * Set ROUNDING_PRECISION value
     * @param decimal $_rOUNDING_PRECISION the ROUNDING_PRECISION
     * @return decimal
     */
    public function setROUNDING_PRECISION($_rOUNDING_PRECISION)
    {
        return ($this->ROUNDING_PRECISION = $_rOUNDING_PRECISION);
    }
    /**
     * Get ROUNDING_RULE value
     * @return string|null
     */
    public function getROUNDING_RULE()
    {
        return $this->ROUNDING_RULE;
    }
    /**
     * Set ROUNDING_RULE value
     * @param string $_rOUNDING_RULE the ROUNDING_RULE
     * @return string
     */
    public function setROUNDING_RULE($_rOUNDING_RULE)
    {
        return ($this->ROUNDING_RULE = $_rOUNDING_RULE);
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
     * Get INDATA value
     * @return KPMGStructIndataType|null
     */
    public function getINDATA()
    {
        return $this->INDATA;
    }
    /**
     * Set INDATA value
     * @param KPMGStructIndataType $_iNDATA the INDATA
     * @return KPMGStructIndataType
     */
    public function setINDATA($_iNDATA)
    {
        return ($this->INDATA = $_iNDATA);
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
     * Get TOTAL_TAX_AMOUNT value
     * @return NillableDecimalType|null
     */
    public function getTOTAL_TAX_AMOUNT()
    {
        return $this->TOTAL_TAX_AMOUNT;
    }
    /**
     * Set TOTAL_TAX_AMOUNT value
     * @param NillableDecimalType $_tOTAL_TAX_AMOUNT the TOTAL_TAX_AMOUNT
     * @return NillableDecimalType
     */
    public function setTOTAL_TAX_AMOUNT($_tOTAL_TAX_AMOUNT)
    {
        return ($this->TOTAL_TAX_AMOUNT = $_tOTAL_TAX_AMOUNT);
    }
    /**
     * Get TRANSACTION_DATE value
     * @return YyyyMmDdDateType|null
     */
    public function getTRANSACTION_DATE()
    {
        return $this->TRANSACTION_DATE;
    }
    /**
     * Set TRANSACTION_DATE value
     * @param YyyyMmDdDateType $_tRANSACTION_DATE the TRANSACTION_DATE
     * @return YyyyMmDdDateType
     */
    public function setTRANSACTION_DATE($_tRANSACTION_DATE)
    {
        return ($this->TRANSACTION_DATE = $_tRANSACTION_DATE);
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
     * @return KPMGStructOutdataLineType|null
     */
    public function getLINE()
    {
        return $this->LINE;
    }
    /**
     * Set LINE value
     * @param KPMGStructOutdataLineType $_lINE the LINE
     * @return KPMGStructOutdataLineType
     */
    public function setLINE($_lINE)
    {
        return ($this->LINE = $_lINE);
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
     * Get TAX_SUMMARY value
     * @return KPMGStructOutdataTaxSummaryType|null
     */
    public function getTAX_SUMMARY()
    {
        return $this->TAX_SUMMARY;
    }
    /**
     * Set TAX_SUMMARY value
     * @param KPMGStructOutdataTaxSummaryType $_tAX_SUMMARY the TAX_SUMMARY
     * @return KPMGStructOutdataTaxSummaryType
     */
    public function setTAX_SUMMARY($_tAX_SUMMARY)
    {
        return ($this->TAX_SUMMARY = $_tAX_SUMMARY);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructOutdataInvoiceType
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
