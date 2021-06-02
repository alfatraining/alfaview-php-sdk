<?php

namespace Alfaview;

class Response
{
    public $reply;
    public $errorCode;
    public $errorMessage;
    public $hasError;

    /**
     * @param $reply - reply from alfaview API
     * @param $errorCode - HTTP error code or alfaview response code
     * @param $errorMessage - alfaview error message
     * @param $hasError - set true if an error or exception occurs
     */
    public function __construct($reply = null, $hasError = false, $errorCode = null, $errorMessage = null)
    {
        $this->reply = $reply;
        $this->hasError = $hasError;
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
    }
}