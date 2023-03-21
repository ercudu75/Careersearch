<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $nom = mysqli_real_escape_string($conn,$_POST['nom']);
    $prenom = mysqli_real_escape_string($conn,$_POST['prenom']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = md5($_POST['password']);
    $cpass =md5($_POST['cpassword']);
    $tele = mysqli_real_escape_string($conn,$_POST['tele']);
    $user_type =$_POST['user_type'];

    $select = " SELECT * FROM user where email ='$email' && mdp='$password' ";

    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';

    }
    else{
        if($password != $cpass){
            $error[] = 'password not matched';
        } else{
            $insert =" INSERT INTO user (nom,prenom,email,mdp,tele,user_type) VALUES ('$nom','$prenom','$email','$password','$tele','$user_type')";
           mysqli_query($conn,$insert);
           header('location:login.php');
        }
    }





};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--header-->
    <header class="header">
        <section class="flex">
            <a href="home.html" class="Carrer">
                <i class="bars"></i>
                 Careersearch
               
            </a>
            <nav class="navbar">
                <a href="home.html">Home</a>
                <a href="view.html">About Us</a>
                <a href="search.html">Search</a>
                <a href="contact.html">Contact Us</a>
                <a href="login.php">Account</a>

            </nav>

            
        </section>




    </header>
    <div class="account-form-container">
        <section class="account-form">
            <form action="" method="post">
                <h3>Register Now</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo $error;
                    }
                } 
                ?>
                <input type="text" required name="nom"
                maxlength="50" placeholder="entrer votre nom" class="input">
                <input type="text" required name="prenom"
                maxlength="50" placeholder="entrer votre prenom" class="input">
             
                <input type="email" required name="email"
                maxlength="50" placeholder="enter your mail" class="input">
                <input type="password" required name="password"
                maxlength="50" placeholder="enter your password" class="input">
          
                <input type="password" required name="cpassword"
                maxlength="50" placeholder="confirm your password" class="input">
                <input type="tele" required name="tele"
                maxlength="50" placeholder="votre numero de telephone" class="input">
          
                <select name="user_type" >
                    <option value="candidat">candidat</option>
                    <option value="recruteur">recruteur</option>
                </select>
                <p> have already an account? <a href="login.php">Log in</a></p>
                <input type="submit" value="register now" name="submit" class="btn">
            </form>
        </section>
    </div>
    






    <footer class="footer">
        <section class="grid">
            <div class="box">
                <h3>Links</h3>
                <a href="home.html"><i class="fas fa-angle-right"></i>home</a>
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