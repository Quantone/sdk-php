<?php

require_once 'Enum.php';
require_once 'DecibelQuery.php';
require_once 'DecibelObjectModel.php';
require_once 'Decibel.php';

$decibel = new \DecibelSDK\Decibel("5589c9d1", "4154f53630c5cffd106cbe3ba0bd1eff");

$albumQuery = new \DecibelSDK\AlbumsQuery();
$albumQuery->setTitle("Rumours");

$artistQuery = new \DecibelSDK\ArtistsQuery();
$artistQuery->setName("Fleetwood Mac");

$albumResult = $decibel->executeAlbumsQuery($albumQuery);



/*
$albumQuery = new \DecibelSDK\AlbumsQuery();
$albumQuery->title = "Rumours";
$albumQuery->depth = [\DecibelSDK\AlbumRetrievalDepth::GENRES, \DecibelSDK\AlbumRetrievalDepth::RECORDINGS];
//$albumQuery->id = "156dda6c-358f-e311-be87-ac220b82800d";
var_dump($albumQuery);
$albumQuery->run();
$error = $albumQuery->getError();
$result = $albumQuery->getResult();
$search = $albumQuery->getSearch();

$recordingQuery = new \DecibelSDK\RecordingsQuery();
$recordingQuery->artistSearchType = \DecibelSDK\ArtistSearchType::DECIBEL;
$recordingQuery->artist = "4aea91de-318f-e311-be87-ac220b82800d";
var_dump($recordingQuery);
$recordingQuery->run();
$result = $recordingQuery->getResult();
*/
?>

<html>
<head>

</head>
<body>
    <h1>Album Query Results</h1>
</body>
</html>