<?php

namespace DecibelSDK;

require_once 'Enum.php';

/*
 * 
    Specifies additional <see cref="T:DecibelWebService.Album" /> information to return.
    
*/
abstract class AlbumRetrievalDepth extends Enum{
    const RECORDINGS = 'Recordings';

    const IDENTIFIERS = 'Identifiers';

    const WORKS = 'Works';

    const PARTICIPATIONS = 'Participations';

    const GENRES = 'Genres';

    const ARTIST_DETAILS = 'ArtistDetails';

    const RELEASES = 'Releases';

    const RECORDING_ARTIST_DETAILS = 'RecordingArtistDetails';

}

/*
 * 
    Specifies which <see cref="T:DecibelWebService.Album" /> titles match a particular search term.
    
*/
abstract class AlbumSearchType extends Enum{
    const FULL_NAME = 'FullName';

    const PARTIAL_NAME = 'PartialName';

}

/*
 * 
    Specifies which <see cref="T:DecibelWebService.Album" /> titles match a particular search term.
    
*/
abstract class AlbumSearchIdType extends Enum{
    const FULL_NAME = 'FullName';

    const PARTIAL_NAME = 'PartialName';

}

/*
 * 
    The database in which this identifier identifies <see cref="T:DecibelWebService.Album" />s.
    
*/
abstract class AlbumIdType extends Enum{
    const DECIBEL = 'Decibel';

    const FREE_DB = 'FreeDb';

    const EAN = 'EAN';

    const CATALOG_NUMBER = 'CatalogNumber';

    const SPOTIFY = 'Spotify';

    const DISCOGS_MASTER = 'DiscogsMaster';

    const DISCOGS_RELEASE = 'DiscogsRelease';

    const MUSIC_BRAINZ = 'MusicBrainz';

}

/*
 * 
    The capacity in which an <see cref="T:DecibelWebService.Artist" /> appears on an album or recording.
    
*/
abstract class AppearanceType extends Enum{
    const MAIN = 'Main';

    const FEATURED = 'Featured';

    const APPEARED = 'Appeared';

}

/*
 * 
    Describes how this <see cref="T:DecibelWebService.Artist" /> is related to the encompassing artist.
    
*/
abstract class ArtistRelationshipType extends Enum{
    const INFLUENCED = 'Influenced';

    const INFLUENCED_BY = 'InfluencedBy';

    const TAUGHT = 'Taught';

    const TAUGHT_BY = 'TaughtBy';

    const MARRIED_TO = 'MarriedTo';

    const ROMANTICALLY_INVOLVED_WITH = 'RomanticallyInvolvedWith';

    const PARENT = 'Parent';

    const CHILD = 'Child';

    const SIBLING = 'Sibling';

    const WORKED_WITH = 'WorkedWith';

}

/*
 * 
    Specifies additional <see cref="T:DecibelWebService.Artist" /> information to return.
    
*/
abstract class ArtistRetrievalDepth extends Enum{
    const IDENTIFIERS = 'Identifiers';

    const BIOGRAPHY_SUMMARY = 'BiographySummary';

    const BIOGRAPHY = 'Biography';

    const MEMBERS = 'Members';

    const GROUPS = 'Groups';

    const DATES = 'Dates';

    const GENRES = 'Genres';

    const URLS = 'Urls';

    const RELATED_ARTISTS = 'RelatedArtists';

}

/*
 * 
    Specifies which <see cref="T:DecibelWebService.Artist" /> names match a particular search term.
    
*/
abstract class ArtistSearchType extends Enum{
    const FULL_NAME = 'FullName';

    const PARTIAL_NAME = 'PartialName';

}

/*
 * 
    Specifies which <see cref="T:DecibelWebService.Artist" /> names match a particular search term.
    
*/
abstract class ArtistSearchIdType extends Enum{
    const FULL_NAME = 'FullName';

    const PARTIAL_NAME = 'PartialName';

}

/*
 * 
    The database in which this identifier identifies <see cref="T:DecibelWebService.Artist" />s.
    
*/
abstract class ArtistIdType extends Enum{
    const DECIBEL = 'Decibel';

    const DISCOGS_ARTIST = 'DiscogsArtist';

    const SPOTIFY = 'Spotify';

    const MUSIC_BRAINZ = 'MusicBrainz';

}

/*
 * 
    Participant object type.
    
*/
abstract class ArtistType extends Enum{
    const PERSON = 'Person';

    const ACT = 'Act';

}

/*
 * 
    How the encompassing <see cref="T:DecibelWebService.Recording" /> was derived from this recording.
    
*/
abstract class ConstituentRecordingType extends Enum{
    const REMASTER = 'Remaster';

    const REMIX = 'Remix';

    const SAMPLING = 'Sampling';

    const OVERDUB = 'Overdub';

    const SECTION = 'Section';

    const REVISION = 'Revision';

    const BASED_ON = 'BasedOn';

}

/*
 * 
    A general indication of the structure of an <see cref="F:DecibelWebService.ContentFormat.Album" />.
    
*/
abstract class ContentFormat extends Enum{
    const SINGLE = 'Single';

    const MAXI_SINGLE = 'MaxiSingle';

    const EP = 'Ep';

    const MINI_ALBUM = 'MiniAlbum';

    const ALBUM = 'Album';

    const SINGLE_ARTIST_COMPILATION = 'SingleArtistCompilation';

    const BOX_SET = 'BoxSet';

    const SAMPLER = 'Sampler';

    const VARIOUS_ARTIST_COMPILATION = 'VariousArtistCompilation';

    const SOUNDTRACK = 'Soundtrack';

    const CAST_ALBUM = 'CastAlbum';

    const CONCERT_RECORDING = 'ConcertRecording';

    const SPOKEN_WORD = 'SpokenWord';

    const INTERVIEW = 'Interview';

    const AUDIOBOOK = 'Audiobook';

    const REMIX = 'Remix';

    const DJ_MIX = 'DjMix';

}

/*
 * 
    The database in which this identifies <see cref="T:DecibelWebService.DiscTag" />s.
    
*/
abstract class DiscTagIdType extends Enum{
    const DECIBEL_ALBUM = 'DecibelAlbum';

    const DECIBEL_MEDIUM = 'DecibelMedium';

    const SPOTIFY = 'Spotify';

