<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Utils/Utils.php';

class UtilsTest extends TestCase {

    public function setUp(): void
  {
    parent::setUp();
  }
    public function testCanConvertToUpperCase() {
        $folderName = 'test_folder';
        $expected = 'test_FOLDER';
        $this->assertEquals($expected, convertToUpperCase($folderName));
    }
}