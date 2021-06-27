<?php

namespace Tests\Feature;

use Tests\TestCase;

class SubstractTest extends TestCase
{
    /**
     * @test
     */
    public function it_substracts_two_numbers()
    {
        $this->postJson('/api/substract', [
            'number_1' => 3,
            'number_2' => 2
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 1]);
    }
}