    const FREE_DB = 'FreeDb';

}

/*
 * 
    The gender that a person identifies as.
    
*/
abstract class Gender extends Enum{
    const UNKNOWN = 'Unknown';

    const MALE = 'Male';

    const FEMALE = 'Female';

    const OTHER = 'Other';

}

/*
 * 
    Size of image
    
*/
abstract class ImageSize extends Enum{
    const THUMBNAIL = 'Thumbnail';

    const STANDARD = 'Standard';

    const FULL = 'Full';

}

/*
 * 
    Specifies the langauge in which the results should be returned.
    
*/
abstract class Language extends Enum{
    const ENGLISH = 'English';

    const JAPANESE = 'Japanese';

}

/*
 * 
    Specifies how albums returned by the API should be sorted.
    
*/
abstract class OrderAlbumsBy extends Enum{
    const DECIBEL_EMINENCE = 'DecibelEminence';

    const RELEASE_DATE_OLDEST = 'ReleaseDateOldest';

    const RELEASE_DATE_NEWEST = 'ReleaseDateNewest';

}

/*
 * 
    Specifies how artists returned by the API should be sorted.
    
*/
abstract class OrderArtistsBy extends Enum{
    const DECIBEL_EMINENCE = 'DecibelEminence';

}

/*
 * 
    Specifies how albums returned by the API should be sorted.
    
*/
abstract class OrderRecordingsBy extends Enum{
    const DECIBEL_EMINENCE = 'DecibelEminence';

    const RELEASE_DATE_OLDEST = 'ReleaseDateOldest';

    const RELEASE_DATE_NEWEST = 'ReleaseDateNewest';

}

/*
 * 
    Degree of confidence of a particular piece of information.
    
*/
abstract class Probability extends Enum{
    const CERTAINLY = 'Certainly';

    const IMPROBABLY = 'Improbably';

    const POSSIBLY = 'Possibly';

    const PROBABLY = 'Probably';

    const SPURIOUSLY = 'Spuriously';

}

/*
 * 
    Specifies additional <see cref="T:DecibelWebService.Recording" /> information to return.
    
*/
abstract class RecordingRetrievalDepth extends Enum{
    const PARTICIPATIONS = 'Participations';

    const ARTIST_DETAILS = 'ArtistDetails';

    const WORKS = 'Works';

    const GENRES = 'Genres';

    const IDENTIFIERS = 'Identifiers';

    const SESSION_INFO = 'SessionInfo';

    const CONSTITUENT_RECORDINGS = 'ConstituentRecordings';

}

/*
 * 
    Specifies which <see cref="T:DecibelWebService.Recording" /> titles match a particular search term.
    
*/
abstract class RecordingSearchType extends Enum{
    const FULL_NAME = 'FullName';

    const PARTIAL_NAME = 'PartialName';

}

/*
 * 
    Specifies which <see cref="T:DecibelWebService.Recording" /> titles match a particular search term.
    
*/
abstract class RecordingSearchIdType extends Enum{
    const FULL_NAME = 'FullName';

    const PARTIAL_NAME = 'PartialName';

}

/*
 * 
    The database in which this identifier identifies <see cref="T:DecibelWebService.Recording" />s.
    
*/
abstract class RecordingIdType extends Enum{
    const DECIBEL = 'Decibel';

    const SPOTIFY = 'Spotify';

    const ISRC = 'ISRC';

    const SOUND_PRINT = 'SoundPrint';

    const MUSIC_BRAINZ = 'MusicBrainz';

}

/*
 * 
    The database in which this identifier identifies <see cref="T:DecibelWebService.Album" />s.
    
*/
abstract class ReleaseIdType extends Enum{
    const DECIBEL = 'Decibel';

    const FREE_DB = 'FreeDb';

    const EAN = 'EAN';

    const CATALOG_NUMBER = 'CatalogNumber';

    const DISCOGS_RELEASE = 'DiscogsRelease';

    const MUSIC_BRAINZ = 'MusicBrainz';

}

/*
 * 
    The name of the website.
    
*/
abstract class WebsiteName extends Enum{
    const WIKIPEDIA = 'Wikipedia';

    const YOU_TUBE = 'YouTube';

    const TWITTER = 'Twitter';

    const FACEBOOK = 'Facebook';

    const MY_SPACE = 'MySpace';

    const ALL_MUSIC = 'AllMusic';

    const BBC = 'BBC';

    const PURE_VOLUME = 'PureVolume';

    const SOUND_CLOUD = 'SoundCloud';

    const BANDCAMP = 'Bandcamp';

}

/*
 * 
    Specifies additional <see cref="T:DecibelWebService.Work" /> information to return.
    
*/
abstract class WorkRetrievalDepth extends Enum{
    const PARTICIPATIONS = 'Participations';

    const ARTIST_DETAILS = 'ArtistDetails';

}

/*
 * 
    Specifies the type of search to perform.
    
*/
abstract class WorkSearchType extends Enum{
    const FULL_STRING = 'FullString';

    const PARTIAL_STRING = 'PartialString';

}

/*
 * 
    Specifies the type of search to perform.
    
*/
abstract class WorkSearchIdType extends Enum{
    const FULL_STRING = 'FullString';

    const PARTIAL_STRING = 'PartialString';

}

/*
 * 
    Specifies the type of search to perform.
    
*/
abstract class WorkIdType extends Enum{
    const DECIBEL_ID = 'DecibelId';

}

/*
 * 
    Base class for result entities.
    
*/
class DecibelEntity{
}

/*
 * 
    How a particular artist contributed to an album, recording, or work.
    
*/
class Participation{
    private $_activityLiteral;

    public function getActivityLiteral(){
        return $this->_activityLiteral;
    }

    public function setActivityLiteral($activityLiteral) {
        $this->_activityLiteral = $activityLiteral;
    }

    private $_activities;

    public function getActivities(){
        return $this->_activities;
    }

    public function setActivities($activities) {
        $this->_activities = $activities;
    }

    private $_isFeatured;

    public function getIsFeatured(){
        return $this->_isFeatured;
    }

    public function setIsFeatured($isFeatured) {
        $this->_isFeatured = $isFeatured;
    }

    private $_artistsLiteral;

    public function getArtistsLiteral(){
        return $this->_artistsLiteral;
    }

