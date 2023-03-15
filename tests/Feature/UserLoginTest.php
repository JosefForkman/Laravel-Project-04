<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_can_Login_User(): void
    {

        # Create temp user
        User::create([
            'name' => fake()->name(),
            'email' => "josef.forkman@telia.com",
            'password' => Hash::make("password"),
        ]);

        #
        $this->followingRedirects();

        // dd($user);

        # Make post request to /login and sed email & password
        $respond = $this->post('/login_form', [
            'email' => "josef.forkman@telia.com",
            'password' => Hash::make("password")
        ]);

        # Check if we can find the user name
        // $respond->assertSeeText($user->name);

        # Check if respond is 200
        $respond->assertSuccessful();
    }
}
