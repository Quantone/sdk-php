<?php

namespace DecibelSDK;

require_once 'InternalUtilities.php';

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

    private function run($queryStr){
        // Check that a query string was provided
        if(!isset($queryStr))
            return null;
        // Initialize the cURL session with the request URL
        $session = curl_init(InternalUtilities::BASEURL . str_replace(" ", "%20", $queryStr));
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
            'DecibelAppID: ' . $this->_appId,
            'DecibelAppKey: ' . $this->_appKey,
            'DecibelTimestamp: ' . date('Ymd H:i:s', time()),
        );
        curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
        // Execute cURL on the session handle
        $response = curl_exec($session);
        return $response;
    }

    public function executeAlbumsQuery(AlbumsQuery $query){
        $resultJson = $this->run($query->getQueryString());
        if($resultJson == null)
            return null;

        return new AlbumsQueryResult($resultJson);
    }

    public function executeAlbumsByIdQuery(AlbumsByIdQuery $query){
        $resultJson = $this->run($query->getQueryString());
        if($resultJson == null)
            return null;

        return new AlbumsByIdQueryResult($resultJson);
    }

    public function executeRecordingsQuery(RecordingsQuery $query){
        $resultJson = $this->run($query->getQueryString());
        if($resultJson == null)
            return null;

        return new RecordingsQueryResult($resultJson);
    }

    public function executeRecordingsByIdQuery(RecordingsByIdQuery $query){
        $resultJson = $this->run($query->getQueryString());
        if($resultJson == null)
            return null;

        return new RecordingsByIdQueryResult($resultJson);
    }

    public function executeArtistsQuery(ArtistsQuery $query){
        $resultJson = $this->run($query->getQueryString());
        if($resultJson == null)
            return null;

        return new ArtistsQueryResult($resultJson);
    }

    public function executeArtistsByIdQuery(ArtistsByIdQuery $query){
        $resultJson = $this->run($query->getQueryString());
        if($resultJson == null)
            return null;

        return new ArtistsByIdQueryResult($resultJson);
    }

}