    public function setArtistsLiteral($artistsLiteral) {
        $this->_artistsLiteral = $artistsLiteral;
    }

    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

}

/*
 * 
    Base class for *QueryObject items
    
*/
class QueryObject{
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    public function __construct($obj){
        $this->language = $obj->Language;
    }
}

class ByIdQueryResult{
    private $_result;

    public function getResult(){
        return $this->_result;
    }

    public function setResult($result) {
        $this->_result = $result;
    }

}

class BaseQueryResult{
    private $_results;

    public function getResults(){
        return $this->_results;
    }

    public function setResults($results) {
        $this->_results = $results;
    }

    private $_count;

    public function getCount(){
        return $this->_count;
    }

    public function setCount($count) {
        $this->_count = $count;
    }

}

class ErrorResult{
    private $_error;

    public function getError(){
        return $this->_error;
    }

    public function setError($error) {
        $this->_error = $error;
    }

}

/*
 * 
    Something that has gone wrong.
    
*/
class Error{
    private $_errorMessage;

    public function getErrorMessage(){
        return $this->_errorMessage;
    }

    public function setErrorMessage($errorMessage) {
        $this->_errorMessage = $errorMessage;
    }

    private $_errorCode;

    public function getErrorCode(){
        return $this->_errorCode;
    }

    public function setErrorCode($errorCode) {
        $this->_errorCode = $errorCode;
    }

}

/*
 * 
    A role or job related to making music.
    
*/
class Activity extends DecibelEntity{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    private $_probability;

    public function getProbability(){
        return $this->_probability;
    }

    public function setProbability($probability) {
        $this->_probability = $probability;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->name = $obj->Name;
        $this->probability = $obj->Probability;
    }
}

class AlbumsByIdQueryObject extends QueryObject{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->retrievalDepth = $obj->RetrievalDepth;
    }
}

class QueryResult extends BaseQueryResult{
    private $_totalCount;

    public function getTotalCount(){
        return $this->_totalCount;
    }

    public function setTotalCount($totalCount) {
        $this->_totalCount = $totalCount;
    }

    private $_pageCount;

    public function getPageCount(){
        return $this->_pageCount;
    }

    public function setPageCount($pageCount) {
        $this->_pageCount = $pageCount;
    }

    private $_pageSize;

    public function getPageSize(){
        return $this->_pageSize;
    }

    public function setPageSize($pageSize) {
        $this->_pageSize = $pageSize;
    }

}

/*
 * 
    The <see cref="T:DecibelWebService.Album" />s returned by the query,
    as well as result count and page information.
    
*/
class AlbumsQueryResult extends QueryResult{
    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->resultSet = [];
        foreach($obj->ResultSet as $item){
            array_push($this->resultSet, new Album($item));
        }
        $this->resultCount = $obj->ResultCount;
        $this->pageCount = $obj->PageCount;
        $this->totalResultCount = $obj->TotalResultCount;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Album" /> returned by the query.
    
*/
class AlbumsByIdQueryResult extends ByIdQueryResult{
    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->result = new Album($obj->Result);
    }
}

/*
 * 
    A collection of sound recordings.
    
*/
class Album extends DecibelEntity{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    private $_artistsLiteral;

    public function getArtistsLiteral(){
        return $this->_artistsLiteral;
    }

    public function setArtistsLiteral($artistsLiteral) {
        $this->_artistsLiteral = $artistsLiteral;
    }

    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

    private $_originalReleaseDate;

    public function getOriginalReleaseDate(){
        return $this->_originalReleaseDate;
    }

    public function setOriginalReleaseDate($originalReleaseDate) {
        $this->_originalReleaseDate = $originalReleaseDate;
    }

    private $_format;

    public function getFormat(){
        return $this->_format;
    }

    public function setFormat($format) {
        $this->_format = $format;
    }

    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    private $_isUnofficial;

    public function getIsUnofficial(){
        return $this->_isUnofficial;
    }

    public function setIsUnofficial($isUnofficial) {
        $this->_isUnofficial = $isUnofficial;
    }

    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    private $_imageId;

    public function getImageId(){
        return $this->_imageId;
    }

    public function setImageId($imageId) {
        $this->_imageId = $imageId;
    }

    private $_participations;

    public function getParticipations(){
        return $this->_participations;
    }

    public function setParticipations($participations) {
        $this->_participations = $participations;
    }

    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    private $_recordings;

    public function getRecordings(){
        return $this->_recordings;
    }

    public function setRecordings($recordings) {
        $this->_recordings = $recordings;
    }

    private $_releases;

    public function getReleases(){
        return $this->_releases;
    }

    public function setReleases($releases) {
        $this->_releases = $releases;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->title = $obj->Title;
        $this->artistsLiteral = $obj->ArtistsLiteral;
        $this->artists = $obj->Artists;
        $this->originalReleaseDate = $obj->OriginalReleaseDate;
        $this->format = $obj->Format;
        $this->isLive = $obj->IsLive;
        $this->isUnofficial = $obj->IsUnofficial;
        $this->genres = $obj->Genres;
        $this->imageId = $obj->ImageId;
        $this->participations = $obj->Participations;
        $this->identifiers = $obj->Identifiers;
        $this->recordings = $obj->Recordings;
        $this->releases = $obj->Releases;
    }
}

class ArtistsByIdQueryObject extends QueryObject{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->retrievalDepth = $obj->RetrievalDepth;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Artist" />s returned by the query,
    as well as result count and page information.
    
*/
class ArtistsQueryResult extends QueryResult{
    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->resultSet = [];
        foreach($obj->ResultSet as $item){
            array_push($this->resultSet, new Artist($item));
        }
        $this->resultCount = $obj->ResultCount;
        $this->pageCount = $obj->PageCount;
        $this->totalResultCount = $obj->TotalResultCount;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Artist" /> returned by the query.
    
*/
class ArtistsByIdQueryResult extends ByIdQueryResult{
    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->result = new Artist($obj->Result);
    }
}

/*
 * 
    The digital file tags for tracks on a particular disc.
    
*/
class DiscTag extends DecibelEntity{
    private $_fileTags;

    public function getFileTags(){
        return $this->_fileTags;
    }

    public function setFileTags($fileTags) {
        $this->_fileTags = $fileTags;
    }

