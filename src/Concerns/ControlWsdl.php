<?php

namespace SmsaSDK\Concerns;

use SmsaSDK\Config;

trait ControlWsdl
{
    /**
     * downloadWsdl
     * Insert description here.
     *
     * @param $path
     *
     * @return
     */
    public function downloadWsdl($path = null)
    {
        if (is_null($path)) {
            $path = $this->getWsdlFilePath();
        }

        $wsdl = file_get_contents($this->uri);
        file_put_contents($path, $wsdl);

        return $path;
    }

    /**
     * setWsdlFilePath
     * Insert description here.
     *
     * @return
     */
    private function setWsdlFilePath()
    {
        $this->wsdlFilePath = Config::get('wsdl_file_path');
    }

    /**
     * getWsdlFilePath
     * Insert description here.
     *
     * @return
     */
    private function getWsdlFilePath()
    {
        $this->setWsdlFilePath();

        return $this->wsdlFilePath;
    }
}
