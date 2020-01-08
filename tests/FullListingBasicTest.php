<?php

use PHPUnit\Framework\TestCase;

class FullListingBasicTest extends TestCase
{
  protected $data = array();
  protected $listing;

  protected function setUp(): void
  {
    $this->data['id'] = '11';
    $this->data['title'] = 'Bulgaria PHP Conference';
    $this->data['website'] = 'http://www.bgphp222.org';
    $this->data['email'] = 'conference@bgphp.org';
    $this->data['twitter'] = 'bgphpconf';
    $this->data['status'] = 'basic';

    $this->listing = new ListingBasic($this->data);
  }

  //Write a test for the ListingBasic class to ensure that an Object is created when passing the minimum, id and title.
  public function testCanBeCreatedWithValidIdAndTitle()
  {
    $this->assertInstanceOf(
        ListingBasic::class,
        $this->listing
    );
  }

  //Write a test for the ListingBasic class to ensure that getStatus method returns 'basic'.
  public function testHasBasicStatus()
  {
    $this->assertEquals("basic",$this->listing->getStatus());
  }

  //Write a test for the ListingBasic class to ensure that the get method for each property is returning the expected results: id, title, website, email, twitter.
  public function testHasId()
  {
    $this->assertEquals($this->data['id'],$this->listing->getId());
  }

  public function testHasTitle()
  {
    $this->assertEquals($this->data['title'],$this->listing->getTitle());
  }

  public function testHasWebsite()
  {

    $this->assertEquals($this->data['website'],$this->listing->getWebsite());
  }

  public function testHasEmail()
  {
    $this->assertEquals($this->data['email'],$this->listing->getEmail());
  }

  public function testHasTwitter()
  {
    $this->assertEquals($this->data['twitter'],$this->listing->getTwitter());
  }

  //Write a test for the ListingBasic class to ensure that the toArray method returns an array where each item equals the expected results: id, title, website, email, twitter.
  public function testListingPropertiesArrayContainsAllProperties()
  {
    //$this->data['status'] = 'basic';
    $this->assertEquals($this->data,$this->listing->toArray());
  }

  function testChangeStatusToDefaultValue()
  {
    $this->listing->setStatus('');
    $this->assertEquals('basic',$this->listing->getStatus());
  }

  function testClearWebsite()
  {
    $this->listing->setWebsite('');
    $this->assertNull($this->listing->getWebsite());
  }

  function testChangeWebsiteAndAdditionOfHttp()
  {
    $this->listing->setWebsite('www.google.com');
    $this->assertEquals('http://www.google.com',$this->listing->getWebsite());
  }



}
