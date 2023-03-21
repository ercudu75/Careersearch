<?php
@include 'config.php';
$sql = 'SELECT * FROM offre';
$result = mysqli_query($conn, $sql);
$offres = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .category .box-container {
   display: inline;
    justify-content: center;
    align-items: flex-start;
    gap: 1.5rem;
    margin: 10px;
}
    </style>
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

<section class="category">
    <h1 class="heading">Job Categories</h1>
    <?php foreach ($offres as $item): ?>
    <div class="box-container">
        <a href="offre_details_candidat.php?id=<?= $item['offre_id']; ?>" class="box">
        <i class="fa fa-briefcase" aria-hidden="true"></i>
          <div>
                <h3> <?php echo $item['titre_off']; ?></h3>
                <span> <?php echo $item['date_pub']; ?></span>
            </div>
        </a>
    </div>
    <?php endforeach; ?>
</section>
    <script src="js/script.js"></script>
</body>
</html>