    public function __construct($obj){
        $this->fileTags = $obj->FileTags;
    }
}

class RecordingsByIdQueryObject extends QueryObject{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->retrievalDepth = $obj->RetrievalDepth;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Recording" />s returned by the query,
    as well as result count and page information.
    
*/
class RecordingsQueryResult extends QueryResult{
    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->resultSet = [];
        foreach($obj->ResultSet as $item){
            array_push($this->resultSet, new Recording($item));
        }
        $this->resultCount = $obj->ResultCount;
        $this->pageCount = $obj->PageCount;
        $this->totalResultCount = $obj->TotalResultCount;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Recording" /> returned by the query.
    
*/
class RecordingsByIdQueryResult extends ByIdQueryResult{
    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->result = new Recording($obj->Result);
    }
}

/*
 * 
    A place in the world.
    
*/
class Location extends DecibelEntity{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->name = $obj->Name;
    }
}

class AlbumsQueryObject extends SearchQueryObject{
    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    private $_titleSearchType;

    public function getTitleSearchType(){
        return $this->_titleSearchType;
    }

    public function setTitleSearchType($titleSearchType) {
        $this->_titleSearchType = $titleSearchType;
    }

    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
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

    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    private $_dateReleased;

    public function getDateReleased(){
        return $this->_dateReleased;
    }

    public function setDateReleased($dateReleased) {
        $this->_dateReleased = $dateReleased;
    }

    private $_orderingProperties;

    public function getOrderingProperties(){
        return $this->_orderingProperties;
    }

    public function setOrderingProperties($orderingProperties) {
        $this->_orderingProperties = $orderingProperties;
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

    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->title = $obj->Title;
        $this->titleSearchType = $obj->TitleSearchType;
        $this->id = $obj->Id;
        $this->idType = $obj->IdType;
        $this->recordings = $obj->Recordings;
        $this->recordingIds = $obj->RecordingIds;
        $this->artists = $obj->Artists;
        $this->artistIds = $obj->ArtistIds;
        $this->participants = $obj->Participants;
        $this->participantIds = $obj->ParticipantIds;
        $this->isLive = $obj->IsLive;
        $this->dateReleased = $obj->DateReleased;
        $this->orderingProperties = $obj->OrderingProperties;
        $this->recordingSearchType = $obj->RecordingSearchType;
        $this->recordingIdType = $obj->RecordingIdType;
        $this->artistSearchType = $obj->ArtistSearchType;
        $this->artistIdType = $obj->ArtistIdType;
        $this->participantSearchType = $obj->ParticipantSearchType;
        $this->participantIdType = $obj->ParticipantIdType;
        $this->retrievalDepth = $obj->RetrievalDepth;
    }
}

/*
 * 
    Base class for search queries (ones that return more than one result
    
*/
class SearchQueryObject extends QueryObject{
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

    public function __construct($obj){
        $this->pageNumber = $obj->PageNumber;
        $this->pageSize = $obj->PageSize;
        $this->updatedSince = $obj->UpdatedSince;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.DiscTag" /> returned by the query.
    
*/
class DiscTagsQueryResult extends QueryResult{
    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->resultSet = [];
        foreach($obj->ResultSet as $item){
            array_push($this->resultSet, new DiscTag($item));
        }
        $this->resultCount = $obj->ResultCount;
        $this->pageCount = $obj->PageCount;
        $this->totalResultCount = $obj->TotalResultCount;
    }
}

/*
 * 
    A particular release of an album.
    
*/
class Release extends DecibelEntity{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_releaseDate;

    public function getReleaseDate(){
        return $this->_releaseDate;
    }

    public function setReleaseDate($releaseDate) {
        $this->_releaseDate = $releaseDate;
    }

    private $_releaseRegionLiteral;

    public function getReleaseRegionLiteral(){
        return $this->_releaseRegionLiteral;
    }

    public function setReleaseRegionLiteral($releaseRegionLiteral) {
        $this->_releaseRegionLiteral = $releaseRegionLiteral;
    }

    private $_labelLiteral;

    public function getLabelLiteral(){
        return $this->_labelLiteral;
    }

    public function setLabelLiteral($labelLiteral) {
        $this->_labelLiteral = $labelLiteral;
    }

    private $_formatTypes;

    public function getFormatTypes(){
        return $this->_formatTypes;
    }

    public function setFormatTypes($formatTypes) {
        $this->_formatTypes = $formatTypes;
    }

    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->releaseDate = $obj->ReleaseDate;
        $this->releaseRegionLiteral = $obj->ReleaseRegionLiteral;
        $this->labelLiteral = $obj->LabelLiteral;
        $this->formatTypes = $obj->FormatTypes;
        $this->identifiers = $obj->Identifiers;
    }
}

class DiscTagsQueryObject extends SearchQueryObject{
    private $_albumDecibelId;

    public function getAlbumDecibelId(){
        return $this->_albumDecibelId;
    }

    public function setAlbumDecibelId($albumDecibelId) {
        $this->_albumDecibelId = $albumDecibelId;
    }

    private $_mediumDecibelId;

    public function getMediumDecibelId(){
        return $this->_mediumDecibelId;
    }

    public function setMediumDecibelId($mediumDecibelId) {
        $this->_mediumDecibelId = $mediumDecibelId;
    }

    private $_checksum;

    public function getChecksum(){
        return $this->_checksum;
    }

    public function setChecksum($checksum) {
        $this->_checksum = $checksum;
    }

    private $_albumSpotifyUri;

    public function getAlbumSpotifyUri(){
        return $this->_albumSpotifyUri;
    }

    public function setAlbumSpotifyUri($albumSpotifyUri) {
        $this->_albumSpotifyUri = $albumSpotifyUri;
    }

    public function __construct($obj){
        $this->albumDecibelId = $obj->AlbumDecibelId;
        $this->mediumDecibelId = $obj->MediumDecibelId;
        $this->checksum = $obj->Checksum;
        $this->albumSpotifyUri = $obj->AlbumSpotifyUri;
    }
}

/*
 * 
    An address which references a resource on the world wide web.
    
*/
class WebAddress extends DecibelEntity{
    private $_address;

    public function getAddress(){
        return $this->_address;
    }

    public function setAddress($address) {
        $this->_address = $address;
    }

