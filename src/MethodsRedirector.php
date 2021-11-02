<?php
namespace SmsaSDK;

trait MethodsRedirector {
/**
* @return \SmsaSDK\Methods\DeliveredShipmentResponse
*/
public static function DeliveredShipment() { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('DeliveredShipment', [$firstArgument]);



return static::handleStaticCalls('DeliveredShipment', [$arguments]);
 }
/**
* @param $passKey
* @param $refNo
* @param $sentDate
* @param $idNo
* @param $cName
* @param $cntry
* @param $cCity
* @param $cZip
* @param $cPOBox
* @param $cMobile
* @param $cTel1
* @param $cTel2
* @param $cAddr1
* @param $cAddr2
* @param $shipType
* @param $PCs
* @param $cEmail
* @param $carrValue
* @param $carrCurr
* @param $codAmt
* @param $weight
* @param $custVal
* @param $custCurr
* @param $insrAmt
* @param $insrCurr
* @param $itemDesc
* @param $sName
* @param $sContact
* @param $sAddr1
* @param $sAddr2
* @param $sCity
* @param $sPhone
* @param $sCntry
* @param $prefDelvDate
* @param $gpsPoints
* @return \SmsaSDK\Methods\addShipResponse
*/
public static function addShip($passKey = null, $refNo = null, $sentDate = null, $idNo = null, $cName = null, $cntry = null, $cCity = null, $cZip = null, $cPOBox = null, $cMobile = null, $cTel1 = null, $cTel2 = null, $cAddr1 = null, $cAddr2 = null, $shipType = null, $PCs = null, $cEmail = null, $carrValue = null, $carrCurr = null, $codAmt = null, $weight = null, $custVal = null, $custCurr = null, $insrAmt = null, $insrCurr = null, $itemDesc = null, $sName = null, $sContact = null, $sAddr1 = null, $sAddr2 = null, $sCity = null, $sPhone = null, $sCntry = null, $prefDelvDate = null, $gpsPoints = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('addShip', [$firstArgument]);

if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 
if(!is_null($refNo)) { $arguments['refNo'] = $refNo; } 
if(!is_null($sentDate)) { $arguments['sentDate'] = $sentDate; } 
if(!is_null($idNo)) { $arguments['idNo'] = $idNo; } 
if(!is_null($cName)) { $arguments['cName'] = $cName; } 
if(!is_null($cntry)) { $arguments['cntry'] = $cntry; } 
if(!is_null($cCity)) { $arguments['cCity'] = $cCity; } 
if(!is_null($cZip)) { $arguments['cZip'] = $cZip; } 
if(!is_null($cPOBox)) { $arguments['cPOBox'] = $cPOBox; } 
if(!is_null($cMobile)) { $arguments['cMobile'] = $cMobile; } 
if(!is_null($cTel1)) { $arguments['cTel1'] = $cTel1; } 
if(!is_null($cTel2)) { $arguments['cTel2'] = $cTel2; } 
if(!is_null($cAddr1)) { $arguments['cAddr1'] = $cAddr1; } 
if(!is_null($cAddr2)) { $arguments['cAddr2'] = $cAddr2; } 
if(!is_null($shipType)) { $arguments['shipType'] = $shipType; } 
if(!is_null($PCs)) { $arguments['PCs'] = $PCs; } 
if(!is_null($cEmail)) { $arguments['cEmail'] = $cEmail; } 
if(!is_null($carrValue)) { $arguments['carrValue'] = $carrValue; } 
if(!is_null($carrCurr)) { $arguments['carrCurr'] = $carrCurr; } 
if(!is_null($codAmt)) { $arguments['codAmt'] = $codAmt; } 
if(!is_null($weight)) { $arguments['weight'] = $weight; } 
if(!is_null($custVal)) { $arguments['custVal'] = $custVal; } 
if(!is_null($custCurr)) { $arguments['custCurr'] = $custCurr; } 
if(!is_null($insrAmt)) { $arguments['insrAmt'] = $insrAmt; } 
if(!is_null($insrCurr)) { $arguments['insrCurr'] = $insrCurr; } 
if(!is_null($itemDesc)) { $arguments['itemDesc'] = $itemDesc; } 
if(!is_null($sName)) { $arguments['sName'] = $sName; } 
if(!is_null($sContact)) { $arguments['sContact'] = $sContact; } 
if(!is_null($sAddr1)) { $arguments['sAddr1'] = $sAddr1; } 
if(!is_null($sAddr2)) { $arguments['sAddr2'] = $sAddr2; } 
if(!is_null($sCity)) { $arguments['sCity'] = $sCity; } 
if(!is_null($sPhone)) { $arguments['sPhone'] = $sPhone; } 
if(!is_null($sCntry)) { $arguments['sCntry'] = $sCntry; } 
if(!is_null($prefDelvDate)) { $arguments['prefDelvDate'] = $prefDelvDate; } 
if(!is_null($gpsPoints)) { $arguments['gpsPoints'] = $gpsPoints; } 


return static::handleStaticCalls('addShip', [$arguments]);
 }
/**
* @param $passKey
* @param $refNo
* @param $sentDate
* @param $idNo
* @param $cName
* @param $cntry
* @param $cCity
* @param $cZip
* @param $cPOBox
* @param $cMobile
* @param $cTel1
* @param $cTel2
* @param $cAddr1
* @param $cAddr2
* @param $shipType
* @param $PCs
* @param $cEmail
* @param $carrValue
* @param $carrCurr
* @param $codAmt
* @param $weight
* @param $custVal
* @param $custCurr
* @param $insrAmt
* @param $insrCurr
* @param $itemDesc
* @param $sName
* @param $sContact
* @param $sAddr1
* @param $sAddr2
* @param $sCity
* @param $sPhone
* @param $sCntry
* @param $prefDelvDate
* @param $gpsPoints
* @return \SmsaSDK\Methods\addShipMPSResponse
*/
public static function addShipMPS($passKey = null, $refNo = null, $sentDate = null, $idNo = null, $cName = null, $cntry = null, $cCity = null, $cZip = null, $cPOBox = null, $cMobile = null, $cTel1 = null, $cTel2 = null, $cAddr1 = null, $cAddr2 = null, $shipType = null, $PCs = null, $cEmail = null, $carrValue = null, $carrCurr = null, $codAmt = null, $weight = null, $custVal = null, $custCurr = null, $insrAmt = null, $insrCurr = null, $itemDesc = null, $sName = null, $sContact = null, $sAddr1 = null, $sAddr2 = null, $sCity = null, $sPhone = null, $sCntry = null, $prefDelvDate = null, $gpsPoints = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('addShipMPS', [$firstArgument]);

if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 
if(!is_null($refNo)) { $arguments['refNo'] = $refNo; } 
if(!is_null($sentDate)) { $arguments['sentDate'] = $sentDate; } 
if(!is_null($idNo)) { $arguments['idNo'] = $idNo; } 
if(!is_null($cName)) { $arguments['cName'] = $cName; } 
if(!is_null($cntry)) { $arguments['cntry'] = $cntry; } 
if(!is_null($cCity)) { $arguments['cCity'] = $cCity; } 
if(!is_null($cZip)) { $arguments['cZip'] = $cZip; } 
if(!is_null($cPOBox)) { $arguments['cPOBox'] = $cPOBox; } 
if(!is_null($cMobile)) { $arguments['cMobile'] = $cMobile; } 
if(!is_null($cTel1)) { $arguments['cTel1'] = $cTel1; } 
if(!is_null($cTel2)) { $arguments['cTel2'] = $cTel2; } 
if(!is_null($cAddr1)) { $arguments['cAddr1'] = $cAddr1; } 
if(!is_null($cAddr2)) { $arguments['cAddr2'] = $cAddr2; } 
if(!is_null($shipType)) { $arguments['shipType'] = $shipType; } 
if(!is_null($PCs)) { $arguments['PCs'] = $PCs; } 
if(!is_null($cEmail)) { $arguments['cEmail'] = $cEmail; } 
if(!is_null($carrValue)) { $arguments['carrValue'] = $carrValue; } 
if(!is_null($carrCurr)) { $arguments['carrCurr'] = $carrCurr; } 
if(!is_null($codAmt)) { $arguments['codAmt'] = $codAmt; } 
if(!is_null($weight)) { $arguments['weight'] = $weight; } 
if(!is_null($custVal)) { $arguments['custVal'] = $custVal; } 
if(!is_null($custCurr)) { $arguments['custCurr'] = $custCurr; } 
if(!is_null($insrAmt)) { $arguments['insrAmt'] = $insrAmt; } 
if(!is_null($insrCurr)) { $arguments['insrCurr'] = $insrCurr; } 
if(!is_null($itemDesc)) { $arguments['itemDesc'] = $itemDesc; } 
if(!is_null($sName)) { $arguments['sName'] = $sName; } 
if(!is_null($sContact)) { $arguments['sContact'] = $sContact; } 
if(!is_null($sAddr1)) { $arguments['sAddr1'] = $sAddr1; } 
if(!is_null($sAddr2)) { $arguments['sAddr2'] = $sAddr2; } 
if(!is_null($sCity)) { $arguments['sCity'] = $sCity; } 
if(!is_null($sPhone)) { $arguments['sPhone'] = $sPhone; } 
if(!is_null($sCntry)) { $arguments['sCntry'] = $sCntry; } 
if(!is_null($prefDelvDate)) { $arguments['prefDelvDate'] = $prefDelvDate; } 
if(!is_null($gpsPoints)) { $arguments['gpsPoints'] = $gpsPoints; } 


return static::handleStaticCalls('addShipMPS', [$arguments]);
 }
/**
* @param $passKey
* @param $refNo
* @param $sentDate
* @param $idNo
* @param $cName
* @param $cntry
* @param $cCity
* @param $cZip
* @param $cPOBox
* @param $cMobile
* @param $cTel1
* @param $cTel2
* @param $cAddr1
* @param $cAddr2
* @param $shipType
* @param $PCs
* @param $cEmail
* @param $carrValue
* @param $carrCurr
* @param $codAmt
* @param $weight
* @param $custVal
* @param $custCurr
* @param $insrAmt
* @param $insrCurr
* @param $itemDesc
* @param $sName
* @param $sContact
* @param $sAddr1
* @param $sAddr2
* @param $sCity
* @param $sPhone
* @param $sCntry
* @param $prefDelvDate
* @param $gpsPoints
* @param $vatValue
* @param $harmCode
* @return \SmsaSDK\Methods\addShipPDFResponse
*/
public static function addShipPDF($passKey = null, $refNo = null, $sentDate = null, $idNo = null, $cName = null, $cntry = null, $cCity = null, $cZip = null, $cPOBox = null, $cMobile = null, $cTel1 = null, $cTel2 = null, $cAddr1 = null, $cAddr2 = null, $shipType = null, $PCs = null, $cEmail = null, $carrValue = null, $carrCurr = null, $codAmt = null, $weight = null, $custVal = null, $custCurr = null, $insrAmt = null, $insrCurr = null, $itemDesc = null, $sName = null, $sContact = null, $sAddr1 = null, $sAddr2 = null, $sCity = null, $sPhone = null, $sCntry = null, $prefDelvDate = null, $gpsPoints = null, $vatValue = null, $harmCode = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('addShipPDF', [$firstArgument]);

if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 
if(!is_null($refNo)) { $arguments['refNo'] = $refNo; } 
if(!is_null($sentDate)) { $arguments['sentDate'] = $sentDate; } 
if(!is_null($idNo)) { $arguments['idNo'] = $idNo; } 
if(!is_null($cName)) { $arguments['cName'] = $cName; } 
if(!is_null($cntry)) { $arguments['cntry'] = $cntry; } 
if(!is_null($cCity)) { $arguments['cCity'] = $cCity; } 
if(!is_null($cZip)) { $arguments['cZip'] = $cZip; } 
if(!is_null($cPOBox)) { $arguments['cPOBox'] = $cPOBox; } 
if(!is_null($cMobile)) { $arguments['cMobile'] = $cMobile; } 
if(!is_null($cTel1)) { $arguments['cTel1'] = $cTel1; } 
if(!is_null($cTel2)) { $arguments['cTel2'] = $cTel2; } 
if(!is_null($cAddr1)) { $arguments['cAddr1'] = $cAddr1; } 
if(!is_null($cAddr2)) { $arguments['cAddr2'] = $cAddr2; } 
if(!is_null($shipType)) { $arguments['shipType'] = $shipType; } 
if(!is_null($PCs)) { $arguments['PCs'] = $PCs; } 
if(!is_null($cEmail)) { $arguments['cEmail'] = $cEmail; } 
if(!is_null($carrValue)) { $arguments['carrValue'] = $carrValue; } 
if(!is_null($carrCurr)) { $arguments['carrCurr'] = $carrCurr; } 
if(!is_null($codAmt)) { $arguments['codAmt'] = $codAmt; } 
if(!is_null($weight)) { $arguments['weight'] = $weight; } 
if(!is_null($custVal)) { $arguments['custVal'] = $custVal; } 
if(!is_null($custCurr)) { $arguments['custCurr'] = $custCurr; } 
if(!is_null($insrAmt)) { $arguments['insrAmt'] = $insrAmt; } 
if(!is_null($insrCurr)) { $arguments['insrCurr'] = $insrCurr; } 
if(!is_null($itemDesc)) { $arguments['itemDesc'] = $itemDesc; } 
if(!is_null($sName)) { $arguments['sName'] = $sName; } 
if(!is_null($sContact)) { $arguments['sContact'] = $sContact; } 
if(!is_null($sAddr1)) { $arguments['sAddr1'] = $sAddr1; } 
if(!is_null($sAddr2)) { $arguments['sAddr2'] = $sAddr2; } 
if(!is_null($sCity)) { $arguments['sCity'] = $sCity; } 
if(!is_null($sPhone)) { $arguments['sPhone'] = $sPhone; } 
if(!is_null($sCntry)) { $arguments['sCntry'] = $sCntry; } 
if(!is_null($prefDelvDate)) { $arguments['prefDelvDate'] = $prefDelvDate; } 
if(!is_null($gpsPoints)) { $arguments['gpsPoints'] = $gpsPoints; } 
if(!is_null($vatValue)) { $arguments['vatValue'] = $vatValue; } 
if(!is_null($harmCode)) { $arguments['harmCode'] = $harmCode; } 


return static::handleStaticCalls('addShipPDF', [$arguments]);
 }
/**
* @param $passKey
* @param $refNo
* @param $sentDate
* @param $idNo
* @param $cName
* @param $cntry
* @param $cCity
* @param $cZip
* @param $cPOBox
* @param $cMobile
* @param $cTel1
* @param $cTel2
* @param $cAddr1
* @param $cAddr2
* @param $shipType
* @param $PCs
* @param $cEmail
* @param $carrValue
* @param $carrCurr
* @param $codAmt
* @param $weight
* @param $custVal
* @param $custCurr
* @param $insrAmt
* @param $insrCurr
* @param $itemDesc
* @return \SmsaSDK\Methods\addShipmentResponse
*/
public static function addShipment($passKey = null, $refNo = null, $sentDate = null, $idNo = null, $cName = null, $cntry = null, $cCity = null, $cZip = null, $cPOBox = null, $cMobile = null, $cTel1 = null, $cTel2 = null, $cAddr1 = null, $cAddr2 = null, $shipType = null, $PCs = null, $cEmail = null, $carrValue = null, $carrCurr = null, $codAmt = null, $weight = null, $custVal = null, $custCurr = null, $insrAmt = null, $insrCurr = null, $itemDesc = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('addShipment', [$firstArgument]);

if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 
if(!is_null($refNo)) { $arguments['refNo'] = $refNo; } 
if(!is_null($sentDate)) { $arguments['sentDate'] = $sentDate; } 
if(!is_null($idNo)) { $arguments['idNo'] = $idNo; } 
if(!is_null($cName)) { $arguments['cName'] = $cName; } 
if(!is_null($cntry)) { $arguments['cntry'] = $cntry; } 
if(!is_null($cCity)) { $arguments['cCity'] = $cCity; } 
if(!is_null($cZip)) { $arguments['cZip'] = $cZip; } 
if(!is_null($cPOBox)) { $arguments['cPOBox'] = $cPOBox; } 
if(!is_null($cMobile)) { $arguments['cMobile'] = $cMobile; } 
if(!is_null($cTel1)) { $arguments['cTel1'] = $cTel1; } 
if(!is_null($cTel2)) { $arguments['cTel2'] = $cTel2; } 
if(!is_null($cAddr1)) { $arguments['cAddr1'] = $cAddr1; } 
if(!is_null($cAddr2)) { $arguments['cAddr2'] = $cAddr2; } 
if(!is_null($shipType)) { $arguments['shipType'] = $shipType; } 
if(!is_null($PCs)) { $arguments['PCs'] = $PCs; } 
if(!is_null($cEmail)) { $arguments['cEmail'] = $cEmail; } 
if(!is_null($carrValue)) { $arguments['carrValue'] = $carrValue; } 
if(!is_null($carrCurr)) { $arguments['carrCurr'] = $carrCurr; } 
if(!is_null($codAmt)) { $arguments['codAmt'] = $codAmt; } 
if(!is_null($weight)) { $arguments['weight'] = $weight; } 
if(!is_null($custVal)) { $arguments['custVal'] = $custVal; } 
if(!is_null($custCurr)) { $arguments['custCurr'] = $custCurr; } 
if(!is_null($insrAmt)) { $arguments['insrAmt'] = $insrAmt; } 
if(!is_null($insrCurr)) { $arguments['insrCurr'] = $insrCurr; } 
if(!is_null($itemDesc)) { $arguments['itemDesc'] = $itemDesc; } 


return static::handleStaticCalls('addShipment', [$arguments]);
 }
/**
* @param $passKey
* @param $refNo
* @param $sentDate
* @param $idNo
* @param $cName
* @param $cntry
* @param $cCity
* @param $cZip
* @param $cPOBox
* @param $cMobile
* @param $cTel1
* @param $cTel2
* @param $cAddr1
* @param $cAddr2
* @param $shipType
* @param $PCs
* @param $cEmail
* @param $carrValue
* @param $carrCurr
* @param $codAmt
* @param $weight
* @param $custVal
* @param $custCurr
* @param $insrAmt
* @param $insrCurr
* @param $itemDesc
* @param $prefDelvDate
* @param $gpsPoints
* @return \SmsaSDK\Methods\addShipmentDelvResponse
*/
public static function addShipmentDelv($passKey = null, $refNo = null, $sentDate = null, $idNo = null, $cName = null, $cntry = null, $cCity = null, $cZip = null, $cPOBox = null, $cMobile = null, $cTel1 = null, $cTel2 = null, $cAddr1 = null, $cAddr2 = null, $shipType = null, $PCs = null, $cEmail = null, $carrValue = null, $carrCurr = null, $codAmt = null, $weight = null, $custVal = null, $custCurr = null, $insrAmt = null, $insrCurr = null, $itemDesc = null, $prefDelvDate = null, $gpsPoints = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('addShipmentDelv', [$firstArgument]);

if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 
if(!is_null($refNo)) { $arguments['refNo'] = $refNo; } 
if(!is_null($sentDate)) { $arguments['sentDate'] = $sentDate; } 
if(!is_null($idNo)) { $arguments['idNo'] = $idNo; } 
if(!is_null($cName)) { $arguments['cName'] = $cName; } 
if(!is_null($cntry)) { $arguments['cntry'] = $cntry; } 
if(!is_null($cCity)) { $arguments['cCity'] = $cCity; } 
if(!is_null($cZip)) { $arguments['cZip'] = $cZip; } 
if(!is_null($cPOBox)) { $arguments['cPOBox'] = $cPOBox; } 
if(!is_null($cMobile)) { $arguments['cMobile'] = $cMobile; } 
if(!is_null($cTel1)) { $arguments['cTel1'] = $cTel1; } 
if(!is_null($cTel2)) { $arguments['cTel2'] = $cTel2; } 
if(!is_null($cAddr1)) { $arguments['cAddr1'] = $cAddr1; } 
if(!is_null($cAddr2)) { $arguments['cAddr2'] = $cAddr2; } 
if(!is_null($shipType)) { $arguments['shipType'] = $shipType; } 
if(!is_null($PCs)) { $arguments['PCs'] = $PCs; } 
if(!is_null($cEmail)) { $arguments['cEmail'] = $cEmail; } 
if(!is_null($carrValue)) { $arguments['carrValue'] = $carrValue; } 
if(!is_null($carrCurr)) { $arguments['carrCurr'] = $carrCurr; } 
if(!is_null($codAmt)) { $arguments['codAmt'] = $codAmt; } 
if(!is_null($weight)) { $arguments['weight'] = $weight; } 
if(!is_null($custVal)) { $arguments['custVal'] = $custVal; } 
if(!is_null($custCurr)) { $arguments['custCurr'] = $custCurr; } 
if(!is_null($insrAmt)) { $arguments['insrAmt'] = $insrAmt; } 
if(!is_null($insrCurr)) { $arguments['insrCurr'] = $insrCurr; } 
if(!is_null($itemDesc)) { $arguments['itemDesc'] = $itemDesc; } 
if(!is_null($prefDelvDate)) { $arguments['prefDelvDate'] = $prefDelvDate; } 
if(!is_null($gpsPoints)) { $arguments['gpsPoints'] = $gpsPoints; } 


return static::handleStaticCalls('addShipmentDelv', [$arguments]);
 }
/**
* @param $awbNo
* @param $passkey
* @param $reas
* @return \SmsaSDK\Methods\cancelShipmentResponse
*/
public static function cancelShipment($awbNo = null, $passkey = null, $reas = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('cancelShipment', [$firstArgument]);

if(!is_null($awbNo)) { $arguments['awbNo'] = $awbNo; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 
if(!is_null($reas)) { $arguments['reas'] = $reas; } 


return static::handleStaticCalls('cancelShipment', [$arguments]);
 }
/**
* @param $passkey
* @return \SmsaSDK\Methods\getAllRetailsResponse
*/
public static function getAllRetails($passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getAllRetails', [$firstArgument]);

if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getAllRetails', [$arguments]);
 }
/**
* @param $passkey
* @return \SmsaSDK\Methods\getAllRetailsTimingResponse
*/
public static function getAllRetailsTiming($passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getAllRetailsTiming', [$firstArgument]);

if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getAllRetailsTiming', [$arguments]);
 }
/**
* @param $passKey
* @param $fromDate
* @param $ToDate
* @return \SmsaSDK\Methods\getDeliveredShipmentsResponse
*/
public static function getDeliveredShipments($passKey = null, $fromDate = null, $ToDate = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getDeliveredShipments', [$firstArgument]);

if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 
if(!is_null($fromDate)) { $arguments['fromDate'] = $fromDate; } 
if(!is_null($ToDate)) { $arguments['ToDate'] = $ToDate; } 


return static::handleStaticCalls('getDeliveredShipments', [$arguments]);
 }
/**
* @param $awbNo
* @param $passKey
* @return \SmsaSDK\Methods\getPDFResponse
*/
public static function getPDF($awbNo = null, $passKey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getPDF', [$firstArgument]);

if(!is_null($awbNo)) { $arguments['awbNo'] = $awbNo; } 
if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 


return static::handleStaticCalls('getPDF', [$arguments]);
 }
/**
* @param $awbNo
* @param $passKey
* @param $forwrdr
* @return \SmsaSDK\Methods\getPDFBrResponse
*/
public static function getPDFBr($awbNo = null, $passKey = null, $forwrdr = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getPDFBr', [$firstArgument]);

if(!is_null($awbNo)) { $arguments['awbNo'] = $awbNo; } 
if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 
if(!is_null($forwrdr)) { $arguments['forwrdr'] = $forwrdr; } 


return static::handleStaticCalls('getPDFBr', [$arguments]);
 }
/**
* @param $awbNo
* @param $passKey
* @return \SmsaSDK\Methods\getPDFSinoResponse
*/
public static function getPDFSino($awbNo = null, $passKey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getPDFSino', [$firstArgument]);

if(!is_null($awbNo)) { $arguments['awbNo'] = $awbNo; } 
if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 


return static::handleStaticCalls('getPDFSino', [$arguments]);
 }
/**
* @param $passkey
* @return \SmsaSDK\Methods\getRTLCitiesResponse
*/
public static function getRTLCities($passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getRTLCities', [$firstArgument]);

if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getRTLCities', [$arguments]);
 }
/**
* @param $cityCode
* @param $passkey
* @return \SmsaSDK\Methods\getRTLRetailsResponse
*/
public static function getRTLRetails($cityCode = null, $passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getRTLRetails', [$firstArgument]);

if(!is_null($cityCode)) { $arguments['cityCode'] = $cityCode; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getRTLRetails', [$arguments]);
 }
/**
* @param $cityCode
* @param $passkey
* @return \SmsaSDK\Methods\getRTLRetailsTimingResponse
*/
public static function getRTLRetailsTiming($cityCode = null, $passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getRTLRetailsTiming', [$firstArgument]);

if(!is_null($cityCode)) { $arguments['cityCode'] = $cityCode; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getRTLRetailsTiming', [$arguments]);
 }
/**
* @param $passKey
* @param $shipCity
* @param $shipCntry
* @param $destCity
* @param $destCntry
* @param $shipType
* @param $codAmt
* @param $weight
* @return \SmsaSDK\Methods\getShipChargesResponse
*/
public static function getShipCharges($passKey = null, $shipCity = null, $shipCntry = null, $destCity = null, $destCntry = null, $shipType = null, $codAmt = null, $weight = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getShipCharges', [$firstArgument]);

if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 
if(!is_null($shipCity)) { $arguments['shipCity'] = $shipCity; } 
if(!is_null($shipCntry)) { $arguments['shipCntry'] = $shipCntry; } 
if(!is_null($destCity)) { $arguments['destCity'] = $destCity; } 
if(!is_null($destCntry)) { $arguments['destCntry'] = $destCntry; } 
if(!is_null($shipType)) { $arguments['shipType'] = $shipType; } 
if(!is_null($codAmt)) { $arguments['codAmt'] = $codAmt; } 
if(!is_null($weight)) { $arguments['weight'] = $weight; } 


return static::handleStaticCalls('getShipCharges', [$arguments]);
 }
/**
* @param $rowId
* @param $passKey
* @return \SmsaSDK\Methods\getShipUpdatesResponse
*/
public static function getShipUpdates($rowId = null, $passKey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getShipUpdates', [$firstArgument]);

if(!is_null($rowId)) { $arguments['rowId'] = $rowId; } 
if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 


return static::handleStaticCalls('getShipUpdates', [$arguments]);
 }
/**
* @param $rowId
* @param $passKey
* @return \SmsaSDK\Methods\getShipmentUpdatesResponse
*/
public static function getShipmentUpdates($rowId = null, $passKey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getShipmentUpdates', [$firstArgument]);

if(!is_null($rowId)) { $arguments['rowId'] = $rowId; } 
if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 


return static::handleStaticCalls('getShipmentUpdates', [$arguments]);
 }
/**
* @param $awbNo
* @param $passkey
* @return \SmsaSDK\Methods\getStatusResponse
*/
public static function getStatus($awbNo = null, $passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getStatus', [$firstArgument]);

if(!is_null($awbNo)) { $arguments['awbNo'] = $awbNo; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getStatus', [$arguments]);
 }
/**
* @param $refNo
* @param $passkey
* @return \SmsaSDK\Methods\getStatusByRefResponse
*/
public static function getStatusByRef($refNo = null, $passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getStatusByRef', [$firstArgument]);

if(!is_null($refNo)) { $arguments['refNo'] = $refNo; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getStatusByRef', [$arguments]);
 }
/**
* @param $awbNo
* @param $passkey
* @return \SmsaSDK\Methods\getTrackResponse
*/
public static function getTrack($awbNo = null, $passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getTrack', [$firstArgument]);

if(!is_null($awbNo)) { $arguments['awbNo'] = $awbNo; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getTrack', [$arguments]);
 }
/**
* @param $awbNo
* @param $passkey
* @return \SmsaSDK\Methods\getTrackingResponse
*/
public static function getTracking($awbNo = null, $passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getTracking', [$firstArgument]);

if(!is_null($awbNo)) { $arguments['awbNo'] = $awbNo; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getTracking', [$arguments]);
 }
/**
* @param $refNo
* @param $passkey
* @return \SmsaSDK\Methods\getTrackingByRefResponse
*/
public static function getTrackingByRef($refNo = null, $passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getTrackingByRef', [$firstArgument]);

if(!is_null($refNo)) { $arguments['refNo'] = $refNo; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getTrackingByRef', [$arguments]);
 }
/**
* @param $awbNo
* @param $passkey
* @return \SmsaSDK\Methods\getTrackingwithRefResponse
*/
public static function getTrackingwithRef($awbNo = null, $passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('getTrackingwithRef', [$firstArgument]);

if(!is_null($awbNo)) { $arguments['awbNo'] = $awbNo; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('getTrackingwithRef', [$arguments]);
 }
/**
* @param $passKey
* @param $refId
* @param $orderLineItems
* @return \SmsaSDK\Methods\saphOrderReadyResponse
*/
public static function saphOrderReady($passKey = null, $refId = null, $orderLineItems = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('saphOrderReady', [$firstArgument]);

if(!is_null($passKey)) { $arguments['passKey'] = $passKey; } 
if(!is_null($refId)) { $arguments['refId'] = $refId; } 
if(!is_null($orderLineItems)) { $arguments['orderLineItems'] = $orderLineItems; } 


return static::handleStaticCalls('saphOrderReady', [$arguments]);
 }
/**
* @param $awbNo
* @param $passkey
* @return \SmsaSDK\Methods\stoShipmentResponse
*/
public static function stoShipment($awbNo = null, $passkey = null) { $arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('stoShipment', [$firstArgument]);

if(!is_null($awbNo)) { $arguments['awbNo'] = $awbNo; } 
if(!is_null($passkey)) { $arguments['passkey'] = $passkey; } 


return static::handleStaticCalls('stoShipment', [$arguments]);
 }
}