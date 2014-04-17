<?php

namespace test\CommandCenter;

class ConnectorTest extends \PHPUnit_Framework_TestCase {
    
    public function testFindWebBanners() {
        $connector = new \CommandCenter\Connector();
        $response = $connector->findWebBanners();
        $this->assertInternalType("array", $response);
    }
    
}