    private $_website;

    public function getWebsite(){
        return $this->_website;
    }

    public function setWebsite($website) {
        $this->_website = $website;
    }

    public function __construct($obj){
        $this->address = $obj->Address;
        $this->website = $obj->Website;
    }
}

class ArtistsQueryObject extends SearchQueryObject{
    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    private $_nameSearchType;

    public function getNameSearchType(){
        return $this->_nameSearchType;
    }

    public function setNameSearchType($nameSearchType) {
        $this->_nameSearchType = $nameSearchType;
    }

    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    private $_birthDate;

    public function getBirthDate(){
        return $this->_birthDate;
    }

    public function setBirthDate($birthDate) {
        $this->_birthDate = $birthDate;
    }

    private $_deathDate;

    public function getDeathDate(){
        return $this->_deathDate;
    }

    public function setDeathDate($deathDate) {
        $this->_deathDate = $deathDate;
    }

    private $_gender;

    public function getGender(){
        return $this->_gender;
    }

    public function setGender($gender) {
        $this->_gender = $gender;
    }

    private $_genre;

    public function getGenre(){
        return $this->_genre;
    }

    public function setGenre($genre) {
        $this->_genre = $genre;
    }

    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    private $_orderingProperties;

    public function getOrderingProperties(){
        return $this->_orderingProperties;
    }

    public function setOrderingProperties($orderingProperties) {
        $this->_orderingProperties = $orderingProperties;
    }

    public function __construct($obj){
        $this->name = $obj->Name;
        $this->nameSearchType = $obj->NameSearchType;
        $this->id = $obj->Id;
        $this->idType = $obj->IdType;
        $this->birthDate = $obj->BirthDate;
        $this->deathDate = $obj->DeathDate;
        $this->gender = $obj->Gender;
        $this->genre = $obj->Genre;
        $this->retrievalDepth = $obj->RetrievalDepth;
        $this->orderingProperties = $obj->OrderingProperties;
    }
}

/*
 * 
    Editorial text about a particular subject.
    
*/
class Annotation extends DecibelEntity{
    private $_text;

    public function getText(){
        return $this->_text;
    }

    public function setText($text) {
        $this->_text = $text;
    }

    public function __construct($obj){
        $this->text = $obj->Text;
    }
}

class RecordingsQueryObject extends SearchQueryObject{
    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    private $_titleSearchType;

    public function getTitleSearchType(){
        return $this->_titleSearchType;
    }

    public function setTitleSearchType($titleSearchType) {
        $this->_titleSearchType = $titleSearchType;
    }

    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    private $_dateProduced;

    public function getDateProduced(){
        return $this->_dateProduced;
    }

    public function setDateProduced($dateProduced) {
        $this->_dateProduced = $dateProduced;
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

    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    private $_maxSeconds;

    public function getMaxSeconds(){
        return $this->_maxSeconds;
    }

    public function setMaxSeconds($maxSeconds) {
        $this->_maxSeconds = $maxSeconds;
    }

    private $_minSeconds;

    public function getMinSeconds(){
        return $this->_minSeconds;
    }

    public function setMinSeconds($minSeconds) {
        $this->_minSeconds = $minSeconds;
    }

    private $_orderingProperties;

    public function getOrderingProperties(){
        return $this->_orderingProperties;
    }

    public function setOrderingProperties($orderingProperties) {
        $this->_orderingProperties = $orderingProperties;
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

    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->title = $obj->Title;
        $this->titleSearchType = $obj->TitleSearchType;
        $this->id = $obj->Id;
        $this->idType = $obj->IdType;
        $this->dateProduced = $obj->DateProduced;
        $this->composers = $obj->Composers;
        $this->composerIds = $obj->ComposerIds;
        $this->participants = $obj->Participants;
        $this->participantIds = $obj->ParticipantIds;
        $this->artists = $obj->Artists;
        $this->artistIds = $obj->ArtistIds;
        $this->isLive = $obj->IsLive;
        $this->maxSeconds = $obj->MaxSeconds;
        $this->minSeconds = $obj->MinSeconds;
        $this->orderingProperties = $obj->OrderingProperties;
        $this->artistSearchType = $obj->ArtistSearchType;
        $this->artistIdType = $obj->ArtistIdType;
        $this->composerSearchType = $obj->ComposerSearchType;
        $this->composerIdType = $obj->ComposerIdType;
        $this->participantSearchType = $obj->ParticipantSearchType;
        $this->participantIdType = $obj->ParticipantIdType;
        $this->retrievalDepth = $obj->RetrievalDepth;
    }
}

/*
 * 
    Information for an MP3, FLAC or other digital file tag.
    
*/
class FileTag extends DecibelEntity{
    private $_albumId;

    public function getAlbumId(){
        return $this->_albumId;
    }

    public function setAlbumId($albumId) {
        $this->_albumId = $albumId;
    }

    private $_albumTitle;

    public function getAlbumTitle(){
        return $this->_albumTitle;
    }

    public function setAlbumTitle($albumTitle) {
        $this->_albumTitle = $albumTitle;
    }

    private $_albumMediumId;

    public function getAlbumMediumId(){
        return $this->_albumMediumId;
    }

    public function setAlbumMediumId($albumMediumId) {
        $this->_albumMediumId = $albumMediumId;
    }

    private $_mediaType;

    public function getMediaType(){
        return $this->_mediaType;
    }

    public function setMediaType($mediaType) {
        $this->_mediaType = $mediaType;
    }

    private $_albumEAN;

    public function getAlbumEAN(){
        return $this->_albumEAN;
    }

    public function setAlbumEAN($albumEAN) {
        $this->_albumEAN = $albumEAN;
    }

    private $_publisher;

    public function getPublisher(){
        return $this->_publisher;
    }

    public function setPublisher($publisher) {
        $this->_publisher = $publisher;
    }

    private $_catalogNum;

    public function getCatalogNum(){
        return $this->_catalogNum;
    }

    public function setCatalogNum($catalogNum) {
        $this->_catalogNum = $catalogNum;
    }

    private $_releaseDate;

    public function getReleaseDate(){
        return $this->_releaseDate;
    }

    public function setReleaseDate($releaseDate) {
        $this->_releaseDate = $releaseDate;
    }

    private $_discTitle;

