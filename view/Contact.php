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

<!-- header -->
<div class="loader-container">
    <div class="spinner"></div>
    <img src="../public/img/Logo.png" class="logo">
</div>
<?php require('template/header.php'); ?>

<!-- hero -->
<div class="hero_espaceur"></div>

<div class="hero_contact">
    <div></div>
    <div class="titre_hero_nos_missions">
        <h1>Contactez-nous</h1>
    </div> 

</div>

<div class="espaceur"></div>

<!-- main -->
<h2 class="titre2">Formulaire</h2>

<div class="espaceur_2"></div>

<p class="para_contact">
Dans un esprit de solidarité, nous recherchons des propriétaires dit solidaires, 
c’est-à-dire dont le souhait est d’aider des personnes en situation précaire à trouver un logement.
C’est que des avantages pour  vous, car nous vous donnons la garantie d’un loyer car nous sommes vos locataires,
nous vous garantissons un logement remis en état et en plus vous ne déclarez seulement que 15% des revenus fonciers.
</p>


<div class="fmap">
    <div>
        <form method="post">
            <label class="lab" for="name">Votre nom</label>
            <input class="inp" type="text" id="name" placeholder="Nom">
            <label class="lab" for="prenom">Votre prénom</label>
            <input class="inp" type="text" id="prenom" placeholder="Prénom">
            <label class="lab" for="email">Votre e-mail</label>
            <input class="inp" type="mail" name="mail" id="mail" placeholder="Email">
            <label class="lab" for="message">Objets</label>
            <textarea  name="message" id="message" cols="35" rows="5" placeholder="Objet"></textarea>
            <div class="int" >
                <input type="checkbox" name="" id="btn">
                <label for="btn">
                    En cochant cette case, vous confirmez avoir lu et acceptez nos <br>
                    conditions générales d'utilisation et notre politique de confidentialité.
                </label> 
            </div>
            <button type="submit" class="btn2">Envoyer</button>
        </form>
    </div>
    <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@monsite.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['mail'];

        $message = '<h1>Message envoyé depuis la page Contact de ALSC.fr</h1>
        <p><b>Email : </b>' . $_POST['mail'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('loicbonafe@gmail.fr', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
    <div>
        <h2>Nous localiser</h2>
        <div class="espaceur_2"></div>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.367921061317!2d3.244441515095546!3d45.54292377910192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f65608fe4495bf%3A0x268f72563f321518!2s17%20Bd%20de%20la%20Manli%C3%A8re%2C%2063500%20Issoire!5e0!3m2!1sfr!2sfr!4v1680615310638!5m2!1sfr!2sfr" width="450" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p class="local">
            15 Bd de la Malière<br>
            63500 Issoire<br>
            Lundi et Mardi de 9h à 16h30<br>
            et le Mercredi matin<br>
            de 9h à 11h30<br>
            uniquement sur RDV.
            <br><br>
        </p>
    </div>
</div>

<?php require('template/footer.php'); ?>
<?php require('template/script.php'); ?>
</body>
</html>