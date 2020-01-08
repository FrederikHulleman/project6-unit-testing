<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
  //protected $data = array();

  //Write tests for the ListingBasic class to ensure that all three Exception messages are returned as expected.

  /** @test */
  function createBasicListingMustBeWithData()
  {
    $this->expectExceptionMessage('Unable to create a listing, data unavailable');
    //initializing this object should be with a $data array
    $listing = new ListingBasic();
  }

  /** @test */
  function createBasicListingMustBeWithValidId()
  {
    $this->expectExceptionMessage('Unable to create a listing, invalid id');
    //prepare data array with fake data, but without the id, to trigger this exception
    $this->data['website'] = 'test';
    $listing = new ListingBasic($this->data);
  }

  /** @test */
  function createBasicListingMustBeWithValidTitle()
  {
    $this->expectExceptionMessage('Unable to create a listing, invalid title');
    //prepare data array with fake data, with an ID, but without a title, to trigger this exception
    $this->data['id'] = 1;
    $listing = new ListingBasic($this->data);
  }

  //Write a test for the ListingBasic class to ensure that an Object is created when passing the minimum, id and title.

  /** @test */
  public function CanBeCreatedWithValidIdAndTitle()
  {
    $this->data['id'] = 1;
    $this->data['title'] = 'title';

    $this->assertInstanceOf(
        ListingBasic::class,
        new ListingBasic($this->data)
    );
  }

}
