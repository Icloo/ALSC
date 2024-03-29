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

<div class="espaceur"></div>
<div class="espaceur"></div>

<div class="fmap">
    <div>
        <form method="post">
            <label class="lab" for="name">Votre nom</label>
            <input class="inp" type="text" id="name" placeholder="Nom" required="required">
            <label class="lab" for="prenom">Votre prénom</label>
            <input class="inp" type="text" id="prenom" placeholder="Prénom" required="required">
            <label class="lab" for="email">Votre e-mail</label>
            <input class="inp" type="mail" name="mail" id="mail" placeholder="Email" required="required">
            <label class="lab" for="message">Objets</label>
            <textarea  name="message" id="message" cols="35" rows="5" placeholder="Objet"></textarea>
            <div class="int" >
                <input type="checkbox" name="" id="btn" required="required">
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2794.3500960852!2d3.2466131!3d45.5432824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f65608fe23aa65%3A0x828b49657f417000!2s15%20Bd%20de%20la%20Manli%C3%A8re%2C%2063500%20Issoire%2C%20France!5e0!3m2!1sfr!2suk!4v1691571593459!5m2!1sfr!2suk" width="500" height="250" style="border:0; margin-bottom:35px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p class="local">
            15 Bd de la Malière,
            63500 Issoire<br>
            Lundi et Mardi de 9h à 16h30<br>
            et le Mercredi matin
            de 9h à 11h30<br>
            <strong>Uniquement sur RDV.</strong>
            <br><br>
        </p>
    </div>
</div>


<div class="espaceur"></div>

<h2>Notre Jardin Participatif</h2>

<div class="espaceur_2"></div>

<div class="container text-center my-3">
    
    <div class="row mx-auto my-auto qns">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/jardin/jardin_6.jpg" alt="Jardin participatif">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/jardin/jardin_1.jpg" alt="Jardin participatif">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/jardin/jardin_2.jpg" alt="Jardin participatif">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/jardin/jardin_3.jpg" alt="Jardin participatif">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/jardin/jardin_4.jpg" alt="Jardin participatif">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/jardin/jardin_5.jpg" alt="Jardin participatif">
                        </div>
                    </div>
                </div>

             
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Précedent</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>
    
</div>

<div class="espaceur"></div>
<div class="espaceur"></div>

<?php require('template/footer.php'); ?>
<?php require('template/script.php'); ?>
</body>
</html>