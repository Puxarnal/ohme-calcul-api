<?php

namespace Tests\Feature;

use Tests\TestCase;

class DivideTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_divide_a_number_by_another_one()
    {
        $this->postJson('/api/divide', [
            'number_1' => 6,
            'number_2' => 2
        ])
            ->assertStatus(200)
            ->assertJson(['result' => 3]);
    }
}
