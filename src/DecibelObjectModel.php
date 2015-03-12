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
    Specifies what sort of data to return with <see cref="T:DecibelWebService.Annotation" />s.
    
*/
abstract class AnnotationDepth extends Enum{
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
    The type of entity that is being referenced
    
*/
abstract class DecibelType extends Enum{
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
    The database in which this identifier identifies <see cref="T:DecibelWebService.Label" />s.
    
*/
abstract class LabelIdType extends Enum{
    const DECIBEL = 'Decibel';

    const MUSICBRAINZ = 'Musicbrainz';

    const DISCOGS = 'Discogs';

}

abstract class LabelRetrievalDepth extends Enum{
    const IDENTIFIERS = 'Identifiers';

    const LOCATIONS = 'Locations';

}

/*
 * 
    A type of location.
    
*/
abstract class LocationCategory extends Enum{
    const NEIGHBORHOOD = 'Neighborhood';

    const COUNTY = 'County';

    const VILLAGE = 'Village';

    const COUNTRY = 'Country';

    const DEPARTMENT = 'Department';

    const PROVINCE = 'Province';

    const COLONY = 'Colony';

    const STATE = 'State';

    const HAMLET = 'Hamlet';

    const TOWN = 'Town';

    const VENUE = 'Venue';

    const CITY = 'City';

    const REGION = 'Region';

    const BOROUGH = 'Borough';

    const TERRITORY = 'Territory';

    const PRINCIPALITY = 'Principality';

}

/*
 * 
    Specifies additional <see cref="T:DecibelWebService.Location" /> information to return.
    
*/
abstract class LocationRetrievalDepth extends Enum{
    const IDENTIFIERS = 'Identifiers';

    const PARENT_LOCATIONS = 'ParentLocations';

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
    The database in which this identifier identifies <see cref="T:DecibelWebService.Location" />s.
    
*/
abstract class LocationIdType extends Enum{
    const DECIBEL = 'Decibel';

    const GEO_NAMES = 'GeoNames';

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
    Specifies how labels returned by the API should be sorted.
    
*/
abstract class OrderLabelsBy extends Enum{
    const DECIBEL_EMINENCE = 'DecibelEminence';

}

/*
 * 
    Specifies how locations returned by the API should be sorted.
    
*/
abstract class OrderLocationsBy extends Enum{
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
    Base class for *QueryObject items
    
*/
class QueryObject{
    /* @var $_language Language */
    private $_language;

    public function getLanguage(){
        return $this->_language;
    }

    public function setLanguage($language) {
        $this->_language = $language;
    }

    public function __construct($obj){
        $this->_language = isset($obj->Language) ? $obj->Language : null;
    }
}

class ByIdQueryResult{
}

class BaseQueryResult{
    /* @var $_count int */
    private $_count;

    public function getCount(){
        return $this->_count;
    }

    public function setCount($count) {
        $this->_count = $count;
    }

}

class ErrorResult{
    /* @var $_error Error */
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
    /* @var $_errorMessage string */
    private $_errorMessage;

    public function getErrorMessage(){
        return $this->_errorMessage;
    }

    public function setErrorMessage($errorMessage) {
        $this->_errorMessage = $errorMessage;
    }

    /* @var $_errorCode int */
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
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_name string */
    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    /* @var $_probability Probability */
    private $_probability;

    public function getProbability(){
        return $this->_probability;
    }

    public function setProbability($probability) {
        $this->_probability = $probability;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_name = isset($obj->Name) ? $obj->Name : null;
        $this->_probability = isset($obj->Probability) ? $obj->Probability : null;
    }
}

class LabelsByIdQueryObject extends QueryObject{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_retrievalDepth LabelRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
    }
}

class QueryResult extends BaseQueryResult{
    /* @var $_totalCount long */
    private $_totalCount;

    public function getTotalCount(){
        return $this->_totalCount;
    }

    public function setTotalCount($totalCount) {
        $this->_totalCount = $totalCount;
    }

    /* @var $_pageCount int */
    private $_pageCount;

    public function getPageCount(){
        return $this->_pageCount;
    }

    public function setPageCount($pageCount) {
        $this->_pageCount = $pageCount;
    }

    /* @var $_pageSize int */
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
    /* @var $_results Album[] */
    private $_results;

