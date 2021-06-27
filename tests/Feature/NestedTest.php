<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NestedTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_compute_nested_operations()
    {
        $this->postJson('/api/nested', [
            'operations' => [[34, '+', 32], '/', 3]
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 22]);
    }
}
