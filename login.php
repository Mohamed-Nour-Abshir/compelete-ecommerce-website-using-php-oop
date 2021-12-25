<?php 
  include_once 'header.php';
?>

<?php 
   $msg ='';
   $msgClass ='';
     if(isset($_GET['error']))
     if($_GET['error'] == "emptyinput"){
       $msg= "Please Fill All the fields!";
       $msgClass = "alert-danger";
     }
     else if($_GET['error'] == "loginwrong"){
      $msg= "Please Enter a valid UserName!";
      $msgClass = "alert-danger";
    }
    else if($_GET['error'] == "wrongpswd"){
      $msg= "Wrong Password!";
      $msgClass = "alert-danger";
    }
    ?>
  
   <!-- signup form  -->
<center class="mt-5">
   <form action="includes/login.inc.php" name="form" method="POST" class="login-form w-50" onsubmit="return validateForm()">
       <div class="container">
       <h1 class="w-header">LogIn</h1>
       <div class=" w-50 <?php echo $msgClass;?>"><?php echo $msg?></div>
       <div class="form-group">
        <input type="text" name="name" value="" class="form-control w-50" placeholder="Username/E-mail....">
       </div>
       <div class="form-group">
         <input type="password" name="pswd" value="" class="form-control w-50" placeholder="Password....">
       </div>
       <button type="submit" name="submit" class="login-btn btn btn-primary mb-3">LogIn</button><br>
       <small>I did'nt have account</small> <a href="signup.php">Create new account?</a>
       </div>
   </form>
   </center>