    public function getResults(){
        return $this->_results;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_results = [];
        foreach($obj->Results as $item){
            array_push($this->_results, new Album($item));
        }
        $this->setPageSize($obj->PageSize);
        $this->setPageCount($obj->PageCount);
        $this->setCount($obj->Count);
        $this->setTotalCount($obj->TotalCount);
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Album" /> returned by the query.
    
*/
class AlbumsByIdQueryResult extends ByIdQueryResult{
    /* @var $_result Album */
    private $_result;

    public function getResult(){
        return $this->_result;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_result = new Album($obj->Result);
    }
}

class ImagesByIdQueryResult extends ByIdQueryResult{
    /* @var $_result Image */
    private $_result;

    public function getResult(){
        return $this->_result;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_result = new Image($obj->Result);
    }
}

/*
 * 
    A collection of sound recordings.
    
*/
class Album extends DecibelEntity{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_title string */
    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    /* @var $_artistsLiteral string */
    private $_artistsLiteral;

    public function getArtistsLiteral(){
        return $this->_artistsLiteral;
    }

    public function setArtistsLiteral($artistsLiteral) {
        $this->_artistsLiteral = $artistsLiteral;
    }

    /* @var $_artists Artist[] */
    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

    /* @var $_originalReleaseDate string */
    private $_originalReleaseDate;

    public function getOriginalReleaseDate(){
        return $this->_originalReleaseDate;
    }

    public function setOriginalReleaseDate($originalReleaseDate) {
        $this->_originalReleaseDate = $originalReleaseDate;
    }

    /* @var $_format ContentFormat */
    private $_format;

    public function getFormat(){
        return $this->_format;
    }

    public function setFormat($format) {
        $this->_format = $format;
    }

    /* @var $_isLive bool */
    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    /* @var $_isUnofficial bool */
    private $_isUnofficial;

    public function getIsUnofficial(){
        return $this->_isUnofficial;
    }

    public function setIsUnofficial($isUnofficial) {
        $this->_isUnofficial = $isUnofficial;
    }

    /* @var $_genres Genre[] */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    /* @var $_imageId string */
    private $_imageId;

    public function getImageId(){
        return $this->_imageId;
    }

    public function setImageId($imageId) {
        $this->_imageId = $imageId;
    }

    /* @var $_participations Participation[] */
    private $_participations;

    public function getParticipations(){
        return $this->_participations;
    }

    public function setParticipations($participations) {
        $this->_participations = $participations;
    }

    /* @var $_identifiers AlbumIdentifier[] */
    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    /* @var $_recordings Recording[] */
    private $_recordings;

    public function getRecordings(){
        return $this->_recordings;
    }

    public function setRecordings($recordings) {
        $this->_recordings = $recordings;
    }

    /* @var $_releases Release[] */
    private $_releases;

    public function getReleases(){
        return $this->_releases;
    }

    public function setReleases($releases) {
        $this->_releases = $releases;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_title = isset($obj->Title) ? $obj->Title : null;
        $this->_artistsLiteral = isset($obj->ArtistsLiteral) ? $obj->ArtistsLiteral : null;
        if(isset($obj->Artists)){
            $this->_artists = [];
            foreach($obj->Artists as $item){
                array_push($this->_artists, new Artist($item));
            }
        }
        $this->_originalReleaseDate = isset($obj->OriginalReleaseDate) ? $obj->OriginalReleaseDate : null;
        $this->_format = isset($obj->Format) ? $obj->Format : null;
        $this->_isLive = isset($obj->IsLive) ? $obj->IsLive : null;
        $this->_isUnofficial = isset($obj->IsUnofficial) ? $obj->IsUnofficial : null;
        if(isset($obj->Genres)){
            $this->_genres = [];
            foreach($obj->Genres as $item){
                array_push($this->_genres, new Genre($item));
            }
        }
        $this->_imageId = isset($obj->ImageId) ? $obj->ImageId : null;
        if(isset($obj->Participations)){
            $this->_participations = [];
            foreach($obj->Participations as $item){
                array_push($this->_participations, new Participation($item));
            }
        }
        if(isset($obj->Identifiers)){
            $this->_identifiers = [];
            foreach($obj->Identifiers as $item){
                array_push($this->_identifiers, new AlbumIdentifier($item));
            }
        }
        if(isset($obj->Recordings)){
            $this->_recordings = [];
            foreach($obj->Recordings as $item){
                array_push($this->_recordings, new Recording($item));
            }
        }
        if(isset($obj->Releases)){
            $this->_releases = [];
            foreach($obj->Releases as $item){
                array_push($this->_releases, new Release($item));
            }
        }
    }
}

class LocationsByIdQueryObject extends QueryObject{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_retrievalDepth LocationRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Location" />s returned by the query,
    as well as result count and page information.
    
*/
class LocationsQueryResult extends QueryResult{
    /* @var $_results Location[] */
    private $_results;

    public function getResults(){
        return $this->_results;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_results = [];
        foreach($obj->Results as $item){
            array_push($this->_results, new Location($item));
        }
        $this->setPageSize($obj->PageSize);
        $this->setPageCount($obj->PageCount);
        $this->setCount($obj->Count);
        $this->setTotalCount($obj->TotalCount);
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Location" /> returned by the query.
    
*/
class LocationsByIdQueryResult extends ByIdQueryResult{
    /* @var $_result Location */
    private $_result;

    public function getResult(){
        return $this->_result;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_result = new Location($obj->Result);
    }
}

/*
 * 
    The digital file tags for tracks on a particular disc.
    
*/
class DiscTag extends DecibelEntity{
    /* @var $_fileTags FileTag[] */
    private $_fileTags;

    public function getFileTags(){
        return $this->_fileTags;
    }

    public function setFileTags($fileTags) {
        $this->_fileTags = $fileTags;
    }

    public function __construct($obj){
        if(isset($obj->FileTags)){
            $this->_fileTags = [];
            foreach($obj->FileTags as $item){
                array_push($this->_fileTags, new FileTag($item));
            }
        }
    }
}

class AlbumsByIdQueryObject extends QueryObject{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_retrievalDepth AlbumRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Label" />s returned by the query,
    as well as result count and page information.
    
*/
class LabelsQueryResult extends QueryResult{
    /* @var $_results Label[] */
    private $_results;

    public function getResults(){
        return $this->_results;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_results = [];
        foreach($obj->Results as $item){
            array_push($this->_results, new Label($item));
        }
        $this->setPageSize($obj->PageSize);
        $this->setPageCount($obj->PageCount);
        $this->setCount($obj->Count);
        $this->setTotalCount($obj->TotalCount);
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Label" /> returned by the query.
    
*/
class LabelsByIdQueryResult extends ByIdQueryResult{
    /* @var $_result Label */
    private $_result;

    public function getResult(){
        return $this->_result;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_result = new Label($obj->Result);
    }
}

class Image extends DecibelEntity{
    /* @var $_rawData byte[] */
    private $_rawData;

    public function getRawData(){
        return $this->_rawData;
    }

    public function setRawData($rawData) {
        $this->_rawData = $rawData;
    }

    /* @var $_size ImageSize */
    private $_size;

    public function getSize(){
        return $this->_size;
    }

    public function setSize($size) {
        $this->_size = $size;
    }

    /* @var $_contentType string */
    private $_contentType;

    public function getContentType(){
        return $this->_contentType;
    }

    public function setContentType($contentType) {
        $this->_contentType = $contentType;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    public function __construct($obj){
        if(isset($obj->RawData)){
            $this->_rawData = [];
            foreach($obj->RawData as $item){
                array_push($this->_rawData, new byte($item));
            }
        }
        $this->_size = isset($obj->Size) ? $obj->Size : null;
        $this->_contentType = isset($obj->ContentType) ? $obj->ContentType : null;
        $this->_id = isset($obj->Id) ? $obj->Id : null;
    }
}

class ArtistsByIdQueryObject extends QueryObject{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_retrievalDepth ArtistRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Artist" />s returned by the query,
    as well as result count and page information.
    
*/
class ArtistsQueryResult extends QueryResult{
    /* @var $_results Artist[] */
    private $_results;

    public function getResults(){
        return $this->_results;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_results = [];
        foreach($obj->Results as $item){
            array_push($this->_results, new Artist($item));
        }
        $this->setPageSize($obj->PageSize);
        $this->setPageCount($obj->PageCount);
        $this->setCount($obj->Count);
        $this->setTotalCount($obj->TotalCount);
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Artist" /> returned by the query.
    
*/
class ArtistsByIdQueryResult extends ByIdQueryResult{
    /* @var $_result Artist */
    private $_result;

    public function getResult(){
        return $this->_result;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_result = new Artist($obj->Result);
    }
}

/*
 * 
    A record label
    
*/
class Label extends DecibelEntity{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_name string */
    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    /* @var $_locations Location[] */
    private $_locations;

    public function getLocations(){
        return $this->_locations;
    }

    public function setLocations($locations) {
        $this->_locations = $locations;
    }

    /* @var $_identifiers LabelIdentifier[] */
    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_name = isset($obj->Name) ? $obj->Name : null;
        if(isset($obj->Locations)){
            $this->_locations = [];
            foreach($obj->Locations as $item){
                array_push($this->_locations, new Location($item));
            }
        }
        if(isset($obj->Identifiers)){
            $this->_identifiers = [];
            foreach($obj->Identifiers as $item){
                array_push($this->_identifiers, new LabelIdentifier($item));
            }
        }
    }
}

class RecordingsByIdQueryObject extends QueryObject{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_retrievalDepth RecordingRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Recording" />s returned by the query,
    as well as result count and page information.
    
*/
class RecordingsQueryResult extends QueryResult{
    /* @var $_results Recording[] */
    private $_results;

    public function getResults(){
        return $this->_results;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_results = [];
        foreach($obj->Results as $item){
            array_push($this->_results, new Recording($item));
        }
        $this->setPageSize($obj->PageSize);
        $this->setPageCount($obj->PageCount);
        $this->setCount($obj->Count);
        $this->setTotalCount($obj->TotalCount);
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.Recording" /> returned by the query.
    
*/
class RecordingsByIdQueryResult extends ByIdQueryResult{
    /* @var $_result Recording */
    private $_result;

    public function getResult(){
        return $this->_result;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_result = new Recording($obj->Result);
    }
}

/*
 * 
    A place in the world.
    
*/
class Location extends DecibelEntity{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_name string */
    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    /* @var $_latitude double */
    private $_latitude;

    public function getLatitude(){
        return $this->_latitude;
    }

    public function setLatitude($latitude) {
        $this->_latitude = $latitude;
    }

    /* @var $_longitude double */
    private $_longitude;

    public function getLongitude(){
        return $this->_longitude;
    }

    public function setLongitude($longitude) {
        $this->_longitude = $longitude;
    }

    /* @var $_category LocationCategory */
    private $_category;

    public function getCategory(){
        return $this->_category;
    }

    public function setCategory($category) {
        $this->_category = $category;
    }

    /* @var $_identifiers LocationIdentifier[] */
    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    /* @var $_parentLocations Location[] */
    private $_parentLocations;

    public function getParentLocations(){
        return $this->_parentLocations;
    }

    public function setParentLocations($parentLocations) {
        $this->_parentLocations = $parentLocations;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_name = isset($obj->Name) ? $obj->Name : null;
        $this->_latitude = isset($obj->Latitude) ? $obj->Latitude : null;
        $this->_longitude = isset($obj->Longitude) ? $obj->Longitude : null;
        $this->_category = isset($obj->Category) ? $obj->Category : null;
        if(isset($obj->Identifiers)){
            $this->_identifiers = [];
            foreach($obj->Identifiers as $item){
                array_push($this->_identifiers, new LocationIdentifier($item));
            }
        }
        if(isset($obj->ParentLocations)){
            $this->_parentLocations = [];
            foreach($obj->ParentLocations as $item){
                array_push($this->_parentLocations, new Location($item));
            }
        }
    }
}

class LabelsQueryObject extends SearchQueryObject{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_idType LabelIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_orderingProperties OrderLabelsBy[] */
    private $_orderingProperties;

    public function getOrderingProperties(){
        return $this->_orderingProperties;
    }

    public function setOrderingProperties($orderingProperties) {
        $this->_orderingProperties = $orderingProperties;
    }

    /* @var $_retrievalDepth LabelRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_idType = isset($obj->IdType) ? $obj->IdType : null;
        $this->_orderingProperties = isset($obj->OrderingProperties) ? $obj->OrderingProperties : null;
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
    }
}

/*
 * 
    Base class for search queries (ones that return more than one result
    
*/
class SearchQueryObject extends QueryObject{
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

    public function __construct($obj){
        $this->_pageNumber = isset($obj->PageNumber) ? $obj->PageNumber : null;
        $this->_pageSize = isset($obj->PageSize) ? $obj->PageSize : null;
        $this->_updatedSince = isset($obj->UpdatedSince) ? $obj->UpdatedSince : null;
    }
}

/*
 * 
    The <see cref="T:DecibelWebService.DiscTag" /> returned by the query.
    
*/
class DiscTagsQueryResult extends QueryResult{
    /* @var $_results DiscTag[] */
    private $_results;

    public function getResults(){
        return $this->_results;
    }

    public function __construct($jsonStr){
        $obj = json_decode($jsonStr);

        $this->_results = [];
        foreach($obj->Results as $item){
            array_push($this->_results, new DiscTag($item));
        }
        $this->setPageSize($obj->PageSize);
        $this->setPageCount($obj->PageCount);
        $this->setCount($obj->Count);
        $this->setTotalCount($obj->TotalCount);
    }
}

/*
 * 
    A particular release of an album.
    
*/
class Release extends DecibelEntity{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_releaseDate string */
    private $_releaseDate;

    public function getReleaseDate(){
        return $this->_releaseDate;
    }

    public function setReleaseDate($releaseDate) {
        $this->_releaseDate = $releaseDate;
    }

    /* @var $_releaseRegionLiteral string */
    private $_releaseRegionLiteral;

    public function getReleaseRegionLiteral(){
        return $this->_releaseRegionLiteral;
    }

    public function setReleaseRegionLiteral($releaseRegionLiteral) {
        $this->_releaseRegionLiteral = $releaseRegionLiteral;
    }

    /* @var $_labelLiteral string */
    private $_labelLiteral;

    public function getLabelLiteral(){
        return $this->_labelLiteral;
    }

    public function setLabelLiteral($labelLiteral) {
        $this->_labelLiteral = $labelLiteral;
    }

    /* @var $_formatTypes string */
    private $_formatTypes;

    public function getFormatTypes(){
        return $this->_formatTypes;
    }

    public function setFormatTypes($formatTypes) {
        $this->_formatTypes = $formatTypes;
    }

    /* @var $_identifiers ReleaseIdentifier[] */
    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    /* @var $_locations Location[] */
    private $_locations;

    public function getLocations(){
        return $this->_locations;
    }

    public function setLocations($locations) {
        $this->_locations = $locations;
    }

    /* @var $_labels Label[] */
    private $_labels;

    public function getLabels(){
        return $this->_labels;
    }

    public function setLabels($labels) {
        $this->_labels = $labels;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_releaseDate = isset($obj->ReleaseDate) ? $obj->ReleaseDate : null;
        $this->_releaseRegionLiteral = isset($obj->ReleaseRegionLiteral) ? $obj->ReleaseRegionLiteral : null;
        $this->_labelLiteral = isset($obj->LabelLiteral) ? $obj->LabelLiteral : null;
        $this->_formatTypes = isset($obj->FormatTypes) ? $obj->FormatTypes : null;
        if(isset($obj->Identifiers)){
            $this->_identifiers = [];
            foreach($obj->Identifiers as $item){
                array_push($this->_identifiers, new ReleaseIdentifier($item));
            }
        }
        if(isset($obj->Locations)){
            $this->_locations = [];
            foreach($obj->Locations as $item){
                array_push($this->_locations, new Location($item));
            }
        }
        if(isset($obj->Labels)){
            $this->_labels = [];
            foreach($obj->Labels as $item){
                array_push($this->_labels, new Label($item));
            }
        }
    }
}

class LocationsQueryObject extends SearchQueryObject{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_idType LocationIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_orderingProperties OrderLocationsBy[] */
    private $_orderingProperties;

    public function getOrderingProperties(){
        return $this->_orderingProperties;
    }

    public function setOrderingProperties($orderingProperties) {
        $this->_orderingProperties = $orderingProperties;
    }

    /* @var $_retrievalDepth LocationRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_idType = isset($obj->IdType) ? $obj->IdType : null;
        $this->_orderingProperties = isset($obj->OrderingProperties) ? $obj->OrderingProperties : null;
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
    }
}

/*
 * 
    An address which references a resource on the world wide web.
    
*/
class WebAddress extends DecibelEntity{
    /* @var $_address string */
    private $_address;

    public function getAddress(){
        return $this->_address;
    }

    public function setAddress($address) {
        $this->_address = $address;
    }

    /* @var $_website string */
    private $_website;

    public function getWebsite(){
        return $this->_website;
    }

    public function setWebsite($website) {
        $this->_website = $website;
    }

    public function __construct($obj){
        $this->_address = isset($obj->Address) ? $obj->Address : null;
        $this->_website = isset($obj->Website) ? $obj->Website : null;
    }
}

class AlbumsQueryObject extends SearchQueryObject{
    /* @var $_title string */
    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    /* @var $_titleSearchType AlbumSearchType */
    private $_titleSearchType;

    public function getTitleSearchType(){
        return $this->_titleSearchType;
    }

    public function setTitleSearchType($titleSearchType) {
        $this->_titleSearchType = $titleSearchType;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_idType AlbumIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
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

    /* @var $_isLive bool */
    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    /* @var $_dateReleased string */
    private $_dateReleased;

    public function getDateReleased(){
        return $this->_dateReleased;
    }

    public function setDateReleased($dateReleased) {
        $this->_dateReleased = $dateReleased;
    }

    /* @var $_orderingProperties OrderAlbumsBy[] */
    private $_orderingProperties;

    public function getOrderingProperties(){
        return $this->_orderingProperties;
    }

    public function setOrderingProperties($orderingProperties) {
        $this->_orderingProperties = $orderingProperties;
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

    /* @var $_retrievalDepth AlbumRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    /* @var $_genres string[] */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    public function __construct($obj){
        $this->_title = isset($obj->Title) ? $obj->Title : null;
        $this->_titleSearchType = isset($obj->TitleSearchType) ? $obj->TitleSearchType : null;
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_idType = isset($obj->IdType) ? $obj->IdType : null;
        if(isset($obj->Recordings)){
            $this->_recordings = [];
            foreach($obj->Recordings as $item){
                array_push($this->_recordings, new string($item));
            }
        }
        if(isset($obj->RecordingIds)){
            $this->_recordingIds = [];
            foreach($obj->RecordingIds as $item){
                array_push($this->_recordingIds, new string($item));
            }
        }
        if(isset($obj->Artists)){
            $this->_artists = [];
            foreach($obj->Artists as $item){
                array_push($this->_artists, new string($item));
            }
        }
        if(isset($obj->ArtistIds)){
            $this->_artistIds = [];
            foreach($obj->ArtistIds as $item){
                array_push($this->_artistIds, new string($item));
            }
        }
        if(isset($obj->Participants)){
            $this->_participants = [];
            foreach($obj->Participants as $item){
                array_push($this->_participants, new string($item));
            }
        }
        if(isset($obj->ParticipantIds)){
            $this->_participantIds = [];
            foreach($obj->ParticipantIds as $item){
                array_push($this->_participantIds, new string($item));
            }
        }
        $this->_isLive = isset($obj->IsLive) ? $obj->IsLive : null;
        $this->_dateReleased = isset($obj->DateReleased) ? $obj->DateReleased : null;
        $this->_orderingProperties = isset($obj->OrderingProperties) ? $obj->OrderingProperties : null;
        $this->_recordingSearchType = isset($obj->RecordingSearchType) ? $obj->RecordingSearchType : null;
        $this->_recordingIdType = isset($obj->RecordingIdType) ? $obj->RecordingIdType : null;
        $this->_artistSearchType = isset($obj->ArtistSearchType) ? $obj->ArtistSearchType : null;
        $this->_artistIdType = isset($obj->ArtistIdType) ? $obj->ArtistIdType : null;
        $this->_participantSearchType = isset($obj->ParticipantSearchType) ? $obj->ParticipantSearchType : null;
        $this->_participantIdType = isset($obj->ParticipantIdType) ? $obj->ParticipantIdType : null;
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
        if(isset($obj->Genres)){
            $this->_genres = [];
            foreach($obj->Genres as $item){
                array_push($this->_genres, new string($item));
            }
        }
    }
}

/*
 * 
    Editorial text about a particular subject.
    
*/
class Annotation extends DecibelEntity{
    /* @var $_text string */
    private $_text;

    public function getText(){
        return $this->_text;
    }

    public function setText($text) {
        $this->_text = $text;
    }

    /* @var $_references AnnotationReference[] */
    private $_references;

    public function getReferences(){
        return $this->_references;
    }

    public function setReferences($references) {
        $this->_references = $references;
    }

    public function __construct($obj){
        $this->_text = isset($obj->Text) ? $obj->Text : null;
        if(isset($obj->References)){
            $this->_references = [];
            foreach($obj->References as $item){
                array_push($this->_references, new AnnotationReference($item));
            }
        }
    }
}

class DiscTagsQueryObject extends SearchQueryObject{
    /* @var $_albumDecibelId string */
    private $_albumDecibelId;

    public function getAlbumDecibelId(){
        return $this->_albumDecibelId;
    }

    public function setAlbumDecibelId($albumDecibelId) {
        $this->_albumDecibelId = $albumDecibelId;
    }

    /* @var $_mediumDecibelId string */
    private $_mediumDecibelId;

    public function getMediumDecibelId(){
        return $this->_mediumDecibelId;
    }

    public function setMediumDecibelId($mediumDecibelId) {
        $this->_mediumDecibelId = $mediumDecibelId;
    }

    /* @var $_checksum string */
    private $_checksum;

    public function getChecksum(){
        return $this->_checksum;
    }

    public function setChecksum($checksum) {
        $this->_checksum = $checksum;
    }

    /* @var $_albumSpotifyUri string */
    private $_albumSpotifyUri;

    public function getAlbumSpotifyUri(){
        return $this->_albumSpotifyUri;
    }

    public function setAlbumSpotifyUri($albumSpotifyUri) {
        $this->_albumSpotifyUri = $albumSpotifyUri;
    }

    public function __construct($obj){
        $this->_albumDecibelId = isset($obj->AlbumDecibelId) ? $obj->AlbumDecibelId : null;
        $this->_mediumDecibelId = isset($obj->MediumDecibelId) ? $obj->MediumDecibelId : null;
        $this->_checksum = isset($obj->Checksum) ? $obj->Checksum : null;
        $this->_albumSpotifyUri = isset($obj->AlbumSpotifyUri) ? $obj->AlbumSpotifyUri : null;
    }
}

class AnnotationReference extends DecibelEntity{
    /* @var $_referenceNumber int */
    private $_referenceNumber;

    public function getReferenceNumber(){
        return $this->_referenceNumber;
    }

    public function setReferenceNumber($referenceNumber) {
        $this->_referenceNumber = $referenceNumber;
    }

    /* @var $_displayText string */
    private $_displayText;

    public function getDisplayText(){
        return $this->_displayText;
    }

    public function setDisplayText($displayText) {
        $this->_displayText = $displayText;
    }

    /* @var $_decibelId string */
    private $_decibelId;

    public function getDecibelId(){
        return $this->_decibelId;
    }

    public function setDecibelId($decibelId) {
        $this->_decibelId = $decibelId;
    }

    /* @var $_decibelType DecibelType */
    private $_decibelType;

    public function getDecibelType(){
        return $this->_decibelType;
    }

    public function setDecibelType($decibelType) {
        $this->_decibelType = $decibelType;
    }

    public function __construct($obj){
        $this->_referenceNumber = isset($obj->ReferenceNumber) ? $obj->ReferenceNumber : null;
        $this->_displayText = isset($obj->DisplayText) ? $obj->DisplayText : null;
        $this->_decibelId = isset($obj->DecibelId) ? $obj->DecibelId : null;
        $this->_decibelType = isset($obj->DecibelType) ? $obj->DecibelType : null;
    }
}

class ArtistsQueryObject extends SearchQueryObject{
    /* @var $_name string */
    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    /* @var $_nameSearchType ArtistSearchType */
    private $_nameSearchType;

    public function getNameSearchType(){
        return $this->_nameSearchType;
    }

    public function setNameSearchType($nameSearchType) {
        $this->_nameSearchType = $nameSearchType;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_idType ArtistIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_birthDate string */
    private $_birthDate;

    public function getBirthDate(){
        return $this->_birthDate;
    }

    public function setBirthDate($birthDate) {
        $this->_birthDate = $birthDate;
    }

    /* @var $_deathDate string */
    private $_deathDate;

    public function getDeathDate(){
        return $this->_deathDate;
    }

    public function setDeathDate($deathDate) {
        $this->_deathDate = $deathDate;
    }

    /* @var $_birthPlaceName string */
    private $_birthPlaceName;

    public function getBirthPlaceName(){
        return $this->_birthPlaceName;
    }

    public function setBirthPlaceName($birthPlaceName) {
        $this->_birthPlaceName = $birthPlaceName;
    }

    /* @var $_deathPlaceName string */
    private $_deathPlaceName;

    public function getDeathPlaceName(){
        return $this->_deathPlaceName;
    }

    public function setDeathPlaceName($deathPlaceName) {
        $this->_deathPlaceName = $deathPlaceName;
    }

    /* @var $_gender Gender */
    private $_gender;

    public function getGender(){
        return $this->_gender;
    }

    public function setGender($gender) {
        $this->_gender = $gender;
    }

    /* @var $_genres string[] */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    /* @var $_retrievalDepth ArtistRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    /* @var $_orderingProperties OrderArtistsBy[] */
    private $_orderingProperties;

    public function getOrderingProperties(){
        return $this->_orderingProperties;
    }

    public function setOrderingProperties($orderingProperties) {
        $this->_orderingProperties = $orderingProperties;
    }

    public function __construct($obj){
        $this->_name = isset($obj->Name) ? $obj->Name : null;
        $this->_nameSearchType = isset($obj->NameSearchType) ? $obj->NameSearchType : null;
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_idType = isset($obj->IdType) ? $obj->IdType : null;
        $this->_birthDate = isset($obj->BirthDate) ? $obj->BirthDate : null;
        $this->_deathDate = isset($obj->DeathDate) ? $obj->DeathDate : null;
        $this->_birthPlaceName = isset($obj->BirthPlaceName) ? $obj->BirthPlaceName : null;
        $this->_deathPlaceName = isset($obj->DeathPlaceName) ? $obj->DeathPlaceName : null;
        $this->_gender = isset($obj->Gender) ? $obj->Gender : null;
        if(isset($obj->Genres)){
            $this->_genres = [];
            foreach($obj->Genres as $item){
                array_push($this->_genres, new string($item));
            }
        }
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
        $this->_orderingProperties = isset($obj->OrderingProperties) ? $obj->OrderingProperties : null;
    }
}

/*
 * 
    Information for an MP3, FLAC or other digital file tag.
    
*/
class FileTag extends DecibelEntity{
    /* @var $_albumId string */
    private $_albumId;

    public function getAlbumId(){
        return $this->_albumId;
    }

    public function setAlbumId($albumId) {
        $this->_albumId = $albumId;
    }

    /* @var $_albumTitle string */
    private $_albumTitle;

    public function getAlbumTitle(){
        return $this->_albumTitle;
    }

    public function setAlbumTitle($albumTitle) {
        $this->_albumTitle = $albumTitle;
    }

    /* @var $_albumMediumId string */
    private $_albumMediumId;

    public function getAlbumMediumId(){
        return $this->_albumMediumId;
    }

    public function setAlbumMediumId($albumMediumId) {
        $this->_albumMediumId = $albumMediumId;
    }

    /* @var $_mediaType string */
    private $_mediaType;

    public function getMediaType(){
        return $this->_mediaType;
    }

    public function setMediaType($mediaType) {
        $this->_mediaType = $mediaType;
    }

    /* @var $_albumEAN string */
    private $_albumEAN;

    public function getAlbumEAN(){
        return $this->_albumEAN;
    }

    public function setAlbumEAN($albumEAN) {
        $this->_albumEAN = $albumEAN;
    }

    /* @var $_publisher string */
    private $_publisher;

    public function getPublisher(){
        return $this->_publisher;
    }

    public function setPublisher($publisher) {
        $this->_publisher = $publisher;
    }

    /* @var $_catalogNum string */
    private $_catalogNum;

    public function getCatalogNum(){
        return $this->_catalogNum;
    }

    public function setCatalogNum($catalogNum) {
        $this->_catalogNum = $catalogNum;
    }

    /* @var $_releaseDate string */
    private $_releaseDate;

    public function getReleaseDate(){
        return $this->_releaseDate;
    }

    public function setReleaseDate($releaseDate) {
        $this->_releaseDate = $releaseDate;
    }

    /* @var $_discTitle string */
    private $_discTitle;

    public function getDiscTitle(){
        return $this->_discTitle;
    }

    public function setDiscTitle($discTitle) {
        $this->_discTitle = $discTitle;
    }

    /* @var $_discNum int */
    private $_discNum;

    public function getDiscNum(){
        return $this->_discNum;
    }

    public function setDiscNum($discNum) {
        $this->_discNum = $discNum;
    }

    /* @var $_discCount int */
    private $_discCount;

    public function getDiscCount(){
        return $this->_discCount;
    }

    public function setDiscCount($discCount) {
        $this->_discCount = $discCount;
    }

    /* @var $_discEAN string */
    private $_discEAN;

    public function getDiscEAN(){
        return $this->_discEAN;
    }

    public function setDiscEAN($discEAN) {
        $this->_discEAN = $discEAN;
    }

    /* @var $_cddbId string */
    private $_cddbId;

    public function getCddbId(){
        return $this->_cddbId;
    }

    public function setCddbId($cddbId) {
        $this->_cddbId = $cddbId;
    }

    /* @var $_recordingId string */
    private $_recordingId;

    public function getRecordingId(){
        return $this->_recordingId;
    }

    public function setRecordingId($recordingId) {
        $this->_recordingId = $recordingId;
    }

    /* @var $_duration double */
    private $_duration;

    public function getDuration(){
        return $this->_duration;
    }

    public function setDuration($duration) {
        $this->_duration = $duration;
    }

    /* @var $_trackNumber int */
    private $_trackNumber;

    public function getTrackNumber(){
        return $this->_trackNumber;
    }

    public function setTrackNumber($trackNumber) {
        $this->_trackNumber = $trackNumber;
    }

    /* @var $_trackCount int */
    private $_trackCount;

    public function getTrackCount(){
        return $this->_trackCount;
    }

    public function setTrackCount($trackCount) {
        $this->_trackCount = $trackCount;
    }

    /* @var $_trackNumberLiteral string */
    private $_trackNumberLiteral;

    public function getTrackNumberLiteral(){
        return $this->_trackNumberLiteral;
    }

    public function setTrackNumberLiteral($trackNumberLiteral) {
        $this->_trackNumberLiteral = $trackNumberLiteral;
    }

    /* @var $_trackTitle string */
    private $_trackTitle;

    public function getTrackTitle(){
        return $this->_trackTitle;
    }

    public function setTrackTitle($trackTitle) {
        $this->_trackTitle = $trackTitle;
    }

    /* @var $_puid string */
    private $_puid;

    public function getPuid(){
        return $this->_puid;
    }

    public function setPuid($puid) {
        $this->_puid = $puid;
    }

    /* @var $_works string */
    private $_works;

    public function getWorks(){
        return $this->_works;
    }

    public function setWorks($works) {
        $this->_works = $works;
    }

    /* @var $_trackArtist string */
    private $_trackArtist;

    public function getTrackArtist(){
        return $this->_trackArtist;
    }

    public function setTrackArtist($trackArtist) {
        $this->_trackArtist = $trackArtist;
    }

    /* @var $_genres string */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    /* @var $_conductor string */
    private $_conductor;

    public function getConductor(){
        return $this->_conductor;
    }

    public function setConductor($conductor) {
        $this->_conductor = $conductor;
    }

    /* @var $_recordingDate string */
    private $_recordingDate;

    public function getRecordingDate(){
        return $this->_recordingDate;
    }

    public function setRecordingDate($recordingDate) {
        $this->_recordingDate = $recordingDate;
    }

    /* @var $_recordingVenue string */
    private $_recordingVenue;

    public function getRecordingVenue(){
        return $this->_recordingVenue;
    }

    public function setRecordingVenue($recordingVenue) {
        $this->_recordingVenue = $recordingVenue;
    }

    /* @var $_matrix string */
    private $_matrix;

    public function getMatrix(){
        return $this->_matrix;
    }

    public function setMatrix($matrix) {
        $this->_matrix = $matrix;
    }

    /* @var $_participants string */
    private $_participants;

    public function getParticipants(){
        return $this->_participants;
    }

    public function setParticipants($participants) {
        $this->_participants = $participants;
    }

    /* @var $_beatsPerMinute string */
    private $_beatsPerMinute;

    public function getBeatsPerMinute(){
        return $this->_beatsPerMinute;
    }

    public function setBeatsPerMinute($beatsPerMinute) {
        $this->_beatsPerMinute = $beatsPerMinute;
    }

    public function __construct($obj){
        $this->_albumId = isset($obj->AlbumId) ? $obj->AlbumId : null;
        $this->_albumTitle = isset($obj->AlbumTitle) ? $obj->AlbumTitle : null;
        $this->_albumMediumId = isset($obj->AlbumMediumId) ? $obj->AlbumMediumId : null;
        $this->_mediaType = isset($obj->MediaType) ? $obj->MediaType : null;
        $this->_albumEAN = isset($obj->AlbumEAN) ? $obj->AlbumEAN : null;
        $this->_publisher = isset($obj->Publisher) ? $obj->Publisher : null;
        $this->_catalogNum = isset($obj->CatalogNum) ? $obj->CatalogNum : null;
        $this->_releaseDate = isset($obj->ReleaseDate) ? $obj->ReleaseDate : null;
        $this->_discTitle = isset($obj->DiscTitle) ? $obj->DiscTitle : null;
        $this->_discNum = isset($obj->DiscNum) ? $obj->DiscNum : null;
        $this->_discCount = isset($obj->DiscCount) ? $obj->DiscCount : null;
        $this->_discEAN = isset($obj->DiscEAN) ? $obj->DiscEAN : null;
        $this->_cddbId = isset($obj->CddbId) ? $obj->CddbId : null;
        $this->_recordingId = isset($obj->RecordingId) ? $obj->RecordingId : null;
        $this->_duration = isset($obj->Duration) ? $obj->Duration : null;
        $this->_trackNumber = isset($obj->TrackNumber) ? $obj->TrackNumber : null;
        $this->_trackCount = isset($obj->TrackCount) ? $obj->TrackCount : null;
        $this->_trackNumberLiteral = isset($obj->TrackNumberLiteral) ? $obj->TrackNumberLiteral : null;
        $this->_trackTitle = isset($obj->TrackTitle) ? $obj->TrackTitle : null;
        $this->_puid = isset($obj->Puid) ? $obj->Puid : null;
        $this->_works = isset($obj->Works) ? $obj->Works : null;
        $this->_trackArtist = isset($obj->TrackArtist) ? $obj->TrackArtist : null;
        $this->_genres = isset($obj->Genres) ? $obj->Genres : null;
        $this->_conductor = isset($obj->Conductor) ? $obj->Conductor : null;
        $this->_recordingDate = isset($obj->RecordingDate) ? $obj->RecordingDate : null;
        $this->_recordingVenue = isset($obj->RecordingVenue) ? $obj->RecordingVenue : null;
        $this->_matrix = isset($obj->Matrix) ? $obj->Matrix : null;
        $this->_participants = isset($obj->Participants) ? $obj->Participants : null;
        $this->_beatsPerMinute = isset($obj->BeatsPerMinute) ? $obj->BeatsPerMinute : null;
    }
}

class RecordingsQueryObject extends SearchQueryObject{
    /* @var $_title string */
    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    /* @var $_titleSearchType RecordingSearchType */
    private $_titleSearchType;

    public function getTitleSearchType(){
        return $this->_titleSearchType;
    }

    public function setTitleSearchType($titleSearchType) {
        $this->_titleSearchType = $titleSearchType;
    }

    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_idType RecordingIdType */
    private $_idType;

    public function getIdType(){
        return $this->_idType;
    }

    public function setIdType($idType) {
        $this->_idType = $idType;
    }

    /* @var $_dateProduced string */
    private $_dateProduced;

    public function getDateProduced(){
        return $this->_dateProduced;
    }

    public function setDateProduced($dateProduced) {
        $this->_dateProduced = $dateProduced;
    }

    /* @var $_placeProducedName string */
    private $_placeProducedName;

    public function getPlaceProducedName(){
        return $this->_placeProducedName;
    }

    public function setPlaceProducedName($placeProducedName) {
        $this->_placeProducedName = $placeProducedName;
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

    /* @var $_genres string[] */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    /* @var $_isLive bool */
    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    /* @var $_maxSeconds double */
    private $_maxSeconds;

    public function getMaxSeconds(){
        return $this->_maxSeconds;
    }

    public function setMaxSeconds($maxSeconds) {
        $this->_maxSeconds = $maxSeconds;
    }

    /* @var $_minSeconds double */
    private $_minSeconds;

    public function getMinSeconds(){
        return $this->_minSeconds;
    }

    public function setMinSeconds($minSeconds) {
        $this->_minSeconds = $minSeconds;
    }

    /* @var $_orderingProperties OrderRecordingsBy[] */
    private $_orderingProperties;

    public function getOrderingProperties(){
        return $this->_orderingProperties;
    }

    public function setOrderingProperties($orderingProperties) {
        $this->_orderingProperties = $orderingProperties;
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

    /* @var $_retrievalDepth RecordingRetrievalDepth */
    private $_retrievalDepth;

    public function getRetrievalDepth(){
        return $this->_retrievalDepth;
    }

    public function setRetrievalDepth($retrievalDepth) {
        $this->_retrievalDepth = $retrievalDepth;
    }

    public function __construct($obj){
        $this->_title = isset($obj->Title) ? $obj->Title : null;
        $this->_titleSearchType = isset($obj->TitleSearchType) ? $obj->TitleSearchType : null;
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_idType = isset($obj->IdType) ? $obj->IdType : null;
        $this->_dateProduced = isset($obj->DateProduced) ? $obj->DateProduced : null;
        $this->_placeProducedName = isset($obj->PlaceProducedName) ? $obj->PlaceProducedName : null;
        if(isset($obj->Composers)){
            $this->_composers = [];
            foreach($obj->Composers as $item){
                array_push($this->_composers, new string($item));
            }
        }
        if(isset($obj->ComposerIds)){
            $this->_composerIds = [];
            foreach($obj->ComposerIds as $item){
                array_push($this->_composerIds, new string($item));
            }
        }
        if(isset($obj->Participants)){
            $this->_participants = [];
            foreach($obj->Participants as $item){
                array_push($this->_participants, new string($item));
            }
        }
        if(isset($obj->ParticipantIds)){
            $this->_participantIds = [];
            foreach($obj->ParticipantIds as $item){
                array_push($this->_participantIds, new string($item));
            }
        }
        if(isset($obj->Artists)){
            $this->_artists = [];
            foreach($obj->Artists as $item){
                array_push($this->_artists, new string($item));
            }
        }
        if(isset($obj->ArtistIds)){
            $this->_artistIds = [];
            foreach($obj->ArtistIds as $item){
                array_push($this->_artistIds, new string($item));
            }
        }
        if(isset($obj->Genres)){
            $this->_genres = [];
            foreach($obj->Genres as $item){
                array_push($this->_genres, new string($item));
            }
        }
        $this->_isLive = isset($obj->IsLive) ? $obj->IsLive : null;
        $this->_maxSeconds = isset($obj->MaxSeconds) ? $obj->MaxSeconds : null;
        $this->_minSeconds = isset($obj->MinSeconds) ? $obj->MinSeconds : null;
        $this->_orderingProperties = isset($obj->OrderingProperties) ? $obj->OrderingProperties : null;
        $this->_artistSearchType = isset($obj->ArtistSearchType) ? $obj->ArtistSearchType : null;
        $this->_artistIdType = isset($obj->ArtistIdType) ? $obj->ArtistIdType : null;
        $this->_composerSearchType = isset($obj->ComposerSearchType) ? $obj->ComposerSearchType : null;
        $this->_composerIdType = isset($obj->ComposerIdType) ? $obj->ComposerIdType : null;
        $this->_participantSearchType = isset($obj->ParticipantSearchType) ? $obj->ParticipantSearchType : null;
        $this->_participantIdType = isset($obj->ParticipantIdType) ? $obj->ParticipantIdType : null;
        $this->_retrievalDepth = isset($obj->RetrievalDepth) ? $obj->RetrievalDepth : null;
    }
}

/*
 * 
    A code which identifies a particular entity.
    
*/
class Identifier extends DecibelEntity{
    /* @var $_identifierType TIdentifierType */
    private $_identifierType;

    public function getIdentifierType(){
        return $this->_identifierType;
    }

    public function setIdentifierType($identifierType) {
        $this->_identifierType = $identifierType;
    }

    /* @var $_value string */
    private $_value;

    public function getValue(){
        return $this->_value;
    }

    public function setValue($value) {
        $this->_value = $value;
    }

    /* @var $_additionalInformation string */
    private $_additionalInformation;

    public function getAdditionalInformation(){
        return $this->_additionalInformation;
    }

    public function setAdditionalInformation($additionalInformation) {
        $this->_additionalInformation = $additionalInformation;
    }

    public function __construct($obj){
        $this->_identifierType = isset($obj->IdentifierType) ? $obj->IdentifierType : null;
        $this->_value = isset($obj->Value) ? $obj->Value : null;
        $this->_additionalInformation = isset($obj->AdditionalInformation) ? $obj->AdditionalInformation : null;
    }
}

class LabelIdentifier extends Identifier{
}

/*
 * 
    A code which identifies an <see cref="T:DecibelWebService.Location" />.
    
*/
class LocationIdentifier extends Identifier{
}

/*
 * 
    A person or a group.
    
*/
class Artist extends DecibelEntity{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_probability Probability */
    private $_probability;

    public function getProbability(){
        return $this->_probability;
    }

    public function setProbability($probability) {
        $this->_probability = $probability;
    }

    /* @var $_join string */
    private $_join;

    public function getJoin(){
        return $this->_join;
    }

    public function setJoin($join) {
        $this->_join = $join;
    }

    /* @var $_appearanceType AppearanceType */
    private $_appearanceType;

    public function getAppearanceType(){
        return $this->_appearanceType;
    }

    public function setAppearanceType($appearanceType) {
        $this->_appearanceType = $appearanceType;
    }

    /* @var $_nameLiteral string */
    private $_nameLiteral;

    public function getNameLiteral(){
        return $this->_nameLiteral;
    }

    public function setNameLiteral($nameLiteral) {
        $this->_nameLiteral = $nameLiteral;
    }

    /* @var $_stageName string */
    private $_stageName;

    public function getStageName(){
        return $this->_stageName;
    }

    public function setStageName($stageName) {
        $this->_stageName = $stageName;
    }

    /* @var $_legalName string */
    private $_legalName;

    public function getLegalName(){
        return $this->_legalName;
    }

    public function setLegalName($legalName) {
        $this->_legalName = $legalName;
    }

    /* @var $_membershipDate string */
    private $_membershipDate;

    public function getMembershipDate(){
        return $this->_membershipDate;
    }

    public function setMembershipDate($membershipDate) {
        $this->_membershipDate = $membershipDate;
    }

    /* @var $_artistType ArtistType */
    private $_artistType;

    public function getArtistType(){
        return $this->_artistType;
    }

    public function setArtistType($artistType) {
        $this->_artistType = $artistType;
    }

    /* @var $_gender Gender */
    private $_gender;

    public function getGender(){
        return $this->_gender;
    }

    public function setGender($gender) {
        $this->_gender = $gender;
    }

    /* @var $_isFictional bool */
    private $_isFictional;

    public function getIsFictional(){
        return $this->_isFictional;
    }

    public function setIsFictional($isFictional) {
        $this->_isFictional = $isFictional;
    }

    /* @var $_genres Genre[] */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    /* @var $_birthDate string */
    private $_birthDate;

    public function getBirthDate(){
        return $this->_birthDate;
    }

    public function setBirthDate($birthDate) {
        $this->_birthDate = $birthDate;
    }

    /* @var $_deathDate string */
    private $_deathDate;

    public function getDeathDate(){
        return $this->_deathDate;
    }

    public function setDeathDate($deathDate) {
        $this->_deathDate = $deathDate;
    }

    /* @var $_birthPlace string */
    private $_birthPlace;

    public function getBirthPlace(){
        return $this->_birthPlace;
    }

    public function setBirthPlace($birthPlace) {
        $this->_birthPlace = $birthPlace;
    }

    /* @var $_deathPlace string */
    private $_deathPlace;

    public function getDeathPlace(){
        return $this->_deathPlace;
    }

    public function setDeathPlace($deathPlace) {
        $this->_deathPlace = $deathPlace;
    }

    /* @var $_biographies Annotation[] */
    private $_biographies;

    public function getBiographies(){
        return $this->_biographies;
    }

    public function setBiographies($biographies) {
        $this->_biographies = $biographies;
    }

    /* @var $_shortDescriptions Annotation[] */
    private $_shortDescriptions;

    public function getShortDescriptions(){
        return $this->_shortDescriptions;
    }

    public function setShortDescriptions($shortDescriptions) {
        $this->_shortDescriptions = $shortDescriptions;
    }

    /* @var $_webAddresses WebAddress[] */
    private $_webAddresses;

    public function getWebAddresses(){
        return $this->_webAddresses;
    }

    public function setWebAddresses($webAddresses) {
        $this->_webAddresses = $webAddresses;
    }

    /* @var $_members Artist[] */
    private $_members;

    public function getMembers(){
        return $this->_members;
    }

    public function setMembers($members) {
        $this->_members = $members;
    }

    /* @var $_groups Artist[] */
    private $_groups;

    public function getGroups(){
        return $this->_groups;
    }

    public function setGroups($groups) {
        $this->_groups = $groups;
    }

    /* @var $_relatedArtists Artist[] */
    private $_relatedArtists;

    public function getRelatedArtists(){
        return $this->_relatedArtists;
    }

    public function setRelatedArtists($relatedArtists) {
        $this->_relatedArtists = $relatedArtists;
    }

    /* @var $_identifiers ArtistIdentifier[] */
    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_probability = isset($obj->Probability) ? $obj->Probability : null;
        $this->_join = isset($obj->Join) ? $obj->Join : null;
        $this->_appearanceType = isset($obj->AppearanceType) ? $obj->AppearanceType : null;
        $this->_nameLiteral = isset($obj->NameLiteral) ? $obj->NameLiteral : null;
        $this->_stageName = isset($obj->StageName) ? $obj->StageName : null;
        $this->_legalName = isset($obj->LegalName) ? $obj->LegalName : null;
        $this->_membershipDate = isset($obj->MembershipDate) ? $obj->MembershipDate : null;
        $this->_artistType = isset($obj->ArtistType) ? $obj->ArtistType : null;
        $this->_gender = isset($obj->Gender) ? $obj->Gender : null;
        $this->_isFictional = isset($obj->IsFictional) ? $obj->IsFictional : null;
        if(isset($obj->Genres)){
            $this->_genres = [];
            foreach($obj->Genres as $item){
                array_push($this->_genres, new Genre($item));
            }
        }
        $this->_birthDate = isset($obj->BirthDate) ? $obj->BirthDate : null;
        $this->_deathDate = isset($obj->DeathDate) ? $obj->DeathDate : null;
        $this->_birthPlace = isset($obj->BirthPlace) ? $obj->BirthPlace : null;
        $this->_deathPlace = isset($obj->DeathPlace) ? $obj->DeathPlace : null;
        if(isset($obj->Biographies)){
            $this->_biographies = [];
            foreach($obj->Biographies as $item){
                array_push($this->_biographies, new Annotation($item));
            }
        }
        if(isset($obj->ShortDescriptions)){
            $this->_shortDescriptions = [];
            foreach($obj->ShortDescriptions as $item){
                array_push($this->_shortDescriptions, new Annotation($item));
            }
        }
        if(isset($obj->WebAddresses)){
            $this->_webAddresses = [];
            foreach($obj->WebAddresses as $item){
                array_push($this->_webAddresses, new WebAddress($item));
            }
        }
        if(isset($obj->Members)){
            $this->_members = [];
            foreach($obj->Members as $item){
                array_push($this->_members, new Artist($item));
            }
        }
        if(isset($obj->Groups)){
            $this->_groups = [];
            foreach($obj->Groups as $item){
                array_push($this->_groups, new Artist($item));
            }
        }
        if(isset($obj->RelatedArtists)){
            $this->_relatedArtists = [];
            foreach($obj->RelatedArtists as $item){
                array_push($this->_relatedArtists, new Artist($item));
            }
        }
        if(isset($obj->Identifiers)){
            $this->_identifiers = [];
            foreach($obj->Identifiers as $item){
                array_push($this->_identifiers, new ArtistIdentifier($item));
            }
        }
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
    How a particular artist contributed to an album, recording, or work.
    
*/
class Participation extends DecibelEntity{
    /* @var $_activityLiteral string */
    private $_activityLiteral;

    public function getActivityLiteral(){
        return $this->_activityLiteral;
    }

    public function setActivityLiteral($activityLiteral) {
        $this->_activityLiteral = $activityLiteral;
    }

    /* @var $_activities Activity[] */
    private $_activities;

    public function getActivities(){
        return $this->_activities;
    }

    public function setActivities($activities) {
        $this->_activities = $activities;
    }

    /* @var $_isFeatured bool */
    private $_isFeatured;

    public function getIsFeatured(){
        return $this->_isFeatured;
    }

    public function setIsFeatured($isFeatured) {
        $this->_isFeatured = $isFeatured;
    }

    /* @var $_artistsLiteral string */
    private $_artistsLiteral;

    public function getArtistsLiteral(){
        return $this->_artistsLiteral;
    }

    public function setArtistsLiteral($artistsLiteral) {
        $this->_artistsLiteral = $artistsLiteral;
    }

    /* @var $_artists Artist[] */
    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

    public function __construct($obj){
        $this->_activityLiteral = isset($obj->ActivityLiteral) ? $obj->ActivityLiteral : null;
        if(isset($obj->Activities)){
            $this->_activities = [];
            foreach($obj->Activities as $item){
                array_push($this->_activities, new Activity($item));
            }
        }
        $this->_isFeatured = isset($obj->IsFeatured) ? $obj->IsFeatured : null;
        $this->_artistsLiteral = isset($obj->ArtistsLiteral) ? $obj->ArtistsLiteral : null;
        if(isset($obj->Artists)){
            $this->_artists = [];
            foreach($obj->Artists as $item){
                array_push($this->_artists, new Artist($item));
            }
        }
    }
}

/*
 * 
    A code which identifies an <see cref="T:DecibelWebService.Artist" />.
    
*/
class ArtistIdentifier extends Identifier{
}

/*
 * 
    An event associated with the creation of a recording.
    
*/
class ProductionEvent extends DecibelEntity{
    /* @var $_isRecording bool */
    private $_isRecording;

    public function getIsRecording(){
        return $this->_isRecording;
    }

    public function setIsRecording($isRecording) {
        $this->_isRecording = $isRecording;
    }

    /* @var $_isMixing bool */
    private $_isMixing;

    public function getIsMixing(){
        return $this->_isMixing;
    }

    public function setIsMixing($isMixing) {
        $this->_isMixing = $isMixing;
    }

    /* @var $_isMastering bool */
    private $_isMastering;

    public function getIsMastering(){
        return $this->_isMastering;
    }

    public function setIsMastering($isMastering) {
        $this->_isMastering = $isMastering;
    }

    /* @var $_isRemastering bool */
    private $_isRemastering;

    public function getIsRemastering(){
        return $this->_isRemastering;
    }

    public function setIsRemastering($isRemastering) {
        $this->_isRemastering = $isRemastering;
    }

    /* @var $_date string */
    private $_date;

    public function getDate(){
        return $this->_date;
    }

    public function setDate($date) {
        $this->_date = $date;
    }

    /* @var $_locations Location[] */
    private $_locations;

    public function getLocations(){
        return $this->_locations;
    }

    public function setLocations($locations) {
        $this->_locations = $locations;
    }

    public function __construct($obj){
        $this->_isRecording = isset($obj->IsRecording) ? $obj->IsRecording : null;
        $this->_isMixing = isset($obj->IsMixing) ? $obj->IsMixing : null;
        $this->_isMastering = isset($obj->IsMastering) ? $obj->IsMastering : null;
        $this->_isRemastering = isset($obj->IsRemastering) ? $obj->IsRemastering : null;
        $this->_date = isset($obj->Date) ? $obj->Date : null;
        if(isset($obj->Locations)){
            $this->_locations = [];
            foreach($obj->Locations as $item){
                array_push($this->_locations, new Location($item));
            }
        }
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
    A single distinct recording of sound. 
    
*/
class Recording extends DecibelEntity{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_title string */
    private $_title;

    public function getTitle(){
        return $this->_title;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    /* @var $_addenda string */
    private $_addenda;

    public function getAddenda(){
        return $this->_addenda;
    }

    public function setAddenda($addenda) {
        $this->_addenda = $addenda;
    }

    /* @var $_originalAlbumTitle string */
    private $_originalAlbumTitle;

    public function getOriginalAlbumTitle(){
        return $this->_originalAlbumTitle;
    }

    public function setOriginalAlbumTitle($originalAlbumTitle) {
        $this->_originalAlbumTitle = $originalAlbumTitle;
    }

    /* @var $_originalAlbumId string */
    private $_originalAlbumId;

    public function getOriginalAlbumId(){
        return $this->_originalAlbumId;
    }

    public function setOriginalAlbumId($originalAlbumId) {
        $this->_originalAlbumId = $originalAlbumId;
    }

    /* @var $_originalReleaseDate string */
    private $_originalReleaseDate;

    public function getOriginalReleaseDate(){
        return $this->_originalReleaseDate;
    }

    public function setOriginalReleaseDate($originalReleaseDate) {
        $this->_originalReleaseDate = $originalReleaseDate;
    }

    /* @var $_albumSequence int */
    private $_albumSequence;

    public function getAlbumSequence(){
        return $this->_albumSequence;
    }

    public function setAlbumSequence($albumSequence) {
        $this->_albumSequence = $albumSequence;
    }

    /* @var $_duration double */
    private $_duration;

    public function getDuration(){
        return $this->_duration;
    }

    public function setDuration($duration) {
        $this->_duration = $duration;
    }

    /* @var $_isLive bool */
    private $_isLive;

    public function getIsLive(){
        return $this->_isLive;
    }

    public function setIsLive($isLive) {
        $this->_isLive = $isLive;
    }

    /* @var $_isConcert bool */
    private $_isConcert;

    public function getIsConcert(){
        return $this->_isConcert;
    }

    public function setIsConcert($isConcert) {
        $this->_isConcert = $isConcert;
    }

    /* @var $_beatsPerMinute double */
    private $_beatsPerMinute;

    public function getBeatsPerMinute(){
        return $this->_beatsPerMinute;
    }

    public function setBeatsPerMinute($beatsPerMinute) {
        $this->_beatsPerMinute = $beatsPerMinute;
    }

    /* @var $_mainArtistsLiteral string */
    private $_mainArtistsLiteral;

    public function getMainArtistsLiteral(){
        return $this->_mainArtistsLiteral;
    }

    public function setMainArtistsLiteral($mainArtistsLiteral) {
        $this->_mainArtistsLiteral = $mainArtistsLiteral;
    }

    /* @var $_featuredArtistsLiteral string */
    private $_featuredArtistsLiteral;

    public function getFeaturedArtistsLiteral(){
        return $this->_featuredArtistsLiteral;
    }

    public function setFeaturedArtistsLiteral($featuredArtistsLiteral) {
        $this->_featuredArtistsLiteral = $featuredArtistsLiteral;
    }

    /* @var $_artists Artist[] */
    private $_artists;

    public function getArtists(){
        return $this->_artists;
    }

    public function setArtists($artists) {
        $this->_artists = $artists;
    }

    /* @var $_participations Participation[] */
    private $_participations;

    public function getParticipations(){
        return $this->_participations;
    }

    public function setParticipations($participations) {
        $this->_participations = $participations;
    }

    /* @var $_works Work[] */
    private $_works;

    public function getWorks(){
        return $this->_works;
    }

    public function setWorks($works) {
        $this->_works = $works;
    }

    /* @var $_identifiers RecordingIdentifier[] */
    private $_identifiers;

    public function getIdentifiers(){
        return $this->_identifiers;
    }

    public function setIdentifiers($identifiers) {
        $this->_identifiers = $identifiers;
    }

    /* @var $_genres Genre[] */
    private $_genres;

    public function getGenres(){
        return $this->_genres;
    }

    public function setGenres($genres) {
        $this->_genres = $genres;
    }

    /* @var $_musicalKeys MusicKey[] */
    private $_musicalKeys;

    public function getMusicalKeys(){
        return $this->_musicalKeys;
    }

    public function setMusicalKeys($musicalKeys) {
        $this->_musicalKeys = $musicalKeys;
    }

    /* @var $_productionEvents ProductionEvent[] */
    private $_productionEvents;

    public function getProductionEvents(){
        return $this->_productionEvents;
    }

    public function setProductionEvents($productionEvents) {
        $this->_productionEvents = $productionEvents;
    }

    /* @var $_constituentRecordings Recording[] */
    private $_constituentRecordings;

    public function getConstituentRecordings(){
        return $this->_constituentRecordings;
    }

    public function setConstituentRecordings($constituentRecordings) {
        $this->_constituentRecordings = $constituentRecordings;
    }

    /* @var $_constituentRecordingType ConstituentRecordingType */
    private $_constituentRecordingType;

    public function getConstituentRecordingType(){
        return $this->_constituentRecordingType;
    }

    public function setConstituentRecordingType($constituentRecordingType) {
        $this->_constituentRecordingType = $constituentRecordingType;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_title = isset($obj->Title) ? $obj->Title : null;
        $this->_addenda = isset($obj->Addenda) ? $obj->Addenda : null;
        $this->_originalAlbumTitle = isset($obj->OriginalAlbumTitle) ? $obj->OriginalAlbumTitle : null;
        $this->_originalAlbumId = isset($obj->OriginalAlbumId) ? $obj->OriginalAlbumId : null;
        $this->_originalReleaseDate = isset($obj->OriginalReleaseDate) ? $obj->OriginalReleaseDate : null;
        $this->_albumSequence = isset($obj->AlbumSequence) ? $obj->AlbumSequence : null;
        $this->_duration = isset($obj->Duration) ? $obj->Duration : null;
        $this->_isLive = isset($obj->IsLive) ? $obj->IsLive : null;
        $this->_isConcert = isset($obj->IsConcert) ? $obj->IsConcert : null;
        $this->_beatsPerMinute = isset($obj->BeatsPerMinute) ? $obj->BeatsPerMinute : null;
        $this->_mainArtistsLiteral = isset($obj->MainArtistsLiteral) ? $obj->MainArtistsLiteral : null;
        $this->_featuredArtistsLiteral = isset($obj->FeaturedArtistsLiteral) ? $obj->FeaturedArtistsLiteral : null;
        if(isset($obj->Artists)){
            $this->_artists = [];
            foreach($obj->Artists as $item){
                array_push($this->_artists, new Artist($item));
            }
        }
        if(isset($obj->Participations)){
            $this->_participations = [];
            foreach($obj->Participations as $item){
                array_push($this->_participations, new Participation($item));
            }
        }
        if(isset($obj->Works)){
            $this->_works = [];
            foreach($obj->Works as $item){
                array_push($this->_works, new Work($item));
            }
        }
        if(isset($obj->Identifiers)){
            $this->_identifiers = [];
            foreach($obj->Identifiers as $item){
                array_push($this->_identifiers, new RecordingIdentifier($item));
            }
        }
        if(isset($obj->Genres)){
            $this->_genres = [];
            foreach($obj->Genres as $item){
                array_push($this->_genres, new Genre($item));
            }
        }
        if(isset($obj->MusicalKeys)){
            $this->_musicalKeys = [];
            foreach($obj->MusicalKeys as $item){
                array_push($this->_musicalKeys, new MusicKey($item));
            }
        }
        if(isset($obj->ProductionEvents)){
            $this->_productionEvents = [];
            foreach($obj->ProductionEvents as $item){
                array_push($this->_productionEvents, new ProductionEvent($item));
            }
        }
        if(isset($obj->ConstituentRecordings)){
            $this->_constituentRecordings = [];
            foreach($obj->ConstituentRecordings as $item){
                array_push($this->_constituentRecordings, new Recording($item));
            }
        }
        $this->_constituentRecordingType = isset($obj->ConstituentRecordingType) ? $obj->ConstituentRecordingType : null;
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
    A code which identifies a <see cref="T:DecibelWebService.Release" />.
    
*/
class ReleaseIdentifier extends Identifier{
}

/*
 * 
    A named classification group.
    
*/
class Tag extends DecibelEntity{
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_name string */
    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_name = isset($obj->Name) ? $obj->Name : null;
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
    /* @var $_id string */
    private $_id;

    public function getId(){
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    /* @var $_name string */
    private $_name;

    public function getName(){
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    /* @var $_recordingSequence int */
    private $_recordingSequence;

    public function getRecordingSequence(){
        return $this->_recordingSequence;
    }

    public function setRecordingSequence($recordingSequence) {
        $this->_recordingSequence = $recordingSequence;
    }

    /* @var $_participations Participation[] */
    private $_participations;

    public function getParticipations(){
        return $this->_participations;
    }

    public function setParticipations($participations) {
        $this->_participations = $participations;
    }

    public function __construct($obj){
        $this->_id = isset($obj->Id) ? $obj->Id : null;
        $this->_name = isset($obj->Name) ? $obj->Name : null;
        $this->_recordingSequence = isset($obj->RecordingSequence) ? $obj->RecordingSequence : null;
        if(isset($obj->Participations)){
            $this->_participations = [];
            foreach($obj->Participations as $item){
                array_push($this->_participations, new Participation($item));
            }
        }
    }
}

