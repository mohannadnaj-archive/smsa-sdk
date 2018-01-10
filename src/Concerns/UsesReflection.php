<?php

namespace SmsaSDK\Concerns;

trait UsesReflection
{
    /**
     * getReflectionProperties
     * Insert description here.
     *
     * @param $reflection
     *
     * @return
     */
    private function getReflectionProperties($reflection)
    {
        $properties = [];

        foreach ($reflection->getProperties() as $property) {
            $properties[] = $property->name;
        }

        return $properties;
    }
}
