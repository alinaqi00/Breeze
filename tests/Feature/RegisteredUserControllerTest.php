<?php

namespace Tests\Feature\Controllers\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisteredUserControllerTest extends TestCase
{
    use  WithFaker;

    public function test_user_can_register()
    {
        // Arrange
        $userData = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'phone_number' => '1234567890',
            'role' => 'user',
        ];

        // Act
        $response = $this->post(route('register'), $userData);

        // Assert
        // $response->assertRedirect(route('login'));

        // Ensure the user is in the database
        $this->assertDatabaseHas('users', [
            'name' => $userData['name'],
            'email' => $userData['email'],
            'phone_number' => $userData['phone_number'],
            'role' => $userData['role'],
        ]);

        // Ensure the user is logged in
// Assert the redirect
$response->assertStatus(302);

// Follow the redirect and assert the final status code
$response = $this->get($response->headers->get('Location'));
$response->assertStatus(200);}
}
