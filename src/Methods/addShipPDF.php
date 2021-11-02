<?php

namespace SmsaSDK\Methods;

class addShipPDF
{
    /**
     * @var string
     */
    protected $passKey = null;

    /**
     * @var string
     */
    protected $refNo = null;

    /**
     * @var string
     */
    protected $sentDate = null;

    /**
     * @var string
     */
    protected $idNo = null;

    /**
     * @var string
     */
    protected $cName = null;

    /**
     * @var string
     */
    protected $cntry = null;

    /**
     * @var string
     */
    protected $cCity = null;

    /**
     * @var string
     */
    protected $cZip = null;

    /**
     * @var string
     */
    protected $cPOBox = null;

    /**
     * @var string
     */
    protected $cMobile = null;

    /**
     * @var string
     */
    protected $cTel1 = null;

    /**
     * @var string
     */
    protected $cTel2 = null;

    /**
     * @var string
     */
    protected $cAddr1 = null;

    /**
     * @var string
     */
    protected $cAddr2 = null;

    /**
     * @var string
     */
    protected $shipType = null;

    /**
     * @var int
     */
    protected $PCs = null;

    /**
     * @var string
     */
    protected $cEmail = null;

    /**
     * @var string
     */
    protected $carrValue = null;

    /**
     * @var string
     */
    protected $carrCurr = null;

    /**
     * @var string
     */
    protected $codAmt = null;

    /**
     * @var string
     */
    protected $weight = null;

    /**
     * @var string
     */
    protected $custVal = null;

    /**
     * @var string
     */
    protected $custCurr = null;

    /**
     * @var string
     */
    protected $insrAmt = null;

    /**
     * @var string
     */
    protected $insrCurr = null;

    /**
     * @var string
     */
    protected $itemDesc = null;

    /**
     * @var string
     */
    protected $sName = null;

    /**
     * @var string
     */
    protected $sContact = null;

    /**
     * @var string
     */
    protected $sAddr1 = null;

    /**
     * @var string
     */
    protected $sAddr2 = null;

    /**
     * @var string
     */
    protected $sCity = null;

    /**
     * @var string
     */
    protected $sPhone = null;

    /**
     * @var string
     */
    protected $sCntry = null;

    /**
     * @var string
     */
    protected $prefDelvDate = null;

    /**
     * @var string
     */
    protected $gpsPoints = null;

    /**
     * @var string
     */
    protected $vatValue = null;

    /**
     * @var string
     */
    protected $harmCode = null;

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
     * @param string $sName
     * @param string $sContact
     * @param string $sAddr1
     * @param string $sAddr2
     * @param string $sCity
     * @param string $sPhone
     * @param string $sCntry
     * @param string $prefDelvDate
     * @param string $gpsPoints
     * @param string $vatValue
     * @param string $harmCode
     */
    public function __construct($passKey = null, $refNo = null, $sentDate = null, $idNo = null, $cName = null, $cntry = null, $cCity = null, $cZip = null, $cPOBox = null, $cMobile = null, $cTel1 = null, $cTel2 = null, $cAddr1 = null, $cAddr2 = null, $shipType = null, $PCs = null, $cEmail = null, $carrValue = null, $carrCurr = null, $codAmt = null, $weight = null, $custVal = null, $custCurr = null, $insrAmt = null, $insrCurr = null, $itemDesc = null, $sName = null, $sContact = null, $sAddr1 = null, $sAddr2 = null, $sCity = null, $sPhone = null, $sCntry = null, $prefDelvDate = null, $gpsPoints = null, $vatValue = null, $harmCode = null)
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
        $this->sName = $sName;
        $this->sContact = $sContact;
        $this->sAddr1 = $sAddr1;
        $this->sAddr2 = $sAddr2;
        $this->sCity = $sCity;
        $this->sPhone = $sPhone;
        $this->sCntry = $sCntry;
        $this->prefDelvDate = $prefDelvDate;
        $this->gpsPoints = $gpsPoints;
        $this->vatValue = $vatValue;
        $this->harmCode = $harmCode;
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
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
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setItemDesc($itemDesc)
    {
        $this->itemDesc = $itemDesc;

        return $this;
    }

    /**
     * @return string
     */
    public function getSName()
    {
        return $this->sName;
    }

    /**
     * @param string $sName
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setSName($sName)
    {
        $this->sName = $sName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSContact()
    {
        return $this->sContact;
    }

    /**
     * @param string $sContact
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setSContact($sContact)
    {
        $this->sContact = $sContact;

        return $this;
    }

    /**
     * @return string
     */
    public function getSAddr1()
    {
        return $this->sAddr1;
    }

    /**
     * @param string $sAddr1
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setSAddr1($sAddr1)
    {
        $this->sAddr1 = $sAddr1;

        return $this;
    }

    /**
     * @return string
     */
    public function getSAddr2()
    {
        return $this->sAddr2;
    }

    /**
     * @param string $sAddr2
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setSAddr2($sAddr2)
    {
        $this->sAddr2 = $sAddr2;

        return $this;
    }

    /**
     * @return string
     */
    public function getSCity()
    {
        return $this->sCity;
    }

    /**
     * @param string $sCity
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setSCity($sCity)
    {
        $this->sCity = $sCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getSPhone()
    {
        return $this->sPhone;
    }

    /**
     * @param string $sPhone
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setSPhone($sPhone)
    {
        $this->sPhone = $sPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getSCntry()
    {
        return $this->sCntry;
    }

    /**
     * @param string $sCntry
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setSCntry($sCntry)
    {
        $this->sCntry = $sCntry;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrefDelvDate()
    {
        return $this->prefDelvDate;
    }

    /**
     * @param string $prefDelvDate
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setPrefDelvDate($prefDelvDate)
    {
        $this->prefDelvDate = $prefDelvDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getGpsPoints()
    {
        return $this->gpsPoints;
    }

    /**
     * @param string $gpsPoints
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setGpsPoints($gpsPoints)
    {
        $this->gpsPoints = $gpsPoints;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatValue()
    {
        return $this->vatValue;
    }

    /**
     * @param string $vatValue
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setVatValue($vatValue)
    {
        $this->vatValue = $vatValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getHarmCode()
    {
        return $this->harmCode;
    }

    /**
     * @param string $harmCode
     *
     * @return \SmsaSDK\Methods\addShipPDF
     */
    public function setHarmCode($harmCode)
    {
        $this->harmCode = $harmCode;

        return $this;
    }
}