    public function getDiscTitle(){
        return $this->_discTitle;
    }

    public function setDiscTitle($discTitle) {
        $this->_discTitle = $discTitle;
    }

    private $_discNum;

    public function getDiscNum(){
        return $this->_discNum;
    }

    public function setDiscNum($discNum) {
        $this->_discNum = $discNum;
    }

    private $_discCount;

    public function getDiscCount(){
        return $this->_discCount;
    }

    public function setDiscCount($discCount) {
        $this->_discCount = $discCount;
    }

    private $_discEAN;

    public function getDiscEAN(){
        return $this->_discEAN;
    }

    public function setDiscEAN($discEAN) {
        $this->_discEAN = $discEAN;
    }

    private $_cddbId;

    public function getCddbId(){
        return $this->_cddbId;
    }

    public function setCddbId($cddbId) {
        $this->_cddbId = $cddbId;
    }

    private $_recordingId;

    public function getRecordingId(){
        return $this->_recordingId;
    }

    public function setRecordingId($recordingId) {
        $this->_recordingId = $recordingId;
    }

    private $_duration;

    public function getDuration(){
        return $this->_duration;
    }

    public function setDuration($duration) {
        $this->_duration = $duration;
    }

    private $_trackNumber;

    public function getTrackNumber(){
        return $this->_trackNumber;
    }

    public function setTrackNumber($trackNumber) {
        $this->_trackNumber = $trackNumber;
    }

    private $_trackCount;

    public function getTrackCount(){
        return $this->_trackCount;
    }

    public function setTrackCount($trackCount) {
        $this->_trackCount = $trackCount;
    }

    private $_trackNumberLiteral;

    public function getTrackNumberLiteral(){
        return $this->_trackNumberLiteral;
    }

    public function setTrackNumberLiteral($trackNumberLiteral) {
        $this->_trackNumberLiteral = $trackNumberLiteral;
    }

    private $_trackTitle;

    public function getTrackTitle(){
        return $this->_trackTitle;
    }

    public function setTrackTitle($trackTitle) {
        $this->_trackTitle = $trackTitle;
    }

    private $_puid;

    public function getPuid(){
        return $this->_puid;
    }

    public function setPuid($puid) {
        $this->_puid = $puid;
    }

    private $_works;

    public function getWorks(){
        return $this->_works;
    }

    public function setWorks($works) {
        $this->_works = $works;
    }

    private $_trackArtist;

    public function getTrackArtist(){
        return $this->_trackArtist;
    }

    public function setTrackArtist($trackArtist) {
        $this->_trackArtist = $trackArtist;
    }

    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    private $_conductor;

    public function getConductor(){
        return $this->_conductor;
    }

    public function setConductor($conductor) {
        $this->_conductor = $conductor;
    }

    private $_recordingDate;

    public function getRecordingDate(){
        return $this->_recordingDate;
    }

    public function setRecordingDate($recordingDate) {
        $this->_recordingDate = $recordingDate;
    }

    private $_recordingVenue;

    public function getRecordingVenue(){
        return $this->_recordingVenue;
    }

    public function setRecordingVenue($recordingVenue) {
        $this->_recordingVenue = $recordingVenue;
    }

    private $_matrix;

    public function getMatrix(){
        return $this->_matrix;
    }

    public function setMatrix($matrix) {
        $this->_matrix = $matrix;
    }

    private $_participants;

    public function getParticipants(){
        return $this->_participants;
    }

    public function setParticipants($participants) {
        $this->_participants = $participants;
    }

    private $_beatsPerMinute;

    public function getBeatsPerMinute(){
        return $this->_beatsPerMinute;
    }

    public function setBeatsPerMinute($beatsPerMinute) {
        $this->_beatsPerMinute = $beatsPerMinute;
    }

    public function __construct($obj){
        $this->albumId = $obj->AlbumId;
        $this->albumTitle = $obj->AlbumTitle;
        $this->albumMediumId = $obj->AlbumMediumId;
        $this->mediaType = $obj->MediaType;
        $this->albumEAN = $obj->AlbumEAN;
        $this->publisher = $obj->Publisher;
        $this->catalogNum = $obj->CatalogNum;
        $this->releaseDate = $obj->ReleaseDate;
        $this->discTitle = $obj->DiscTitle;
        $this->discNum = $obj->DiscNum;
        $this->discCount = $obj->DiscCount;
        $this->discEAN = $obj->DiscEAN;
        $this->cddbId = $obj->CddbId;
        $this->recordingId = $obj->RecordingId;
        $this->duration = $obj->Duration;
        $this->trackNumber = $obj->TrackNumber;
        $this->trackCount = $obj->TrackCount;
        $this->trackNumberLiteral = $obj->TrackNumberLiteral;
        $this->trackTitle = $obj->TrackTitle;
        $this->puid = $obj->Puid;
        $this->works = $obj->Works;
        $this->trackArtist = $obj->TrackArtist;
        $this->genres = $obj->Genres;
        $this->conductor = $obj->Conductor;
        $this->recordingDate = $obj->RecordingDate;
        $this->recordingVenue = $obj->RecordingVenue;
        $this->matrix = $obj->Matrix;
        $this->participants = $obj->Participants;
        $this->beatsPerMinute = $obj->BeatsPerMinute;
    }
}

/*
 * 
    A code which identifies a particular entity.
    
*/
class Identifier extends DecibelEntity{
    private $_identifierType;

    public function getIdentifierType(){
        return $this->_identifierType;
    }

    public function setIdentifierType($identifierType) {
        $this->_identifierType = $identifierType;
    }

    private $_value;

    public function getValue(){
        return $this->_value;
    }

    public function setValue($value) {
        $this->_value = $value;
    }

    private $_additionalInformation;

    public function getAdditionalInformation(){
        return $this->_additionalInformation;
    }

    public function setAdditionalInformation($additionalInformation) {
        $this->_additionalInformation = $additionalInformation;
    }

    public function __construct($obj){
        $this->identifierType = $obj->IdentifierType;
        $this->value = $obj->Value;
        $this->additionalInformation = $obj->AdditionalInformation;
    }
}

/*
 * 
    A code which identifies an <see cref="T:DecibelWebService.Album" />.
    
*/
class AlbumIdentifier extends Identifier{
}

/*
 * 
    A code which identifies an <see cref="T:DecibelWebService.Artist" />.
    
*/
class ArtistIdentifier extends Identifier{
}

/*
 * 
    A person or a group.
    
*/
class Artist extends DecibelEntity{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_probability;

