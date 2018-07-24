<?php
/**
 * File for class KPMGStructIndataLineType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructIndataLineType originally named IndataLineType
 * Documentation : The input line type.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructIndataLineType extends KPMGWsdlClass
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - id : INDATA_ID
     * - use : required
     * @var string
     */
    public $ID;
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
     * The GROSS_PLUS_TAX
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This element is used in reverse-from-total calculations instead of GROSS_AMOUNT and TAX_AMOUNT in cases where only the sum of the two is known. Determination calculates which portion of the total is tax and which part is gross, and then distributes the calculated tax amounts to the appropriate authorities. See INVOICE.CALCULATION_DIRECTION.
     * @var NillableDecimalType
     */
    public $GROSS_PLUS_TAX;
    /**
     * The INCLUSIVE_TAX_INDICATORS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructInclusiveTaxIndicatorsType
     */
    public $INCLUSIVE_TAX_INDICATORS;
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
     * - minOccurs : 0
     * - documentation : The date of the invoice.Note: Determination supports two audit keys to enable the lookup of audit records. The two combinations are as follows:HOST_SYSTEMCALLING_SYSTEM_NUMBERUNIQUE_INVOICE_NUMBERorMERCHANT_IDINVOICE_NUMINVOICE_DATEConfiguration parameters can modify which keys are used and in which order. See Sabrix Config and then contact Sabrix Technical Support for more information.
     * @var YyyyMmDdDateType
     */
    public $INVOICE_DATE;
    /**
     * The IS_ALLOCATABLE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : If set to false, no allocation will be applied to the line, even if one is specified by name for the Line or at the Invoice level. The default behavior (null) is true.
     * @var BooleanType
     */
    public $IS_ALLOCATABLE;
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
     * The IS_MANUFACTURING
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates that the goods or services are for manufacturing purposes.
     * @var BooleanType
     */
    public $IS_MANUFACTURING;
    /**
     * The IS_NO_TAX
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructFlagAddressType
     */
    public $IS_NO_TAX;
    /**
     * The IS_SIMPLIFICATION
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Indicates an override to any triangulation simplification determinations.If set to true, you must pass registrations in for the Buyer, Seller, and Middleman in the transaction or a warning message will be returned.
     * @var BooleanType
     */
    public $IS_SIMPLIFICATION;
    /**
     * The ITEM_VALUE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The total value of all items on this line. This is distinct from the gross amount because it does not contain costs such as landed costs, insurance, freight and other associated costs that gross amount does contain.If an item value is present in a transaction, it is used instead of taxable basis. Item value is used in many VAT and EU Intrastat reports.
     * @var NillableDecimalType
     */
    public $ITEM_VALUE;
    /**
     * The LICENSES
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructIndataLicensesType
     */
    public $LICENSES;
    /**
     * The LINE_NUMBER
     * Meta informations extracted from the WSDL
     * - documentation : LINE_NUMBER is a required element for each line. Used in combination with INVOICE_NUMBER, it is used to specify and reference a particular line on a particular invoice.
     * @var decimal
     */
    public $LINE_NUMBER;
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
     * The MASS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : The Mass of a supply. Used for Intrastat reporting purposes in the EU.
     * @var decimal
     */
    public $MASS;
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
     * The PRODUCT_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Your ERP system's product code for the product on this line. Product Codes are mapped to the Product Tree using Product Mappings.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $PRODUCT_CODE;
    /**
     * The QUANTITIES
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructQuantitiesType
     */
    public $QUANTITIES;
    /**
     * The QUANTITY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This field has been deprecated. Use the QUANTITIES structure instead.
     * @var integer
     */
    public $QUANTITY;
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
     * The RELATED_LINE_NUMBER
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Identifies that this line should have the same tax treatment as the product on the related line. See Related Charges for more information.
     * @var decimal
     */
    public $RELATED_LINE_NUMBER;
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
     * The TAX_AMOUNT
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : Allows empty tags for decimal amounts, for example: <GROSS_AMOUNT/>.
     * - union : decimal,EmptyStringType
     * @var decimal,EmptyStringType
     */
    public $TAX_AMOUNT;
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
     * The UOM
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This field has been deprecated. Use the QUANTITIES structure instead.
     * - maxLength : 100
     * - minLength : 1
     * @var string
     */
    public $UOM;
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
     * The USER_ELEMENT
     * Meta informations extracted from the WSDL
     * - maxOccurs : 50
     * - minOccurs : 0
     * @var KPMGStructUserElementType
     */
    public $USER_ELEMENT;
    /**
     * Constructor method for IndataLineType
     * @see parent::__construct()
     * @param string $_iD
     * @param string $_aCCOUNTING_CODE
     * @param string $_aLLOCATION_GROUP_NAME
     * @param string $_aLLOCATION_GROUP_OWNER
     * @param string $_aLLOCATION_NAME
     * @param NillableDecimalType $_bASIS_PERCENT
     * @param KPMGStructZoneAddressType $_bILL_TO
     * @param KPMGStructZoneAddressType $_bUYER_PRIMARY
     * @param string $_cOMMODITY_CODE
     * @param string $_cOUNTRY_OF_ORIGIN
     * @param string $_cUSTOMER_GROUP_NAME
     * @param string $_cUSTOMER_GROUP_OWNER
     * @param string $_cUSTOMER_NAME
     * @param string $_cUSTOMER_NUMBER
     * @param string $_dELIVERY_TERMS
     * @param string $_dEPT_OF_CONSIGN
     * @param string $_dESCRIPTION
     * @param NillableDecimalType $_dISCOUNT_AMOUNT
     * @param string $_eND_USE
     * @param string $_eND_USER_NAME
     * @param KPMGStructEstablishmentsType $_eSTABLISHMENTS
     * @param KPMGStructAmountType $_eXEMPT_AMOUNT
     * @param KPMGStructCertificateLocationType $_eXEMPT_CERTIFICATE
     * @param KPMGStructCertificateLocationType $_eXEMPT_REASON
     * @param string $_fREIGHT_ON_BOARD
     * @param NillableDecimalType $_gROSS_AMOUNT
     * @param NillableDecimalType $_gROSS_PLUS_TAX
     * @param KPMGStructInclusiveTaxIndicatorsType $_iNCLUSIVE_TAX_INDICATORS
     * @param NillableDecimalType $_iNPUT_RECOVERY_AMOUNT
     * @param NillableDecimalType $_iNPUT_RECOVERY_PERCENT
     * @param string $_iNPUT_RECOVERY_TYPE
     * @param YyyyMmDdDateType $_iNVOICE_DATE
     * @param BooleanType $_iS_ALLOCATABLE
     * @param BooleanType $_iS_BUSINESS_SUPPLY
     * @param BooleanType $_iS_CREDIT
     * @param KPMGStructFlagAddressType $_iS_EXEMPT
     * @param BooleanType $_iS_MANUFACTURING
     * @param KPMGStructFlagAddressType $_iS_NO_TAX
     * @param BooleanType $_iS_SIMPLIFICATION
     * @param NillableDecimalType $_iTEM_VALUE
     * @param KPMGStructIndataLicensesType $_lICENSES
     * @param decimal $_lINE_NUMBER
     * @param KPMGStructLocationNameType $_lOCATION
     * @param string $_lOCATION_SET
     * @param decimal $_mASS
     * @param KPMGStructZoneAddressType $_mIDDLEMAN
     * @param string $_mODE_OF_TRANSPORT
     * @param YyyyMmDdDateType $_mOVEMENT_DATE
     * @param string $_mOVEMENT_TYPE
     * @param KPMGStructZoneAddressType $_oRDER_ACCEPTANCE
     * @param KPMGStructZoneAddressType $_oRDER_ORIGIN
     * @param string $_oRIGINAL_DOCUMENT_ID
     * @param string $_oRIGINAL_DOCUMENT_ITEM
     * @param string $_oRIGINAL_DOCUMENT_TYPE
     * @param YyyyMmDdDateType $_oRIGINAL_INVOICE_DATE
     * @param YyyyMmDdDateType $_oRIGINAL_MOVEMENT_DATE
     * @param KPMGStructAmountType $_oVERRIDE_AMOUNT
     * @param KPMGStructAmountType $_oVERRIDE_RATE
     * @param string $_pART_NUMBER
     * @param string $_pOINT_OF_TITLE_TRANSFER
     * @param string $_pORT_OF_ENTRY
     * @param string $_pORT_OF_LOADING
     * @param string $_pRODUCT_CODE
     * @param KPMGStructQuantitiesType $_qUANTITIES
     * @param integer $_qUANTITY
     * @param string $_rEGIME
     * @param KPMGStructRegistrationsType $_rEGISTRATIONS
     * @param decimal $_rELATED_LINE_NUMBER
     * @param KPMGStructZoneAddressType $_sELLER_PRIMARY
     * @param KPMGStructZoneAddressType $_sHIP_FROM
     * @param KPMGStructZoneAddressType $_sHIP_TO
     * @param string $_sUPPLEMENTARY_UNIT
     * @param KPMGStructZoneAddressType $_sUPPLY
     * @param KPMGStructAmountType $_sUPPLY_EXEMPT_PERCENT
     * @param decimal,EmptyStringType $_tAX_AMOUNT
     * @param string $_tAX_CODE
     * @param YyyyMmDdDateType $_tAX_DETERMINATION_DATE
     * @param YyyyMmDdDateType $_tAX_EXCHANGE_RATE_DATE
     * @param YyyyMmDdDateType $_tAX_POINT_DATE
     * @param string $_tAX_TREATMENT
     * @param KPMGStructAddressType $_tAX_TYPE
     * @param string $_tITLE_TRANSFER_LOCATION
     * @param string $_tRANSACTION_TYPE
     * @param string $_uNIQUE_LINE_NUMBER
     * @param string $_uNIT_OF_MEASURE
     * @param string $_uOM
     * @param string $_vAT_GROUP_REGISTRATION
     * @param string $_vENDOR_NAME
     * @param string $_vENDOR_NUMBER
     * @param NillableDecimalType $_vENDOR_TAX
     * @param KPMGStructUserElementType $_uSER_ELEMENT
     * @return KPMGStructIndataLineType
     */
    public function __construct($_iD,$_aCCOUNTING_CODE = NULL,$_aLLOCATION_GROUP_NAME = NULL,$_aLLOCATION_GROUP_OWNER = NULL,$_aLLOCATION_NAME = NULL,$_bASIS_PERCENT = NULL,$_bILL_TO = NULL,$_bUYER_PRIMARY = NULL,$_cOMMODITY_CODE = NULL,$_cOUNTRY_OF_ORIGIN = NULL,$_cUSTOMER_GROUP_NAME = NULL,$_cUSTOMER_GROUP_OWNER = NULL,$_cUSTOMER_NAME = NULL,$_cUSTOMER_NUMBER = NULL,$_dELIVERY_TERMS = NULL,$_dEPT_OF_CONSIGN = NULL,$_dESCRIPTION = NULL,$_dISCOUNT_AMOUNT = NULL,$_eND_USE = NULL,$_eND_USER_NAME = NULL,$_eSTABLISHMENTS = NULL,$_eXEMPT_AMOUNT = NULL,$_eXEMPT_CERTIFICATE = NULL,$_eXEMPT_REASON = NULL,$_fREIGHT_ON_BOARD = NULL,$_gROSS_AMOUNT = NULL,$_gROSS_PLUS_TAX = NULL,$_iNCLUSIVE_TAX_INDICATORS = NULL,$_iNPUT_RECOVERY_AMOUNT = NULL,$_iNPUT_RECOVERY_PERCENT = NULL,$_iNPUT_RECOVERY_TYPE = NULL,$_iNVOICE_DATE = NULL,$_iS_ALLOCATABLE = NULL,$_iS_BUSINESS_SUPPLY = NULL,$_iS_CREDIT = NULL,$_iS_EXEMPT = NULL,$_iS_MANUFACTURING = NULL,$_iS_NO_TAX = NULL,$_iS_SIMPLIFICATION = NULL,$_iTEM_VALUE = NULL,$_lICENSES = NULL,$_lINE_NUMBER = NULL,$_lOCATION = NULL,$_lOCATION_SET = NULL,$_mASS = NULL,$_mIDDLEMAN = NULL,$_mODE_OF_TRANSPORT = NULL,$_mOVEMENT_DATE = NULL,$_mOVEMENT_TYPE = NULL,$_oRDER_ACCEPTANCE = NULL,$_oRDER_ORIGIN = NULL,$_oRIGINAL_DOCUMENT_ID = NULL,$_oRIGINAL_DOCUMENT_ITEM = NULL,$_oRIGINAL_DOCUMENT_TYPE = NULL,$_oRIGINAL_INVOICE_DATE = NULL,$_oRIGINAL_MOVEMENT_DATE = NULL,$_oVERRIDE_AMOUNT = NULL,$_oVERRIDE_RATE = NULL,$_pART_NUMBER = NULL,$_pOINT_OF_TITLE_TRANSFER = NULL,$_pORT_OF_ENTRY = NULL,$_pORT_OF_LOADING = NULL,$_pRODUCT_CODE = NULL,$_qUANTITIES = NULL,$_qUANTITY = NULL,$_rEGIME = NULL,$_rEGISTRATIONS = NULL,$_rELATED_LINE_NUMBER = NULL,$_sELLER_PRIMARY = NULL,$_sHIP_FROM = NULL,$_sHIP_TO = NULL,$_sUPPLEMENTARY_UNIT = NULL,$_sUPPLY = NULL,$_sUPPLY_EXEMPT_PERCENT = NULL,$_tAX_AMOUNT = NULL,$_tAX_CODE = NULL,$_tAX_DETERMINATION_DATE = NULL,$_tAX_EXCHANGE_RATE_DATE = NULL,$_tAX_POINT_DATE = NULL,$_tAX_TREATMENT = NULL,$_tAX_TYPE = NULL,$_tITLE_TRANSFER_LOCATION = NULL,$_tRANSACTION_TYPE = NULL,$_uNIQUE_LINE_NUMBER = NULL,$_uNIT_OF_MEASURE = NULL,$_uOM = NULL,$_vAT_GROUP_REGISTRATION = NULL,$_vENDOR_NAME = NULL,$_vENDOR_NUMBER = NULL,$_vENDOR_TAX = NULL,$_uSER_ELEMENT = NULL)
    {
        parent::__construct(array('ID'=>$_iD,'ACCOUNTING_CODE'=>$_aCCOUNTING_CODE,'ALLOCATION_GROUP_NAME'=>$_aLLOCATION_GROUP_NAME,'ALLOCATION_GROUP_OWNER'=>$_aLLOCATION_GROUP_OWNER,'ALLOCATION_NAME'=>$_aLLOCATION_NAME,'BASIS_PERCENT'=>$_bASIS_PERCENT,'BILL_TO'=>$_bILL_TO,'BUYER_PRIMARY'=>$_bUYER_PRIMARY,'COMMODITY_CODE'=>$_cOMMODITY_CODE,'COUNTRY_OF_ORIGIN'=>$_cOUNTRY_OF_ORIGIN,'CUSTOMER_GROUP_NAME'=>$_cUSTOMER_GROUP_NAME,'CUSTOMER_GROUP_OWNER'=>$_cUSTOMER_GROUP_OWNER,'CUSTOMER_NAME'=>$_cUSTOMER_NAME,'CUSTOMER_NUMBER'=>$_cUSTOMER_NUMBER,'DELIVERY_TERMS'=>$_dELIVERY_TERMS,'DEPT_OF_CONSIGN'=>$_dEPT_OF_CONSIGN,'DESCRIPTION'=>$_dESCRIPTION,'DISCOUNT_AMOUNT'=>$_dISCOUNT_AMOUNT,'END_USE'=>$_eND_USE,'END_USER_NAME'=>$_eND_USER_NAME,'ESTABLISHMENTS'=>$_eSTABLISHMENTS,'EXEMPT_AMOUNT'=>$_eXEMPT_AMOUNT,'EXEMPT_CERTIFICATE'=>$_eXEMPT_CERTIFICATE,'EXEMPT_REASON'=>$_eXEMPT_REASON,'FREIGHT_ON_BOARD'=>$_fREIGHT_ON_BOARD,'GROSS_AMOUNT'=>$_gROSS_AMOUNT,'GROSS_PLUS_TAX'=>$_gROSS_PLUS_TAX,'INCLUSIVE_TAX_INDICATORS'=>$_iNCLUSIVE_TAX_INDICATORS,'INPUT_RECOVERY_AMOUNT'=>$_iNPUT_RECOVERY_AMOUNT,'INPUT_RECOVERY_PERCENT'=>$_iNPUT_RECOVERY_PERCENT,'INPUT_RECOVERY_TYPE'=>$_iNPUT_RECOVERY_TYPE,'INVOICE_DATE'=>$_iNVOICE_DATE,'IS_ALLOCATABLE'=>$_iS_ALLOCATABLE,'IS_BUSINESS_SUPPLY'=>$_iS_BUSINESS_SUPPLY,'IS_CREDIT'=>$_iS_CREDIT,'IS_EXEMPT'=>$_iS_EXEMPT,'IS_MANUFACTURING'=>$_iS_MANUFACTURING,'IS_NO_TAX'=>$_iS_NO_TAX,'IS_SIMPLIFICATION'=>$_iS_SIMPLIFICATION,'ITEM_VALUE'=>$_iTEM_VALUE,'LICENSES'=>$_lICENSES,'LINE_NUMBER'=>$_lINE_NUMBER,'LOCATION'=>$_lOCATION,'LOCATION_SET'=>$_lOCATION_SET,'MASS'=>$_mASS,'MIDDLEMAN'=>$_mIDDLEMAN,'MODE_OF_TRANSPORT'=>$_mODE_OF_TRANSPORT,'MOVEMENT_DATE'=>$_mOVEMENT_DATE,'MOVEMENT_TYPE'=>$_mOVEMENT_TYPE,'ORDER_ACCEPTANCE'=>$_oRDER_ACCEPTANCE,'ORDER_ORIGIN'=>$_oRDER_ORIGIN,'ORIGINAL_DOCUMENT_ID'=>$_oRIGINAL_DOCUMENT_ID,'ORIGINAL_DOCUMENT_ITEM'=>$_oRIGINAL_DOCUMENT_ITEM,'ORIGINAL_DOCUMENT_TYPE'=>$_oRIGINAL_DOCUMENT_TYPE,'ORIGINAL_INVOICE_DATE'=>$_oRIGINAL_INVOICE_DATE,'ORIGINAL_MOVEMENT_DATE'=>$_oRIGINAL_MOVEMENT_DATE,'OVERRIDE_AMOUNT'=>$_oVERRIDE_AMOUNT,'OVERRIDE_RATE'=>$_oVERRIDE_RATE,'PART_NUMBER'=>$_pART_NUMBER,'POINT_OF_TITLE_TRANSFER'=>$_pOINT_OF_TITLE_TRANSFER,'PORT_OF_ENTRY'=>$_pORT_OF_ENTRY,'PORT_OF_LOADING'=>$_pORT_OF_LOADING,'PRODUCT_CODE'=>$_pRODUCT_CODE,'QUANTITIES'=>$_qUANTITIES,'QUANTITY'=>$_qUANTITY,'REGIME'=>$_rEGIME,'REGISTRATIONS'=>$_rEGISTRATIONS,'RELATED_LINE_NUMBER'=>$_rELATED_LINE_NUMBER,'SELLER_PRIMARY'=>$_sELLER_PRIMARY,'SHIP_FROM'=>$_sHIP_FROM,'SHIP_TO'=>$_sHIP_TO,'SUPPLEMENTARY_UNIT'=>$_sUPPLEMENTARY_UNIT,'SUPPLY'=>$_sUPPLY,'SUPPLY_EXEMPT_PERCENT'=>$_sUPPLY_EXEMPT_PERCENT,'TAX_AMOUNT'=>$_tAX_AMOUNT,'TAX_CODE'=>$_tAX_CODE,'TAX_DETERMINATION_DATE'=>$_tAX_DETERMINATION_DATE,'TAX_EXCHANGE_RATE_DATE'=>$_tAX_EXCHANGE_RATE_DATE,'TAX_POINT_DATE'=>$_tAX_POINT_DATE,'TAX_TREATMENT'=>$_tAX_TREATMENT,'TAX_TYPE'=>$_tAX_TYPE,'TITLE_TRANSFER_LOCATION'=>$_tITLE_TRANSFER_LOCATION,'TRANSACTION_TYPE'=>$_tRANSACTION_TYPE,'UNIQUE_LINE_NUMBER'=>$_uNIQUE_LINE_NUMBER,'UNIT_OF_MEASURE'=>$_uNIT_OF_MEASURE,'UOM'=>$_uOM,'VAT_GROUP_REGISTRATION'=>$_vAT_GROUP_REGISTRATION,'VENDOR_NAME'=>$_vENDOR_NAME,'VENDOR_NUMBER'=>$_vENDOR_NUMBER,'VENDOR_TAX'=>$_vENDOR_TAX,'USER_ELEMENT'=>$_uSER_ELEMENT),false);
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
     * Get GROSS_PLUS_TAX value
     * @return NillableDecimalType|null
     */
    public function getGROSS_PLUS_TAX()
    {
        return $this->GROSS_PLUS_TAX;
    }
    /**
     * Set GROSS_PLUS_TAX value
     * @param NillableDecimalType $_gROSS_PLUS_TAX the GROSS_PLUS_TAX
     * @return NillableDecimalType
     */
    public function setGROSS_PLUS_TAX($_gROSS_PLUS_TAX)
    {
        return ($this->GROSS_PLUS_TAX = $_gROSS_PLUS_TAX);
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
     * Get IS_ALLOCATABLE value
     * @return BooleanType|null
     */
    public function getIS_ALLOCATABLE()
    {
        return $this->IS_ALLOCATABLE;
    }
    /**
     * Set IS_ALLOCATABLE value
     * @param BooleanType $_iS_ALLOCATABLE the IS_ALLOCATABLE
     * @return BooleanType
     */
    public function setIS_ALLOCATABLE($_iS_ALLOCATABLE)
    {
        return ($this->IS_ALLOCATABLE = $_iS_ALLOCATABLE);
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
     * Get IS_MANUFACTURING value
     * @return BooleanType|null
     */
    public function getIS_MANUFACTURING()
    {
        return $this->IS_MANUFACTURING;
    }
    /**
     * Set IS_MANUFACTURING value
     * @param BooleanType $_iS_MANUFACTURING the IS_MANUFACTURING
     * @return BooleanType
     */
    public function setIS_MANUFACTURING($_iS_MANUFACTURING)
    {
        return ($this->IS_MANUFACTURING = $_iS_MANUFACTURING);
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
     * Get PRODUCT_CODE value
     * @return string|null
     */
    public function getPRODUCT_CODE()
    {
        return $this->PRODUCT_CODE;
    }
    /**
     * Set PRODUCT_CODE value
     * @param string $_pRODUCT_CODE the PRODUCT_CODE
     * @return string
     */
    public function setPRODUCT_CODE($_pRODUCT_CODE)
    {
        return ($this->PRODUCT_CODE = $_pRODUCT_CODE);
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
     * Get QUANTITY value
     * @return integer|null
     */
    public function getQUANTITY()
    {
        return $this->QUANTITY;
    }
    /**
     * Set QUANTITY value
     * @param integer $_qUANTITY the QUANTITY
     * @return integer
     */
    public function setQUANTITY($_qUANTITY)
    {
        return ($this->QUANTITY = $_qUANTITY);
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
     * Get TAX_AMOUNT value
     * @return decimal,EmptyStringType|null
     */
    public function getTAX_AMOUNT()
    {
        return $this->TAX_AMOUNT;
    }
    /**
     * Set TAX_AMOUNT value
     * @param decimal,EmptyStringType $_tAX_AMOUNT the TAX_AMOUNT
     * @return decimal,EmptyStringType
     */
    public function setTAX_AMOUNT($_tAX_AMOUNT)
    {
        return ($this->TAX_AMOUNT = $_tAX_AMOUNT);
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
     * Get UOM value
     * @return string|null
     */
    public function getUOM()
    {
        return $this->UOM;
    }
    /**
     * Set UOM value
     * @param string $_uOM the UOM
     * @return string
     */
    public function setUOM($_uOM)
    {
        return ($this->UOM = $_uOM);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructIndataLineType
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
