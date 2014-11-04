<?php

namespace DecibelSDK;

class Decibel {
    private $_appId;
    private $_appKey;

    /**
     * Create a new instance of the Decibel class with your credentials.
     * This is the main class that all queries are run through
     *
     * @param $appId Your Decibel App Id
     * @param $appKey Your Decibel App Key
     */
    public function __construct($appId, $appKey){
        $this->_appId = $appId;
        $this->_appKey = $appKey;
    }

    public function execute(iQuery $query){
        $resultJson = $this->run($query->getQueryString());
        if($resultJson == null)
            return "No data received"; // TODO: add proper error handling

        return Decibel::newResult($resultJson, $query->getResultType());
    }

    private function run($queryStr){
        // Check that a query string was provided
        if(!isset($queryStr))
            return null;

        // Initialize the cURL session with the request URL
        $session = curl_init($queryStr);

        // Tell cURL to return the request data
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        // Set the HTTP request authentication headers
        $headers = array(
            'DecibelAppID: ' . $this->_appId,
            'DecibelAppKey: ' . $this->_appKey,
            'DecibelTimestamp: ' . date('Ymd H:i:s', time()),
            'Content-Type: application/xml'
        );
        curl_setopt($session, CURLOPT_HTTPHEADER, $headers);

        // Execute cURL on the session handle
        $response = curl_exec($session);

        return $response;
    }

    private static function newResult($resultJson, $resultType){
        switch($resultType){
            case 'AlbumsQueryResult':
                return new AlbumsQueryResult($resultJson);
            case 'AlbumsByIdQueryResult':
                return new AlbumsByIdQueryResult($resultJson);
        }
    }
} 