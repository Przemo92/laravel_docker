<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersTest extends TestCase
{
    /** @test */
    public function the_posts_show_route_can_be_accessed()
    {
        //GIVEN
        $name = 'Tomek';
        //WHEN
        $response = $this->get('/palindromes/' . $name);

        //THEN
        $response->assertStatus(200)
            ->assertSeeText('Tomek');
    }
}
