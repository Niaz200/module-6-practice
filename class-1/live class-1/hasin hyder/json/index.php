<?php

//code1:
/*
$person = [
    "name"=>"John Doe",
    "age"=>20,
    "address"=>"123 Main St"
];

echo json_encode($person);

*/

//code2:

/*

$person = [
    "name"=>"John Doe",
    "age"=>20,
    "address"=>[
        "permanent"=>"Kathmandu",
        "temporary"=>"Dhaka"
    ]
    
];

$json = json_encode($person);
file_put_contents("data.txt", $json);

*/


//code3:
/*

$data = file_get_contents("data.txt");
$dataArray = json_decode($data, true);
print_r($dataArray);

echo $dataArray['name'];

*/


//code4:



$data = file_get_contents("data.txt");
// $dataArray = json_decode($data, true);
$dataArray = json_decode($data);
print_r($dataArray);
echo $dataArray->name;


