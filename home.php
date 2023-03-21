




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--header-->
    <header class="header">
        <section class="flex">
            <a href="home.php" class="Carrer">
                
                Careersearch
               
            </a>
            <nav class="navbar">
                <a href="/home.php">Home</a>
                <a href="view.php">About Us</a>
                <a href="search.php">Search</a>
                <a href="contact.php">Contact Us</a>
                <a href="login.php">Account</a>

            </nav>
            

            
        </section>




    </header>

    <!--home-->
    <div class="home-container">
        <section class="home">

            <form action="" method="post">
                <h3>Find Your Dream Job Here</h3>
                <p>What</p>
                <input type="text" name="title" placeholder="job title, keywords o company" required maxlength="20" class="input">

                <p>Where</p>
                <input type="text" name="location" placeholder="City or Region" required maxlength="50" class="input">

                <input type="submit" value="Search Job" name="search" class="btn">
            </form>
        </section>
    </div>

 









    <footer class="footer">
        <section class="grid">
            <div class="box">
                <h3>Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="view.php"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="contact.php"><i class="fas fa-angle-right"></i>Feed-Back</a>
            </div>
            <div class="box">
                <h3>Other Links</h3>
                <a href="register.php"><i class="fas fa-angle-right"></i>Register</a>
                <a href="login.php"><i class="fas fa-angle-right"></i>Login</a>
                
            </div>
            

            

        </section>
        <div class="copy">
            &copy;copyright @2023
        </div>

    </footer>

    <script src="js/script.js"></script>
</body>
</html>