    public function getProbability(){
        return $this->_probability;
    }

    public function setProbability($probability) {
        $this->_probability = $probability;
    }

    private $_join;

    public function getJoin(){
        return $this->_join;
    }

    public function setJoin($join) {
        $this->_join = $join;
    }

    private $_appearanceType;

    public function getAppearanceType(){
        return $this->_appearanceType;
    }

    public function setAppearanceType($appearanceType) {
        $this->_appearanceType = $appearanceType;
    }

    private $_nameLiteral;

    public function getNameLiteral(){
        return $this->_nameLiteral;
    }

    public function setNameLiteral($nameLiteral) {
        $this->_nameLiteral = $nameLiteral;
    }

    private $_stageName;

    public function getStageName(){
        return $this->_stageName;
    }

    public function setStageName($stageName) {
        $this->_stageName = $stageName;
    }

    private $_legalName;

    public function getLegalName(){
        return $this->_legalName;
    }

    public function setLegalName($legalName) {
        $this->_legalName = $legalName;
    }

    private $_membershipDate;

    public function getMembershipDate(){
        return $this->_membershipDate;
    }

    public function setMembershipDate($membershipDate) {
        $this->_membershipDate = $membershipDate;
    }

    private $_artistType;

    public function getArtistType(){
        return $this->_artistType;
    }

    public function setArtistType($artistType) {
        $this->_artistType = $artistType;
    }

    private $_gender;

    public function getGender(){
        return $this->_gender;
    }

    public function setGender($gender) {
        $this->_gender = $gender;
    }

    private $_isFictional;

    public function getIsFictional(){
        return $this->_isFictional;
    }

    public function setIsFictional($isFictional) {
        $this->_isFictional = $isFictional;
    }

    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    private $_birthDate;

    public function getBirthDate(){
        return $this->_birthDate;
    }

    public function setBirthDate($birthDate) {
        $this->_birthDate = $birthDate;
    }

    private $_deathDate;

    public function getDeathDate(){
        return $this->_deathDate;
    }

    public function setDeathDate($deathDate) {
        $this->_deathDate = $deathDate;
    }

    private $_birthPlace;

    public function getBirthPlace(){
        return $this->_birthPlace;
    }

    public function setBirthPlace($birthPlace) {
        $this->_birthPlace = $birthPlace;
    }

    private $_deathPlace;

    public function getDeathPlace(){
        return $this->_deathPlace;
    }

    public function setDeathPlace($deathPlace) {
        $this->_deathPlace = $deathPlace;
    }

    private $_biographies;

    public function getBiographies(){
        return $this->_biographies;
    }

    public function setBiographies($biographies) {
        $this->_biographies = $biographies;
    }

    private $_shortDescriptions;

    public function getShortDescriptions(){
        return $this->_shortDescriptions;
    }

    public function setShortDescriptions($shortDescriptions) {
        $this->_shortDescriptions = $shortDescriptions;
    }

    private $_webAddresses;

    public function getWebAddresses(){
        return $this->_webAddresses;
    }

    public function setWebAddresses($webAddresses) {
        $this->_webAddresses = $webAddresses;
    }

    private $_members;

    public function getMembers(){
        return $this->_members;
    }

    public function setMembers($members) {
        $this->_members = $members;
    }

    private $_groups;

    public function getGroups(){
        return $this->_groups;
    }

    public function setGroups($groups) {
        $this->_groups = $groups;
    }

    private $_relatedArtists;

    public function getRelatedArtists(){
        return $this->_relatedArtists;
    }

    public function setRelatedArtists($relatedArtists) {
        $this->_relatedArtists = $relatedArtists;
    }

    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->probability = $obj->Probability;
        $this->join = $obj->Join;
        $this->appearanceType = $obj->AppearanceType;
        $this->nameLiteral = $obj->NameLiteral;
        $this->stageName = $obj->StageName;
        $this->legalName = $obj->LegalName;
        $this->membershipDate = $obj->MembershipDate;
        $this->artistType = $obj->ArtistType;
        $this->gender = $obj->Gender;
        $this->isFictional = $obj->IsFictional;
        $this->genres = $obj->Genres;
        $this->birthDate = $obj->BirthDate;
        $this->deathDate = $obj->DeathDate;
        $this->birthPlace = $obj->BirthPlace;
        $this->deathPlace = $obj->DeathPlace;
        $this->biographies = $obj->Biographies;
        $this->shortDescriptions = $obj->ShortDescriptions;
        $this->webAddresses = $obj->WebAddresses;
        $this->members = $obj->Members;
        $this->groups = $obj->Groups;
        $this->relatedArtists = $obj->RelatedArtists;
        $this->identifiers = $obj->Identifiers;
    }
}

/*
 * 
    A code which identifies a <see cref="T:DecibelWebService.Recording" />.
    
*/
class RecordingIdentifier extends Identifier{
}

/*
 * 
    An event associated with the creation of a recording.
    
*/
class ProductionEvent extends DecibelEntity{
    private $_isRecording;

    public function getIsRecording(){
        return $this->_isRecording;
    }

    public function setIsRecording($isRecording) {
        $this->_isRecording = $isRecording;
    }

    private $_isMixing;

    public function getIsMixing(){
        return $this->_isMixing;
    }

    public function setIsMixing($isMixing) {
        $this->_isMixing = $isMixing;
    }

    private $_isMastering;

    public function getIsMastering(){
        return $this->_isMastering;
    }

    public function setIsMastering($isMastering) {
        $this->_isMastering = $isMastering;
    }

    private $_isRemastering;

    public function getIsRemastering(){
        return $this->_isRemastering;
    }

    public function setIsRemastering($isRemastering) {
        $this->_isRemastering = $isRemastering;
    }

    private $_date;

    public function getDate(){
        return $this->_date;
    }

    public function setDate($date) {
        $this->_date = $date;
    }

    private $_locations;

    public function getLocations(){
        return $this->_locations;
    }

    public function setLocations($locations) {
        $this->_locations = $locations;
    }

