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

    public function testViewHas()
    {
        $this->call('GET','/hogehoge');
        $this->assertViewHas('message');
    }

    public function testViewHasValue()
    {
        $this->call('GET','/hogehoge');
        $this->assertViewHas('message','hogehoge');
    }

}
