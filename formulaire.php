<?php
session_start();
$user_id=$_SESSION['user_id'];
@include 'config.php';


if(isset($_POST['apply'])){


    $name = mysqli_real_escape_string($conn,$_POST['nom']);
    $surname = mysqli_real_escape_string($conn,$_POST['prenom']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $employe_type =$_POST['employe_type'];
    $date = date('Y-m-d', strtotime($_POST['age']));
    $tele = mysqli_real_escape_string($conn,$_POST['phone']);
    $messa = mysqli_real_escape_string($conn,$_POST['message']);
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="pdf/";
    
 
    $new_size = $file_size/1024;  
    
    
    
    $new_file_name = strtolower($file);

    
    $final_file=str_replace(' ','-',$new_file_name);

    $select = mysqli_query($conn , "SELECT * FROM `postuler`  where nom = '$name' and mail = '$email' ");
}




?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>Apply Now</h1>
            <?php
            if(isset($_POST['apply'])){

            
        $offerid =$_REQUEST['id'];
            if(move_uploaded_file($file_loc,$folder.$final_file)){
                $insert = mysqli_query($conn ,"INSERT INTO `postuler`(user_id,offre_id,nom, prenom,mail,statut,dated,phone,message,Cv)
                VALUES ( '$user_id','$offerid','$name','$surname','$email','$employe_type','$date','$tele','$messa','$final_file')")or die('query failed');

            }}
               
            ?>
            <input type="text" name="nom" placeholder=" votre nom" required class="input-container">   
            <input type="text" name="prenom" placeholder=" votre prenom" required class="input-container">
            <input type="email" name="email" placeholder=" votre mail" required class="input-container"> 
            <input type="text" name="adresse" placeholder=" votre adresse" required class="input-container">
            <p>date de disponibilité</p>
            <input type="date" name="age" placeholder="your age" class="input-container">
            <input type="tel" name="phone" placeholder="enter your phone number" >
            <p>votre statut</p>
            <select name="employe_type" >
                <option value="employe">employe</option>
                <option value="sans emploi">sans emploi</option>
                <option value="etudiant">Etudiant</option>
            </select> 

            <p>upload your resume</p>
            <input type="file" name="file" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="input-container" />

            <p>upload your cover letter (*optional)</p>
            <input type="file" name="cover" ccept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="input-container" />

           
            <textarea name="message" class="input-container" required maxlength="1000"
            placeholder="why do u want to join this role" cols="30" rows="10"></textarea>

             <input type="submit" value="apply" name="apply" class="btn">


   


        </form>
    </div>





    
</body>
</html>