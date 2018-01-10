<?php
namespace SmsaSDK\Concerns;

use \ReflectionClass;
use \ReflectionProperty;
use SmsaSDK\Config;

trait UsesReflection
{

    /**
     * getReflectionProperties
     * Insert description here
     *
     * @param $reflection
     *
     * @return
     */
    private function getReflectionProperties($reflection) 
    {
        $properties = [];

        foreach($reflection->getProperties() as $property) {
            $properties[] = $property->name;
        }

        return $properties;
    }
}
