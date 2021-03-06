<?php

namespace DecibelSDK;

require_once 'DecibelObjectModel.php';
require_once 'iQuery.php';

class AlbumsQuery implements iQuery {
    public function getQueryString() {
        return AlbumsQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_artists string[] */
    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

    /* @var $_artistIds string[] */
    private $_artistIds;

    public function getArtistIds(){
        return $this->_artistIds;
    }

    public function setArtistIds($artistIds) {
        $this->_artistIds = $artistIds;
    }

    /* @var $_participants string[] */
    private $_participants;

    public function getParticipants(){
        return $this->_participants;
    }

    public function setParticipants($participants) {
        $this->_participants = $participants;
    }

    /* @var $_participantIds string[] */
    private $_participantIds;

    public function getParticipantIds(){
        return $this->_participantIds;
    }

    public function setParticipantIds($participantIds) {
        $this->_participantIds = $participantIds;
    }

    /* @var $_recordings string[] */
    private $_recordings;

    public function getRecordings(){
        return $this->_recordings;
    }

    public function setRecordings($recordings) {
        $this->_recordings = $recordings;
    }

    /* @var $_recordingIds string[] */
    private $_recordingIds;

    public function getRecordingIds(){
        return $this->_recordingIds;
    }

    public function setRecordingIds($recordingIds) {
        $this->_recordingIds = $recordingIds;
    }

    /* @var $_genres string[] */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    /* @var $_orderBy OrderAlbumsBy[] */
    private $_orderBy;

    public function getOrderBy(){
        return $this->_orderBy;
    }

    public function setOrderBy($orderBy) {
        $this->_orderBy = $orderBy;
    }

    /* @var $_depth AlbumRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_titleSearchType AlbumSearchType */
    private $_titleSearchType;

    public function getTitleSearchType(){
        return $this->_titleSearchType;
    }

    public function setTitleSearchType($titleSearchType) {
        $this->_titleSearchType = $titleSearchType;
    }

    /* @var $_idType AlbumIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_artistSearchType ArtistSearchType */
    private $_artistSearchType;

    public function getArtistSearchType(){
        return $this->_artistSearchType;
    }

    public function setArtistSearchType($artistSearchType) {
        $this->_artistSearchType = $artistSearchType;
    }

    /* @var $_artistIdType ArtistIdType */
    private $_artistIdType;

    public function getArtistIdType(){
        return $this->_artistIdType;
    }

    public function setArtistIdType($artistIdType) {
        $this->_artistIdType = $artistIdType;
    }

    /* @var $_participantSearchType ArtistSearchType */
    private $_participantSearchType;

    public function getParticipantSearchType(){
        return $this->_participantSearchType;
    }

    public function setParticipantSearchType($participantSearchType) {
        $this->_participantSearchType = $participantSearchType;
    }

    /* @var $_participantIdType ArtistIdType */
    private $_participantIdType;

    public function getParticipantIdType(){
        return $this->_participantIdType;
    }

    public function setParticipantIdType($participantIdType) {
        $this->_participantIdType = $participantIdType;
    }

    /* @var $_recordingSearchType RecordingSearchType */
    private $_recordingSearchType;

    public function getRecordingSearchType(){
        return $this->_recordingSearchType;
    }

    public function setRecordingSearchType($recordingSearchType) {
        $this->_recordingSearchType = $recordingSearchType;
    }

    /* @var $_recordingIdType RecordingIdType */
    private $_recordingIdType;

    public function getRecordingIdType(){
        return $this->_recordingIdType;
    }

    public function setRecordingIdType($recordingIdType) {
        $this->_recordingIdType = $recordingIdType;
    }

    /* @var $_title string */
    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    /* @var $_dateReleased string */
    private $_dateReleased;

    public function getDateReleased(){
        return $this->_dateReleased;
    }

    public function setDateReleased($dateReleased) {
        $this->_dateReleased = $dateReleased;
    }

    /* @var $_isLive bool */
    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    /* @var $_pageNumber int */
    private $_pageNumber;

    public function getPageNumber(){
        return $this->_pageNumber;
    }

    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }

    /* @var $_pageSize int */
    private $_pageSize;

    public function getPageSize(){
        return $this->_pageSize;
    }

    public function setPageSize($pageSize) {
        $this->_pageSize = $pageSize;
    }

    /* @var $_updatedSince long */
    private $_updatedSince;

    public function getUpdatedSince(){
        return $this->_updatedSince;
    }

