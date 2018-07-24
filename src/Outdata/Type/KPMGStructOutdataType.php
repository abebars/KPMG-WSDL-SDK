<?php
/**
 * File for class KPMGStructOutdataType
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
/**
 * This class stands for KPMGStructOutdataType originally named OutdataType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://kpmg-uat.hostedtax.thomsonreuters.com/sabrix/services/taxcalculationservice/2011-09-01/taxcalculationservice?xsd=TaxCalculationService.xsd}
 * @package KPMG
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2018-07-24
 */
class KPMGStructOutdataType extends KPMGWsdlClass
{
    /**
     * The REQUEST_STATUS
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var KPMGStructOutdataRequestStatusType
     */
    public $REQUEST_STATUS;
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
     * The SCENARIO_NAME
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - documentation : This is the name of the Determination Workbench scenario.
     * - maxLength : 100
     * - minLength : 0
     * @var string
     */
    public $SCENARIO_NAME;
    /**
     * The INVOICE
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * @var KPMGStructOutdataInvoiceType
     */
    public $INVOICE;
    /**
     * The version
     * @var KPMGEnumVersionType
     */
    public $version;
    /**
     * Constructor method for OutdataType
     * @see parent::__construct()
     * @param KPMGStructOutdataRequestStatusType $_rEQUEST_STATUS
     * @param long $_cOMPANY_ID
     * @param string $_cOMPANY_NAME
     * @param string $_cOMPANY_ROLE
     * @param string $_eXTERNAL_COMPANY_ID
     * @param string $_sCENARIO_NAME
     * @param KPMGStructOutdataInvoiceType $_iNVOICE
     * @param KPMGEnumVersionType $_version
     * @return KPMGStructOutdataType
     */
    public function __construct($_rEQUEST_STATUS = NULL,$_cOMPANY_ID = NULL,$_cOMPANY_NAME = NULL,$_cOMPANY_ROLE = NULL,$_eXTERNAL_COMPANY_ID = NULL,$_sCENARIO_NAME = NULL,$_iNVOICE = NULL,$_version = NULL)
    {
        parent::__construct(array('REQUEST_STATUS'=>$_rEQUEST_STATUS,'COMPANY_ID'=>$_cOMPANY_ID,'COMPANY_NAME'=>$_cOMPANY_NAME,'COMPANY_ROLE'=>$_cOMPANY_ROLE,'EXTERNAL_COMPANY_ID'=>$_eXTERNAL_COMPANY_ID,'SCENARIO_NAME'=>$_sCENARIO_NAME,'INVOICE'=>$_iNVOICE,'version'=>$_version),false);
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
     * Get SCENARIO_NAME value
     * @return string|null
     */
    public function getSCENARIO_NAME()
    {
        return $this->SCENARIO_NAME;
    }
    /**
     * Set SCENARIO_NAME value
     * @param string $_sCENARIO_NAME the SCENARIO_NAME
     * @return string
     */
    public function setSCENARIO_NAME($_sCENARIO_NAME)
    {
        return ($this->SCENARIO_NAME = $_sCENARIO_NAME);
    }
    /**
     * Get INVOICE value
     * @return KPMGStructOutdataInvoiceType|null
     */
    public function getINVOICE()
    {
        return $this->INVOICE;
    }
    /**
     * Set INVOICE value
     * @param KPMGStructOutdataInvoiceType $_iNVOICE the INVOICE
     * @return KPMGStructOutdataInvoiceType
     */
    public function setINVOICE($_iNVOICE)
    {
        return ($this->INVOICE = $_iNVOICE);
    }
    /**
     * Get version value
     * @return KPMGEnumVersionType|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @uses KPMGEnumVersionType::valueIsValid()
     * @param KPMGEnumVersionType $_version the version
     * @return KPMGEnumVersionType
     */
    public function setVersion($_version)
    {
        if(!KPMGEnumVersionType::valueIsValid($_version))
        {
            return false;
        }
        return ($this->version = $_version);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see KPMGWsdlClass::__set_state()
     * @uses KPMGWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return KPMGStructOutdataType
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
