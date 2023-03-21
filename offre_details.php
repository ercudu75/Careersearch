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
            
<h3><?php echo $item['titre_off']; ?></h3>
<?php echo $item['desc']; ?>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Non culpa explicabo consequatur. Numquam ad aliquid ipsa quibusdam doloremque! Inventore earum quae quidem beatae suscipit excepturi modi cumque blanditiis libero illo.
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ea modi molestiae, incidunt error odit minima rem nihil adipisci cum. Fuga rerum laudantium eveniet repellat velit quo unde similique perspiciatis?$_COOKIE
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis deleniti provident dolorum fugiat ad praesentium libero iusto recusandae, magni necessitatibus quis similique ducimus quisquam molestias quas, totam maxime molestiae cupiditate. Culpa accusamus sed, dicta quas, neque voluptatem aliquam ullam doloremque modi ratione nihil voluptatum. Vitae consequuntur itaque ut natus, libero quaerat dolore? Aspernatur a quis ipsum harum nihil vero eum, odio optio molestiae aliquam nam quibusdam sequi consequatur culpa obcaecati veritatis! Consequuntur ipsum porro aperiam dicta voluptatem quo quas, consequatur impedit distinctio accusantium doloribus, veritatis, quae illum. Ab officia repudiandae quasi accusamus, aliquid molestias, vero architecto velit qui vel, ea sequi amet rerum tenetur unde voluptas veniam veritatis eum culpa quas suscipit magnam quam saepe nisi! Ipsum rerum sint laborum maxime aliquid, cumque officia sequi! Qui adipisci eaque deserunt nemo molestias, eum, veritatis tempore temporibus doloremque dolor praesentium amet quae culpa ex quisquam? Voluptas debitis atque harum velit ipsa ex nesciunt accusamus assumenda fugit deserunt aut repudiandae rerum est, necessitatibus ipsam exercitationem numquam quisquam placeat! Dolore facere blanditiis sit quisquam ea cumque rem consectetur amet, quis omnis odit et quam, assumenda delectus, autem nesciunt architecto voluptas natus ipsam! Nisi perferendis porro accusantium eveniet. Soluta sapiente eveniet hic voluptas cum optio laboriosam vel sit. Voluptate architecto, magni eligendi molestias nisi quisquam molestiae aliquam impedit cumque praesentium sunt temporibus soluta assumenda modi ex quo reprehenderit quis perferendis quas voluptatum eius, natus similique. Esse ex reprehenderit quidem illum tempore error eos itaque laboriosam quam, fugit aliquid quasi! Natus optio consequatur iure aliquam expedita quisquam unde pariatur earum ex nobis porro, eius, consectetur nihil corrupti? Mollitia magnam excepturi neque laborum provident at libero qui? Placeat totam voluptate optio esse nulla tempora accusantium, quod pariatur aut aliquam ipsa culpa architecto, illo nisi, in commodi nesciunt distinctio veniam provident assumenda asperiores voluptas saepe eveniet. Sed laborum dolor veniam dolore voluptatem. Adipisci numquam rem sequi sunt, aut quia aperiam optio suscipit magni molestiae quaerat ullam tempore saepe, et perspiciatis molestias doloremque ad, provident dolorem fugiat libero deleniti aliquam placeat? Ex rem magni eius nesciunt fuga unde, natus numquam doloremque cupiditate deserunt.

                
        </div>
        </div>
        </div>
       
 </section>
 <section class="category">
    <div class="box-container">
        <a href="#" class="box">
            <i class="fa-regular fa-pen-nib"></i>            <div>
                <h3>date d'offre</h3>
                <span><?php echo $item['date_pub']; ?></span>
            </div>
        </a>
    
        <a href="#" class="box">
            <i class="fa-brands fa-uncharted"></i>
            <div>
                <h3>Lieu </h3>
                <span><?php echo $item['lieu']; ?></span>
            </div>
        </a>
    </div>
</section>
<?php endforeach;?>
<div class="flex-btn" style="display: flex;">
                <a href="formulaire.php" class="btn">POSTULER</a>
            </div>

    <script src="js/script.js"></script>
   
</body>
</html>