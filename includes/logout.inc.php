<?php
//We have to start a session in order to destroy a session_start

session_start();
session_unset();
session_destroy();

// Going back to front ldap_control_paged_result
  header("location: ../index.php");
