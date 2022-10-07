<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
  </head>
  <body>
    <header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none fw-bold h1 me-lg-auto">
            HAYAT ZEE
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
            <li><a href="#" class="nav-link px-2 text-white">About</a></li>
          </ul>

          <div class="text-end d-flex">
            <?php
                if(isset($_SESSION["userid"]))
                {
            ?>
                <button type="button" class="btn btn-outline-light me-2 border-0 text-warning fs-4"><?php echo $_SESSION["useruid"]; ?></button>
                <a href="includes/logout.inc.php" class="nav-link px-2 text-white border border-3 border-danger rounded">Logout</a>
            <?php
                }else{
            ?>
            <a href="#login-form" class="nav-link px-2 text-white border border-0 border-white rounded me-2">Login</a>
            <a href="#signup-form" class="nav-link px-2 text-dark  bg-warning rounded">Sign-up</a>
            <?php
                }
             ?>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Simplified Frontend tutorials with Bootstrap</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">FIND TUTORIALS HERE</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-lg-6 form-sign" id="signup-form">
          <h4>SIGN UP!</h4>
          <p>Don't have an account yet? Sign up here!</p>
          <form action="includes/signup.inc.php" method="post">
            <div class="form-floating mb-2">
              <input type="text" name= "uid" class="form-control" id="floatingInput" placeholder="Username">
              <label for="floatingInput">User Name</label>
            </div>
            <div class="form-floating mb-2">
              <input type="password" name= "pwd" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-2">
              <input type="password" name= "pwdrepeat" class="form-control" id="floatingPassword" placeholder="Repeat Password">
              <label for="floatingPassword">Repeat Password</label>
            </div>
            <div class="form-floating mb-2">
              <input type="email" name= "email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">SIGN UP</button>

          </form>
        </div>
        <div class="col-lg-6 form-sign" id="login-form">
        <form action="includes/login.inc.php" method="post">
          <h1 class="h3 mb-3 fw-normal">LOGIN</h1>
          <p>Don't have an account yet? Sign up here!</p>
          <div class="form-floating mb-2">
            <input type="text" name= "uid" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">User Name</label>
          </div>
          <div class="form-floating mb-2">
            <input type="password" name= "pwd" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">LOGIN</button>
        </form>
          </div>
          </div>
      </main>
    </section>
  </body>
</html>
