<?php

class HelloTest 
{
    public function createApplication()
    {
        return require __DIR__ . "/../src/index.php";
    }
    
    public function testHelloNameExample()
    {
        $client = $this->createClient();
        $client->request("GET", "/hello/test");
        
        $this->assertTrue($client->getResponse()->isOk());
        $this->assertContains("test", $client->getResponse()->getContent());
    }
}
