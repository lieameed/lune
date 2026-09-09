<?php

use Illuminate\Support\Facades\Route;

Route::get('/detail', function () {
    $product = (object) [
        'name' => 'Flaky Toasted Almond Croissant',
        'price' => 6.99,
        'description' => 'Handcrafted with rich, layered French butter, our Almond Croissant features a golden, perfectly crisp exterior that yields to a tender, buttery interior. Filled with smooth almond cream, finished with crunchy toasted almond flakes, and dusted with powdered sugar, it pairs seamlessly with your favorite hot coffee or espresso.',
        'image' => 'https://images.unsplash.com/photo-1549903072-7e6e0bedb7fb?q=80&w=800&auto=format&fit=crop'
    ];

    return view('detail', compact('product'));
});

Route::get('/foradmin', function () {
    return view('foradmin');
});

Route::get('/checkout', function () {
    return view('checkout');
});