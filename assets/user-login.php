<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> LOGIN </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    
  <html>
    <head>
      <meta charset="utf-8">
      <title> Sign in</title>
      <link rel="stylesheet" type="text/css" href="users/css/main.css">
    </head>
    
    <body>
      <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
          <div class="loginbackground box-background--white padding-top--64">
            <div class="loginbackground-gridContainer">
              <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                </div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
              </div>
            </div>
          </div>
          <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
              <h1><a href="http://blog.stackfindover.com/" rel="dofollow">BOGE </a></h1>
            </div>
            <div class="formbg-outer">
              <div class="formbg">
                <div class="formbg-inner padding-horizontal--48">
                  <span class="padding-bottom--15">Sign in to your account</span>
                  <form id="stripe-login" method="POST" action="../handlers/user-login.handl.php">
                    <div class="field padding-bottom--24">
                    <!-- Error message -->
                    <?php
                     if (isset($_SESSION['error'])) {?>
                      <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['error'] ?>
                      </div>
                      <?php
                      unset($_SESSION['error']);
                    }
                    ?>
                      <label for="email">Email</label>
                      <input type="email" name="email">
                    </div>
                    <div class="field padding-bottom--24">
                      <div class="grid--50-50">
                        <label for="password">Password</label>
                        <div class="reset-pass">
                          <a href="#">Forgot your password?</a>
                        </div>
                      </div>
                      <input type="password" name="password">
                    </div>
                    <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                      <label for="checkbox">
                        <input type="checkbox" name="checkbox"> Stay signed in for a week
                      </label>
                    </div>
                    <div class="field padding-bottom--24">
                      <input type="submit" name="submit" value="Continue">
                    </div>
                    <!-- <div class="field">
                      <a class="ssolink" href="#">Use single sign-on (Google) instead</a>
                    </div> -->
                  </form>
                </div>
              </div>
              <div class="footer-link padding-top--24">
                <span>Don't have an account? <a href="user-signup.php">Sign up</a></span>
                <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                  <span><a href="#">BOGE</a></span>
                  <span><a href="#">Contact</a></span>
                  <span><a href="#">Privacy & terms</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    
    </html>
</body>

</html>
<!-- end document-->