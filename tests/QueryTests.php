<?php

namespace SdkTests;

require_once '../src/Decibel.php';
require_once '../src/DecibelObjectModel.php';
require_once '../src/DecibelQuery.php';
require_once '../src/DecibelException.php';

use DecibelSDK;

class QueryTests extends \PHPUnit_Framework_TestCase {
    const NO_RESULTS = "Query returned no results.";

    private $_decibel;

    protected function setUp(){
        // $this->_decibel = new Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
    }

    public function testAlbumsQuery(){
        // Arrange
        $qo = new \DecibelSDK\AlbumsQuery();
        $qo->setTitle("Rumours");
        $qo->setDateReleased("1977");
        $qo->setDepth(array(\DecibelSDK\AlbumRetrievalDepth::RECORDINGS,\DecibelSDK\AlbumRetrievalDepth::IDENTIFIERS,\DecibelSDK\AlbumRetrievalDepth::PARTICIPATIONS,\DecibelSDK\AlbumRetrievalDepth::GENRES,\DecibelSDK\AlbumRetrievalDepth::ARTIST_DETAILS,\DecibelSDK\AlbumRetrievalDepth::RELEASES));
        $qo->setTitleSearchType(\DecibelSDK\AlbumSearchType::FULL_NAME);
        $qo->setArtists(array("Fleetwood Mac"));
        $qo->setParticipants(array("Herbert Worthington"));
        $qo->setRecordings(array("Go Your Own Way"));

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeAlbumsQuery($qo);
        $result = $qr->getResults()[0];

        // Assert
        $this->assertEquals("Fleetwood Mac", $result->getArtistsLiteral());
        $this->assertEquals("Rumours", $result->getTitle());
        $this->assertEquals("1977", $result->getOriginalReleaseDate());

        $recordings = $result->getRecordings()[0];
        $this->assertEquals("f0be5d06-bf74-11e3-be9b-ac220b82800d", $recordings->getId());
        $this->assertEquals("Go Your Own Way", $recordings->getTitle());
        $this->assertEquals("Wolfram Huschke", $recordings->getOriginalAlbumTitle());

        $identifiers = $result->getIdentifiers()[0];
        $this->assertEquals(\DecibelSDK\AlbumIdType::DISCOGS_MASTER, $identifiers->getIdentifierType());
        $this->assertEquals("m2", $identifiers->getValue());

        $participations = $result->getParticipations()[0];
        $this->assertEquals("Photography By", $participations->getActivityLiteral());
        $this->assertEquals("Herbert Worthington", $participations->getArtistsLiteral());

        $genres = $result->getGenres()[0];
        $this->assertEquals("blues rock", $genres->getName());

        $artists = $result->getArtists()[0];
        $this->assertEquals("4aea91de-318f-e311-be87-ac220b82800d", $artists->getId());
        $this->assertEquals("Fleetwood Mac", $artists->getNameLiteral());

        $releases = $result->getReleases()[0];
        $this->assertEquals("baee8712-368f-e311-be87-ac220b82800d", $releases->getId());
        $this->assertEquals("1975", $releases->getReleaseDate());
        $this->assertEquals("Reprise Records", $releases->getLabelLiteral());
        $this->assertEquals("US", $releases->getReleaseRegionLiteral());
    }

    public function testAlbumsByIdQuery(){
        // Arrange
        $qo = new \DecibelSDK\AlbumsByIdQuery();
        $qo->setId("156dda6c-358f-e311-be87-ac220b82800d");
        $qo->setDepth(array(\DecibelSDK\AlbumRetrievalDepth::ARTIST_DETAILS));

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeAlbumsByIdQuery($qo);
        $result = $qr->getResult();

        // Assert
        $this->assertEquals("156dda6c-358f-e311-be87-ac220b82800d", $result->getId());
        $this->assertEquals("Fleetwood Mac", $result->getArtistsLiteral());
        $this->assertEquals("Rumours", $result->getTitle());
        $this->assertEquals("1977", $result->getOriginalReleaseDate());
    }

    public function testLabelsByIdQuery(){
        // Arrange
        $qo = new \DecibelSDK\LabelsByIdQuery();
        $qo->setId("9a0d3e1e-b75e-11e4-bec6-3085a9494443");

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeLabelsByIdQuery($qo);
        $result = $qr->getResult();

        // Assert
        $this->assertEquals("9a0d3e1e-b75e-11e4-bec6-3085a9494443", $result->getId());
        $this->assertEquals("TestRecordLabel", $result->getName());
    }

