<?php


 function autoload_1ad757d45b5a54e100206941b09344ad($class)
{
    $classes = array(
        'SmsaSDK\Methods\SMSAWebService' => __DIR__ .'/SMSAWebService.php',
        'SmsaSDK\Methods\addShipment' => __DIR__ .'/addShipment.php',
        'SmsaSDK\Methods\addShipmentResponse' => __DIR__ .'/addShipmentResponse.php',
        'SmsaSDK\Methods\addShip' => __DIR__ .'/addShip.php',
        'SmsaSDK\Methods\addShipResponse' => __DIR__ .'/addShipResponse.php',
        'SmsaSDK\Methods\addShipMPS' => __DIR__ .'/addShipMPS.php',
        'SmsaSDK\Methods\addShipMPSResponse' => __DIR__ .'/addShipMPSResponse.php',
        'SmsaSDK\Methods\addShipPDF' => __DIR__ .'/addShipPDF.php',
        'SmsaSDK\Methods\addShipPDFResponse' => __DIR__ .'/addShipPDFResponse.php',
        'SmsaSDK\Methods\addShipPDFResp' => __DIR__ .'/addShipPDFResp.php',
        'SmsaSDK\Methods\stoShipment' => __DIR__ .'/stoShipment.php',
        'SmsaSDK\Methods\stoShipmentResponse' => __DIR__ .'/stoShipmentResponse.php',
        'SmsaSDK\Methods\addShipmentDelv' => __DIR__ .'/addShipmentDelv.php',
        'SmsaSDK\Methods\addShipmentDelvResponse' => __DIR__ .'/addShipmentDelvResponse.php',
        'SmsaSDK\Methods\getTracking' => __DIR__ .'/getTracking.php',
        'SmsaSDK\Methods\getTrackingResponse' => __DIR__ .'/getTrackingResponse.php',
        'SmsaSDK\Methods\getTrackingResult' => __DIR__ .'/getTrackingResult.php',
        'SmsaSDK\Methods\getTrackingwithRef' => __DIR__ .'/getTrackingwithRef.php',
        'SmsaSDK\Methods\getTrackingwithRefResponse' => __DIR__ .'/getTrackingwithRefResponse.php',
        'SmsaSDK\Methods\getTrackingwithRefResult' => __DIR__ .'/getTrackingwithRefResult.php',
        'SmsaSDK\Methods\getStatus' => __DIR__ .'/getStatus.php',
        'SmsaSDK\Methods\getStatusResponse' => __DIR__ .'/getStatusResponse.php',
        'SmsaSDK\Methods\saphOrderReady' => __DIR__ .'/saphOrderReady.php',
        'SmsaSDK\Methods\ArrayOfOrderLineItem' => __DIR__ .'/ArrayOfOrderLineItem.php',
        'SmsaSDK\Methods\OrderLineItem' => __DIR__ .'/OrderLineItem.php',
        'SmsaSDK\Methods\saphOrderReadyResponse' => __DIR__ .'/saphOrderReadyResponse.php',
        'SmsaSDK\Methods\getStatusByRef' => __DIR__ .'/getStatusByRef.php',
        'SmsaSDK\Methods\getStatusByRefResponse' => __DIR__ .'/getStatusByRefResponse.php',
        'SmsaSDK\Methods\getTrackingByRef' => __DIR__ .'/getTrackingByRef.php',
        'SmsaSDK\Methods\getTrackingByRefResponse' => __DIR__ .'/getTrackingByRefResponse.php',
        'SmsaSDK\Methods\getTrackingByRefResult' => __DIR__ .'/getTrackingByRefResult.php',
        'SmsaSDK\Methods\getShipUpdates' => __DIR__ .'/getShipUpdates.php',
        'SmsaSDK\Methods\getShipUpdatesResponse' => __DIR__ .'/getShipUpdatesResponse.php',
        'SmsaSDK\Methods\getShipUpdatesResult' => __DIR__ .'/getShipUpdatesResult.php',
        'SmsaSDK\Methods\getTrack' => __DIR__ .'/getTrack.php',
        'SmsaSDK\Methods\getTrackResponse' => __DIR__ .'/getTrackResponse.php',
        'SmsaSDK\Methods\getTrackResp' => __DIR__ .'/getTrackResp.php',
        'SmsaSDK\Methods\ArrayOfTrackDetails' => __DIR__ .'/ArrayOfTrackDetails.php',
        'SmsaSDK\Methods\TrackDetails' => __DIR__ .'/TrackDetails.php',
        'SmsaSDK\Methods\getShipmentUpdates' => __DIR__ .'/getShipmentUpdates.php',
        'SmsaSDK\Methods\getShipmentUpdatesResponse' => __DIR__ .'/getShipmentUpdatesResponse.php',
        'SmsaSDK\Methods\getShipmentUpdatesResp' => __DIR__ .'/getShipmentUpdatesResp.php',
        'SmsaSDK\Methods\ArrayOfShipUpdates' => __DIR__ .'/ArrayOfShipUpdates.php',
        'SmsaSDK\Methods\ShipUpdates' => __DIR__ .'/ShipUpdates.php',
        'SmsaSDK\Methods\cancelShipment' => __DIR__ .'/cancelShipment.php',
        'SmsaSDK\Methods\cancelShipmentResponse' => __DIR__ .'/cancelShipmentResponse.php',
        'SmsaSDK\Methods\getRTLCities' => __DIR__ .'/getRTLCities.php',
        'SmsaSDK\Methods\getRTLCitiesResponse' => __DIR__ .'/getRTLCitiesResponse.php',
        'SmsaSDK\Methods\getRTLCitiesResult' => __DIR__ .'/getRTLCitiesResult.php',
        'SmsaSDK\Methods\getRTLRetails' => __DIR__ .'/getRTLRetails.php',
        'SmsaSDK\Methods\getRTLRetailsResponse' => __DIR__ .'/getRTLRetailsResponse.php',
        'SmsaSDK\Methods\getRTLRetailsResult' => __DIR__ .'/getRTLRetailsResult.php',
        'SmsaSDK\Methods\getAllRetails' => __DIR__ .'/getAllRetails.php',
        'SmsaSDK\Methods\getAllRetailsResponse' => __DIR__ .'/getAllRetailsResponse.php',
        'SmsaSDK\Methods\getAllRetailsResult' => __DIR__ .'/getAllRetailsResult.php',
        'SmsaSDK\Methods\getRTLRetailsTiming' => __DIR__ .'/getRTLRetailsTiming.php',
        'SmsaSDK\Methods\getRTLRetailsTimingResponse' => __DIR__ .'/getRTLRetailsTimingResponse.php',
        'SmsaSDK\Methods\getRTLRetailsTimingResult' => __DIR__ .'/getRTLRetailsTimingResult.php',
        'SmsaSDK\Methods\getAllRetailsTiming' => __DIR__ .'/getAllRetailsTiming.php',
        'SmsaSDK\Methods\getAllRetailsTimingResponse' => __DIR__ .'/getAllRetailsTimingResponse.php',
        'SmsaSDK\Methods\getAllRetailsTimingResult' => __DIR__ .'/getAllRetailsTimingResult.php',
        'SmsaSDK\Methods\getPDF' => __DIR__ .'/getPDF.php',
        'SmsaSDK\Methods\getPDFResponse' => __DIR__ .'/getPDFResponse.php',
        'SmsaSDK\Methods\getPDFSino' => __DIR__ .'/getPDFSino.php',
        'SmsaSDK\Methods\getPDFSinoResponse' => __DIR__ .'/getPDFSinoResponse.php',
        'SmsaSDK\Methods\getPDFBr' => __DIR__ .'/getPDFBr.php',
        'SmsaSDK\Methods\getPDFBrResponse' => __DIR__ .'/getPDFBrResponse.php',
        'SmsaSDK\Methods\getDeliveredShipments' => __DIR__ .'/getDeliveredShipments.php',
        'SmsaSDK\Methods\getDeliveredShipmentsResponse' => __DIR__ .'/getDeliveredShipmentsResponse.php',
        'SmsaSDK\Methods\DeliveredShipmentResponse' => __DIR__ .'/DeliveredShipmentResponse.php',
        'SmsaSDK\Methods\ArrayOfDeliveredShipmentDetails' => __DIR__ .'/ArrayOfDeliveredShipmentDetails.php',
        'SmsaSDK\Methods\DeliveredShipmentDetails' => __DIR__ .'/DeliveredShipmentDetails.php',
        'SmsaSDK\Methods\getShipCharges' => __DIR__ .'/getShipCharges.php',
        'SmsaSDK\Methods\getShipChargesResponse' => __DIR__ .'/getShipChargesResponse.php',
        'SmsaSDK\Methods\getShipChargesResp' => __DIR__ .'/getShipChargesResp.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_1ad757d45b5a54e100206941b09344ad');

// Do nothing. The rest is just leftovers from the code generation.
{
}
