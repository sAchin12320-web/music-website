
<?php
session_start();

include('db_connect.php');
$msg=false;
if(isset($_POST['user_name'])){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "select * from user where user = '".$user_name."' AND password= '".$user_password."' limit 1";
// built connection and put query
    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result)==1){
        header('Location: index.php');
    }
    else{
        $msg = "Incorrect password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <title>music Website Login</title>
</head>
<body>
    <header>
         <div class="left_bx1">
            <div class="content">
                <form  method="post">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter your user name..." required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter your password..." required>
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <div class="check">
                        <input type="checkbox" ><span> Remember me</span>
                    </div>
                    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
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