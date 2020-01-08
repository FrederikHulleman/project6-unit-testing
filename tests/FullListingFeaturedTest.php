<?php

use PHPUnit\Framework\TestCase;

class FullListingFeaturedTest extends TestCase
{
  protected $data = array();
  protected $listing;

  protected function setUp(): void
  {
    $this->data['id'] = '13';
    $this->data['title'] = 'Sunshine PHP Conference';
    $this->data['website'] = 'http://sunshinephp.com';
    $this->data['email'] = 'info@sunshinephp.org';
    $this->data['twitter'] = 'SunShinePHP';
    $this->data['description'] = 'The conference has something for every level of PHP developer. We start on February 2nd with a full day of 8 PHP related tutorials and workshops that are each 3 hours of in-depth information. Next we follow that with 2 days on February 3rd and 4th containing 5 keynotes and 40 PHP talks over 4 tracks.';

    $this->listing = new ListingFeatured($this->data);
  }


}
