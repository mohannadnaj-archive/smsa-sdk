<?php

namespace SmsaSDK\Methods;

class addShipment
{

    /**
     * @var string $passKey
     */
    protected $passKey = null;

    /**
     * @var string $refNo
     */
    protected $refNo = null;

    /**
     * @var string $sentDate
     */
    protected $sentDate = null;

    /**
     * @var string $idNo
     */
    protected $idNo = null;

    /**
     * @var string $cName
     */
    protected $cName = null;

    /**
     * @var string $cntry
     */
    protected $cntry = null;

    /**
     * @var string $cCity
     */
    protected $cCity = null;

    /**
     * @var string $cZip
     */
    protected $cZip = null;

    /**
     * @var string $cPOBox
     */
    protected $cPOBox = null;

    /**
     * @var string $cMobile
     */
    protected $cMobile = null;

    /**
     * @var string $cTel1
     */
    protected $cTel1 = null;

    /**
     * @var string $cTel2
     */
    protected $cTel2 = null;

    /**
     * @var string $cAddr1
     */
    protected $cAddr1 = null;

    /**
     * @var string $cAddr2
     */
    protected $cAddr2 = null;

    /**
     * @var string $shipType
     */
    protected $shipType = null;

    /**
     * @var int $PCs
     */
    protected $PCs = null;

    /**
     * @var string $cEmail
     */
    protected $cEmail = null;

    /**
     * @var string $carrValue
     */
    protected $carrValue = null;

    /**
     * @var string $carrCurr
     */
    protected $carrCurr = null;

    /**
     * @var string $codAmt
     */
    protected $codAmt = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $custVal
     */
    protected $custVal = null;

    /**
     * @var string $custCurr
     */
    protected $custCurr = null;

    /**
     * @var string $insrAmt
     */
    protected $insrAmt = null;

    /**
     * @var string $insrCurr
     */
    protected $insrCurr = null;

    /**
     * @var string $itemDesc
     */
    protected $itemDesc = null;

    /**
     * @param string $passKey
     * @param string $refNo
     * @param string $sentDate
     * @param string $idNo
     * @param string $cName
     * @param string $cntry
     * @param string $cCity
     * @param string $cZip
     * @param string $cPOBox
     * @param string $cMobile
     * @param string $cTel1
     * @param string $cTel2
     * @param string $cAddr1
     * @param string $cAddr2
     * @param string $shipType
     * @param int    $PCs
     * @param string $cEmail
     * @param string $carrValue
     * @param string $carrCurr
     * @param string $codAmt
     * @param string $weight
     * @param string $custVal
     * @param string $custCurr
     * @param string $insrAmt
     * @param string $insrCurr
     * @param string $itemDesc
     */
    public function __construct($passKey = null, $refNo = null, $sentDate = null, $idNo = null, $cName = null, $cntry = null, $cCity = null, $cZip = null, $cPOBox = null, $cMobile = null, $cTel1 = null, $cTel2 = null, $cAddr1 = null, $cAddr2 = null, $shipType = null, $PCs = null, $cEmail = null, $carrValue = null, $carrCurr = null, $codAmt = null, $weight = null, $custVal = null, $custCurr = null, $insrAmt = null, $insrCurr = null, $itemDesc = null)
    {
        $this->passKey = $passKey;
        $this->refNo = $refNo;
        $this->sentDate = $sentDate;
        $this->idNo = $idNo;
        $this->cName = $cName;
        $this->cntry = $cntry;
        $this->cCity = $cCity;
        $this->cZip = $cZip;
        $this->cPOBox = $cPOBox;
        $this->cMobile = $cMobile;
        $this->cTel1 = $cTel1;
        $this->cTel2 = $cTel2;
        $this->cAddr1 = $cAddr1;
        $this->cAddr2 = $cAddr2;
        $this->shipType = $shipType;
        $this->PCs = $PCs;
        $this->cEmail = $cEmail;
        $this->carrValue = $carrValue;
        $this->carrCurr = $carrCurr;
        $this->codAmt = $codAmt;
        $this->weight = $weight;
        $this->custVal = $custVal;
        $this->custCurr = $custCurr;
        $this->insrAmt = $insrAmt;
        $this->insrCurr = $insrCurr;
        $this->itemDesc = $itemDesc;
    }

    /**
     * @return string
     */
    public function getPassKey()
    {
        return $this->passKey;
    }

