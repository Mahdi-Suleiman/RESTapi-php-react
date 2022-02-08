<?php
include("./config.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
// $request = explode('/', trim($_SERVER['PATH_INFO'], '/'));

// echo $method;

if (strtoupper($method) == "GET") {
    $_command = "SELECT * FROM products";
    $statement =  $connection->prepare($_command);
    $statement->execute();
    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
    $result = $statement->fetchAll();
    // var_dump($result);
    echo json_encode($result);
} elseif (strtoupper($method) == "POST") {
    // $_command = "INSERT INTO products ('')";
    // $statement =  $connection->prepare($_command);
    // $statement->execute();
    // $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
    // $result = $statement->fetchAll();
    // // var_dump($result);
    // echo json_encode($result);
    // echo json_decode($_POST['name']);
    echo $method;
    // $data = json_decode($_POST['name']);
    // echo $data;
    echo file_get_contents('php://input');
    $data = json_decode(file_get_contents('php://input'), true);
    // print_r($data);
    echo $data["name"];
}


// var_dump($request);