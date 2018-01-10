<?php

namespace SmsaSDK\Methods;

/**
 * SMSA eCommerce Web API.
 */
class SMSAWebService extends \SmsaSDK\SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = [
    'addShipment'                => 'SmsaSDK\\Methods\\addShipment',
    'addShipmentResponse'        => 'SmsaSDK\\Methods\\addShipmentResponse',
    'addShip'                    => 'SmsaSDK\\Methods\\addShip',
    'addShipResponse'            => 'SmsaSDK\\Methods\\addShipResponse',
    'addShipMPS'                 => 'SmsaSDK\\Methods\\addShipMPS',
    'addShipMPSResponse'         => 'SmsaSDK\\Methods\\addShipMPSResponse',
    'stoShipment'                => 'SmsaSDK\\Methods\\stoShipment',
    'stoShipmentResponse'        => 'SmsaSDK\\Methods\\stoShipmentResponse',
    'addShipmentDelv'            => 'SmsaSDK\\Methods\\addShipmentDelv',
    'addShipmentDelvResponse'    => 'SmsaSDK\\Methods\\addShipmentDelvResponse',
    'getTracking'                => 'SmsaSDK\\Methods\\getTracking',
    'getTrackingResponse'        => 'SmsaSDK\\Methods\\getTrackingResponse',
    'getTrackingResult'          => 'SmsaSDK\\Methods\\getTrackingResult',
    'getTrackingwithRef'         => 'SmsaSDK\\Methods\\getTrackingwithRef',
    'getTrackingwithRefResponse' => 'SmsaSDK\\Methods\\getTrackingwithRefResponse',
    'getTrackingwithRefResult'   => 'SmsaSDK\\Methods\\getTrackingwithRefResult',
    'getStatus'                  => 'SmsaSDK\\Methods\\getStatus',
    'getStatusResponse'          => 'SmsaSDK\\Methods\\getStatusResponse',
    'saphOrderReady'             => 'SmsaSDK\\Methods\\saphOrderReady',
    'ArrayOfOrderLineItem'       => 'SmsaSDK\\Methods\\ArrayOfOrderLineItem',
    'OrderLineItem'              => 'SmsaSDK\\Methods\\OrderLineItem',
    'saphOrderReadyResponse'     => 'SmsaSDK\\Methods\\saphOrderReadyResponse',
    'getStatusByRef'             => 'SmsaSDK\\Methods\\getStatusByRef',
    'getStatusByRefResponse'     => 'SmsaSDK\\Methods\\getStatusByRefResponse',
    'getTrackingByRef'           => 'SmsaSDK\\Methods\\getTrackingByRef',
    'getTrackingByRefResponse'   => 'SmsaSDK\\Methods\\getTrackingByRefResponse',
    'getTrackingByRefResult'     => 'SmsaSDK\\Methods\\getTrackingByRefResult',
    'getShipUpdates'             => 'SmsaSDK\\Methods\\getShipUpdates',
    'getShipUpdatesResponse'     => 'SmsaSDK\\Methods\\getShipUpdatesResponse',
    'getShipUpdatesResult'       => 'SmsaSDK\\Methods\\getShipUpdatesResult',
    'cancelShipment'             => 'SmsaSDK\\Methods\\cancelShipment',
    'cancelShipmentResponse'     => 'SmsaSDK\\Methods\\cancelShipmentResponse',
    'getRTLCities'               => 'SmsaSDK\\Methods\\getRTLCities',
    'getRTLCitiesResponse'       => 'SmsaSDK\\Methods\\getRTLCitiesResponse',
    'getRTLCitiesResult'         => 'SmsaSDK\\Methods\\getRTLCitiesResult',
    'getRTLRetails'              => 'SmsaSDK\\Methods\\getRTLRetails',
    'getRTLRetailsResponse'      => 'SmsaSDK\\Methods\\getRTLRetailsResponse',
    'getRTLRetailsResult'        => 'SmsaSDK\\Methods\\getRTLRetailsResult',
    'getAllRetails'              => 'SmsaSDK\\Methods\\getAllRetails',
    'getAllRetailsResponse'      => 'SmsaSDK\\Methods\\getAllRetailsResponse',
    'getAllRetailsResult'        => 'SmsaSDK\\Methods\\getAllRetailsResult',
    'getPDF'                     => 'SmsaSDK\\Methods\\getPDF',
    'getPDFResponse'             => 'SmsaSDK\\Methods\\getPDFResponse',
    'getPDFSino'                 => 'SmsaSDK\\Methods\\getPDFSino',
    'getPDFSinoResponse'         => 'SmsaSDK\\Methods\\getPDFSinoResponse',
    'getPDFBr'                   => 'SmsaSDK\\Methods\\getPDFBr',
    'getPDFBrResponse'           => 'SmsaSDK\\Methods\\getPDFBrResponse',
    ];

    /**
     * @param array  $options A array of config values
     * @param string $wsdl    The wsdl file to use
     */
    public function __construct(array $options = [], $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(
            [
            'features' => 1,
            ], $options
        );
        if (!$wsdl) {
            $wsdl = __DIR__.'\src/data/SMSA.wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Create Shipment and get SMSA AWB Number.
     *
     * @param addShipment $parameters
     *
     * @return addShipmentResponse
     */
    public function addShipment(addShipment $parameters)
    {
        return $this->__soapCall('addShipment', [$parameters]);
    }

    /**
     * Create Shipment with Shipper Details and get SMSA AWB Number.
     *
     * @param addShip $parameters
     *
     * @return addShipResponse
     */
    public function addShip(addShip $parameters)
    {
        return $this->__soapCall('addShip', [$parameters]);
    }

    /**
     * Create Shipment with Shipper Details and get SMSA AWB Number for Multi piece Shipments.
     *
     * @param addShipMPS $parameters
     *
     * @return addShipMPSResponse
     */
    public function addShipMPS(addShipMPS $parameters)
    {
        return $this->__soapCall('addShipMPS', [$parameters]);
    }

    /**
     * Ship to Origin after Delivery.
     *
     * @param stoShipment $parameters
     *
     * @return stoShipmentResponse
     */
    public function stoShipment(stoShipment $parameters)
    {
        return $this->__soapCall('stoShipment', [$parameters]);
    }

    /**
     * Create Shipment with Delivery Details and get SMSA AWB Number.
     *
     * @param addShipmentDelv $parameters
     *
     * @return addShipmentDelvResponse
     */
    public function addShipmentDelv(addShipmentDelv $parameters)
    {
        return $this->__soapCall('addShipmentDelv', [$parameters]);
    }

    /**
     * Get Tracking of Shipment by Air waybill Number.
     *
     * @param getTracking $parameters
     *
     * @return getTrackingResponse
     */
    public function getTracking(getTracking $parameters)
    {
        return $this->__soapCall('getTracking', [$parameters]);
    }

    /**
     * Get Tracking of Shipment with Reference Number by Air waybill Number.
     *
     * @param getTrackingwithRef $parameters
     *
     * @return getTrackingwithRefResponse
     */
    public function getTrackingwithRef(getTrackingwithRef $parameters)
    {
        return $this->__soapCall('getTrackingwithRef', [$parameters]);
    }

    /**
     * Get current Status of Shipment by Air waybill Number.
     *
     * @param getStatus $parameters
     *
     * @return getStatusResponse
     */
    public function getStatus(getStatus $parameters)
    {
        return $this->__soapCall('getStatus', [$parameters]);
    }

    /**
     * @param saphOrderReady $parameters
     *
     * @return saphOrderReadyResponse
     */
    public function saphOrderReady(saphOrderReady $parameters)
    {
        return $this->__soapCall('saphOrderReady', [$parameters]);
    }

    /**
     * Get Status of Shipment by Customer Reference Number.
     *
     * @param getStatusByRef $parameters
     *
     * @return getStatusByRefResponse
     */
    public function getStatusByRef(getStatusByRef $parameters)
    {
        return $this->__soapCall('getStatusByRef', [$parameters]);
    }

    /**
     * Get Tracking of Shipment by Air waybill Number.
     *
     * @param getTrackingByRef $parameters
     *
     * @return getTrackingByRefResponse
     */
    public function getTrackingByRef(getTrackingByRef $parameters)
    {
        return $this->__soapCall('getTrackingByRef', [$parameters]);
    }

    /**
     * Get All the Shipment Updates for the customer shipments.
     *
     * @param getShipUpdates $parameters
     *
     * @return getShipUpdatesResponse
     */
    public function getShipUpdates(getShipUpdates $parameters)
    {
        return $this->__soapCall('getShipUpdates', [$parameters]);
    }

    /**
     * Cancel a Shipment by Air waybill Number.
     *
     * @param cancelShipment $parameters
     *
     * @return cancelShipmentResponse
     */
    public function cancelShipment(cancelShipment $parameters)
    {
        return $this->__soapCall('cancelShipment', [$parameters]);
    }

    /**
     * Get List of Cities for Retails list.
     *
     * @param getRTLCities $parameters
     *
     * @return getRTLCitiesResponse
     */
    public function getRTLCities(getRTLCities $parameters)
    {
        return $this->__soapCall('getRTLCities', [$parameters]);
    }

    /**
     * Get Retails list by each city.
     *
     * @param getRTLRetails $parameters
     *
     * @return getRTLRetailsResponse
     */
    public function getRTLRetails(getRTLRetails $parameters)
    {
        return $this->__soapCall('getRTLRetails', [$parameters]);
    }

    /**
     * Get Retails list by each city.
     *
     * @param getAllRetails $parameters
     *
     * @return getAllRetailsResponse
     */
    public function getAllRetails(getAllRetails $parameters)
    {
        return $this->__soapCall('getAllRetails', [$parameters]);
    }

    /**
     * Get AWB Print in PDF.
     *
     * @param getPDF $parameters
     *
     * @return getPDFResponse
     */
    public function getPDF(getPDF $parameters)
    {
        return $this->__soapCall('getPDF', [$parameters]);
    }

    /**
     * Get AWB Print in PDF.
     *
     * @param getPDFSino $parameters
     *
     * @return getPDFSinoResponse
     */
    public function getPDFSino(getPDFSino $parameters)
    {
        return $this->__soapCall('getPDFSino', [$parameters]);
    }

    /**
     * Get AWB Print in PDF.
     *
     * @param getPDFBr $parameters
     *
     * @return getPDFBrResponse
     */
    public function getPDFBr(getPDFBr $parameters)
    {
        return $this->__soapCall('getPDFBr', [$parameters]);
    }
}
