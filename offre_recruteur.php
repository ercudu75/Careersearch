<?php  
session_start();
$user_id=$_SESSION['user_id'];
     @include 'config.php';
     $titre = $lieu = $desc = '';
$titreErr = $lieuErr = $descErr = '';
if (isset($_POST['submit'])) {
  if (empty($_POST['titre'])) {
    $titreErr = 'Veuillez entrer le titre';
  } else {
    $titre = filter_input(
      INPUT_POST,
      'titre',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
  }
  if (empty($_POST['lieu'])) {
    $lieuErr = 'veuilez entrer le lieu';
  } else {
      $lieu = filter_input(INPUT_POST, 'lieu', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }
   if (empty($_POST['desc'])) {
    $descErr = 'veillez entrez la description';
  } else {
    $desc = filter_input(
      INPUT_POST,
      'desc',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
  }
if (empty($titreErr) && empty($lieuErr) && empty($descErr)) {
     // add to database
     $sql = "INSERT INTO `offre`( `titre_off`, `lieu`, `desc`, `user_id`) VALUES ('$titre','$lieu','$desc',$user_id)";
     if (mysqli_query($conn, $sql)) {
         echo "Record inserted successfully";
       } else {
         echo "Error inserting record: " . mysqli_error($conn);
      }
  }
}
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
            <form action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" method="post">
                <h3>Post Now</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo $error;
                    }
                } 
                ?>
                <input type="text" required name="titre" placeholder="titre" class="input">
             
                <input type="text" required name="lieu" placeholder="lieu" class="input">
            
                <textarea required name="desc" placeholder="post a job" class="input" cols="30" rows="10"></textarea>
                <input type="submit" value="Send" name="submit" class="btn">
                <a href="recruteur_dash.php" font-size: 50px; ><h4>back home</h4></a>
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