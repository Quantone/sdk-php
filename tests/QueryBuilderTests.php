<?php

namespace SdkTests;


use DecibelSDK\AlbumsQuery;
use DecibelSDK\iQuery;

class BuildAlbumsQuery extends \PHPUnit_Framework_TestCase {
    public static function AlbumsQueries(){
        $id = new AlbumsQuery();
        $id->setId("12345");

        return array(
            array($id, "Expectedstr"),
            array()
        );
    }

    public function BuildAlbumsQueryTest(iQuery $qo, $expectedStr){
        $this->assertEquals($qo->getQueryString(), $expectedStr);
    }
} 