<?php

namespace DecibelSDK;

require_once 'DecibelObjectModel.php';
require_once 'QueryBuilder.php';
require_once 'iQuery.php';

class AlbumsQuery implements iQuery {
    public function getQueryString() {
        return AlbumsQuery::buildQueryString();
    }

    public function getResultType() {
        return "AlbumsQueryResult";
    }

    public function __construct(){
    }

    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

    private $_artistIds;

    public function getArtistIds(){
        return $this->_artistIds;
    }

    public function setArtistIds($artistIds) {
        $this->_artistIds = $artistIds;
    }

    private $_participants;

    public function getParticipants(){
        return $this->_participants;
    }

    public function setParticipants($participants) {
        $this->_participants = $participants;
    }

    private $_participantIds;

    public function getParticipantIds(){
        return $this->_participantIds;
    }

    public function setParticipantIds($participantIds) {
        $this->_participantIds = $participantIds;
    }

    private $_recordings;

    public function getRecordings(){
        return $this->_recordings;
    }

    public function setRecordings($recordings) {
        $this->_recordings = $recordings;
    }

    private $_recordingIds;

    public function getRecordingIds(){
        return $this->_recordingIds;
    }

    public function setRecordingIds($recordingIds) {
        $this->_recordingIds = $recordingIds;
    }

    private $_orderBy;

    public function getOrderBy(){
        return $this->_orderBy;
    }

    public function setOrderBy($orderBy) {
        $this->_orderBy = $orderBy;
    }

    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    private $_titleSearchType;

    public function getTitleSearchType(){
        return $this->_titleSearchType;
    }

    public function setTitleSearchType($titleSearchType) {
        $this->_titleSearchType = $titleSearchType;
    }

    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    private $_artistSearchType;

    public function getArtistSearchType(){
        return $this->_artistSearchType;
    }

    public function setArtistSearchType($artistSearchType) {
        $this->_artistSearchType = $artistSearchType;
    }

    private $_artistIdType;

    public function getArtistIdType(){
        return $this->_artistIdType;
    }

    public function setArtistIdType($artistIdType) {
        $this->_artistIdType = $artistIdType;
    }

    private $_participantSearchType;

    public function getParticipantSearchType(){
        return $this->_participantSearchType;
    }

    public function setParticipantSearchType($participantSearchType) {
        $this->_participantSearchType = $participantSearchType;
    }

    private $_participantIdType;

    public function getParticipantIdType(){
        return $this->_participantIdType;
    }

    public function setParticipantIdType($participantIdType) {
        $this->_participantIdType = $participantIdType;
    }

    private $_recordingSearchType;

    public function getRecordingSearchType(){
        return $this->_recordingSearchType;
    }

    public function setRecordingSearchType($recordingSearchType) {
        $this->_recordingSearchType = $recordingSearchType;
    }

    private $_recordingIdType;

    public function getRecordingIdType(){
        return $this->_recordingIdType;
    }

    public function setRecordingIdType($recordingIdType) {
        $this->_recordingIdType = $recordingIdType;
    }

    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private $_dateReleased;

    public function getDateReleased(){
        return $this->_dateReleased;
    }

    public function setDateReleased($dateReleased) {
        $this->_dateReleased = $dateReleased;
    }

    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    private $_pageNumber;

