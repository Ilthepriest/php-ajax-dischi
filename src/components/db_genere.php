<?php
$dischi= [
    [
    "genre" => "Rock",
    ],
    [
    "genre" => "Pop",
    ],
    [
    "genre" => "Jazz",
    ],
    [
    "genre" => "Metal",
    ]
];

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($dischi);