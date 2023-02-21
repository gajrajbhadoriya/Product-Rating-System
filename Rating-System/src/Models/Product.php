<?php

namespace App\Models;
class Product
{
    public $username;
    public $product_name;
    public $rating;
    public $feedback;

    public function getUserName($username)
    {
        return $username;
    }
    public function productName($product_name)
    {
        switch($product_name) {
            case 'samsung':
                return $product_name;
            case 'nokia':
                return $product_name;
            case 'redmi':
                return $product_name;
            case 'apple':
                return $product_name;
            default:
                return "Invalid product";
        }
    }

    public function rating($rating)
    {
        switch($rating) {
            case 'bad':
                return $rating;
            case 'good':
                return $rating;
            case 'average':
                return $rating;
            case 'verygood':
                return $rating;
            default:
                return "Invalid rating";
        }
    }

    public function getFeedBack($feedback)
    {
        return $feedback;
    }
}