    public function testLabelsQuery(){
        // Arrange
        $qo = new \DecibelSDK\LabelsQuery();
        $qo->setId("9a0d3e1e-b75e-11e4-bec6-3085a9494443");

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeLabelsQuery($qo);
        $result = $qr->getResults()[0];

        // Assert
        $this->assertEquals("9a0d3e1e-b75e-11e4-bec6-3085a9494443", $result->getId());
        $this->assertEquals("TestRecordLabel", $result->getName());
    }

    public function testLocationsByIdQuery(){
        // Arrange
        $qo = new \DecibelSDK\LocationsByIdQuery();
        $qo->setId("ac05eb0b-0bef-426e-9d9c-8e8562ba57bc");
        $qo->setDepth(array(\DecibelSDK\LocationRetrievalDepth::IDENTIFIERS,\DecibelSDK\LocationRetrievalDepth::PARENT_LOCATIONS));

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeLocationsByIdQuery($qo);
        $result = $qr->getResult();

        // Assert
        $this->assertEquals("ac05eb0b-0bef-426e-9d9c-8e8562ba57bc", $result->getId());
        $this->assertEquals("Bottom Location", $result->getName());
    }

    public function testLocationsQuery(){
        // Arrange
        $qo = new \DecibelSDK\LocationsQuery();
        $qo->setId("ac05eb0b-0bef-426e-9d9c-8e8562ba57bc");
        $qo->setDepth(array(\DecibelSDK\LocationRetrievalDepth::IDENTIFIERS,\DecibelSDK\LocationRetrievalDepth::PARENT_LOCATIONS));

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeLocationsQuery($qo);
        $result = $qr->getResults()[0];

        // Assert
        $this->assertEquals("ac05eb0b-0bef-426e-9d9c-8e8562ba57bc", $result->getId());

        $identifiers = $result->getIdentifiers()[0];
        $this->assertEquals(\DecibelSDK\LocationIdType::GEO_NAMES, $identifiers->getIdentifierType());
        $this->assertEquals("102", $identifiers->getValue());

        $parentLocations = $result->getParentLocations()[0];
        $this->assertEquals("c6f42e79-32f5-4b70-85b6-54c9eae655ad", $parentLocations->getId());
        $this->assertEquals("Middle Location", $parentLocations->getName());
        $this->assertEquals("4ed08017-989c-406d-a865-7c65789c8f25", $parentLocations->getParentLocations()[0]->getId());
        $this->assertEquals("Top Location", $parentLocations->getParentLocations()[0]->getName());
    }

    public function testRecordingsQuery(){
        // Arrange
        $qo = new \DecibelSDK\RecordingsQuery();
        $qo->setTitle("Go Your Own Way");
        $qo->setDepth(array(\DecibelSDK\RecordingRetrievalDepth::PARTICIPATIONS,\DecibelSDK\RecordingRetrievalDepth::ARTIST_DETAILS,\DecibelSDK\RecordingRetrievalDepth::WORKS,\DecibelSDK\RecordingRetrievalDepth::GENRES,\DecibelSDK\RecordingRetrievalDepth::IDENTIFIERS,\DecibelSDK\RecordingRetrievalDepth::SESSION_INFO));
        $qo->setTitleSearchType(\DecibelSDK\RecordingSearchType::FULL_NAME);
        $qo->setArtists(array("Fleetwood Mac"));
        $qo->setComposers(array("WilsonPhillips"));
        $qo->setIsLive(true);
        $qo->setParticipants(array("Lindsey Buckingham"));

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeRecordingsQuery($qo);
        $result = $qr->getResults()[0];

        // Assert
        $this->assertEquals("f0be5d06-bf74-11e3-be9b-ac220b82800d", $result->getId());
        $this->assertEquals("Wolfram Huschke", $result->getOriginalAlbumTitle());

        $participations = $result->getParticipations()[0];
        $this->assertEquals("Guitar [Guitars]", $participations->getActivityLiteral());
        $this->assertEquals("Lindsey Buckingham", $participations->getArtistsLiteral());

        $artists = $result->getArtists()[0];
        $this->assertEquals("4aea91de-318f-e311-be87-ac220b82800d", $artists->getId());
        $this->assertEquals("Fleetwood Mac", $artists->getNameLiteral());

        $works = $result->getWorks()[0];
        $this->assertEquals("3f9f1c81-b6ef-11e3-be98-ac220b82800d", $works->getId());
        $this->assertEquals("Go Your Own Way", $works->getName());

        $genres = $result->getGenres()[0];
        $this->assertEquals("blues rock", $genres->getName());
    }

