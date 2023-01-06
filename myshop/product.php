<?php
include 'connect.php';

$id_produit = $_GET['updateid'];
$sql = "SELECT * FROM `produit` where id_produit=$id_produit";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$id_produit = $row['id_produit'];
$titre = $row['title'];
$description = $row['description'];
$prix = $row['price'];
$ville = $row['city'];
$codepostal = $row['postal_code'];
$reservation_text = $row['reservation_text'];

if (isset($_POST['submit'])) {
    $reservation_text = $_POST['reservation_text'];

    $sql = "UPDATE `produit` set id_produit=$id_produit, reservation_text='$reservation_text' where id_produit=$id_produit";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:catalogue.php');
    } else {
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
    <title>page produit et reservation</title>

    <!-- css bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <!---------------------------------    PAGE PRODUIT ET RESERVATION  ----------------------------------------------------->



    <!-------------- NAV ----------->

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid ">
            <h1 class="navbar-brand text-white">RAINFOREST</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="display.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addproduct.php">Ajouté Produit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogue.php">Consulter tous les produits</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <!---------------- AFFICHAGE DU PRODUIT SELECTIONEE --------------->

    <div class="container">

        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">Id Produit</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Code Postal</th>
                    <th scope="col">Texte de reservation</th>
                    <th scope="col">État de reservation</th>
                </tr>
            </thead>
            <tbody>
                <?php




                echo '<tr>
                        <th scope="row">' . $id_produit . '</th>
                        <td>' . mb_strtoupper($titre) . '</td>
                        <td>' . $description . '</td>
                        <td>' . $prix . '</td>
                        <td>' . $ville . '</td> 
                        <td>' . $codepostal . '</td>';
                if ($row['reservation_text'] != '0') {
                    echo " <td>$reservation_text</td>";
                } else {
                    echo "<td></td>";
                };
                if ($row['reservation_text'] != '0') {
                    echo "<td><button class='btn btn-danger'>RESERVÉ</button></td>";
                } else {
                    echo "<td></td>";
                };
                echo '</tr>';
                ?>

            </tbody>
        </table>
    </div>




    <!----------------- FORMULAIRE RESERVATION ----------------------->


    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Pour resérver, remplissez le formulaire ci-dessous afin d'être recontacté par l'un de nos conseillers.</label>
                <textarea class="form-control" name="reservation_text" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-info">Je réserve</button>
        </form>
    </div>

    <!-- pour enlever la reservation ecrire '0' dans le formulaire;  -->



    <!-----------------------------------------    developedbyricardocruz  ----------------------------------------------------->