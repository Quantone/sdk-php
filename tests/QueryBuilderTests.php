<?php

namespace SdkTests;

require_once '../src/Decibel.php';
require_once '../src/DecibelObjectModel.php';
require_once '../src/DecibelQuery.php';
require_once '../src/InternalUtilities.php';

class QueryBuilderTests extends \PHPUnit_Framework_TestCase {
    /**
     * @dataProvider AlbumsQueries
     */
    public function testAlbumsQuery(\DecibelSDK\iQuery $qo, $expectedStr){
        $this->assertEquals($expectedStr, $qo->getQueryString());
    }

    /**
     * @dataProvider AlbumsByIdQueries
     */
    public function testAlbumsByIdQuery(\DecibelSDK\iQuery $qo, $expectedStr){
        $this->assertEquals($expectedStr, $qo->getQueryString());
    }

    /**
     * @dataProvider RecordingsQueries
     */
    public function testRecordingsQuery(\DecibelSDK\iQuery $qo, $expectedStr){
        $this->assertEquals($expectedStr, $qo->getQueryString());
    }

    /**
     * @dataProvider RecordingsByIdQueries
     */
    public function testRecordingsByIdQuery(\DecibelSDK\iQuery $qo, $expectedStr){
        $this->assertEquals($expectedStr, $qo->getQueryString());
    }

    /**
     * @dataProvider ArtistsQueries
     */
    public function testArtistsQuery(\DecibelSDK\iQuery $qo, $expectedStr){
        $this->assertEquals($expectedStr, $qo->getQueryString());
    }

    /**
     * @dataProvider ArtistsByIdQueries
     */
    public function testArtistsByIdQuery(\DecibelSDK\iQuery $qo, $expectedStr){
        $this->assertEquals($expectedStr, $qo->getQueryString());
    }

    public static function AlbumsQueries(){
        // Artists
        $artists = new \DecibelSDK\AlbumsQuery();
        $artists->setArtists(array("Jimi Hendrix","Chas Chandler"));

        // Participants
        $participants = new \DecibelSDK\AlbumsQuery();
        $participants->setParticipants(array("Jimi Hendrix","Chas Chandler"));

        // Recordings
        $recordings = new \DecibelSDK\AlbumsQuery();
        $recordings->setRecordings(array("GRRR!","Sgt. Pepper's Lonely Hearts Club Band"));

        // Depth
        $depth = new \DecibelSDK\AlbumsQuery();
        $depth->setDepth(array(\DecibelSDK\AlbumRetrievalDepth::IDENTIFIERS,\DecibelSDK\AlbumRetrievalDepth::GENRES));

        // TitleSearchType
        $titleSearchType = new \DecibelSDK\AlbumsQuery();
        $titleSearchType->setTitleSearchType(\DecibelSDK\AlbumSearchType::FULL_NAME);

        // Title
        $title = new \DecibelSDK\AlbumsQuery();
        $title->setTitle("GRRR!");

        // DateReleased
        $dateReleased = new \DecibelSDK\AlbumsQuery();
        $dateReleased->setDateReleased("01/08/2014");

        // PageNumber
        $pageNumber = new \DecibelSDK\AlbumsQuery();
        $pageNumber->setPageNumber(111);

        // PageSize
        $pageSize = new \DecibelSDK\AlbumsQuery();
        $pageSize->setPageSize(616);

        return array(
            array($artists, "Albums?artists=Jimi Hendrix,Chas Chandler"),
            array($participants, "Albums?participants=Jimi Hendrix,Chas Chandler"),
            array($recordings, "Albums?recordings=GRRR!,Sgt. Pepper's Lonely Hearts Club Band"),
            array($depth, "Albums?depth=Identifiers,Genres"),
            array($titleSearchType, "Albums"),
            array($title, "Albums?title=GRRR!"),
            array($dateReleased, "Albums?dateReleased=01/08/2014"),
            array($pageNumber, "Albums?pageNumber=111"),
            array($pageSize, "Albums?pageSize=616"),
        );
    }

    public static function AlbumsByIdQueries(){
        // Depth
        $depth = new \DecibelSDK\AlbumsByIdQuery();
        $depth->setDepth(array(\DecibelSDK\AlbumRetrievalDepth::IDENTIFIERS,\DecibelSDK\AlbumRetrievalDepth::GENRES,\DecibelSDK\AlbumRetrievalDepth::PARTICIPATIONS,\DecibelSDK\AlbumRetrievalDepth::RECORDINGS));

        // Id
        $id = new \DecibelSDK\AlbumsByIdQuery();
        $id->setId("12345");

        return array(
            array($depth, "Albums/depth=Identifiers,Genres,Participations,Recordings"),
            array($id, "Albums/12345"),
        );
    }

