<?php

namespace SmsaSDK\Methods;

class saphOrderReadyResponse
{
    /**
     * @var string
     */
    protected $saphOrderReadyResult = null;

    /**
     * @param string $saphOrderReadyResult
     */
    public function __construct($saphOrderReadyResult = null)
    {
        $this->saphOrderReadyResult = $saphOrderReadyResult;
    }

    /**
     * @return string
     */
    public function getSaphOrderReadyResult()
    {
        return $this->saphOrderReadyResult;
    }

    /**
     * @param string $saphOrderReadyResult
     *
     * @return \SmsaSDK\Methods\saphOrderReadyResponse
     */
    public function setSaphOrderReadyResult($saphOrderReadyResult)
    {
        $this->saphOrderReadyResult = $saphOrderReadyResult;

        return $this;
    }
}
