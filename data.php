<?php

$Products = [
    $petKennel = new Kennel(
        './img/genericKennel.jpeg',
        'Generic Pet Kennel',
        'Generic',
        '$44.99',
        'Medium Size'
    ),
    $dogtKennel = new Kennel(
        './img/dogkennel.jpeg',
        'Dog Kennel',
        'dog',
        '$39.99',
        'Large Size',
    ),
    $catKennel = new Kennel(
        './img/catKennel.webp',
        'Cat Kennel',
        'cat',
        '$35.99',
        'Small Size',
    ),
    $catFood = new Food(
        './img/catFood.jpeg',
        'Cat Food with Salmon',
        'cat',
        '$1.99',
        '80g',
        '13/03/2024'
    ),
    $dogFood = new Food(
        './img/dogFood.jpeg',
        'Dog Food with chicken',
        'dog',
        '$2.99',
        '120g',
        '23/05/2024'
    ),
    $catGames = new Games(
        './img/catGame.jpg',
        'Cat litle mouse game',
        'cat',
        '$7.99',
        'Wool'
    ),
    $dogGames = new Games(
        './img/dogGame.jpeg',
        'Dog baseball ball game',
        'dog',
        '$9.99',
        'Plastic'
    ),
    $Shampoo = new Hygiene(
        './img/shampoo.jpeg',
        'Pet Shampoo',
        'Generic',
        '$15.99',
        'Shampoo with aloe'
    ),
    $catToothPaste = new Hygiene(
        './img/toothpaste.jpeg',
        'Cat ToothPaste',
        'cat',
        '$12.99',
        'For litle cat\'s teeth'
    ),
    $dogBrush = new Hygiene(
        './img/brush.jpeg',
        'Dog Brush',
        'dog',
        '$9.99',
        'It brush short and long hair'
    ),
    ];

    ?>