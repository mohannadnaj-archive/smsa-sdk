<?php

namespace SmsaSDK\Concerns;

use SmsaSDK\Methods\SMSAWebService;

trait PrepareClient
{
    /**
     * @return \SmsaSDK\Methods\SMSAWebService
     */
    private function client()
    {
        if (empty($this->client)) {
            $this->setClient(new SMSAWebService([], $this->getWsdlFilePath()));
        }

        return $this->client;
    }

    /**
     * setClient
     * Insert description here.
     *
     * @param $client
     *
     * @return
     */
    private function setClient($client)
    {
        $this->client = $client;
    }
}
