<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = md5($_POST['password']);
    $select = " SELECT * FROM user where email ='$email' && mdp='$pass' ";
    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
           if($row ['user_type'] == 'candidat' ){
            $_SESSION['user_id'] = $row['user_id'];
            header('location:candidat_dash.php');
        }
    elseif($row ['user_type'] == 'recruteur'){

        $_SESSION['user_id'] = $row['user_id'];
        header('location:recruteur_dash.php');
    }
    
} else{
    $error[] = 'incorrect email and password';
}
};

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--header-->
    <header class="header">
        <section class="flex">
            <a href="home.php" class="Carrer">
                <i class="bars"></i>
                 Careersearch
               
            </a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="view.php">About Us</a>
                <a href="search.php">Search</a>
                <a href="contact.php">Contact Us</a>
                <a href="login.php">Account</a>

            </nav>

            
        </section>




    </header>

    <div class="account-form-container">
        <section class="account-form">
            <form action="" method="post">
            
            <h3>Weclome</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo $error;
                    }
                } 
                ?>
                <input type="email" required name="email"
                maxlength="50" placeholder="enter your mail" class="input">
                <input type="password" required name="password"
                maxlength="50" placeholder="enter your password" class="input">
          
                <p>don't have have an account?<a href="register.php">register now</a> </p>
                <input type="submit" value="login now" name="submit" class="btn">
                
            </form>

        </section>
    </div>
    





    <footer class="footer">
        <section class="grid">
            <div class="box">
                <h3>Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Feed-Back</a>
            </div>
            <div class="box">
                <h3>Other Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Account</a>
                <a href="#"><i class="fas fa-angle-right"></i>Register</a>
                <a href="#"><i class="fas fa-angle-right"></i>Login</a>
                <a href="#"><i class="fas fa-angle-right"></i>Post Job</a>
            </div>

        </section>
        <div class="copy">
            &copy;copyright @2023
        </div>

    </footer>

    <script src="js/script.js"></script>
</body>
</html>