    public function testRecordingsByIdQuery(){
        // Arrange
        $qo = new \DecibelSDK\RecordingsByIdQuery();
        $qo->setId("f0be5d06-bf74-11e3-be9b-ac220b82800d");
        $qo->setDepth(array(\DecibelSDK\RecordingRetrievalDepth::IDENTIFIERS));

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeRecordingsByIdQuery($qo);
        $result = $qr->getResult();

        // Assert
        $this->assertEquals("f0be5d06-bf74-11e3-be9b-ac220b82800d", $result->getId());
        $this->assertEquals("Wolfram Huschke", $result->getOriginalAlbumTitle());
    }

    public function testDiscTagsQuery(){
        // Arrange
        $qo = new \DecibelSDK\DiscTagsQuery();
        $qo->setTaggedItemId("156dda6c-358f-e311-be87-ac220b82800d");
        $qo->setIdType(\DecibelSDK\DiscTagIdType::DECIBEL_ALBUM);

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeDiscTagsQuery($qo);
        $result = $qr->getResults()[0];

        // Assert

        $fileTags = $result->getFileTags()[0];
        $this->assertEquals("4011222327628", $fileTags->getAlbumEAN());
        $this->assertEquals("156dda6c-358f-e311-be87-ac220b82800d", $fileTags->getAlbumId());
        $this->assertEquals("baee8712-368f-e311-be87-ac220b82800d", $fileTags->getAlbumMediumId());
        $this->assertEquals("Rumours", $fileTags->getAlbumTitle());
        $this->assertEquals("TestCatNum", $fileTags->getCatalogNum());
        $this->assertEquals(1, $fileTags->getDiscCount());
    }

    public function testArtistsQuery(){
        // Arrange
        $qo = new \DecibelSDK\ArtistsQuery();
        $qo->setName("Bob Welch");
        $qo->setDepth(array(\DecibelSDK\ArtistRetrievalDepth::IDENTIFIERS,\DecibelSDK\ArtistRetrievalDepth::BIOGRAPHY,\DecibelSDK\ArtistRetrievalDepth::MEMBERS,\DecibelSDK\ArtistRetrievalDepth::DATES,\DecibelSDK\ArtistRetrievalDepth::GENRES,\DecibelSDK\ArtistRetrievalDepth::URLS));
        $qo->setNameSearchType(\DecibelSDK\ArtistSearchType::FULL_NAME);
        $qo->setDateBorn("1945-08-31");
        $qo->setDateDied("2012-06-07");
        $qo->setGender(\DecibelSDK\Gender::MALE);

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeArtistsQuery($qo);
        $result = $qr->getResults()[0];

        // Assert
        $this->assertEquals("0abc2121-29ec-48e4-b018-abca5b4c8040", $result->getId());
        $this->assertEquals("Bob Welch", $result->getStageName());
        $this->assertEquals("1945-08-31", $result->getBirthDate());
        $this->assertEquals("Los Angeles, California", $result->getBirthPlace());
        $this->assertEquals("2012-06-07", $result->getDeathDate());
        $this->assertEquals("Nashville", $result->getDeathPlace());
        $this->assertEquals(false, $result->getIsFictional());
    }

    public function testArtistsByIdQuery(){
        // Arrange
        $qo = new \DecibelSDK\ArtistsByIdQuery();
        $qo->setId("f01e23df-318f-e311-be87-ac220b82800d");
        $qo->setDepth(array(\DecibelSDK\ArtistRetrievalDepth::GROUPS,\DecibelSDK\ArtistRetrievalDepth::DATES));

        // Act
        $decibel = new DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");
        $qr = $decibel->executeArtistsByIdQuery($qo);
        $result = $qr->getResult();

        // Assert
        $this->assertEquals("f01e23df-318f-e311-be87-ac220b82800d", $result->getId());
        $this->assertEquals("Mick Fleetwood", $result->getStageName());

        $groups = $result->getGroups()[0];
        $this->assertEquals("Fleetwood Mac", $groups->getStageName());
    }

    /**
     * @expectedException DecibelSDK\DecibelException
     */
    public function testError(){
        // Arrange
        $qo = new DecibelSDK\AlbumsQuery();
        $qo->setTitle("Rumours");

        $decibel = new DecibelSDK\Decibel("", "");
        $qr = $decibel->executeAlbumsQuery($qo);
        $result = $qr->getResults();
    }
}
