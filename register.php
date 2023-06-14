<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $emailaddress = $_POST["emailaddress"];
  $password = $_POST["password"];
  $region = $_POST["region"];
  $province = $_POST["province"];
  $city = $_POST["city"];
  $barangay = $_POST["barangay"];
  $phonenumber = $_POST["phonenumber"];
  $otherinfo = $_POST["otherinfo"];

  if (empty($fname)) {
    echo '<script>alert("First name is required"); window.history.back();</script>';
  } else if (empty($lname)) {
    echo '<script>alert("Last Name is required"); window.history.back();</script>';
  } else if (empty($emailaddress)) {
    echo '<script>alert("Email Address is required"); window.history.back();</script>';
  } else if (empty($password)) {
    echo '<script>alert("Password is required"); window.history.back();</script>';
  } else if (empty($region)) {
    echo '<script>alert("Region is required"); window.history.back();</script>';
  } else if (empty($province)) {
    echo '<script>alert("Province is required"); window.history.back();</script>';
  } else if (empty($city)) {
    echo '<script>alert("City is required"); window.history.back();</script>';
  } else if (empty($barangay)) {
    echo '<script>alert("Barangay is required"); window.history.back();</script>';
  } else if (empty($phonenumber)) {
    echo '<script>alert("Phone Number is required"); window.history.back();</script>';
  } else if (empty($otherinfo)) {
    echo '<script>alert("Other Info is required"); window.history.back();</script>';
  } else {
    // Establish database connection
    $conn = mysqli_connect("localhost", "root", "", "stickerclubdb");
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement to prevent SQL injection
    $sql = "INSERT INTO sctbl (fname, lname, emailaddress, password, region, province, city, barangay, phonenumber, otherinfo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $fname, $lname, $emailaddress, $password, $region, $province, $city, $barangay, $phonenumber, $otherinfo);

    if ($stmt->execute()) {
      mysqli_close($conn);

      // Display a registration successful pop-up
      $_SESSION["emailaddress"] = $emailaddress; // Store the Email address in the session
      echo '<script>alert("Registration Successful!");</script>';
      // Redirect to home_products.php
      echo '<script>window.location.href = "home_products.php";</script>';
      exit;
    } else {
      echo "Error: " . $stmt->error;
    }

    mysqli_close($conn);
  }
}
?>