<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function setUp()
    {
	#sleep(1);
        $this->pdo = new PDO($GLOBALS['db_type'].":host=192.168.99.100", $GLOBALS['db_username'], $GLOBALS['db_password']);

        $this->pdo->query("CREATE DATABASE hello_world_test");

        $this->pdo = new PDO($GLOBALS['db_type'].":dbname=hello_world_test;host=192.168.99.100", $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("CREATE TABLE hello (what VARCHAR(50) NOT NULL)");
    }

    public function tearDown()
    {
        $this->pdo->query("DROP TABLE hello");
    }

    public function testHelloWorld()
    {
        $helloWorld = new HelloWorld($this->pdo);

        $this->assertEquals('Hello World', $helloWorld->hello());
    }

    public function testHello()
    {
        $helloWorld = new HelloWorld($this->pdo);

        $this->assertEquals('Hello Bar', $helloWorld->hello('Bar'));
    }

    public function testWhat()
    {
        $helloWorld = new HelloWorld($this->pdo);

        $this->assertFalse($helloWorld->what());

        $helloWorld->hello('Bar');

        $this->assertEquals('Bar', $helloWorld->what());
    }
}

