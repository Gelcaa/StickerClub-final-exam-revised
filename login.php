<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailaddress = $_POST["emailaddress"];
    $password = $_POST["password"];

    // Establish database connection
    $conn = mysqli_connect("localhost", "root", "", "stickerclubdb");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement to prevent SQL injection
    $sql = "SELECT * FROM sctbl WHERE emailaddress = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $emailaddress, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["emailaddress"] = $emailaddress; // Store the emailaddress in the session
        header("Location: home_products.php");
        exit; // Make sure to exit after redirection
    } else {
        echo '<script>alert("Invalid Email address or password. Please try again."); window.location.href = "index.php";</script>';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>