    public function getPageNumber(){
        return $this->_pageNumber;
    }

    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }

    private $_pageSize;

    public function getPageSize(){
        return $this->_pageSize;
    }

    public function setPageSize($pageSize) {
        $this->_pageSize = $pageSize;
    }

    private $_updatedSince;

    public function getUpdatedSince(){
        return $this->_updatedSince;
    }

    public function setUpdatedSince($updatedSince) {
        $this->_updatedSince = $updatedSince;
    }

    private function buildQueryString(){
        $queryStr = InternalUtilities::BASEURL;
        $queryStr .= "Albums?";

        $queryStr .= AlbumsQuery::valueOrDefault("artists", $this->_artists, null);
        $queryStr .= AlbumsQuery::valueOrDefault("artistids", $this->_artistIds, null);
        $queryStr .= AlbumsQuery::valueOrDefault("participants", $this->_participants, null);
        $queryStr .= AlbumsQuery::valueOrDefault("participantids", $this->_participantIds, null);
        $queryStr .= AlbumsQuery::valueOrDefault("recordings", $this->_recordings, null);
        $queryStr .= AlbumsQuery::valueOrDefault("recordingids", $this->_recordingIds, null);
        $queryStr .= AlbumsQuery::valueOrDefault("orderby", $this->_orderBy, null);
        $queryStr .= AlbumsQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= AlbumsQuery::valueOrDefault("titlesearchtype", $this->_titleSearchType, AlbumSearchType::FULL_NAME);
        $queryStr .= AlbumsQuery::valueOrDefault("idtype", $this->_idType, AlbumIdType::DECIBEL);
        $queryStr .= AlbumsQuery::valueOrDefault("artistsearchtype", $this->_artistSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= AlbumsQuery::valueOrDefault("artistidtype", $this->_artistIdType, ArtistIdType::DECIBEL);
        $queryStr .= AlbumsQuery::valueOrDefault("participantsearchtype", $this->_participantSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= AlbumsQuery::valueOrDefault("participantidtype", $this->_participantIdType, ArtistIdType::DECIBEL);
        $queryStr .= AlbumsQuery::valueOrDefault("recordingsearchtype", $this->_recordingSearchType, RecordingSearchType::FULL_NAME);
        $queryStr .= AlbumsQuery::valueOrDefault("recordingidtype", $this->_recordingIdType, RecordingIdType::DECIBEL);
        $queryStr .= AlbumsQuery::valueOrDefault("title", $this->_title, null);
        $queryStr .= AlbumsQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= AlbumsQuery::valueOrDefault("language", $this->_language, null);
        $queryStr .= AlbumsQuery::valueOrDefault("datereleased", $this->_dateReleased, null);
        $queryStr .= AlbumsQuery::valueOrDefault("islive", $this->_isLive, null);
        $queryStr .= AlbumsQuery::valueOrDefault("pagenumber", $this->_pageNumber, null);
        $queryStr .= AlbumsQuery::valueOrDefault("pagesize", $this->_pageSize, null);
        $queryStr .= AlbumsQuery::valueOrDefault("updatedsince", $this->_updatedSince, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . $value . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= $item;
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class AlbumsByIdQuery implements iQuery {
    public function getQueryString() {
        return AlbumsByIdQuery::buildQueryString();
    }

    public function getResultType() {
        return "AlbumsByIdQueryResult";
    }

    public function __construct(){
    }

    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private function buildQueryString(){
        $queryStr = InternalUtilities::BASEURL;
        $queryStr .= "Albums/";
        $queryStr .= "id?";

        $queryStr .= AlbumsByIdQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= AlbumsByIdQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= AlbumsByIdQuery::valueOrDefault("language", $this->_language, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . $value . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= $item;
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class RecordingsQuery implements iQuery {
    public function getQueryString() {
        return RecordingsQuery::buildQueryString();
    }

    public function getResultType() {
        return "RecordingsQueryResult";
    }

    public function __construct(){
    }

    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

    private $_artistIds;

    public function getArtistIds(){
        return $this->_artistIds;
    }

    public function setArtistIds($artistIds) {
        $this->_artistIds = $artistIds;
    }

    private $_composers;

    public function getComposers(){
        return $this->_composers;
    }

    public function setComposers($composers) {
        $this->_composers = $composers;
    }

    private $_composerIds;

    public function getComposerIds(){
        return $this->_composerIds;
    }

    public function setComposerIds($composerIds) {
        $this->_composerIds = $composerIds;
    }

    private $_participants;

    public function getParticipants(){
        return $this->_participants;
    }

    public function setParticipants($participants) {
        $this->_participants = $participants;
    }

    private $_participantIds;

    public function getParticipantIds(){
        return $this->_participantIds;
    }

    public function setParticipantIds($participantIds) {
        $this->_participantIds = $participantIds;
    }

    private $_orderBy;

    public function getOrderBy(){
        return $this->_orderBy;
    }

    public function setOrderBy($orderBy) {
        $this->_orderBy = $orderBy;
    }

    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    private $_titleSearchType;

    public function getTitleSearchType(){
        return $this->_titleSearchType;
    }

    public function setTitleSearchType($titleSearchType) {
        $this->_titleSearchType = $titleSearchType;
    }

    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    private $_artistSearchType;

    public function getArtistSearchType(){
        return $this->_artistSearchType;
    }

    public function setArtistSearchType($artistSearchType) {
        $this->_artistSearchType = $artistSearchType;
    }

    private $_artistIdType;

    public function getArtistIdType(){
        return $this->_artistIdType;
    }

    public function setArtistIdType($artistIdType) {
        $this->_artistIdType = $artistIdType;
    }

    private $_composerSearchType;

    public function getComposerSearchType(){
        return $this->_composerSearchType;
    }

    public function setComposerSearchType($composerSearchType) {
        $this->_composerSearchType = $composerSearchType;
    }

    private $_composerIdType;

    public function getComposerIdType(){
        return $this->_composerIdType;
    }

    public function setComposerIdType($composerIdType) {
        $this->_composerIdType = $composerIdType;
    }

    private $_participantSearchType;

    public function getParticipantSearchType(){
        return $this->_participantSearchType;
    }

    public function setParticipantSearchType($participantSearchType) {
        $this->_participantSearchType = $participantSearchType;
    }

    private $_participantIdType;

    public function getParticipantIdType(){
        return $this->_participantIdType;
    }

    public function setParticipantIdType($participantIdType) {
        $this->_participantIdType = $participantIdType;
    }

    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private $_minSeconds;

    public function getMinSeconds(){
        return $this->_minSeconds;
    }

    public function setMinSeconds($minSeconds) {
        $this->_minSeconds = $minSeconds;
    }

    private $_maxSeconds;

    public function getMaxSeconds(){
        return $this->_maxSeconds;
    }

    public function setMaxSeconds($maxSeconds) {
        $this->_maxSeconds = $maxSeconds;
    }

    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    private $_dateMade;

    public function getDateMade(){
        return $this->_dateMade;
    }

    public function setDateMade($dateMade) {
        $this->_dateMade = $dateMade;
    }

    private $_pageNumber;

    public function getPageNumber(){
        return $this->_pageNumber;
    }

    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }

    private $_pageSize;

    public function getPageSize(){
        return $this->_pageSize;
    }

    public function setPageSize($pageSize) {
        $this->_pageSize = $pageSize;
    }

    private $_updatedSince;

    public function getUpdatedSince(){
        return $this->_updatedSince;
    }

    public function setUpdatedSince($updatedSince) {
        $this->_updatedSince = $updatedSince;
    }

    private function buildQueryString(){
        $queryStr = InternalUtilities::BASEURL;
        $queryStr .= "Recordings?";

        $queryStr .= RecordingsQuery::valueOrDefault("artists", $this->_artists, null);
        $queryStr .= RecordingsQuery::valueOrDefault("artistids", $this->_artistIds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("composers", $this->_composers, null);
        $queryStr .= RecordingsQuery::valueOrDefault("composerids", $this->_composerIds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("participants", $this->_participants, null);
        $queryStr .= RecordingsQuery::valueOrDefault("participantids", $this->_participantIds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("orderby", $this->_orderBy, null);
        $queryStr .= RecordingsQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= RecordingsQuery::valueOrDefault("titlesearchtype", $this->_titleSearchType, RecordingSearchType::FULL_NAME);
        $queryStr .= RecordingsQuery::valueOrDefault("idtype", $this->_idType, RecordingIdType::DECIBEL);
        $queryStr .= RecordingsQuery::valueOrDefault("artistsearchtype", $this->_artistSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= RecordingsQuery::valueOrDefault("artistidtype", $this->_artistIdType, ArtistIdType::DECIBEL);
        $queryStr .= RecordingsQuery::valueOrDefault("composersearchtype", $this->_composerSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= RecordingsQuery::valueOrDefault("composeridtype", $this->_composerIdType, ArtistIdType::DECIBEL);
        $queryStr .= RecordingsQuery::valueOrDefault("participantsearchtype", $this->_participantSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= RecordingsQuery::valueOrDefault("participantidtype", $this->_participantIdType, ArtistIdType::DECIBEL);
        $queryStr .= RecordingsQuery::valueOrDefault("title", $this->_title, null);
        $queryStr .= RecordingsQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= RecordingsQuery::valueOrDefault("language", $this->_language, null);
        $queryStr .= RecordingsQuery::valueOrDefault("minseconds", $this->_minSeconds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("maxseconds", $this->_maxSeconds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("islive", $this->_isLive, null);
        $queryStr .= RecordingsQuery::valueOrDefault("datemade", $this->_dateMade, null);
        $queryStr .= RecordingsQuery::valueOrDefault("pagenumber", $this->_pageNumber, null);
        $queryStr .= RecordingsQuery::valueOrDefault("pagesize", $this->_pageSize, null);
        $queryStr .= RecordingsQuery::valueOrDefault("updatedsince", $this->_updatedSince, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . $value . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= $item;
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class RecordingsByIdQuery implements iQuery {
    public function getQueryString() {
        return RecordingsByIdQuery::buildQueryString();
    }

    public function getResultType() {
        return "RecordingsByIdQueryResult";
    }

    public function __construct(){
    }

    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private function buildQueryString(){
        $queryStr = InternalUtilities::BASEURL;
        $queryStr .= "Recordings/";
        $queryStr .= "id?";

        $queryStr .= RecordingsByIdQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= RecordingsByIdQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= RecordingsByIdQuery::valueOrDefault("language", $this->_language, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . $value . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= $item;
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class ArtistsQuery implements iQuery {
    public function getQueryString() {
        return ArtistsQuery::buildQueryString();
    }

    public function getResultType() {
        return "ArtistsQueryResult";
    }

    public function __construct(){
    }

    private $_orderBy;

    public function getOrderBy(){
        return $this->_orderBy;
    }

    public function setOrderBy($orderBy) {
        $this->_orderBy = $orderBy;
    }

    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    private $_nameSearchType;

    public function getNameSearchType(){
        return $this->_nameSearchType;
    }

    public function setNameSearchType($nameSearchType) {
        $this->_nameSearchType = $nameSearchType;
    }

    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private $_dateBorn;

    public function getDateBorn(){
        return $this->_dateBorn;
    }

    public function setDateBorn($dateBorn) {
        $this->_dateBorn = $dateBorn;
    }

    private $_dateDied;

    public function getDateDied(){
        return $this->_dateDied;
    }

    public function setDateDied($dateDied) {
        $this->_dateDied = $dateDied;
    }

    private $_gender;

    public function getGender(){
        return $this->_gender;
    }

    public function setGender($gender) {
        $this->_gender = $gender;
    }

    private $_pageNumber;

    public function getPageNumber(){
        return $this->_pageNumber;
    }

    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }

    private $_pageSize;

    public function getPageSize(){
        return $this->_pageSize;
    }

    public function setPageSize($pageSize) {
        $this->_pageSize = $pageSize;
    }

    private $_updatedSince;

    public function getUpdatedSince(){
        return $this->_updatedSince;
    }

    public function setUpdatedSince($updatedSince) {
        $this->_updatedSince = $updatedSince;
    }

    private function buildQueryString(){
        $queryStr = InternalUtilities::BASEURL;
        $queryStr .= "Artists?";

        $queryStr .= ArtistsQuery::valueOrDefault("orderby", $this->_orderBy, null);
        $queryStr .= ArtistsQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= ArtistsQuery::valueOrDefault("namesearchtype", $this->_nameSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= ArtistsQuery::valueOrDefault("idtype", $this->_idType, ArtistIdType::DECIBEL);
        $queryStr .= ArtistsQuery::valueOrDefault("name", $this->_name, null);
        $queryStr .= ArtistsQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= ArtistsQuery::valueOrDefault("language", $this->_language, null);
        $queryStr .= ArtistsQuery::valueOrDefault("dateborn", $this->_dateBorn, null);
        $queryStr .= ArtistsQuery::valueOrDefault("datedied", $this->_dateDied, null);
        $queryStr .= ArtistsQuery::valueOrDefault("gender", $this->_gender, null);
        $queryStr .= ArtistsQuery::valueOrDefault("pagenumber", $this->_pageNumber, 1);
        $queryStr .= ArtistsQuery::valueOrDefault("pagesize", $this->_pageSize, null);
        $queryStr .= ArtistsQuery::valueOrDefault("updatedsince", $this->_updatedSince, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . $value . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= $item;
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class ArtistsByIdQuery implements iQuery {
    public function getQueryString() {
        return ArtistsByIdQuery::buildQueryString();
    }

    public function getResultType() {
        return "ArtistsByIdQueryResult";
    }

    public function __construct(){
    }

    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private function buildQueryString(){
        $queryStr = InternalUtilities::BASEURL;
        $queryStr .= "Artists/";
        $queryStr .= "id?";

        $queryStr .= ArtistsByIdQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= ArtistsByIdQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= ArtistsByIdQuery::valueOrDefault("language", $this->_language, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . $value . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= $item;
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

