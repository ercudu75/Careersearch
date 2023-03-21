<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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


    <section class="job-filter">
        <h1 class="heading">Find a Job</h1>
        <form action="" method="post">
            <div class="flex">
                <div class="box">
                    <p>Job Title</p>
                    <input type="text" name="title" placeholder="job title, keywords or company" required maxlength="20" class="input">

                </div>
                <div class="box">
                    <p>Where</p>
                    <input type="text" name="location" placeholder="City or Region" required maxlength="50" class="input">
    
                </div>
                <div class="box">
                    <input type="submit" value="Search Job" name="search" class="btn">
       
                </div>
            </div>
            <div class="dropdown-container">
                <div class="dropdown">
                    <input type="text" readonly placeholder="Job Type" name="date"
                    maxlength="20"  class="output">
                    <div class="lists">
                        <p class="items">full-time</p>
                        <p class="items">Part-time</p>
                        <p class="items">Intership</p>
                    </div>
                </div>
                <div class="dropdown">
                    <input type="text" readonly placeholder="Education" name="date"
                    maxlength="20"  class="output">
                    <div class="lists">
                        <p class="items">High school degree</p>
                        <p class="items">Bachelor degree</p>
                        <p class="items">Master degree</p>
                        <p class="items">Associate degree</p>
                    </div>
                </div>
                <div class="dropdown">
                    <input type="text" readonly placeholder="Experience level" name="date"
                    maxlength="20"  class="output">
                    <div class="lists">
                        <p class="items">Entry Level</p>
                        <p class="items">Mid level</p>
                        <p class="items">No experience required</p>
                        
                    </div>
                </div>

            </div>
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

    <script>
        let dropdown_items = document.querySelectorAll('.job-filter form .dropdown-container .dropdown .lists .items');

        dropdown_items.forEach(items =>{
            items.onclick = () => {
                items_parent = items.parentElement.parentElement;
                let output = items_parent.querySelector('.output');
                output.value = items.innerText;
            }
        })
    </script>


</body>
</html>