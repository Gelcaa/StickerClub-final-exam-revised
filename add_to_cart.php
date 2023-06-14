<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailaddress = $_POST["emailaddress"];
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];

    // Check if the cart items exist in the session
    if (isset($_SESSION["cart_items"])) {
        // Check if the product already exists in the cart items
        $existingItemIndex = -1;
        foreach ($_SESSION["cart_items"] as $index => $cartItem) {
            if ($cartItem["emailaddress"] === $emailaddress && $cartItem["product"] === $product) {
                $existingItemIndex = $index;
                break;
            }
        }

        if ($existingItemIndex !== -1) {
            // Product already exists, update the quantity
            $_SESSION["cart_items"][$existingItemIndex]["quantity"] += $quantity;
        } else {
            // Product does not exist, add a new item
            $cartItem = [
                "emailaddress" => $emailaddress,
                "product" => $product,
                "quantity" => $quantity
            ];
            $_SESSION["cart_items"][] = $cartItem;
        }
    } else {
        // Create an array to store the cart items
        $_SESSION["cart_items"] = [];

        // Add the cart item to the session variable
        $cartItem = [
            "emailaddress" => $emailaddress,
            "product" => $product,
            "quantity" => $quantity
        ];
        $_SESSION["cart_items"][] = $cartItem;
    }

    echo "Cart item stored temporarily.";
}
?>