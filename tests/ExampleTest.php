<?php

class ExampleTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->call('GET', '/');

        $this->assertResponseOk();
    }

    public function testHello()
    {
        $response = $this->call('GET','/hogehoge');
        var_dump($response->getContent());
        $this->assertEquals('hogehoge',$response->getContent());
    }

}