    public function __construct($obj){
        $this->isRecording = $obj->IsRecording;
        $this->isMixing = $obj->IsMixing;
        $this->isMastering = $obj->IsMastering;
        $this->isRemastering = $obj->IsRemastering;
        $this->date = $obj->Date;
        $this->locations = $obj->Locations;
    }
}

/*
 * 
    A code which identifies a <see cref="T:DecibelWebService.Release" />.
    
*/
class ReleaseIdentifier extends Identifier{
}

/*
 * 
    A single distinct recording of sound. 
    
*/
class Recording extends DecibelEntity{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    private $_addenda;

    public function getAddenda(){
        return $this->_addenda;
    }

    public function setAddenda($addenda) {
        $this->_addenda = $addenda;
    }

    private $_originalAlbumTitle;

    public function getOriginalAlbumTitle(){
        return $this->_originalAlbumTitle;
    }

    public function setOriginalAlbumTitle($originalAlbumTitle) {
        $this->_originalAlbumTitle = $originalAlbumTitle;
    }

    private $_originalAlbumId;

    public function getOriginalAlbumId(){
        return $this->_originalAlbumId;
    }

    public function setOriginalAlbumId($originalAlbumId) {
        $this->_originalAlbumId = $originalAlbumId;
    }

    private $_originalReleaseDate;

    public function getOriginalReleaseDate(){
        return $this->_originalReleaseDate;
    }

    public function setOriginalReleaseDate($originalReleaseDate) {
        $this->_originalReleaseDate = $originalReleaseDate;
    }

    private $_albumSequence;

    public function getAlbumSequence(){
        return $this->_albumSequence;
    }

    public function setAlbumSequence($albumSequence) {
        $this->_albumSequence = $albumSequence;
    }

    private $_duration;

    public function getDuration(){
        return $this->_duration;
    }

    public function setDuration($duration) {
        $this->_duration = $duration;
    }

    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    private $_isConcert;

    public function getIsConcert(){
        return $this->_isConcert;
    }

    public function setIsConcert($isConcert) {
        $this->_isConcert = $isConcert;
    }

    private $_beatsPerMinute;

    public function getBeatsPerMinute(){
        return $this->_beatsPerMinute;
    }

    public function setBeatsPerMinute($beatsPerMinute) {
        $this->_beatsPerMinute = $beatsPerMinute;
    }

    private $_mainArtistsLiteral;

    public function getMainArtistsLiteral(){
        return $this->_mainArtistsLiteral;
    }

    public function setMainArtistsLiteral($mainArtistsLiteral) {
        $this->_mainArtistsLiteral = $mainArtistsLiteral;
    }

    private $_featuredArtistsLiteral;

    public function getFeaturedArtistsLiteral(){
        return $this->_featuredArtistsLiteral;
    }

    public function setFeaturedArtistsLiteral($featuredArtistsLiteral) {
        $this->_featuredArtistsLiteral = $featuredArtistsLiteral;
    }

    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

    private $_participations;

    public function getParticipations(){
        return $this->_participations;
    }

    public function setParticipations($participations) {
        $this->_participations = $participations;
    }

    private $_works;

    public function getWorks(){
        return $this->_works;
    }

    public function setWorks($works) {
        $this->_works = $works;
    }

    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    private $_musicalKeys;

    public function getMusicalKeys(){
        return $this->_musicalKeys;
    }

    public function setMusicalKeys($musicalKeys) {
        $this->_musicalKeys = $musicalKeys;
    }

    private $_productionEvents;

    public function getProductionEvents(){
        return $this->_productionEvents;
    }

    public function setProductionEvents($productionEvents) {
        $this->_productionEvents = $productionEvents;
    }

    private $_constituentRecordings;

    public function getConstituentRecordings(){
        return $this->_constituentRecordings;
    }

    public function setConstituentRecordings($constituentRecordings) {
        $this->_constituentRecordings = $constituentRecordings;
    }

    private $_constituentRecordingType;

    public function getConstituentRecordingType(){
        return $this->_constituentRecordingType;
    }

    public function setConstituentRecordingType($constituentRecordingType) {
        $this->_constituentRecordingType = $constituentRecordingType;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->title = $obj->Title;
        $this->addenda = $obj->Addenda;
        $this->originalAlbumTitle = $obj->OriginalAlbumTitle;
        $this->originalAlbumId = $obj->OriginalAlbumId;
        $this->originalReleaseDate = $obj->OriginalReleaseDate;
        $this->albumSequence = $obj->AlbumSequence;
        $this->duration = $obj->Duration;
        $this->isLive = $obj->IsLive;
        $this->isConcert = $obj->IsConcert;
        $this->beatsPerMinute = $obj->BeatsPerMinute;
        $this->mainArtistsLiteral = $obj->MainArtistsLiteral;
        $this->featuredArtistsLiteral = $obj->FeaturedArtistsLiteral;
        $this->artists = $obj->Artists;
        $this->participations = $obj->Participations;
        $this->works = $obj->Works;
        $this->identifiers = $obj->Identifiers;
        $this->genres = $obj->Genres;
        $this->musicalKeys = $obj->MusicalKeys;
        $this->productionEvents = $obj->ProductionEvents;
        $this->constituentRecordings = $obj->ConstituentRecordings;
        $this->constituentRecordingType = $obj->ConstituentRecordingType;
    }
}

/*
 * 
    A musical tradition or set of conventions.
    
*/
class Genre extends Tag{
}

/*
 * 
    A named classification group.
    
*/
class Tag extends DecibelEntity{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->name = $obj->Name;
    }
}

/*
 * 
    The musical key of a recording or work.
    
*/
class MusicKey extends Tag{
}

/*
 * 
    A musical composition.
    
*/
class Work extends DecibelEntity{
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    private $_recordingSequence;

    public function getRecordingSequence(){
        return $this->_recordingSequence;
    }

    public function setRecordingSequence($recordingSequence) {
        $this->_recordingSequence = $recordingSequence;
    }

    private $_participations;

    public function getParticipations(){
        return $this->_participations;
    }

    public function setParticipations($participations) {
        $this->_participations = $participations;
    }

    public function __construct($obj){
        $this->id = $obj->Id;
        $this->name = $obj->Name;
        $this->recordingSequence = $obj->RecordingSequence;
        $this->participations = $obj->Participations;
    }
}

