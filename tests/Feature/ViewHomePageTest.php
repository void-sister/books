<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewHomePageTest extends TestCase
{

    public function test_if_home_page_loads_correctly()
    {
      $response = $this->get('/');

      $response->assertStatus(200);
      $response->assertSee('Books Project');
    }
}
