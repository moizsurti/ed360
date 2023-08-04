<!-- <?php  
session_start();

include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(!empty($email)  && !empty($password) && !is_numeric($email))
     {
        $query = "insert into form (username, email, password) values ('$user_name', '$email', '$password')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('successfully insert')</script>";
     }

     else
     {
        echo "<script type='text/javascript'> alert('plase insert valid information')</script>";
    }
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="signUp.css">
    <title>signUp</title>
</head>
<body>


    <div class="container">
        <div class="signin-signup">
            <form action="" class="sign-in-form" method="POST" enctype="multipart/form-data">
                <h2 class="title">SignUp</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" value="SignUp" class="btn">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/a360onlineeducation/" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/ed360.officials/" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <!-- <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a> -->
                </div>
                <!-- <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p> -->
            </form>
            <form action="" method="POST" enctype="multipart/form-data">
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Welcome To ed-360</h3>
                    <p><b>CAMBRIDGE EDUCATION WITH YOUR FLEXIBILITY</b></p>
                    <a href="login.php"><button class="btn">Log in</button></a>
                </div>
                <img src="images/signin.png" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="signUp.js"></script>
</body>
</html>