<?php

namespace DecibelSDK;

class ErrorHandler {
    private $_hasError;
    private $_errorMsg;

    /*
     * Create a new ErrorHandler object
     *
     * @param bool $hasError True if a error occurred, false if one didn't
     * @param string $msg A optional message to describe the error
     */
    public function __construct($hasError, $msg = null){
        $_hasError = $hasError;
        $_errorMsg = $msg;
    }

    /*
     * Get whether a error occurred
     *
     * @return bool
     */
    public function getHasError(){
        return $this->_hasError;
    }

    /*
     * Get the error message
     *
     * @return string
     */
    public function getErrorMsg(){
        return $this->_errorMsg;
    }
} 