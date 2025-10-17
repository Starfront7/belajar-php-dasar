<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Muhammad ", "Fadil"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Gimms";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Starline";
var_dump($names);

var_dump(count($names));

$Fadil = array(
    "id" => "124356",
    "name" => "Muhammad Fadil",
    "age" => 15,
    "address" => array(
        "city" => "Batam",
        "country" => "Indonesia"
    )
);
var_dump($Fadil);

var_dump($Fadil["name"]);
var_dump($Fadil["address"]["country"]);

$Gimms = [
    "id" => "777",
    "name" => "Gimms of starline",
    "age" => 35,
    "address" => [
        "city" => "Batam",
        "country" => "Indonesia"
    ]
];
var_dump($Gimms);