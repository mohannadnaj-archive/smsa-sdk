<?php
namespace SmsaSDK;

use SmsaSDK\Concerns\MapMethods;
use SmsaSDK\Concerns\ControlWsdl;
use SmsaSDK\Concerns\Configurable;
use SmsaSDK\Concerns\ValidateData;
use SmsaSDK\Concerns\UsesReflection;
use SmsaSDK\Concerns\PrepareClient;
use SmsaSDK\Methods;

/**
 * SmsaManager
 */
class SmsaManager
{
    private $uri;
    private $wsdlFilePath;
    private $passkey;
    private $client;
    private $nullValues = null;
    private $reflection;

    use MapMethods;
    use ControlWsdl;
    use ValidateData;
    use Configurable;
    use PrepareClient;
    use UsesReflection;

    /**
     * __call
     * Insert description here
     *
     * @param $method
     * @param $arguments
     *
     * @return
     */
    public function __call($method, $arguments)
    {
        $this->setUp();
        $class = __NAMESPACE__ . "\\Methods\\" . $method;
        $arguments = empty($arguments) ? [] : $arguments[0];
        $methodHandler = $this->prepareMethodHandler($arguments, $class);
        return $this->client()->$method($methodHandler);
    }
}
