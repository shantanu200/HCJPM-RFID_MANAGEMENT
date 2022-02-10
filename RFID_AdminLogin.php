<?php include "dbConfig.php" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/adminlogin.css" />
    <title>Test HTML</title>
  </head>
  <body>
    <div class="container">
      <div class="sign_up">
        <div class="mobile_view">
          <h1>WELCOME BACK</h1>
          <p>We are so excited to have you in group. We believe that you can use your skills and talent to grow yourself.</p>
        </div>
        <div class="signup_left">
          <h1>SIGN UP</h1>
          <form action="#">
            <input type="text" placeholder="Username" />
            <input type="password" placeholder="Password" />
            <button><i class="fa-solid fa-user-check"></i> LOGIN</button>
          </form>
          <a href="#" id="login">New User? SIGN HERE</a>
        </div>
        <div class="signup_right">
          <img src="img/login_page.png">
        </div>
      </div>
      <div class="sign_in">
        <div class="signin_left">
          <img src="img/register_page.png">
        </div>
        <div class="signin_right">
          <h1>SIGN IN</h1>
          <form action="#">
            <input type="text" placeholder="Username" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <button><i class="fa-solid fa-user"></i> REGISTER</button>
          </form>
          <a href="#" id="register">Existing User? SIGN HERE</a>
        </div>
        <div class="mobile_view">
          <h1>BECOME MEMBER</h1>
          <p>You don't build a business, you build people.And then people build the business.</p>
        </div>
      </div>
    </div>
    <script src="js/adminlogin.js"></script>
  </body>
</html>


<?php 
include "SweetAlert.php"; 
?>

<?php
if(isset($_POST['register'])){
    if(isset($_POST['r_username']) && isset($_POST['r_email']) && isset($_POST['r_password']) && (!empty($_POST['r_username'])) && (!empty($_POST['r_email'])) && (!empty($_POST['r_password']))){
        $username = $_POST['r_username'];
        $email = $_POST['r_email'];
        $password = $_POST['r_password'];
    
        if(strlen($password)<7){
            echo "Password should be of 8 character";
        }
        
        $que = "SELECT * FROM user_log WHERE email='$email'";
        $execute = mysqli_query($conn,$que);
        $row = mysqli_num_rows($execute);
       
        if($row>0){
                $_SESSION['title'] = "Registration Unsuccessful";
                $_SESSION['text'] = "User Already exist on Email";
                $_SESSION['icon'] = "error";
        }

        else{
            $ins = "INSERT INTO user_log(username,email,password) VALUES('$username','$email','$password')";
            $exe = mysqli_query($conn,$ins);
            if($exe){
                $_SESSION["title"] = "Registration Successful";
                $_SESSION["text"] = "You Can Login To System!!";
                $_SESSION["icon"] = "success";
            }else{
                $_SESSION["title"] = "Registration Unsuccessful";
                $_SESSION["text"] = "Some Technical Glitch";
                $_SESSION["icon"] = "error";
            }
        }
    }
}

if(isset($_POST['login'])){
    // echo "Login clicked";
    if(isset($_POST['l_username']) && isset($_POST['l_password']) && (!empty($_POST['l_username'])) && (!empty($_POST['l_password']))){
        $username = $_POST['l_username'];
        $password = $_POST['l_password'];
    
        $que = "SELECT password FROM user_log WHERE username='$username'";
        $exe = mysqli_query($conn,$que);
        $row = mysqli_num_rows($exe);

       $db_password = mysqli_fetch_row($exe);

        if($row>0){
            if($password == $db_password[0]){
                $_SESSION["title"] = "Login Successful";
                $_SESSION["text"] = "Welcome to System!!";
                $_SESSION["icon"] = "success";

            }else{
                $_SESSION["title"] = "Password Not Matched";
                $_SESSION["text"] = "Please Enter Correct password";
                $_SESSION["icon"] = "error";
            }
            
        }else{
            $_SESSION["title"] = "User Not Found";
            $_SESSION["text"] = "Register to System First.";
            $_SESSION["icon"] = "error";
        }
    }
}

?> 

