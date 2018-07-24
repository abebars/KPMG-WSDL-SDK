<?php
/**
 * File for class KPMGStructOutdataLineType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataLineType originally named OutdataLineType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataLineType extends KPMGWsdlClass
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - use : required
     * - documentation : Each invoice can have multiple lines. The ID indicates the actual line number.
     * @var string
     */
    public $ID;
    /**
     * The ALLOCATION_LINE
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
     * @var OutdataLineType
     */
    public $ALLOCATION_LINE;
    /**
     * The ACCOUNTING_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The Accounting Code (or GL Code) passed in by the ERP system.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $ACCOUNTING_CODE;
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
     * The BASIS_PERCENT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A percentage of the gross amount of the line used in tax calculation. .5 is equal to 50%, .6 is equal to 60%, and so on.If this element is provided, it overrides any data found on a tax rule or exemption certificate applied to this transaction.
     * @var NillableDecimalType
     */
    public $BASIS_PERCENT;
    /**
     * The BILL_TO_BRANCH_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Line or invoice branch ID for one of the various addresses (Bill To, Ship From, etc.) if the field is not empty at both levels.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $BILL_TO_BRANCH_ID;
    /**
     * The COMMODITY_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A code that can be assigned to a product by a particular authority. In the EU, many member states have moved to using Harmonized Codes (similar to Commodity Codes) which can also be stored in this element. Commodity Codes provide an alternate way (in addition to product mappings) to match ONESOURCE Indirect Tax Determination products.Note: When commodity codes are evaluated by the calculation engine, it first attempts to match the full code, and then strips off characters from the end of the code, one at a time, until a match is made or no code remains.
     * - maxLength : 50
     * - minLength : 0
     * @var string
     */
    public $COMMODITY_CODE;
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
     * The DESCRIPTION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A description of a particular product. This data is primarily used to retrieve and reference records from the audit data.
     * - maxLength : 200
     * - minLength : 0
     * @var string
     */
    public $DESCRIPTION;
    /**
     * The DISCOUNT_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : In some situations volume or other discounts must be taken into account when calculating tax. For these situations, DISCOUNT_AMOUNT can be used to indicate how much the GROSS_AMOUNT has been discounted by.
     * @var NillableDecimalType
     */
    public $DISCOUNT_AMOUNT;
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
     * The FREIGHT_ON_BOARD
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This field has been deprecated and may be removed in a future release.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $FREIGHT_ON_BOARD;
    /**
     * The GROSS_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This is the amount that is required to compute tax in forward calculations (see the invoice-level input element <CALCULATION_DIRECTION>).When you execute reverse calculations, the value of GROSS_AMOUNT is affected by the values of two Sabrix Config parameters: * Reverse-from-tax: USE_CALC_GROSS_AMT_AS_GROSS_AMT_CALC_DIR_R * Reverse-from-total: USE_CALC_GROSS_AMT_AS_GROSS_AMT_CALC_DIR_TIf you set the value for these parameters to Y, Determination inserts the calculated gross amount into the gross amount XML output element. For example, if there is no gross amount in the XML input, the gross amount in the XML output contains the calculated gross amount value. If there is a gross amount in the XML input, then it is replaced by the value of calculated gross amount in the XML output.If you accept the default and do not set these parameters (or set them to N), the gross amount in the XML output is the value you provided in the input.NOTE: Gross amount is required in forward calculations, as well as in reverse-from-tax transactions using tiered rates.For information about gross amounts containing non-taxable amounts such as fees, see the description for ITEM_VALUE.See also the online help topics Understanding Calculation Types and Sabrix Config.
     * @var NillableDecimalType
     */
    public $GROSS_AMOUNT;
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
     * The MIDDLEMAN_MARKUP_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This is a pass-through element either from the financial system or Determination TransEditors. It is not used in Determination, but it is audited and can be used in Reporting. Set this value to indicate the amount of markup applied, or should be applied, to the item or line amount. If you use Allocations, this value is adjusted per the allocation configuration. This value can be returned in output.
     * @var decimal
     */
    public $MIDDLEMAN_MARKUP_AMOUNT;
    /**
     * The MIDDLEMAN_MARKUP_RATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This is the corresponding rate for the MiddlemanMarkupAmountType (See the explanation for that element).
     * @var decimal
     */
    public $MIDDLEMAN_MARKUP_RATE;
    /**
     * The IS_BUSINESS_SUPPLY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether a supply is being used for business. In Brazilian ICMS and IPI transactions, whether a supply is being used for business or not impacts the tax and reporting requirements of the buyer and the seller.
     * @var BooleanType
     */
    public $IS_BUSINESS_SUPPLY;
    /**
     * The ITEM_VALUE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The total value of all items on this line. This is distinct from the gross amount because it does not contain costs such as landed costs, insurance, freight and other associated costs that gross amount does contain.If an item value is present in a transaction, it is used instead of taxable basis. Item value is used in many VAT and EU Intrastat reports.
     * @var NillableDecimalType
     */
    public $ITEM_VALUE;
    /**
     * The LINE_NUMBER
     * Meta informations extracted from the WSDL
     * - documentation : LINE_NUMBER is a required element for each line. Used in combination with INVOICE_NUMBER, it is used to specify and reference a particular line on a particular invoice.
     * @var decimal
     */
    public $LINE_NUMBER;
    /**
     * The RELATED_LINE_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Identifies that this line should have the same tax treatment as the product on the related line. See Related Charges for more information.
     * @var decimal
     */
    public $RELATED_LINE_NUMBER;
    /**
     * The MASS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The Mass of a supply. Used for Intrastat reporting purposes in the EU.
     * @var decimal
     */
    public $MASS;
    /**
     * The MESSAGE
     * Meta informations extracted from the WSDL
     * - documentation : A message related to this line. There can be multiple MESSAGE elements returned with each line.
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructMessageType
     */
    public $MESSAGE;
    /**
     * The MIDDLEMAN_BRANCH_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Line or invoice branch ID for one of the various addresses (Bill To, Ship From, etc.) if the field is not empty at both levels.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $MIDDLEMAN_BRANCH_ID;
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
     * The PART_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The part number used by your ERP system. This element is stored in the audit tables and does not affect calculation.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $PART_NUMBER;
    /**
     * The POINT_OF_TITLE_TRANSFER
     * Meta informations extracted from the WSDL
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
     * The SHIP_FROM_BRANCH_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Line or invoice branch ID for one of the various addresses (Bill To, Ship From, etc.) if the field is not empty at both levels.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $SHIP_FROM_BRANCH_ID;
    /**
     * The SHIP_FROM_COUNTRY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Line or invoice ship from country if either is not empty.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $SHIP_FROM_COUNTRY;
    /**
     * The SHIP_TO_BRANCH_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Line or invoice branch ID for one of the various addresses (Bill To, Ship From, etc.) if the field is not empty at both levels.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $SHIP_TO_BRANCH_ID;
    /**
     * The SHIP_TO_COUNTRY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Line or invoice ship to country if either is not empty.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $SHIP_TO_COUNTRY;
    /**
     * The SUPPLEMENTARY_UNIT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The size of a supply. For Intrastat reports in the EU, some commodities require an additional measuring unit other than or in addition to mass for reporting purposes. EU rules determine the unit to be used for various supplies.
     * - maxLength : 5
     * - minLength : 0
     * @var string
     */
    public $SUPPLEMENTARY_UNIT;
    /**
     * The SUPPLY_BRANCH_ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Line or invoice branch ID for one of the various addresses (Bill To, Ship From, etc.) if the field is not empty at both levels.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $SUPPLY_BRANCH_ID;
    /**
     * The UNIQUE_LINE_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The ERP system's primary key for this line number.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $UNIQUE_LINE_NUMBER;
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
     * The TOTAL_TAX_AMOUNT
     * @var NillableDecimalType
     */
    public $TOTAL_TAX_AMOUNT;
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
     * The TAX
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructOutdataTaxType
     */
    public $TAX;
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
     * The UNIT_OF_MEASURE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : A description of the unit of measure used to match a Rule's specified Unit of Measure.Note: The ampersand character (&) cannot be used in a unit of measure.Warning: To take advantage of Determination's built-in Units of Measures and Conversion Factors, use the QUANTITIES structure instead. See Units of Measure Concepts and Tasks for more information.
     * - maxLength : 25
     * - minLength : 0
     * @var string
     */
    public $UNIT_OF_MEASURE;
    /**
     * The USER_ELEMENT
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var KPMGStructUserElementType
     */
    public $USER_ELEMENT;
    /**
     * The QUANTITIES
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructQuantitiesType
     */
    public $QUANTITIES;
    /**
     * The IS_CREDIT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates whether the current transaction is a credit transaction as identified by your ERP system. true indicates a credit transaction for both auditing and reporting purposes. When set to true, any amounts on the transaction should be passed in as negative values.
     * @var BooleanType
     */
    public $IS_CREDIT;
    /**
     * The INVOICE_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The date of the invoice.Note: Determination supports two audit keys to enable the lookup of audit records. The two combinations are as follows:HOST_SYSTEMCALLING_SYSTEM_NUMBERUNIQUE_INVOICE_NUMBERorMERCHANT_IDINVOICE_NUMINVOICE_DATEConfiguration parameters can modify which keys are used and in which order. See Sabrix Config and then contact Sabrix Technical Support for more information.
     * @var YyyyMmDdDateType
     */
    public $INVOICE_DATE;
    /**
     * The MOVEMENT_DATE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates the date of a movement of goods, such as via a pipeline, or the data of issue. Used in rule qualifiers and in date determination rules.
     * @var YyyyMmDdDateType
     */
    public $MOVEMENT_DATE;
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
     * The TAX_SUMMARY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructOutdataTaxSummaryType
     */
    public $TAX_SUMMARY;
    /**
     * Constructor method for OutdataLineType
     * @see parent::__construct()
     * @param string $_iD
     * @param OutdataLineType $_aLLOCATION_LINE
     * @param string $_aCCOUNTING_CODE
     * @param string $_aLLOCATION_NAME
     * @param NillableDecimalType $_bASIS_PERCENT
     * @param string $_bILL_TO_BRANCH_ID
     * @param string $_cOMMODITY_CODE
     * @param string $_cOUNTRY_OF_ORIGIN
     * @param string $_cUSTOMER_NAME
     * @param string $_cUSTOMER_NUMBER
     * @param string $_dEPT_OF_CONSIGN
     * @param string $_dESCRIPTION
     * @param NillableDecimalType $_dISCOUNT_AMOUNT
     * @param string $_eND_USER_NAME
     * @param string $_dELIVERY_TERMS
     * @param string $_fREIGHT_ON_BOARD
     * @param NillableDecimalType $_gROSS_AMOUNT
     * @param NillableDecimalType $_iNPUT_RECOVERY_AMOUNT
     * @param NillableDecimalType $_iNPUT_RECOVERY_PERCENT
     * @param decimal $_mIDDLEMAN_MARKUP_AMOUNT
     * @param decimal $_mIDDLEMAN_MARKUP_RATE
     * @param BooleanType $_iS_BUSINESS_SUPPLY
     * @param NillableDecimalType $_iTEM_VALUE
     * @param decimal $_lINE_NUMBER
     * @param decimal $_rELATED_LINE_NUMBER
     * @param decimal $_mASS
     * @param KPMGStructMessageType $_mESSAGE
     * @param string $_mIDDLEMAN_BRANCH_ID
     * @param string $_mODE_OF_TRANSPORT
     * @param string $_pART_NUMBER
     * @param string $_pOINT_OF_TITLE_TRANSFER
     * @param string $_pORT_OF_ENTRY
     * @param string $_pORT_OF_LOADING
     * @param string $_rEGIME
     * @param string $_sHIP_FROM_BRANCH_ID
     * @param string $_sHIP_FROM_COUNTRY
     * @param string $_sHIP_TO_BRANCH_ID
     * @param string $_sHIP_TO_COUNTRY
     * @param string $_sUPPLEMENTARY_UNIT
     * @param string $_sUPPLY_BRANCH_ID
     * @param string $_uNIQUE_LINE_NUMBER
     * @param string $_vENDOR_NAME
     * @param string $_vENDOR_NUMBER
     * @param NillableDecimalType $_vENDOR_TAX
     * @param NillableDecimalType $_tOTAL_TAX_AMOUNT
     * @param string $_tAX_CODE
     * @param KPMGStructOutdataTaxType $_tAX
     * @param string $_tRANSACTION_TYPE
     * @param string $_uNIT_OF_MEASURE
     * @param KPMGStructUserElementType $_uSER_ELEMENT
     * @param KPMGStructQuantitiesType $_qUANTITIES
     * @param BooleanType $_iS_CREDIT
     * @param YyyyMmDdDateType $_iNVOICE_DATE
     * @param YyyyMmDdDateType $_mOVEMENT_DATE
     * @param string $_oRIGINAL_DOCUMENT_ID
     * @param string $_oRIGINAL_DOCUMENT_ITEM
     * @param string $_oRIGINAL_DOCUMENT_TYPE
     * @param YyyyMmDdDateType $_oRIGINAL_INVOICE_DATE
     * @param string $_oRIGINAL_INVOICE_NUMBER
     * @param YyyyMmDdDateType $_oRIGINAL_MOVEMENT_DATE
     * @param string $_cUSTOMER_GROUP_NAME
     * @param string $_cUSTOMER_GROUP_OWNER
     * @param string $_tITLE_TRANSFER_LOCATION
     * @param KPMGStructOutdataTaxSummaryType $_tAX_SUMMARY
     * @return KPMGStructOutdataLineType
     */
    public function __construct($_iD,$_aLLOCATION_LINE = NULL,$_aCCOUNTING_CODE = NULL,$_aLLOCATION_NAME = NULL,$_bASIS_PERCENT = NULL,$_bILL_TO_BRANCH_ID = NULL,$_cOMMODITY_CODE = NULL,$_cOUNTRY_OF_ORIGIN = NULL,$_cUSTOMER_NAME = NULL,$_cUSTOMER_NUMBER = NULL,$_dEPT_OF_CONSIGN = NULL,$_dESCRIPTION = NULL,$_dISCOUNT_AMOUNT = NULL,$_eND_USER_NAME = NULL,$_dELIVERY_TERMS = NULL,$_fREIGHT_ON_BOARD = NULL,$_gROSS_AMOUNT = NULL,$_iNPUT_RECOVERY_AMOUNT = NULL,$_iNPUT_RECOVERY_PERCENT = NULL,$_mIDDLEMAN_MARKUP_AMOUNT = NULL,$_mIDDLEMAN_MARKUP_RATE = NULL,$_iS_BUSINESS_SUPPLY = NULL,$_iTEM_VALUE = NULL,$_lINE_NUMBER = NULL,$_rELATED_LINE_NUMBER = NULL,$_mASS = NULL,$_mESSAGE = NULL,$_mIDDLEMAN_BRANCH_ID = NULL,$_mODE_OF_TRANSPORT = NULL,$_pART_NUMBER = NULL,$_pOINT_OF_TITLE_TRANSFER = NULL,$_pORT_OF_ENTRY = NULL,$_pORT_OF_LOADING = NULL,$_rEGIME = NULL,$_sHIP_FROM_BRANCH_ID = NULL,$_sHIP_FROM_COUNTRY = NULL,$_sHIP_TO_BRANCH_ID = NULL,$_sHIP_TO_COUNTRY = NULL,$_sUPPLEMENTARY_UNIT = NULL,$_sUPPLY_BRANCH_ID = NULL,$_uNIQUE_LINE_NUMBER = NULL,$_vENDOR_NAME = NULL,$_vENDOR_NUMBER = NULL,$_vENDOR_TAX = NULL,$_tOTAL_TAX_AMOUNT = NULL,$_tAX_CODE = NULL,$_tAX = NULL,$_tRANSACTION_TYPE = NULL,$_uNIT_OF_MEASURE = NULL,$_uSER_ELEMENT = NULL,$_qUANTITIES = NULL,$_iS_CREDIT = NULL,$_iNVOICE_DATE = NULL,$_mOVEMENT_DATE = NULL,$_oRIGINAL_DOCUMENT_ID = NULL,$_oRIGINAL_DOCUMENT_ITEM = NULL,$_oRIGINAL_DOCUMENT_TYPE = NULL,$_oRIGINAL_INVOICE_DATE = NULL,$_oRIGINAL_INVOICE_NUMBER = NULL,$_oRIGINAL_MOVEMENT_DATE = NULL,$_cUSTOMER_GROUP_NAME = NULL,$_cUSTOMER_GROUP_OWNER = NULL,$_tITLE_TRANSFER_LOCATION = NULL,$_tAX_SUMMARY = NULL)
    {
        parent::__construct(array('ID'=>$_iD,'ALLOCATION_LINE'=>$_aLLOCATION_LINE,'ACCOUNTING_CODE'=>$_aCCOUNTING_CODE,'ALLOCATION_NAME'=>$_aLLOCATION_NAME,'BASIS_PERCENT'=>$_bASIS_PERCENT,'BILL_TO_BRANCH_ID'=>$_bILL_TO_BRANCH_ID,'COMMODITY_CODE'=>$_cOMMODITY_CODE,'COUNTRY_OF_ORIGIN'=>$_cOUNTRY_OF_ORIGIN,'CUSTOMER_NAME'=>$_cUSTOMER_NAME,'CUSTOMER_NUMBER'=>$_cUSTOMER_NUMBER,'DEPT_OF_CONSIGN'=>$_dEPT_OF_CONSIGN,'DESCRIPTION'=>$_dESCRIPTION,'DISCOUNT_AMOUNT'=>$_dISCOUNT_AMOUNT,'END_USER_NAME'=>$_eND_USER_NAME,'DELIVERY_TERMS'=>$_dELIVERY_TERMS,'FREIGHT_ON_BOARD'=>$_fREIGHT_ON_BOARD,'GROSS_AMOUNT'=>$_gROSS_AMOUNT,'INPUT_RECOVERY_AMOUNT'=>$_iNPUT_RECOVERY_AMOUNT,'INPUT_RECOVERY_PERCENT'=>$_iNPUT_RECOVERY_PERCENT,'MIDDLEMAN_MARKUP_AMOUNT'=>$_mIDDLEMAN_MARKUP_AMOUNT,'MIDDLEMAN_MARKUP_RATE'=>$_mIDDLEMAN_MARKUP_RATE,'IS_BUSINESS_SUPPLY'=>$_iS_BUSINESS_SUPPLY,'ITEM_VALUE'=>$_iTEM_VALUE,'LINE_NUMBER'=>$_lINE_NUMBER,'RELATED_LINE_NUMBER'=>$_rELATED_LINE_NUMBER,'MASS'=>$_mASS,'MESSAGE'=>$_mESSAGE,'MIDDLEMAN_BRANCH_ID'=>$_mIDDLEMAN_BRANCH_ID,'MODE_OF_TRANSPORT'=>$_mODE_OF_TRANSPORT,'PART_NUMBER'=>$_pART_NUMBER,'POINT_OF_TITLE_TRANSFER'=>$_pOINT_OF_TITLE_TRANSFER,'PORT_OF_ENTRY'=>$_pORT_OF_ENTRY,'PORT_OF_LOADING'=>$_pORT_OF_LOADING,'REGIME'=>$_rEGIME,'SHIP_FROM_BRANCH_ID'=>$_sHIP_FROM_BRANCH_ID,'SHIP_FROM_COUNTRY'=>$_sHIP_FROM_COUNTRY,'SHIP_TO_BRANCH_ID'=>$_sHIP_TO_BRANCH_ID,'SHIP_TO_COUNTRY'=>$_sHIP_TO_COUNTRY,'SUPPLEMENTARY_UNIT'=>$_sUPPLEMENTARY_UNIT,'SUPPLY_BRANCH_ID'=>$_sUPPLY_BRANCH_ID,'UNIQUE_LINE_NUMBER'=>$_uNIQUE_LINE_NUMBER,'VENDOR_NAME'=>$_vENDOR_NAME,'VENDOR_NUMBER'=>$_vENDOR_NUMBER,'VENDOR_TAX'=>$_vENDOR_TAX,'TOTAL_TAX_AMOUNT'=>$_tOTAL_TAX_AMOUNT,'TAX_CODE'=>$_tAX_CODE,'TAX'=>$_tAX,'TRANSACTION_TYPE'=>$_tRANSACTION_TYPE,'UNIT_OF_MEASURE'=>$_uNIT_OF_MEASURE,'USER_ELEMENT'=>$_uSER_ELEMENT,'QUANTITIES'=>$_qUANTITIES,'IS_CREDIT'=>$_iS_CREDIT,'INVOICE_DATE'=>$_iNVOICE_DATE,'MOVEMENT_DATE'=>$_mOVEMENT_DATE,'ORIGINAL_DOCUMENT_ID'=>$_oRIGINAL_DOCUMENT_ID,'ORIGINAL_DOCUMENT_ITEM'=>$_oRIGINAL_DOCUMENT_ITEM,'ORIGINAL_DOCUMENT_TYPE'=>$_oRIGINAL_DOCUMENT_TYPE,'ORIGINAL_INVOICE_DATE'=>$_oRIGINAL_INVOICE_DATE,'ORIGINAL_INVOICE_NUMBER'=>$_oRIGINAL_INVOICE_NUMBER,'ORIGINAL_MOVEMENT_DATE'=>$_oRIGINAL_MOVEMENT_DATE,'CUSTOMER_GROUP_NAME'=>$_cUSTOMER_GROUP_NAME,'CUSTOMER_GROUP_OWNER'=>$_cUSTOMER_GROUP_OWNER,'TITLE_TRANSFER_LOCATION'=>$_tITLE_TRANSFER_LOCATION,'TAX_SUMMARY'=>$_tAX_SUMMARY),false);
    }
    /**
     * Get ID value
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $_iD the ID
     * @return string
     */
    public function setID($_iD)
    {
        return ($this->ID = $_iD);
    }
    /**
     * Get ALLOCATION_LINE value
     * @return OutdataLineType|null
     */
    public function getALLOCATION_LINE()
    {
        return $this->ALLOCATION_LINE;
    }
    /**
     * Set ALLOCATION_LINE value
     * @param OutdataLineType $_aLLOCATION_LINE the ALLOCATION_LINE
     * @return OutdataLineType
     */
    public function setALLOCATION_LINE($_aLLOCATION_LINE)
    {
        return ($this->ALLOCATION_LINE = $_aLLOCATION_LINE);
    }
    /**
     * Get ACCOUNTING_CODE value
     * @return string|null
     */
    public function getACCOUNTING_CODE()
    {
        return $this->ACCOUNTING_CODE;
    }
    /**
     * Set ACCOUNTING_CODE value
     * @param string $_aCCOUNTING_CODE the ACCOUNTING_CODE
     * @return string
     */
    public function setACCOUNTING_CODE($_aCCOUNTING_CODE)
    {
        return ($this->ACCOUNTING_CODE = $_aCCOUNTING_CODE);
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
     * Get BILL_TO_BRANCH_ID value
     * @return string|null
     */
    public function getBILL_TO_BRANCH_ID()
    {
        return $this->BILL_TO_BRANCH_ID;
    }
    /**
     * Set BILL_TO_BRANCH_ID value
     * @param string $_bILL_TO_BRANCH_ID the BILL_TO_BRANCH_ID
     * @return string
     */
    public function setBILL_TO_BRANCH_ID($_bILL_TO_BRANCH_ID)
    {
        return ($this->BILL_TO_BRANCH_ID = $_bILL_TO_BRANCH_ID);
    }
    /**
     * Get COMMODITY_CODE value
     * @return string|null
     */
    public function getCOMMODITY_CODE()
    {
        return $this->COMMODITY_CODE;
    }
    /**
     * Set COMMODITY_CODE value
     * @param string $_cOMMODITY_CODE the COMMODITY_CODE
     * @return string
     */
    public function setCOMMODITY_CODE($_cOMMODITY_CODE)
    {
        return ($this->COMMODITY_CODE = $_cOMMODITY_CODE);
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
     * Get DESCRIPTION value
     * @return string|null
     */
    public function getDESCRIPTION()
    {
        return $this->DESCRIPTION;
    }
    /**
     * Set DESCRIPTION value
     * @param string $_dESCRIPTION the DESCRIPTION
     * @return string
     */
    public function setDESCRIPTION($_dESCRIPTION)
    {
        return ($this->DESCRIPTION = $_dESCRIPTION);
    }
    /**
     * Get DISCOUNT_AMOUNT value
     * @return NillableDecimalType|null
     */
    public function getDISCOUNT_AMOUNT()
    {
        return $this->DISCOUNT_AMOUNT;
    }
    /**
     * Set DISCOUNT_AMOUNT value
     * @param NillableDecimalType $_dISCOUNT_AMOUNT the DISCOUNT_AMOUNT
     * @return NillableDecimalType
     */
    public function setDISCOUNT_AMOUNT($_dISCOUNT_AMOUNT)
    {
        return ($this->DISCOUNT_AMOUNT = $_dISCOUNT_AMOUNT);
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
     * Get FREIGHT_ON_BOARD value
     * @return string|null
     */
    public function getFREIGHT_ON_BOARD()
    {
        return $this->FREIGHT_ON_BOARD;
    }
    /**
     * Set FREIGHT_ON_BOARD value
     * @param string $_fREIGHT_ON_BOARD the FREIGHT_ON_BOARD
     * @return string
     */
    public function setFREIGHT_ON_BOARD($_fREIGHT_ON_BOARD)
    {
        return ($this->FREIGHT_ON_BOARD = $_fREIGHT_ON_BOARD);
    }
    /**
     * Get GROSS_AMOUNT value
     * @return NillableDecimalType|null
     */
    public function getGROSS_AMOUNT()
    {
        return $this->GROSS_AMOUNT;
    }
    /**
     * Set GROSS_AMOUNT value
     * @param NillableDecimalType $_gROSS_AMOUNT the GROSS_AMOUNT
     * @return NillableDecimalType
     */
    public function setGROSS_AMOUNT($_gROSS_AMOUNT)
    {
        return ($this->GROSS_AMOUNT = $_gROSS_AMOUNT);
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
     * Get MIDDLEMAN_MARKUP_AMOUNT value
     * @return decimal|null
     */
    public function getMIDDLEMAN_MARKUP_AMOUNT()
    {
        return $this->MIDDLEMAN_MARKUP_AMOUNT;
    }
    /**
     * Set MIDDLEMAN_MARKUP_AMOUNT value
     * @param decimal $_mIDDLEMAN_MARKUP_AMOUNT the MIDDLEMAN_MARKUP_AMOUNT
     * @return decimal
     */
    public function setMIDDLEMAN_MARKUP_AMOUNT($_mIDDLEMAN_MARKUP_AMOUNT)
    {
        return ($this->MIDDLEMAN_MARKUP_AMOUNT = $_mIDDLEMAN_MARKUP_AMOUNT);
    }
    /**
     * Get MIDDLEMAN_MARKUP_RATE value
     * @return decimal|null
     */
    public function getMIDDLEMAN_MARKUP_RATE()
    {
        return $this->MIDDLEMAN_MARKUP_RATE;
    }
    /**
     * Set MIDDLEMAN_MARKUP_RATE value
     * @param decimal $_mIDDLEMAN_MARKUP_RATE the MIDDLEMAN_MARKUP_RATE
     * @return decimal
     */
    public function setMIDDLEMAN_MARKUP_RATE($_mIDDLEMAN_MARKUP_RATE)
    {
        return ($this->MIDDLEMAN_MARKUP_RATE = $_mIDDLEMAN_MARKUP_RATE);
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
     * Get ITEM_VALUE value
     * @return NillableDecimalType|null
     */
    public function getITEM_VALUE()
    {
        return $this->ITEM_VALUE;
    }
    /**
     * Set ITEM_VALUE value
     * @param NillableDecimalType $_iTEM_VALUE the ITEM_VALUE
     * @return NillableDecimalType
     */
    public function setITEM_VALUE($_iTEM_VALUE)
    {
        return ($this->ITEM_VALUE = $_iTEM_VALUE);
    }
    /**
     * Get LINE_NUMBER value
     * @return decimal|null
     */
    public function getLINE_NUMBER()
    {
        return $this->LINE_NUMBER;
    }
    /**
     * Set LINE_NUMBER value
     * @param decimal $_lINE_NUMBER the LINE_NUMBER
     * @return decimal
     */
    public function setLINE_NUMBER($_lINE_NUMBER)
    {
        return ($this->LINE_NUMBER = $_lINE_NUMBER);
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
     * Get MASS value
     * @return decimal|null
     */
    public function getMASS()
    {
        return $this->MASS;
    }
    /**
     * Set MASS value
     * @param decimal $_mASS the MASS
     * @return decimal
     */
    public function setMASS($_mASS)
    {
        return ($this->MASS = $_mASS);
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
     * Get MIDDLEMAN_BRANCH_ID value
     * @return string|null
     */
    public function getMIDDLEMAN_BRANCH_ID()
    {
        return $this->MIDDLEMAN_BRANCH_ID;
    }
    /**
     * Set MIDDLEMAN_BRANCH_ID value
     * @param string $_mIDDLEMAN_BRANCH_ID the MIDDLEMAN_BRANCH_ID
     * @return string
     */
    public function setMIDDLEMAN_BRANCH_ID($_mIDDLEMAN_BRANCH_ID)
    {
        return ($this->MIDDLEMAN_BRANCH_ID = $_mIDDLEMAN_BRANCH_ID);
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
     * Get PART_NUMBER value
     * @return string|null
     */
    public function getPART_NUMBER()
    {
        return $this->PART_NUMBER;
    }
    /**
     * Set PART_NUMBER value
     * @param string $_pART_NUMBER the PART_NUMBER
     * @return string
     */
    public function setPART_NUMBER($_pART_NUMBER)
    {
        return ($this->PART_NUMBER = $_pART_NUMBER);
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
     * Get SHIP_FROM_BRANCH_ID value
     * @return string|null
     */
    public function getSHIP_FROM_BRANCH_ID()
    {
        return $this->SHIP_FROM_BRANCH_ID;
    }
    /**
     * Set SHIP_FROM_BRANCH_ID value
     * @param string $_sHIP_FROM_BRANCH_ID the SHIP_FROM_BRANCH_ID
     * @return string
     */
    public function setSHIP_FROM_BRANCH_ID($_sHIP_FROM_BRANCH_ID)
    {
        return ($this->SHIP_FROM_BRANCH_ID = $_sHIP_FROM_BRANCH_ID);
    }
    /**
     * Get SHIP_FROM_COUNTRY value
     * @return string|null
     */
    public function getSHIP_FROM_COUNTRY()
    {
        return $this->SHIP_FROM_COUNTRY;
    }
    /**
     * Set SHIP_FROM_COUNTRY value
     * @param string $_sHIP_FROM_COUNTRY the SHIP_FROM_COUNTRY
     * @return string
     */
    public function setSHIP_FROM_COUNTRY($_sHIP_FROM_COUNTRY)
    {
        return ($this->SHIP_FROM_COUNTRY = $_sHIP_FROM_COUNTRY);
    }
    /**
     * Get SHIP_TO_BRANCH_ID value
     * @return string|null
     */
    public function getSHIP_TO_BRANCH_ID()
    {
        return $this->SHIP_TO_BRANCH_ID;
    }
    /**
     * Set SHIP_TO_BRANCH_ID value
     * @param string $_sHIP_TO_BRANCH_ID the SHIP_TO_BRANCH_ID
     * @return string
     */
    public function setSHIP_TO_BRANCH_ID($_sHIP_TO_BRANCH_ID)
    {
        return ($this->SHIP_TO_BRANCH_ID = $_sHIP_TO_BRANCH_ID);
    }
    /**
     * Get SHIP_TO_COUNTRY value
     * @return string|null
     */
    public function getSHIP_TO_COUNTRY()
    {
        return $this->SHIP_TO_COUNTRY;
    }
    /**
     * Set SHIP_TO_COUNTRY value
     * @param string $_sHIP_TO_COUNTRY the SHIP_TO_COUNTRY
     * @return string
     */
    public function setSHIP_TO_COUNTRY($_sHIP_TO_COUNTRY)
    {
        return ($this->SHIP_TO_COUNTRY = $_sHIP_TO_COUNTRY);
    }
    /**
     * Get SUPPLEMENTARY_UNIT value
     * @return string|null
     */
    public function getSUPPLEMENTARY_UNIT()
    {
        return $this->SUPPLEMENTARY_UNIT;
    }
    /**
     * Set SUPPLEMENTARY_UNIT value
     * @param string $_sUPPLEMENTARY_UNIT the SUPPLEMENTARY_UNIT
     * @return string
     */
    public function setSUPPLEMENTARY_UNIT($_sUPPLEMENTARY_UNIT)
    {
        return ($this->SUPPLEMENTARY_UNIT = $_sUPPLEMENTARY_UNIT);
    }
    /**
     * Get SUPPLY_BRANCH_ID value
     * @return string|null
     */
    public function getSUPPLY_BRANCH_ID()
    {
        return $this->SUPPLY_BRANCH_ID;
    }
    /**
     * Set SUPPLY_BRANCH_ID value
     * @param string $_sUPPLY_BRANCH_ID the SUPPLY_BRANCH_ID
     * @return string
     */
    public function setSUPPLY_BRANCH_ID($_sUPPLY_BRANCH_ID)
    {
        return ($this->SUPPLY_BRANCH_ID = $_sUPPLY_BRANCH_ID);
    }
    /**
     * Get UNIQUE_LINE_NUMBER value
     * @return string|null
     */
    public function getUNIQUE_LINE_NUMBER()
    {
        return $this->UNIQUE_LINE_NUMBER;
    }
    /**
     * Set UNIQUE_LINE_NUMBER value
     * @param string $_uNIQUE_LINE_NUMBER the UNIQUE_LINE_NUMBER
     * @return string
     */
    public function setUNIQUE_LINE_NUMBER($_uNIQUE_LINE_NUMBER)
    {
        return ($this->UNIQUE_LINE_NUMBER = $_uNIQUE_LINE_NUMBER);
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
     * Get TAX value
     * @return KPMGStructOutdataTaxType|null
     */
    public function getTAX()
    {
        return $this->TAX;
    }
    /**
     * Set TAX value
     * @param KPMGStructOutdataTaxType $_tAX the TAX
     * @return KPMGStructOutdataTaxType
     */
    public function setTAX($_tAX)
    {
        return ($this->TAX = $_tAX);
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
     * Get UNIT_OF_MEASURE value
     * @return string|null
     */
    public function getUNIT_OF_MEASURE()
    {
        return $this->UNIT_OF_MEASURE;
    }
    /**
     * Set UNIT_OF_MEASURE value
     * @param string $_uNIT_OF_MEASURE the UNIT_OF_MEASURE
     * @return string
     */
    public function setUNIT_OF_MEASURE($_uNIT_OF_MEASURE)
    {
        return ($this->UNIT_OF_MEASURE = $_uNIT_OF_MEASURE);
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
     * Get QUANTITIES value
     * @return KPMGStructQuantitiesType|null
     */
    public function getQUANTITIES()
    {
        return $this->QUANTITIES;
    }
    /**
     * Set QUANTITIES value
     * @param KPMGStructQuantitiesType $_qUANTITIES the QUANTITIES
     * @return KPMGStructQuantitiesType
     */
    public function setQUANTITIES($_qUANTITIES)
    {
        return ($this->QUANTITIES = $_qUANTITIES);
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
     * @return KPMGStructOutdataLineType
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
