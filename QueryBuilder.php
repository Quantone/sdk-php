<?php

namespace DecibelSDK;

require_once 'InternalUtilities.php';

class QueryBuilder {

    private static $queryTopics = [
        "DecibelSDK\AlbumsQuery" => "albums",
        "DecibelSDK\SingleAlbumQuery" => "album",
        "DecibelSDK\ArtistsQuery" => "artists",
        "DecibelSDK\SingleArtistQuery" => "artist",
        "DecibelSDK\RecordingsQuery" => "recordings",
        "DecibelSDK\SingleRecordingQuery" => "recording",
    ];

    /*
     * Build a query string from the object given
     *
     * @param QueryObject $queryObject the object to build a query string from
     *
     * @return string The query string constructed
     */
    public static function buildQuery(IBuild $queryObject){
        // Resolve the type of $queryObjects to a topic
        $topic = QueryBuilder::$queryTopics[get_class($queryObject)];
        // Create the base of the query string
        $queryString = InternalUtilities::BASEURL . $topic . "?";

        $queryStr = $queryObject::toString();

        // Find all the properties that belong to the query object
        $reflect = new \ReflectionClass($queryObject);
        $properties = $reflect->getProperties();
        // Get the name and value of each property
        foreach($properties as $property){
            // Allow reflection to access property if it is private
            $property->setAccessible(true);
            $propName = $property->getName();
            $propValue = $property->getValue($queryObject);
            if(!InternalUtilities::IsEmptyOrNull($propValue))
            {
                // If value is an array - TODO: check this works in php
                if (strpos($propValue,'[]') !== false) {
                    $queryString = $queryString . $propName . "=";
                    foreach($propValue as $prop)
                        $queryString = $queryString . $prop . ";";
                    $queryString = $queryString . "&";
                }else
                    $queryString = $queryString . $propName . "=" . $propValue . "&";
            }
        }

        // Remove the trailing & if one exists and return the query string
        return rtrim($queryString, "&");
    }

    /*
     * Run a query against the Decibel API
     *
     * @param string $query The query the run
     * @param bool $xml Whether to return the data as xml, false as default
     *
     * @return QueryResult A query result object
     */
    public static function runQuery($query){
        // Check that a query string was provided
        if(!isset($query))
            return null;

        // Initialize the cURL session with the request URL
        $session = curl_init($query);

        // Tell cURL to return the request data
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        // TODO: maybe get these values directly when creating the array
        $applicationID = DecibelConfig::APP_ID;
        $applicationKey = DecibelConfig::APP_KEY;

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