    /**
     * @param string $passKey
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setPassKey($passKey)
    {
        $this->passKey = $passKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * @param string $refNo
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setRefNo($refNo)
    {
        $this->refNo = $refNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getSentDate()
    {
        return $this->sentDate;
    }

    /**
     * @param string $sentDate
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setSentDate($sentDate)
    {
        $this->sentDate = $sentDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdNo()
    {
        return $this->idNo;
    }

    /**
     * @param string $idNo
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setIdNo($idNo)
    {
        $this->idNo = $idNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCName()
    {
        return $this->cName;
    }

    /**
     * @param string $cName
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCName($cName)
    {
        $this->cName = $cName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCntry()
    {
        return $this->cntry;
    }

    /**
     * @param string $cntry
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCntry($cntry)
    {
        $this->cntry = $cntry;
        return $this;
    }

    /**
     * @return string
     */
    public function getCCity()
    {
        return $this->cCity;
    }

    /**
     * @param string $cCity
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCCity($cCity)
    {
        $this->cCity = $cCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getCZip()
    {
        return $this->cZip;
    }

    /**
     * @param string $cZip
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCZip($cZip)
    {
        $this->cZip = $cZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCPOBox()
    {
        return $this->cPOBox;
    }

    /**
     * @param string $cPOBox
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCPOBox($cPOBox)
    {
        $this->cPOBox = $cPOBox;
        return $this;
    }

    /**
     * @return string
     */
    public function getCMobile()
    {
        return $this->cMobile;
    }

    /**
     * @param string $cMobile
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCMobile($cMobile)
    {
        $this->cMobile = $cMobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getCTel1()
    {
        return $this->cTel1;
    }

    /**
     * @param string $cTel1
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCTel1($cTel1)
    {
        $this->cTel1 = $cTel1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCTel2()
    {
        return $this->cTel2;
    }

    /**
     * @param string $cTel2
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCTel2($cTel2)
    {
        $this->cTel2 = $cTel2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCAddr1()
    {
        return $this->cAddr1;
    }

    /**
     * @param string $cAddr1
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCAddr1($cAddr1)
    {
        $this->cAddr1 = $cAddr1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCAddr2()
    {
        return $this->cAddr2;
    }

    /**
     * @param string $cAddr2
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCAddr2($cAddr2)
    {
        $this->cAddr2 = $cAddr2;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipType()
    {
        return $this->shipType;
    }

    /**
     * @param string $shipType
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setShipType($shipType)
    {
        $this->shipType = $shipType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPCs()
    {
        return $this->PCs;
    }

    /**
     * @param int $PCs
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setPCs($PCs)
    {
        $this->PCs = $PCs;
        return $this;
    }

    /**
     * @return string
     */
    public function getCEmail()
    {
        return $this->cEmail;
    }

    /**
     * @param string $cEmail
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCEmail($cEmail)
    {
        $this->cEmail = $cEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrValue()
    {
        return $this->carrValue;
    }

    /**
     * @param string $carrValue
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCarrValue($carrValue)
    {
        $this->carrValue = $carrValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrCurr()
    {
        return $this->carrCurr;
    }

    /**
     * @param string $carrCurr
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCarrCurr($carrCurr)
    {
        $this->carrCurr = $carrCurr;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodAmt()
    {
        return $this->codAmt;
    }

    /**
     * @param string $codAmt
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCodAmt($codAmt)
    {
        $this->codAmt = $codAmt;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustVal()
    {
        return $this->custVal;
    }

    /**
     * @param string $custVal
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCustVal($custVal)
    {
        $this->custVal = $custVal;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustCurr()
    {
        return $this->custCurr;
    }

    /**
     * @param string $custCurr
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setCustCurr($custCurr)
    {
        $this->custCurr = $custCurr;
        return $this;
    }

    /**
     * @return string
     */
    public function getInsrAmt()
    {
        return $this->insrAmt;
    }

    /**
     * @param string $insrAmt
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setInsrAmt($insrAmt)
    {
        $this->insrAmt = $insrAmt;
        return $this;
    }

    /**
     * @return string
     */
    public function getInsrCurr()
    {
        return $this->insrCurr;
    }

    /**
     * @param string $insrCurr
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setInsrCurr($insrCurr)
    {
        $this->insrCurr = $insrCurr;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemDesc()
    {
        return $this->itemDesc;
    }

    /**
     * @param string $itemDesc
     * @return \SmsaSDK\Methods\addShipment
     */
    public function setItemDesc($itemDesc)
    {
        $this->itemDesc = $itemDesc;
        return $this;
    }

}
