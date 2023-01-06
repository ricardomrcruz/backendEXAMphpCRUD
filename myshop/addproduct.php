<?php 
include 'connect.php';

if (isset($_POST['submit'])){
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $ville = $_POST['ville'];
    $codepostal = $_POST['codepostal'];
    $image = $_POST['image'];


    $sql = "INSERT INTO `produit` (title,description,price,city,postal_code,image) values ('$titre', '$description', '$prix', '$ville', '$codepostal', '$image')";
    $result=mysqli_query($con, $sql);
    if($result){
        //echo "connexion avec succès"; pour verifier cest la connection marche
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajoute produit</title>

    <!-- css bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


                 <!-------------------------------------    PAGE FORMULAIRE AJOUTE UN PRODUIT  ----------------------------------------------------->


<div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Titre</label>
        <input type="text" class="form-control" placeholder="Titre du produit" name="titre" autocomplete="off">
      </div>
      <div class="form-group my-3">
        <label>Description</label>
        <input type="text" class="form-control" placeholder="Description du produit" name="description" autocomplete="off">
      </div>
      <div class="form-group input-group my-2 ">  
        <input type="text" class="form-control" placeholder="Prix du produit" name="prix" autocomplete="off">
        <span class="input-group-text">€</span>
      </div>
      <div class="form-group">
        <label>Ville</label>
        <input type="text" class="form-control" placeholder="Adresse Ville du produit" name="ville" >
      </div>
      <div class="form-group">
        <label>Code Postal </label>
        <input type="text" class="form-control" placeholder="Adresse code postal du produit" name="codepostal" >
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="text" class="form-control" placeholder="Copie Collé URL Image içi" name="image" >
      </div>


      <button type="submit" name="submit" class="btn btn-info">Ajouté noveau produit</button>
    </form>
  </div>


    
</body>
</html>




 <!-----------------------------------------    developedbyricardocruz  ----------------------------------------------------->