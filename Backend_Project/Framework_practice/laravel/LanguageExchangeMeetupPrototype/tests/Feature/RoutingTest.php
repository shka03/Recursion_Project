<?php

/**
 * 補足：特定のユニットテストを実行させたい場合。
 * 実行コマンド：php artisan test tests/Feature/実行したいテストファイル
 * 例：php artisan test tests/Feature/RoutingTest.php
 */

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testGetUrlHome(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testGetUrlUsers(): void
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function testGetUrlMeetup(): void
    {
        $response = $this->get('/meetup');

        $response->assertStatus(200);
    }
}
