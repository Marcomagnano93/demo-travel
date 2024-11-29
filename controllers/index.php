<?php 


$heading = 'home';

$travels = [
    ['name' => 'Roma', 'rating' => rand(1, 5)],
    ['name' => 'Milano', 'rating' => rand(1, 5)],
    ['name' => 'Napoli', 'rating' => rand(1, 5)],
    ['name' => 'Firenze', 'rating' => rand(1, 5)],
    ['name' => 'Venezia', 'rating' => rand(1, 5)],
    ['name' => 'Bologna', 'rating' => rand(1, 5)],
    ['name' => 'Torino', 'rating' => rand(1, 5)],
    ['name' => 'Palermo', 'rating' => rand(1, 5)],
    ['name' => 'Genova', 'rating' => rand(1, 5)],
    ['name' => 'Verona', 'rating' => rand(1, 5)]
];

// dd($_SERVER);
require "view/index.view.php";