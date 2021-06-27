<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddTest extends TestCase
{
    /** @test */
    public function it_adds_two_numbers()
    {
        $this->postJson('/api/add', [
            'number_1' => 2,
            'number_2' => 3,
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 5]);
    }

    /**
     * @test
     */
    public function id_adds_numbers_from_arrays()
    {
        $this->postJson('/api/add', [
            'numbers' => [1, 2, 3]
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 6]);
    }
}
