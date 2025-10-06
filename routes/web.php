<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{$data = (object) [
    "showroom" => [
        [
            "id" => 1,
            "brand" => "Tesla",
            "model" => "Model S",
            "price" => 89999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 2,
            "brand" => "BMW",
            "model" => "i4",
            "price" => 69999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 3,
            "brand" => "Mercedes",
            "model" => "EQE",
            "price" => 75999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 4,
            "brand" => "Audi",
            "model" => "e-tron",
            "price" => 82999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 5,
            "brand" => "Volkswagen",
            "model" => "ID.4",
            "price" => 45999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 6,
            "brand" => "Volvo",
            "model" => "XC40 Recharge",
            "price" => 51999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 7,
            "brand" => "Hyundai",
            "model" => "Ioniq 5",
            "price" => 42999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 8,
            "brand" => "Kia",
            "model" => "EV6",
            "price" => 44999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 9,
            "brand" => "Ford",
            "model" => "Mustang Mach-E",
            "price" => 55999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 10,
            "brand" => "Nissan",
            "model" => "Ariya",
            "price" => 39999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 11,
            "brand" => "Porsche",
            "model" => "Taycan",
            "price" => 99999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 12,
            "brand" => "Peugeot",
            "model" => "e-208",
            "price" => 25999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 13,
            "brand" => "Renault",
            "model" => "Megane E-Tech",
            "price" => 31999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 14,
            "brand" => "Opel",
            "model" => "Corsa-e",
            "price" => 24999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 15,
            "brand" => "Fiat",
            "model" => "500e",
            "price" => 21999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 16,
            "brand" => "Mazda",
            "model" => "MX-30",
            "price" => 28999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 17,
            "brand" => "Honda",
            "model" => "e",
            "price" => 26999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 18,
            "brand" => "Jaguar",
            "model" => "I-Pace",
            "price" => 79999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 19,
            "brand" => "Skoda",
            "model" => "Enyaq iV",
            "price" => 37999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
        [
            "id" => 20,
            "brand" => "Citroën",
            "model" => "ë-C4",
            "price" => 30999,
            "image" => "https://static.vibemovesyou.com/media/20230427065518/vibe_image_BMW_i4_35_schwarz.png"
        ],
    ]
    ];

    return view('showroom' ) ->with('data', $data);
}) -> name('showroom');


Route::get('/contact', function () {
    $company = (object) [
        "name" => "FutureDrive B.V.",
        "address" => "Elektronstraat 42, 1234 AB Amsterdam",
        "phone" => "+31 20 123 4567",
        "email" => "info@futuredrive.nl",
    ];

    return view('contact')->with('company', $company);
})->name('contact');
