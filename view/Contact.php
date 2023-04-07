<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('template/link_view.php'); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>

    <title>Contact</title>
</head>
<div class="loader-container">
    <div class="spinner"></div>
    <img src="../public/Logo.png" class="logo">
</div>
<?php require('template/header.php'); ?>

<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>

<div class="hero_contact">
    <div></div>
    <div class="titre_hero_nos_missions">
        <h1>Contactez-nous</h1>
    </div> 

</div>
<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>

<form method="post">
    <label class="lab" for="name">Votre nom</label>
    <input type="text" id="name">
    <label class="lab" for="prenom">Votre prénom</label>
    <input type="text" id="prenom">
    <label class="lab" for="mail">Votre e-mail</label>
    <input type="email" name="" id="mail">
    <label class="lab" for="obj">Objets</label>
    <textarea name="" id="obj" cols="30" rows="10"></textarea>
</form>
<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.367921061317!2d3.244441515095546!3d45.54292377910192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f65608fe4495bf%3A0x268f72563f321518!2s17%20Bd%20de%20la%20Manli%C3%A8re%2C%2063500%20Issoire!5e0!3m2!1sfr!2sfr!4v1680615310638!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<?php require('template/footer.php'); ?>
<?php require('template/script.php'); ?>
</body>
</html>