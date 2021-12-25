<?php
   
  if(isset($_POST['submit'])){
      $f_name = $_POST['name'];
      $uid = $_POST['uid'];
      $email = $_POST['email'];
      $pswd = $_POST['pswd'];
      $pswdConfirm = $_POST['pswd_conf'];

      require_once 'dbh.inc.php';
      include_once 'functions.inc.php';

      if(emptyInput($f_name, $uid, $email, $pswd, $pswdConfirm) !== false){
        header("Location: ../signup.php?error=emptyinput");
          exit();
      }
      if(inalidUid($uid) !== false){
        header("Location: ../signup.php?error=ivalidUid");
          exit();
      }
      if(inalidemail($email) !== false){
        header("Location: ../signup.php?error=ivalidemail");
          exit();
      }
      if(pswdnotmatch($pswd, $pswdConfirm) !== false){
        header("Location: ../signup.php?error=pswdnotmatch");
          exit();
      }
      if(uidexits($conn, $uid, $email) !== false){
        header("Location: ../signup.php?error=uidtaken");
          exit();
      }
      createUser($conn, $f_name, $uid, $email, $pswd);
  }
  else{
      header("Location: ../login.php");
      exit();
  }
  ?>
