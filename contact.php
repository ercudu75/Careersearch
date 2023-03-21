<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
            <a href="#" class="btn" style="margin-top:0;">Post Job</a>

            
        </section>




    </header>

    <div class="section-title">Contact Us</div>

    <section class="contact">
        <div class="box-container">
           <div class="box">
            <i class="fas fa-map-marker-alt"></i>
           <a href="#">location</a>
            </div>

            <div class="box">
                <i class="fas fa-phone"></i>
               <a href="#"> (012) 345-6789 </a>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
               <a href="#"> mail@gmail.com </a>
            </div>
        </div>
        <form action="" method="post">
            <h3>Drop Your Message Here</h3>
            <div class="flex">
                <div class="box">
                    <p>name </p>
                    <input type="text" name="name" required maxlength="20"
                    placeholder="enter your name" class="input">
                </div>
                <div class="box">
                    <p>mail </p>
                    <input type="mail" name="mail" required maxlength="50"
                    placeholder="enter your mail" class="input">
                </div>

            </div>
            <p>message </p>
            <textarea name="message" class="input" required maxlength="1000"
            placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="submit" value="Send a message" name="send" class="btn">
        
        </form>
    </section>


















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
                
            </div>

        </section>
        <div class="copy">
            &copy;copyright @2023
        </div>

    </footer>

    <script src="js/script.js"></script>
</body>
</html>