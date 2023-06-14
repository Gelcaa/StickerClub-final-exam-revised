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
          <img src="images\stickerclub circle logo PNG.png" alt="Sticker Club logo">
        </div>

        <!-- FORM -->
        <div class="col-md-6 form" style="margin-top: 100px;">
          <form action="login.php" method="POST">
            <div class="mb-3">
              <input type="text" id="emailaddress" name="emailaddress" placeholder="Email Address" class="form-control">
            </div>
            <div class="mb-3">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control">
              <input type="submit" id="submit" value="Log In" class="btn btn-primary">
              <div class="login">New to Sticker Club? <a class="loginappend" href="registerform.php">Sign Up</a></div>
          </form>
        </div>

      </div>
    </div>

  </main>
</body>

</html>