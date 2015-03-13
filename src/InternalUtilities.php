<?php

namespace DecibelSDK;

class InternalUtilities {

    /*
     * @var string The base url for all Decibel API queries
     */
    const BASEURL = "http://localhost:8080/v3/"; //"https://rest.decibel.net/v3/";

    /*
     * Check if an object is 0, null or empty
     *
     * @param Object $obj The object to check
     *
     * @return True if null or empty, false if not
     */
    public static function isEmptyOrNull($obj){
        if($obj == null || $obj == "")
            return true;

        return false;
    }

    /*
     * Check if a Json string returned by the Decibel API has any errors
     *
     * @param string $jsonStr The Json string to check
     *
     * @return A string detailing the error, or null if none occurred
     */
    public static function hasError($jsonStr)
    {
        if(strpos($jsonStr, 'Result') == false)
            return $jsonStr;

        return null;
    }
} 