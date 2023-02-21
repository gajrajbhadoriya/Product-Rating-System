<?php

require __DIR__ . '/vendor/autoload.php';

use App\Database\DBTransaction;
use App\Models\Product;

include("./Public/rating.php");

$username = '';
$product_name = '';
$rating = '';
$feedback = '';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $product_name = $_POST['product_name'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    $product = new Product();
    $result = $product->getUserName($username);
    $result2 = $product->productName($product_name);
    $result3 = $product->rating($rating);
    $result4 = $product->getFeedBack($feedback);

    // echo "Result: " . $result . "</br>";
    // echo "Result: " . $result2 . "</br>";
    // echo "Result: " . $result3 . "</br>";
    // echo "Result: " . $result4 ;
}

$sql = "insert into rating(username, product_name, rating, feedback)values(:username, :product_name, :rating, :feedback)";
$data = [
    'username' =>$username,
    'product_name' =>$product_name,
    'rating' =>$rating,
    'feedback' =>$feedback,
];

$db = new DBTransaction();
$db->insertTransaction($sql, $data);
// $db->fetchData($data);
