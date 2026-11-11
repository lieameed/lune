<?php

use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(LazilyRefreshDatabase::class);

test('the login and registration pages are available', function () {
    $this->get(route('pages.login'))->assertSuccessful();
    $this->get(route('pages.signup'))->assertSuccessful();
});

test('a visitor can register and is logged in', function () {
    $response = $this->post(route('register.store'), [
        'name' => 'Alya Pastry',
        'email' => 'alya@example.com',
        'password' => 'secret-password',
        'password_confirmation' => 'secret-password',
    ]);

    $user = User::query()->where('email', 'alya@example.com')->firstOrFail();

    $response->assertRedirect(route('pages.index'));
    $this->assertAuthenticatedAs($user);
    $this->assertModelExists($user);
    expect(Hash::check('secret-password', $user->password))->toBeTrue();
});

test('registration validates required fields and a unique email', function () {
    User::factory()->create(['email' => 'alya@example.com']);

    $this->from(route('pages.signup'))
        ->post(route('register.store'), [
            'name' => 'Alya Pastry',
            'email' => 'alya@example.com',
            'password' => 'short',
            'password_confirmation' => 'different',
        ])
        ->assertRedirect(route('pages.signup'))
        ->assertSessionHasErrors(['email', 'password']);

    $this->assertGuest();
});

test('a registered user can log in', function () {
    $user = User::factory()->create([
        'email' => 'alya@example.com',
        'password' => 'secret-password',
    ]);

    $this->post(route('login.store'), [
        'email' => 'alya@example.com',
        'password' => 'secret-password',
    ])
        ->assertRedirect(route('pages.index'));

    $this->assertAuthenticatedAs($user);
});

test('invalid login credentials are rejected', function () {
    User::factory()->create([
        'email' => 'alya@example.com',
        'password' => 'secret-password',
    ]);

    $this->from(route('pages.login'))
        ->post(route('login.store'), [
            'email' => 'alya@example.com',
            'password' => 'incorrect-password',
        ])
        ->assertRedirect(route('pages.login'))
        ->assertSessionHasErrors('email');

    $this->assertGuest();
});

test('an authenticated user can log out', function () {
    $this->actingAs(User::factory()->create())
        ->post(route('logout'))
        ->assertRedirect(route('pages.index'));

    $this->assertGuest();
});
