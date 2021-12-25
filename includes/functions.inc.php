<?php 
 
 function emptyInput($f_name, $uid, $email, $pswd, $pswdConfirm){
    
    if(empty($f_name) || empty($uid) || empty($email) || empty($pswd) || empty($pswdConfirm)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
 }

 function inalidUid($uid){
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
 }

 function inalidemail($email){
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
 }

 function pswdnotmatch($pswd, $pswdConfirm){
    
    if($pswd !== $pswdConfirm){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
 }


 function uidexits($conn, $uid, $email){
   $sql = "SELECT * FROM users WHERE user_email = ? OR user_uid = ?;";
   $stmt =mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../signup.php?error=failedtopreparestmt1");
    exit();
   }
   mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
   mysqli_stmt_execute($stmt);
   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData)){
       $result= true;
       return $row;
   }
   else{
       $result = false;
       return $result;
   }
    mysqli_stmt_close($stmt);
 }


 function createUser($conn, $f_name, $uid, $email, $pswd){
    $sql = "INSERT INTO users(user_f_Name, user_email, user_uid, user_pswd) VALUES(?,?,?,?);";
    $stmt =mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("Location: ../signup.php?error=failedtopreparestmt");
     exit();
    }
    $hashedpswd = password_hash($pswd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $f_name, $uid, $email, $hashedpswd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../signup.php?error=none");
    exit();
     
  }

//   login functions 

function emptyinputlogin($user_uid, $pswd){
    
    if(empty($user_uid) || empty($pswd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
 }

 function loginUser($conn, $user_uid, $pswd){
    
    $uidexist = uidexits($conn, $user_uid,$user_uid);
    if($uidexist === false){
        header("Location: ../login.php?error=loginwrong");
        exit();
    }

    $passwordHash = $uidexist['user_pswd'];

    $checkpass = password_verify($pswd, $passwordHash);
    if($checkpass === false){
        header("Location: ../login.php?error=wrongpswd");
        exit();
    }
    else if($checkpass === true){
        session_start();
        $_SESSION['userid'] = $uidexist['user_id'];
        $_SESSION['useruid'] = $uidexist['user_uid'];
        header("Location: ../index.php");
        exit();
    }


 }