    public static function RecordingsQueries(){
        // Artists
        $artists = new \DecibelSDK\RecordingsQuery();
        $artists->setArtists(array("Jimi Hendrix","Chas Chandler"));

        // Composers
        $composers = new \DecibelSDK\RecordingsQuery();
        $composers->setComposers(array("Jimi Hendrix","Chas Chandler"));

        // Participants
        $participants = new \DecibelSDK\RecordingsQuery();
        $participants->setParticipants(array("Jimi Hendrix","Chas Chandler"));

        // Depth
        $depth = new \DecibelSDK\RecordingsQuery();
        $depth->setDepth(array(\DecibelSDK\RecordingRetrievalDepth::IDENTIFIERS,\DecibelSDK\RecordingRetrievalDepth::GENRES));

        // TitleSearchType
        $titleSearchType = new \DecibelSDK\RecordingsQuery();
        $titleSearchType->setTitleSearchType(\DecibelSDK\RecordingSearchType::PARTIAL_NAME);

        // Title
        $title = new \DecibelSDK\RecordingsQuery();
        $title->setTitle("GRRR!");

        // MinSeconds
        $minSeconds = new \DecibelSDK\RecordingsQuery();
        $minSeconds->setMinSeconds(111);

        // MaxSeconds
        $maxSeconds = new \DecibelSDK\RecordingsQuery();
        $maxSeconds->setMaxSeconds(616);

        // IsLive
        $isLive = new \DecibelSDK\RecordingsQuery();
        $isLive->setIsLive(true);

        // DateMade
        $dateMade = new \DecibelSDK\RecordingsQuery();
        $dateMade->setDateMade("01/08/2014");

        // PageNumber
        $pageNumber = new \DecibelSDK\RecordingsQuery();
        $pageNumber->setPageNumber(111);

        // PageSize
        $pageSize = new \DecibelSDK\RecordingsQuery();
        $pageSize->setPageSize(616);

        return array(
            array($artists, "Recordings?artists=Jimi Hendrix,Chas Chandler"),
            array($composers, "Recordings?composers=Jimi Hendrix,Chas Chandler"),
            array($participants, "Recordings?participants=Jimi Hendrix,Chas Chandler"),
            array($depth, "Recordings?depth=Identifiers,Genres"),
            array($titleSearchType, "Recordings?titleSearchType=PartialName"),
            array($title, "Recordings?title=GRRR!"),
            array($minSeconds, "Recordings?minSeconds=111"),
            array($maxSeconds, "Recordings?maxSeconds=616"),
            array($isLive, "Recordings?isLive=True"),
            array($dateMade, "Recordings?dateMade=01/08/2014"),
            array($pageNumber, "Recordings?pageNumber=111"),
            array($pageSize, "Recordings?pageSize=616"),
        );
    }

    public static function RecordingsByIdQueries(){
        // Depth
        $depth = new \DecibelSDK\RecordingsByIdQuery();
        $depth->setDepth(array(\DecibelSDK\RecordingRetrievalDepth::IDENTIFIERS,\DecibelSDK\RecordingRetrievalDepth::GENRES));

        // Id
        $id = new \DecibelSDK\RecordingsByIdQuery();
        $id->setId("12345");

        return array(
            array($depth, "Recordings/depth=Identifiers,Genres"),
            array($id, "Recordings/12345"),
        );
    }

    public static function ArtistsQueries(){
        // Depth
        $depth = new \DecibelSDK\ArtistsQuery();
        $depth->setDepth(array(\DecibelSDK\ArtistRetrievalDepth::IDENTIFIERS,\DecibelSDK\ArtistRetrievalDepth::GENRES));

        // NameSearchType
        $nameSearchType = new \DecibelSDK\ArtistsQuery();
        $nameSearchType->setNameSearchType(\DecibelSDK\ArtistSearchType::PARTIAL_NAME);

        // Name
        $name = new \DecibelSDK\ArtistsQuery();
        $name->setName("Jimi Hendrix");

        // DateBorn
        $dateBorn = new \DecibelSDK\ArtistsQuery();
        $dateBorn->setDateBorn("01/08/2014");

        // DateDied
        $dateDied = new \DecibelSDK\ArtistsQuery();
        $dateDied->setDateDied("01/08/2014");

        // Gender
        $gender = new \DecibelSDK\ArtistsQuery();
        $gender->setGender(\DecibelSDK\Gender::FEMALE);

        // PageNumber
        $pageNumber = new \DecibelSDK\ArtistsQuery();
        $pageNumber->setPageNumber(111);

        // PageSize
        $pageSize = new \DecibelSDK\ArtistsQuery();
        $pageSize->setPageSize(616);

        return array(
            array($depth, "Artists?depth=Identifiers,Genres"),
            array($nameSearchType, "Artists?nameSearchType=PartialName"),
            array($name, "Artists?name=Jimi Hendrix"),
            array($dateBorn, "Artists?dateBorn=01/08/2014"),
            array($dateDied, "Artists?dateDied=01/08/2014"),
            array($gender, "Artists?gender=Female"),
            array($pageNumber, "Artists?pageNumber=111"),
            array($pageSize, "Artists?pageSize=616"),
        );
    }

    public static function ArtistsByIdQueries(){
        // Id
        $id = new \DecibelSDK\ArtistsByIdQuery();
        $id->setId("12345");

        // Depth
        $depth = new \DecibelSDK\ArtistsByIdQuery();
        $depth->setDepth(array(\DecibelSDK\ArtistRetrievalDepth::IDENTIFIERS,\DecibelSDK\ArtistRetrievalDepth::GENRES));

        return array(
            array($id, "Artists/12345"),
            array($depth, "Artists/depth=Identifiers,Genres"),
        );
    }

}