    public function setUpdatedSince($updatedSince) {
        $this->_updatedSince = $updatedSince;
    }

    private function buildQueryString(){
        $queryStr = "Albums?";

        $queryStr .= AlbumsQuery::valueOrDefault("artists", $this->_artists, null);
        $queryStr .= AlbumsQuery::valueOrDefault("artistIds", $this->_artistIds, null);
        $queryStr .= AlbumsQuery::valueOrDefault("participants", $this->_participants, null);
        $queryStr .= AlbumsQuery::valueOrDefault("participantIds", $this->_participantIds, null);
        $queryStr .= AlbumsQuery::valueOrDefault("recordings", $this->_recordings, null);
        $queryStr .= AlbumsQuery::valueOrDefault("recordingIds", $this->_recordingIds, null);
        $queryStr .= AlbumsQuery::valueOrDefault("genres", $this->_genres, null);
        $queryStr .= AlbumsQuery::valueOrDefault("orderBy", $this->_orderBy, null);
        $queryStr .= AlbumsQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= AlbumsQuery::valueOrDefault("titleSearchType", $this->_titleSearchType, AlbumSearchType::FULL_NAME);
        $queryStr .= AlbumsQuery::valueOrDefault("idType", $this->_idType, AlbumIdType::DECIBEL);
        $queryStr .= AlbumsQuery::valueOrDefault("artistSearchType", $this->_artistSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= AlbumsQuery::valueOrDefault("artistIdType", $this->_artistIdType, ArtistIdType::DECIBEL);
        $queryStr .= AlbumsQuery::valueOrDefault("participantSearchType", $this->_participantSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= AlbumsQuery::valueOrDefault("participantIdType", $this->_participantIdType, ArtistIdType::DECIBEL);
        $queryStr .= AlbumsQuery::valueOrDefault("recordingSearchType", $this->_recordingSearchType, RecordingSearchType::FULL_NAME);
        $queryStr .= AlbumsQuery::valueOrDefault("recordingIdType", $this->_recordingIdType, RecordingIdType::DECIBEL);
        $queryStr .= AlbumsQuery::valueOrDefault("title", $this->_title, null);
        $queryStr .= AlbumsQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= AlbumsQuery::valueOrDefault("language", $this->_language, null);
        $queryStr .= AlbumsQuery::valueOrDefault("dateReleased", $this->_dateReleased, null);
        $queryStr .= AlbumsQuery::valueOrDefault("isLive", $this->_isLive, null);
        $queryStr .= AlbumsQuery::valueOrDefault("pageNumber", $this->_pageNumber, null);
        $queryStr .= AlbumsQuery::valueOrDefault("pageSize", $this->_pageSize, null);
        $queryStr .= AlbumsQuery::valueOrDefault("updatedSince", $this->_updatedSince, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class AlbumsByIdQuery implements iQuery {
    public function getQueryString() {
        return AlbumsByIdQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_depth AlbumRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private function buildQueryString(){
        $queryStr = "Albums/";
        $queryStr .= $this->_id . "?";

        $queryStr .= AlbumsByIdQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= AlbumsByIdQuery::valueOrDefault("language", $this->_language, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class LabelsByIdQuery implements iQuery {
    public function getQueryString() {
        return LabelsByIdQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_depth LabelRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private function buildQueryString(){
        $queryStr = "Labels/";
        $queryStr .= $this->_id . "?";

        $queryStr .= LabelsByIdQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= LabelsByIdQuery::valueOrDefault("language", $this->_language, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class LabelsQuery implements iQuery {
    public function getQueryString() {
        return LabelsQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_locationIds string[] */
    private $_locationIds;

    public function getLocationIds(){
        return $this->_locationIds;
    }

    public function setLocationIds($locationIds) {
        $this->_locationIds = $locationIds;
    }

    /* @var $_orderBy OrderLabelsBy[] */
    private $_orderBy;

    public function getOrderBy(){
        return $this->_orderBy;
    }

    public function setOrderBy($orderBy) {
        $this->_orderBy = $orderBy;
    }

    /* @var $_depth LabelRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_idType LabelIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    /* @var $_pageNumber int */
    private $_pageNumber;

    public function getPageNumber(){
        return $this->_pageNumber;
    }

    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }

    /* @var $_pageSize int */
    private $_pageSize;

    public function getPageSize(){
        return $this->_pageSize;
    }

    public function setPageSize($pageSize) {
        $this->_pageSize = $pageSize;
    }

    /* @var $_updatedSince long */
    private $_updatedSince;

    public function getUpdatedSince(){
        return $this->_updatedSince;
    }

    public function setUpdatedSince($updatedSince) {
        $this->_updatedSince = $updatedSince;
    }

    private function buildQueryString(){
        $queryStr = "Labels?";

        $queryStr .= LabelsQuery::valueOrDefault("locationIds", $this->_locationIds, null);
        $queryStr .= LabelsQuery::valueOrDefault("orderBy", $this->_orderBy, null);
        $queryStr .= LabelsQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= LabelsQuery::valueOrDefault("idType", $this->_idType, LabelIdType::DECIBEL);
        $queryStr .= LabelsQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= LabelsQuery::valueOrDefault("language", $this->_language, null);
        $queryStr .= LabelsQuery::valueOrDefault("pageNumber", $this->_pageNumber, null);
        $queryStr .= LabelsQuery::valueOrDefault("pageSize", $this->_pageSize, null);
        $queryStr .= LabelsQuery::valueOrDefault("updatedSince", $this->_updatedSince, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class LocationsByIdQuery implements iQuery {
    public function getQueryString() {
        return LocationsByIdQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_depth LocationRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private function buildQueryString(){
        $queryStr = "Locations/";
        $queryStr .= $this->_id . "?";

        $queryStr .= LocationsByIdQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= LocationsByIdQuery::valueOrDefault("language", $this->_language, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class LocationsQuery implements iQuery {
    public function getQueryString() {
        return LocationsQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_locationIds string[] */
    private $_locationIds;

    public function getLocationIds(){
        return $this->_locationIds;
    }

    public function setLocationIds($locationIds) {
        $this->_locationIds = $locationIds;
    }

    /* @var $_orderBy OrderLocationsBy[] */
    private $_orderBy;

    public function getOrderBy(){
        return $this->_orderBy;
    }

    public function setOrderBy($orderBy) {
        $this->_orderBy = $orderBy;
    }

    /* @var $_depth LocationRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_idType LocationIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    /* @var $_pageNumber int */
    private $_pageNumber;

    public function getPageNumber(){
        return $this->_pageNumber;
    }

    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }

    /* @var $_pageSize int */
    private $_pageSize;

    public function getPageSize(){
        return $this->_pageSize;
    }

    public function setPageSize($pageSize) {
        $this->_pageSize = $pageSize;
    }

    /* @var $_updatedSince long */
    private $_updatedSince;

    public function getUpdatedSince(){
        return $this->_updatedSince;
    }

    public function setUpdatedSince($updatedSince) {
        $this->_updatedSince = $updatedSince;
    }

    private function buildQueryString(){
        $queryStr = "Locations?";

        $queryStr .= LocationsQuery::valueOrDefault("locationIds", $this->_locationIds, null);
        $queryStr .= LocationsQuery::valueOrDefault("orderBy", $this->_orderBy, null);
        $queryStr .= LocationsQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= LocationsQuery::valueOrDefault("idType", $this->_idType, LocationIdType::DECIBEL);
        $queryStr .= LocationsQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= LocationsQuery::valueOrDefault("language", $this->_language, null);
        $queryStr .= LocationsQuery::valueOrDefault("pageNumber", $this->_pageNumber, null);
        $queryStr .= LocationsQuery::valueOrDefault("pageSize", $this->_pageSize, null);
        $queryStr .= LocationsQuery::valueOrDefault("updatedSince", $this->_updatedSince, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class RecordingsQuery implements iQuery {
    public function getQueryString() {
        return RecordingsQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_artists string[] */
    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

    /* @var $_artistIds string[] */
    private $_artistIds;

    public function getArtistIds(){
        return $this->_artistIds;
    }

    public function setArtistIds($artistIds) {
        $this->_artistIds = $artistIds;
    }

    /* @var $_composers string[] */
    private $_composers;

    public function getComposers(){
        return $this->_composers;
    }

    public function setComposers($composers) {
        $this->_composers = $composers;
    }

    /* @var $_composerIds string[] */
    private $_composerIds;

    public function getComposerIds(){
        return $this->_composerIds;
    }

    public function setComposerIds($composerIds) {
        $this->_composerIds = $composerIds;
    }

    /* @var $_participants string[] */
    private $_participants;

    public function getParticipants(){
        return $this->_participants;
    }

    public function setParticipants($participants) {
        $this->_participants = $participants;
    }

    /* @var $_participantIds string[] */
    private $_participantIds;

    public function getParticipantIds(){
        return $this->_participantIds;
    }

    public function setParticipantIds($participantIds) {
        $this->_participantIds = $participantIds;
    }

    /* @var $_genres string[] */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    /* @var $_orderBy OrderRecordingsBy[] */
    private $_orderBy;

    public function getOrderBy(){
        return $this->_orderBy;
    }

    public function setOrderBy($orderBy) {
        $this->_orderBy = $orderBy;
    }

    /* @var $_depth RecordingRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_titleSearchType RecordingSearchType */
    private $_titleSearchType;

    public function getTitleSearchType(){
        return $this->_titleSearchType;
    }

    public function setTitleSearchType($titleSearchType) {
        $this->_titleSearchType = $titleSearchType;
    }

    /* @var $_idType RecordingIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_artistSearchType ArtistSearchType */
    private $_artistSearchType;

    public function getArtistSearchType(){
        return $this->_artistSearchType;
    }

    public function setArtistSearchType($artistSearchType) {
        $this->_artistSearchType = $artistSearchType;
    }

    /* @var $_artistIdType ArtistIdType */
    private $_artistIdType;

    public function getArtistIdType(){
        return $this->_artistIdType;
    }

    public function setArtistIdType($artistIdType) {
        $this->_artistIdType = $artistIdType;
    }

    /* @var $_composerSearchType ArtistSearchType */
    private $_composerSearchType;

    public function getComposerSearchType(){
        return $this->_composerSearchType;
    }

    public function setComposerSearchType($composerSearchType) {
        $this->_composerSearchType = $composerSearchType;
    }

    /* @var $_composerIdType ArtistIdType */
    private $_composerIdType;

    public function getComposerIdType(){
        return $this->_composerIdType;
    }

    public function setComposerIdType($composerIdType) {
        $this->_composerIdType = $composerIdType;
    }

    /* @var $_participantSearchType ArtistSearchType */
    private $_participantSearchType;

    public function getParticipantSearchType(){
        return $this->_participantSearchType;
    }

    public function setParticipantSearchType($participantSearchType) {
        $this->_participantSearchType = $participantSearchType;
    }

    /* @var $_participantIdType ArtistIdType */
    private $_participantIdType;

    public function getParticipantIdType(){
        return $this->_participantIdType;
    }

    public function setParticipantIdType($participantIdType) {
        $this->_participantIdType = $participantIdType;
    }

    /* @var $_title string */
    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    /* @var $_minSeconds double */
    private $_minSeconds;

    public function getMinSeconds(){
        return $this->_minSeconds;
    }

    public function setMinSeconds($minSeconds) {
        $this->_minSeconds = $minSeconds;
    }

    /* @var $_maxSeconds double */
    private $_maxSeconds;

    public function getMaxSeconds(){
        return $this->_maxSeconds;
    }

    public function setMaxSeconds($maxSeconds) {
        $this->_maxSeconds = $maxSeconds;
    }

    /* @var $_isLive bool */
    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    /* @var $_dateMade string */
    private $_dateMade;

    public function getDateMade(){
        return $this->_dateMade;
    }

    public function setDateMade($dateMade) {
        $this->_dateMade = $dateMade;
    }

    /* @var $_placeMadeName string */
    private $_placeMadeName;

    public function getPlaceMadeName(){
        return $this->_placeMadeName;
    }

    public function setPlaceMadeName($placeMadeName) {
        $this->_placeMadeName = $placeMadeName;
    }

    /* @var $_pageNumber int */
    private $_pageNumber;

    public function getPageNumber(){
        return $this->_pageNumber;
    }

    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }

    /* @var $_pageSize int */
    private $_pageSize;

    public function getPageSize(){
        return $this->_pageSize;
    }

    public function setPageSize($pageSize) {
        $this->_pageSize = $pageSize;
    }

    /* @var $_updatedSince long */
    private $_updatedSince;

    public function getUpdatedSince(){
        return $this->_updatedSince;
    }

    public function setUpdatedSince($updatedSince) {
        $this->_updatedSince = $updatedSince;
    }

    private function buildQueryString(){
        $queryStr = "Recordings?";

        $queryStr .= RecordingsQuery::valueOrDefault("artists", $this->_artists, null);
        $queryStr .= RecordingsQuery::valueOrDefault("artistIds", $this->_artistIds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("composers", $this->_composers, null);
        $queryStr .= RecordingsQuery::valueOrDefault("composerIds", $this->_composerIds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("participants", $this->_participants, null);
        $queryStr .= RecordingsQuery::valueOrDefault("participantIds", $this->_participantIds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("genres", $this->_genres, null);
        $queryStr .= RecordingsQuery::valueOrDefault("orderBy", $this->_orderBy, null);
        $queryStr .= RecordingsQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= RecordingsQuery::valueOrDefault("titleSearchType", $this->_titleSearchType, RecordingSearchType::FULL_NAME);
        $queryStr .= RecordingsQuery::valueOrDefault("idType", $this->_idType, RecordingIdType::DECIBEL);
        $queryStr .= RecordingsQuery::valueOrDefault("artistSearchType", $this->_artistSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= RecordingsQuery::valueOrDefault("artistIdType", $this->_artistIdType, ArtistIdType::DECIBEL);
        $queryStr .= RecordingsQuery::valueOrDefault("composerSearchType", $this->_composerSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= RecordingsQuery::valueOrDefault("composerIdType", $this->_composerIdType, ArtistIdType::DECIBEL);
        $queryStr .= RecordingsQuery::valueOrDefault("participantSearchType", $this->_participantSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= RecordingsQuery::valueOrDefault("participantIdType", $this->_participantIdType, ArtistIdType::DECIBEL);
        $queryStr .= RecordingsQuery::valueOrDefault("title", $this->_title, null);
        $queryStr .= RecordingsQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= RecordingsQuery::valueOrDefault("language", $this->_language, null);
        $queryStr .= RecordingsQuery::valueOrDefault("minSeconds", $this->_minSeconds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("maxSeconds", $this->_maxSeconds, null);
        $queryStr .= RecordingsQuery::valueOrDefault("isLive", $this->_isLive, null);
        $queryStr .= RecordingsQuery::valueOrDefault("dateMade", $this->_dateMade, null);
        $queryStr .= RecordingsQuery::valueOrDefault("placeMadeName", $this->_placeMadeName, null);
        $queryStr .= RecordingsQuery::valueOrDefault("pageNumber", $this->_pageNumber, null);
        $queryStr .= RecordingsQuery::valueOrDefault("pageSize", $this->_pageSize, null);
        $queryStr .= RecordingsQuery::valueOrDefault("updatedSince", $this->_updatedSince, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class RecordingsByIdQuery implements iQuery {
    public function getQueryString() {
        return RecordingsByIdQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_depth RecordingRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private function buildQueryString(){
        $queryStr = "Recordings/";
        $queryStr .= $this->_id . "?";

        $queryStr .= RecordingsByIdQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= RecordingsByIdQuery::valueOrDefault("language", $this->_language, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class DiscTagsQuery implements iQuery {
    public function getQueryString() {
        return DiscTagsQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_taggedItemId string */
    private $_taggedItemId;

    public function getTaggedItemId(){
        return $this->_taggedItemId;
    }

    public function setTaggedItemId($taggedItemId) {
        $this->_taggedItemId = $taggedItemId;
    }

    /* @var $_idType DiscTagIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private function buildQueryString(){
        $queryStr = "DiscTags?";

        $queryStr .= DiscTagsQuery::valueOrDefault("taggedItemId", $this->_taggedItemId, null);
        $queryStr .= DiscTagsQuery::valueOrDefault("idType", $this->_idType, DiscTagIdType::DECIBEL_ALBUM);
        $queryStr .= DiscTagsQuery::valueOrDefault("language", $this->_language, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class ArtistsQuery implements iQuery {
    public function getQueryString() {
        return ArtistsQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_orderBy OrderArtistsBy[] */
    private $_orderBy;

    public function getOrderBy(){
        return $this->_orderBy;
    }

    public function setOrderBy($orderBy) {
        $this->_orderBy = $orderBy;
    }

    /* @var $_depth ArtistRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_genres string[] */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    /* @var $_nameSearchType ArtistSearchType */
    private $_nameSearchType;

    public function getNameSearchType(){
        return $this->_nameSearchType;
    }

    public function setNameSearchType($nameSearchType) {
        $this->_nameSearchType = $nameSearchType;
    }

    /* @var $_idType ArtistIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_name string */
    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    /* @var $_dateBorn string */
    private $_dateBorn;

    public function getDateBorn(){
        return $this->_dateBorn;
    }

    public function setDateBorn($dateBorn) {
        $this->_dateBorn = $dateBorn;
    }

    /* @var $_dateDied string */
    private $_dateDied;

    public function getDateDied(){
        return $this->_dateDied;
    }

    public function setDateDied($dateDied) {
        $this->_dateDied = $dateDied;
    }

    /* @var $_placeBornName string */
    private $_placeBornName;

    public function getPlaceBornName(){
        return $this->_placeBornName;
    }

    public function setPlaceBornName($placeBornName) {
        $this->_placeBornName = $placeBornName;
    }

    /* @var $_placeDiedName string */
    private $_placeDiedName;

    public function getPlaceDiedName(){
        return $this->_placeDiedName;
    }

    public function setPlaceDiedName($placeDiedName) {
        $this->_placeDiedName = $placeDiedName;
    }

    /* @var $_gender Gender */
    private $_gender;

    public function getGender(){
        return $this->_gender;
    }

    public function setGender($gender) {
        $this->_gender = $gender;
    }

    /* @var $_pageNumber int */
    private $_pageNumber;

    public function getPageNumber(){
        return $this->_pageNumber;
    }

    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }

    /* @var $_pageSize int */
    private $_pageSize;

    public function getPageSize(){
        return $this->_pageSize;
    }

    public function setPageSize($pageSize) {
        $this->_pageSize = $pageSize;
    }

    /* @var $_updatedSince long */
    private $_updatedSince;

    public function getUpdatedSince(){
        return $this->_updatedSince;
    }

    public function setUpdatedSince($updatedSince) {
        $this->_updatedSince = $updatedSince;
    }

    private function buildQueryString(){
        $queryStr = "Artists?";

        $queryStr .= ArtistsQuery::valueOrDefault("orderBy", $this->_orderBy, null);
        $queryStr .= ArtistsQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= ArtistsQuery::valueOrDefault("genres", $this->_genres, null);
        $queryStr .= ArtistsQuery::valueOrDefault("nameSearchType", $this->_nameSearchType, ArtistSearchType::FULL_NAME);
        $queryStr .= ArtistsQuery::valueOrDefault("idType", $this->_idType, ArtistIdType::DECIBEL);
        $queryStr .= ArtistsQuery::valueOrDefault("name", $this->_name, null);
        $queryStr .= ArtistsQuery::valueOrDefault("id", $this->_id, null);
        $queryStr .= ArtistsQuery::valueOrDefault("language", $this->_language, null);
        $queryStr .= ArtistsQuery::valueOrDefault("dateBorn", $this->_dateBorn, null);
        $queryStr .= ArtistsQuery::valueOrDefault("dateDied", $this->_dateDied, null);
        $queryStr .= ArtistsQuery::valueOrDefault("placeBornName", $this->_placeBornName, null);
        $queryStr .= ArtistsQuery::valueOrDefault("placeDiedName", $this->_placeDiedName, null);
        $queryStr .= ArtistsQuery::valueOrDefault("gender", $this->_gender, null);
        $queryStr .= ArtistsQuery::valueOrDefault("pageNumber", $this->_pageNumber, 1);
        $queryStr .= ArtistsQuery::valueOrDefault("pageSize", $this->_pageSize, null);
        $queryStr .= ArtistsQuery::valueOrDefault("updatedSince", $this->_updatedSince, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

class ArtistsByIdQuery implements iQuery {
    public function getQueryString() {
        return ArtistsByIdQuery::buildQueryString();
    }

    public function __construct(){
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_depth ArtistRetrievalDepth[] */
    private $_depth;

    public function getDepth(){
        return $this->_depth;
    }

    public function setDepth($depth) {
        $this->_depth = $depth;
    }

    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    private function buildQueryString(){
        $queryStr = "Artists/";
        $queryStr .= $this->_id . "?";

        $queryStr .= ArtistsByIdQuery::valueOrDefault("depth", $this->_depth, null);
        $queryStr .= ArtistsByIdQuery::valueOrDefault("language", $this->_language, null);

        return rtrim($queryStr, "&?");
    }

    private static function valueOrDefault($paramName, $value, $defaultValue){
        if($value == null || $value == $defaultValue) return "";
        if(!is_array($value))
            return $paramName . "=" . (is_bool($value) ? (($value == 1) ? "True" : "False") : $value) . "&";

        $queryStr = $paramName . "=";
        foreach($value as $item){
            $queryStr .= (is_bool($item) ? (($item == 1) ? "True" : "False") : $item);
            $queryStr .= ",";
        }

        return rtrim($queryStr, ',') . "&";
    }
}

