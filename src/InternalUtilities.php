<?php

namespace DecibelSDK;

class InternalUtilities {

    /*
     * @var string The base url for all Decibel API queries
     */
    const BASEURL = "http://localhost:8080/v3/";

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
        //if($obj == 0 || $obj == "")
            //return true;

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

    /*
     * Make a request to the Decibel API
     *
     * @param string $url The url of the query
     *
     * @return The response of the query
     */
    public static function request($url)
    {
        // Initialize the cURL session with the request URL
        $session = curl_init($url);

        // Tell cURL to return the request data
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        // Change these values to your own ID and Key
        $applicationID = DecibelUtilities::getId();
        $applicationKey = DecibelUtilities::getAppKey();

        // Set the HTTP request authentication headers
        $headers = array(
            'DecibelAppID: ' . $applicationID,
            'DecibelAppKey: ' . $applicationKey,
            'DecibelTimestamp: ' . date('Ymd H:i:s', time()),
            'Content-Type: application/xml'
        );
        curl_setopt($session, CURLOPT_HTTPHEADER, $headers);

        // Execute cURL on the session handle
        $response = curl_exec($session);

        return $response;
    }
} 