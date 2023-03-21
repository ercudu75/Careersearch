




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
                <a href="home.php">Home</a>
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

<section class="category">
    <h1 class="heading">Job Categories</h1>
    <div class="box-container">
        <a href="#" class="box">
            <i class="fa-regular fa-pen-nib"></i>            <div>
                <h3>UX/UI Design</h3>
                <span>200 jobs</span>
            </div>
        </a>
    
        
        <a href="#" class="box">
            <i class="fas fa-code"></i>  
            <div>
                <h3>Web Developper</h3>
                <span>300 jobs</span>
            </div>
       </a>
        <a href="#" class="box">
            <i class="fa-brands fa-uncharted"></i>
            <div>
                <h3>software engineer </h3>
                <span>70 jobs</span>
            </div>
        </a>
        <a href="#" class="box">
            <i class="fa-solid fa-database"></i>  
            <div>
                <h3>Data Science</h3>
                <span>450 jobs</span>
            </div>
    
        </a>
    </div>
</section>

 <section class="jobs-container">
    <h1 class="heading">Latests jobs</h1>
    <div class="box-container">
        <div class="box">
            <div class="company">
                <!--image-->
                <div>
                  <h3>Software Engineer</h3>
                  <span>1 day ago</span>  
                </div>
                
            </div>
            <div class="tags">
                <p>
                    <i class="fa-solid fa-dollar-sign"></i>
                    <span>1k-2k</span>
                </p>
                <p>
                    <i class="fas fa-briefcase"></i> <span>Full-Time</span>
                </p>
            </div>
            <div class="flex-btn">
                <a href="search.php" class="btn">View Details</a>
                <button type="submit" class="far fa-heart"name="save"></button>
            </div>
        </div>
    </div>


    <div style="text-align: center; margin-top: 1rem;">
           <a href="liste_offres_candidat.php" class="btn">View More</a> 
    
    </div>
 </section>





























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