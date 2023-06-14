<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->
  <!-- bootstrap installiation -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- ICON -->
  <link rel="icon" type="image/png" sizes="32x32" href="images\stickerclub circle logo PNG.png">
  <!-- google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- stylesheet -->
  <link href="style.css" rel="stylesheet">
  </href>
  <title>Sticker Club</title>

</head>

<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-6 left_text">
          <img src="images\stickerclub circle logo PNG.png" alt="Sticker Club logo" >

        </div>
        <!-- FORM -->
        <div class="col-md-6 form">
          <form action="register.php" method="post">
            <div class="mb-3">
              <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control">
            </div>
            <div class="mb-3">
              <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control">
            </div>
            <div class="mb-3">
              <input type="text" id="emailaddress" name="emailaddress" placeholder="Email Address" class="form-control">
            </div>
            <div class="mb-3">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="mb-3">
              <input type="text" id="region" name="region" placeholder="Region" class="form-control">
            </div>
            <div class="mb-3">
              <input type="text" id="province" name="province" placeholder="Province" class="form-control">
            </div>
            <div class="mb-3">
              <input type="text" id="city" name="city" placeholder="City" class="form-control">
            </div>
            <div class="mb-3">
              <input type="text" id="barangay" name="barangay" placeholder="Barangay" class="form-control">
            </div>
            <div class="mb-3">
              <input type="text" id="phonenumber" name="phonenumber" placeholder="Phone Number" class="form-control">
            </div>
            <div class="mb-3">
              <input type="text" id="otherinfo" name="otherinfo" placeholder="Street Name, Building, House No."
                class="form-control">
              <p id="otherinfo_error" class="error-message"></p>
              <?php
              session_start();
              if (isset($_GET['error'])) { ?>
                <p id="email_error">
                  <?php echo $_GET['error']; ?>
                </p>
              <?php } ?>

            </div>
            <input type="submit" id="submit" value="REGISTER" class="btn btn-primary">
            <div class="login">Have an account? <a class="loginappend" href="index.php">Log In</a></div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>

</html>