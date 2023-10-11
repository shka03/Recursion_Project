<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testGetUrlRoot(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testGetUrlHome(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
    
    public function testGetUrlMenu(): void
    {
        $response = $this->get('/menu');

        $response->assertStatus(200);
    }

    public function testGetUrlLocation(): void
    {
        $response = $this->get('/location');

        $response->assertStatus(200);
    }

    public function testGetUrlHistory(): void    {
        $response = $this->get('/history');

        $response->assertStatus(200);
    }

    public function testGetUrlContact(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
