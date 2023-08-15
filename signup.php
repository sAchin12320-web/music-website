
<?php
session_start();

include('db_connect.php');
$msg=false;
// the database storage of signup details
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];
// to check whether any input field is empty or not
    if((!empty($user_name))&&(!empty($user_email))&&(!empty($user_password))&&(!is_numeric($user_name))){
        // if password and re-password matches 
        if($user_password === $user_re_password){
            // database commands in query
          $query = "insert into user (user,email,password) VALUES ('$user_name','$user_email','$user_password')";
          mysqli_query($con, $query);
        //   location to login.php
          header("Location: login.php");
        }
        else{
          $msg = "Password not matched";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <title>Music Website Signup</title>
</head>
<body>
    <header>
        <div class="left_bx1">
           <div class="content">
               <form  method="post">
                   <h3>Sign Up</h3>
                   <div class="card">
                       <label for="name">Name</label>
                       <input type="text" name="user_name" placeholder="Enter your user name..." required>
                   </div>
                   <div class="card">
                    <label for="email">Email</label>
                    <input type="email" name="user_email" placeholder="Enter your email..." required>
                </div>
                   <div class="card">
                       <label for="password">Password</label>
                       <input type="password" name="user_password" placeholder="Enter your password..." required>
                   </div>
                   <div class="card">
                    <label for="re-password">Password</label>
                    <input type="password" name="user_re_password" placeholder="Enter your password again..." required>
                </div>
                   <input type="submit" value="Sign Up" class="submit">
                   <div class="check">
                       <input type="checkbox" ><span> Remember me</span>
                   </div>
                   <p>Already have an account? <a href="login.php">Login</a></p>
               </form>
           </div>
        </div>
        <div class="right_bx1">
           <img src="img/login_png.jpg" alt="">
           <!-- <h3>Incorrect Password</h3> -->
           <?php
           echo('<h3>'.$msg.'</h3>');
           ?>
        </div>
   </header>
</body>
</html>