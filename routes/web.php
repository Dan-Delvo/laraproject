<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function() {
    $blogs = [
        [
            'Title' => 'Hinata Shoyo',
            'Body' => 'Middle Blocker',
            'Image' => '/images/hinata.jpg',

        ],

        [
            'Title' => 'Kageyama Tobio',
            'Body' => 'Setter',
            'Image' => '/images/kageyama.jpg',

        ],

        [
            'Title' => 'Sawamura Daichi',
            'Body' => 'Wing Spiker',
            'Image' => '/images/daichi.jpg',

        ],

        [
            'Title' => 'Sugawara Koshi',
            'Body' => 'Setter',
            'Image' => '/images/sugawara.jpg',

        ],

        [
            'Title' => 'Azumane Asahi',
            'Body' => 'Wing Spiker',
            'Image' => '/images/asahi.jpg',

        ],

        [
            'Title' => 'Tanaka Ryosuke',
            'Body' => 'Wing Spiker',
            'Image' => '/images/tanaka.jpg',

        ]
    ];
    return view ('common.home', compact('blogs'));
})->name('homePage');


