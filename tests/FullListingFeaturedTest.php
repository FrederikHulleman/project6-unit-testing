<?php

use PHPUnit\Framework\TestCase;

class FullListingFeaturedTest extends TestCase
{
  protected $data = array();
  protected $listing;

  protected function setUp(): void
  {
    $this->data = ['id' => '16',
                    'title' => 'Cascadia PHP',
                    'website' => 'https://www.cascadiaphp.com',
                    'email' => 'leadership@cascadiaphp.com',
                    'twitter' => 'cascadiaphp',
                    'description' => 'The Pacific Northwest (also known as Cascadia) is a magical land covered in Rain Forests, Deserts, Coasts, Mountains, Rivers, and People.',
                    'coc' => 'One for All Events proudly stands by our long tradition of providing safe, secure, and productive environments at all of our events. We want to provide a welcoming experience to all attendees, old and new, and enjoy the great hospitality that the community has to offer together.'
                  ];

    $this->listing = new ListingFeatured($this->data);
  }

  //Write a test for the ListingFeatured class to ensure that getStatus method returns 'featured'.
  public function testHasFeaturedStatus()
  {
    $this->assertEquals("featured",$this->listing->getStatus());
  }

  //Write a test for the ListingFeatured class to ensure that getCoc method returns the expected results.
  public function testHasCoc()
  {
    $this->assertEquals($this->data['coc'],$this->listing->getCoc());
  }
}
