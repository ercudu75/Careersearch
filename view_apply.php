<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des candidats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Liste des candidats</h1>
        <a href="recruteur_dash.php"><h3 class="my-4">return home</h3></a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>email</th>
                    <th>date de disponibilité</th>
                    <th>Statut</th>
                    <th>message</th>
                    <th>CV</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    $query = mysqli_query($conn, "SELECT * FROM postuler order by id asc");
                    
                    while($queries = mysqli_fetch_assoc($query)):
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $queries['nom']; ?></td>
                        <td><?php echo $queries['prenom']; ?></td>
                        <td><?php echo $queries['mail']; ?></td>
                        <td><?php echo $queries['dated']; ?></td>
                        <td><?php echo $queries['statut']; ?></td>
                        <td><?php echo $queries['message']; ?></td>
                        <td> 
                            <?php
                            if($query && mysqli_num_rows($query) > 0){
                                $fileURL = 'pdf/'.$queries["Cv"];
                            ?>
                                <a href="<?php echo $fileURL; ?>" class="btn btn-primary" download>Download PDF</a>
                            <?php } else { ?>
                                <p>No PDF file found for this application...</p>
                            <?php } ?>  
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>

            </tbody>
        </table>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
