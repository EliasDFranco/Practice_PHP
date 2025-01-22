<?php

$touristPlaces = [
    [
        'priceNight' => 19.9,
        'city' => "Asunción",
        'wifi' => true,
    ],
    [
        'priceNight' => 15.9,
        'city' => "Lima",
        'wifi' => false,
    ],
    [
        'priceNight' => 13.9,
        'city' => "La Paz",
        'wifi' => true,
    ]
];

//array_walk: Modifies an array directly, element by element.
array_walk($touristPlaces, function($place){
    echo $place["city"]."<br>";
});

//array_filter: Returns an array with elements filtered based on a condition.
$available = array_filter($touristPlaces,
    function ($touristPlaces){
        return $touristPlaces['city'] === "Lima";
    }
);
echo "<pre>";
var_dump($available);

//array_map: Returns a new array with the results of applying a function to each element.
$promotion = array_map(function($touristPlaces)
            {
                return array_merge($touristPlaces,
                ['priceNight' => $touristPlaces['priceNight']/2]);
            },$touristPlaces);
echo "<pre>";
var_dump($promotion);
        
?>