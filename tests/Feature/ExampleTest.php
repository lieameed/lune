<?php

test('the homepage redirects to the storefront', function () {
    $response = $this->get('/');

    $response->assertRedirect(route('pages.index'));
});

test('storefront pages use the shared visual styles', function () {
    foreach ([
        'pages.index',
        'pages.about-us',
        'pages.add',
        'pages.cart',
        'pages.catalogue',
        'pages.checkout',
        'pages.detail',
        'pages.history',
        'pages.login',
        'pages.reserve',
        'pages.signup',
    ] as $routeName) {
        $this->get(route($routeName))
            ->assertSuccessful()
            ->assertSee('css/lune.css')
            ->assertSee('lune-page');
    }
});
