<?php 
  include_once 'header.php';
?>
<!-- error handling  -->
<?php 
   $msg ='';
   $msgClass ='';
     if(isset($_GET['error']))
     if($_GET['error'] == "emptyinput"){
       $msg= "Please Fill All the fields!";
       $msgClass = "alert-danger";
     }
     else if($_GET['error'] == "ivalidUid"){
      $msg= "Please Write a valid UserName!";
      $msgClass = "alert-danger";
    }
    else if($_GET['error'] == "ivalidemail"){
      $msg= "Please Choose a valid E-mail!";
      $msgClass = "alert-danger";
    }
    else if($_GET['error'] == "pswdnotmatch"){
      $msg= "Password doesn't match!";
      $msgClass = "alert-danger";
    }
    else if($_GET['error'] == "uidtaken"){
      $msg= "Username already taken by another user!";
      $msgClass = "alert-danger";
    }
    else if($_GET['error'] == "failedtopreparestmt"){
      $msg= "OPPS! Something went Wrong plwase try again";
      $msgClass = "alert-danger";
    }
    else if($_GET['error'] == "none"){
      $msg= "You have Successfully Signed";
      $msgClass = "alert-success";
    }
    
   ?>
  
   <!-- signup form  -->
   <style>
     .alert-danger{
       color: white;
       background: pink;
       width: 100%;
       padding: 5px;
       margin-bottom: 5px;
     }
   </style>
<center class="mt-5">
   <form action="includes/signup.inc.php" method="POST" class="m-auto w-50">
       <div class="container">
       <h1 class="w-header">Sign Up</h1>
       <div class=" msg <?php echo $msgClass;?>"><?php echo $msg?></div>
       <div class="form-group">
       <input type="text" name="name" value="" class="form-control" id="name" placeholder="Full Name....">
       </div>
       <div class="form-group">
       <input type="text" name="email" value="" class="form-control" id="email" placeholder="E-mail....">
       </div>
       <div class="form-group">
       <input type="text" name="uid" value="" class="form-control" id="uid" placeholder="Username....">
       </div>
       <div class="form-group">
       <input type="password" name="pswd" value="" class="form-control" id="pswd" placeholder="Password....">
       </div>
       <div class="form-group">
       <input type="password" name="pswd_conf" value="" class="form-control" id="pswd-conf" placeholder="Confirm Password....">
       </div>
       <button type="submit" id="submit" name="submit" class="btn btn-primary mb-3">SignUp</button>
       <small>already have account</small> <a href="login.php">Login</a>
   </form>
   </div>
   </center>