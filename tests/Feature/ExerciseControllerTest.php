<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Exercise;

class ExerciseControllerTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
         $item = Exercise::factory()->create();
         $response = $this->get('/api/v1/exercise');
         $response->assertStatus(200);
         $response->assertJsonFragment([
                'name' => $item->name,
                'email' => $item->email,
                'profile' => $item->profile,
            ]);
    }
}
