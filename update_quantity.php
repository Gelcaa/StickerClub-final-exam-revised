<?php
session_start(); // Start the session

if (isset($_POST["row_index"]) && isset($_POST["quantity"])) {
    $rowIndex = $_POST["row_index"];
    $newQuantity = $_POST["quantity"];

    // Check if the cart items exist in the session
    if (isset($_SESSION["cart_items"])) {
        // Check if the row index exists in the cart items array
        if (array_key_exists($rowIndex, $_SESSION["cart_items"])) {
            // Update the quantity in the session
            $_SESSION["cart_items"][$rowIndex]["quantity"] = $newQuantity;

            // Update the quantity in the database (if necessary)
            // Replace this with your database update code

            // Send a response back to the client
            echo "Quantity updated successfully";
        } else {
            echo "Invalid row index";
        }
    } else {
        echo "Cart items not found in session";
    }
} else {
    echo "Invalid request";
}
?>
