<?php

namespace SmsaSDK\Concerns;

use SmsaSDK\Config;

trait MapMethods
{
    /**
     * mergeCommonData
     * Insert description here.
     *
     * @param $methodHandler
     * @param $arguments
     *
     * @return
     */
    private function mergeCommonData($methodHandler, $arguments = [])
    {
        foreach (Config::getCommonData() as $key => $value) {
            $setterMethod = $this->getSetterMethodFromKey($key);
            if (method_exists($methodHandler, $setterMethod) && !array_key_exists($key, $arguments)) {
                $methodHandler->$setterMethod($value);
            }
        }

        return $methodHandler;
    }

    /**
     * getSetterMethodFromKey
     * Insert description here.
     *
     * @param $key
     *
     * @return
     */
    private function getSetterMethodFromKey($key)
    {
        return 'set'.ucfirst($key);
    }

    /**
     * fillNull
     * Insert description here.
     *
     * @param $arguments
     * @param $value
     *
     * @return
     */
    private function fillNull($arguments, $value)
    {
        $missingArguments = [];
        $keys = array_keys($arguments);
        $commonKeys = array_keys(Config::getCommonData());
        $properties = $this->getReflectionProperties($this->reflection);

        foreach ($properties as $key) {
            if (!in_array($key, $keys)) {
                $missingArguments[] = $key;
            }
        }

        foreach ($missingArguments as $key) {
            $arguments[$key] = $value;
        }

        return $arguments;
    }

    /**
     * @param $arguments
     * @param $class
     *
     * @return mixed
     */
    private function prepareMethodHandler($arguments, $class)
    {
        $this->validate($arguments, $class);

        if ($this->nullValues !== null) {
            $arguments = $this->fillNull($arguments, $this->nullValues);
        }

        $methodHandler = new $class();

        foreach ($arguments as $key => $value) {
            $setterMethod = $this->getSetterMethodFromKey($key);
            $methodHandler->$setterMethod($value);
        }

        $methodHandler = $this->mergeCommonData($methodHandler, $arguments);

        return $methodHandler;
    }
}
