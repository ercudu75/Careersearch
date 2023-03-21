<?php

@include 'config.php';
$query = "SELECT * FROM offre WHERE offre_id = ?";
$sql = $conn->prepare($query);
$id_off = $_REQUEST['id'];
$sql->bind_param('i', $id_off);
$sql->execute();
$result = $sql->get_result();
if (!$result) {
    die('Query Error: ' . $mysqli->error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .flex-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 5px;
    }
    
    .btn {
        font-size: 20px;
    }
    
    button {
        font-size: 30px;
        padding: 10px 20px;
    }
    .company{
        min-height: 400px;
    }
    p{
        font-size: 24px;
        max-width: 90%;
        margin:30px auto;
        line-height: 28px;
        text-align: left;
    }
h1{
    font-size: 30px;
}
</style>
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
<?php foreach ($result as $item): ?>
 <section class="jobs-container">
    <div class="box-container">
        <div class="box">
            <div class="company">
            
<h1><?php echo $item['titre_off']; ?></h1>
<p class=""><?php echo $item['desc']; ?></p>

                
        </div>
        </div>
        </div>
       
 </section>
 <section class="category">
    <div class="box-container">
        <a href="#" class="box">
        <i class="fa fa-calendar" aria-hidden="true"></i>
      <div>
                <h3>date d'offre</h3>
                <span><?php echo $item['date_pub']; ?></span>
            </div>
        </a>
    
        <a href="#" class="box">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
            <div>
                <h3>Lieu </h3>
                <span><?php echo $item['lieu']; ?></span>
            </div>
        </a>
    </div>
</section>
<?php endforeach;?>
<div class="flex-btn" style="display: flex;">
                <a href="formulaire.php?id=<?php echo $_REQUEST['id'] ?>" class="btn">POSTULER</a>
            </div>

    <script src="js/script.js"></script>
   
</body>
</html>