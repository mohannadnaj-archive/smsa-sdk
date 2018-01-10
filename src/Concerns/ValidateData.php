<?php

namespace SmsaSDK\Concerns;

use \ReflectionClass;
use \ReflectionProperty;
use SmsaSDK\Config;
use SmsaSDK\Methods\SMSAWebService;
use SmsaSDK\Exceptions\UndefinedMethodException;
use SmsaSDK\Exceptions\InvalidArgumentException;

trait ValidateData
{
    /**
     * validate
     * Insert description here
     *
     * @param $arguments
     * @param $class
     *
     * @return
     */
    private function validate($arguments, $class) 
    {
        $this->validateMethodExistance($class);

        $this->validateArgumentsType($arguments, $class);

        $this->reflection = new ReflectionClass($class);

        $this->validateMethodHasDefinedArguments($arguments, $class);

        if($this->nullValues === null) {
            $this->validateMissingArguments($arguments, $class);
        }
    }

    /**
     * validateMissingArguments
     * Insert description here
     *
     * @param $arguments
     * @param $class
     *
     * @return
     */
    private function validateMissingArguments($arguments, $class) 
    {
        $missingArguments = [];
        $keys = array_keys($arguments);
        $commonKeys = array_keys(Config::getCommonData());
        $properties = $this->getReflectionProperties($this->reflection);

        foreach ($properties as $key) {
            if(! in_array($key, $keys) && ! in_array($key, $commonKeys)) {
                $missingArguments[] = $key;
            }
        }

        if(count($missingArguments) > 0) {
            $classBaseName = $this->getBaseName($class);
            throw new InvalidArgumentException("calling the method [$classBaseName] some arguments are missing: [" . implode(', ', $missingArguments) . "]. required arguments: [" . implode(', ', $properties) . "].");            
        }
    }

    /**
     * validateMethodHasDefinedArguments
     * Insert description here
     *
     * @param $arguments
     * @param $class
     *
     * @return
     */
    private function validateMethodHasDefinedArguments($arguments, $class) 
    {
        $unknownArguments = [];

        foreach ($arguments as $key => $value) {
            $setterMethod = $this->getSetterMethodFromKey($key);
            if(! $this->reflection->hasMethod($setterMethod)) {
                $unknownArguments[] = $key;
            }
        }


        if(count($unknownArguments) > 0) {
            $properties = $this->getReflectionProperties($this->reflection);
            $classBaseName = $this->getBaseName($class);

            throw new InvalidArgumentException("Argument passed to the method [$classBaseName] is not expected to this method. unknown arguments: [" . implode(', ', $unknownArguments) . "]. required arguments: [" . implode(', ', $properties) . "].");
        }
    }

    /**
     * validateArgumentsType
     * Insert description here
     *
     * @param $arguments
     * @param $class
     *
     * @return
     */
    private function validateArgumentsType($arguments, $class) 
    {
        $classBaseName = $this->getBaseName($class);

        if(! is_array($arguments)) {
            throw new InvalidArgumentException("Arguments passed to the method [$classBaseName] should be an array, " . gettype($arguments) . " given");
        }
    }

    /**
     * validateMethodExistance
     * Insert description here
     *
     * @param $class
     *
     * @return
     */
    private function validateMethodExistance($class) 
    {
        if(! class_exists($class)) {
            $classBaseName = $this->getBaseName($class);
            throw new UndefinedMethodException("the method [$classBaseName] is not defined, there is no matching class handler at: $class");
        }
    }

    /**
     * getBaseName
     * Insert description here
     *
     * @param $class
     *
     * @return
     */
    private function getBaseName($class) 
    {
        return preg_replace('/.*\\\\/', '', $class);
    }
}
