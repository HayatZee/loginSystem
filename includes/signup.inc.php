<?php
  echo '<script>alert("im in signup inc")</script>';
  if(isset($_POST["submit"])) {
    echo '<script>alert("submit is clicked")</script>';
    // Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instantiate classes
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);


    // Running error handlers and user SignupContr
    $signup->signupUser();

    // Going back to front page
    header("location: ../index.php?error=none");


  }
