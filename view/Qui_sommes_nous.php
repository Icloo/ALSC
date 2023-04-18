<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('template/link_view.php'); ?>
    <title>Qui sommes-nous ?</title>
</head>

<!-- header -->
<div class="loader-container">
    <div class="spinner"></div>
    <img src="../public/img/Logo.png" class="logo">
</div>
<?php require('template/header.php'); ?>

<!-- hero -->
<div class="hero_espaceur"></div>

<div class="hero_qsn">
    <div></div>
    <div class="titre_hero_nos_missions">
        <h1>Qui sommes-nous ?</h1>
    </div> 

</div>

<div class="espaceur"></div>

<!-- main -->
<h2 class="titre2">Qui sommes-nous ?</h2>

<div class="espaceur"></div>

<div class="qsn_1">

    <div class="qsn_texte">
        <h2>Notre histoire</h2>
        <div class="espaceur_2"></div>
        <p>Installée depuis 2003 en Auvergne, et issue des métiers de la logistique, cathy a toujours été une femme de terrain. 
        Engagée sur le territoire local et dans de nombreuses associations, Cathy souhaite poursuivre son engagement auprès des ménages et des personnes isolées confrontés à des accidents de la vie ou à une période d'instabilités afin de leur permettre de trouver un équilibre, c’est ainsi qu’elle crée sa propre association en 2017 ALSC( Association Logement Solidaire Cathy) , en tant que Présidente bénévole.</p>
    </div>

    <div class="qsn_1_image"></div>


</div>

<div class="espaceur"></div>

<div class="qsn_2">

    <div class="qsn_2_image"></div>

    <div class="qsn_texte">
        <div class="espaceur"></div>
        <p>Son engagement passera donc par le logement et l'accompagnement social. <br> <br>

            ALSC en quelques chiffres: depuis sa création :
            <ul>
                <li>16 logements en intermédiations </li>
                <li>95 personnes relogées, avec le concours des bailleurs sociaux, propiétaire privés et ALSC </li>
                <li>5 bénévoles dont Cathy elle-même. </li>
            </ul>
                Pour 2022 ce sont :
            <ul>    
                <li>11 logements en intermédiation </li>
                <li>110 personnes reçues à l'association pour un premier accueil </li>
                <li>85 adhérents</li>
            </ul>
        </p>
        <div class="espaceur"></div>
    </div>

</div>

<div class="espaceur"></div>


<div class="qsn_3">

    <div class="qsn_texte">
    <div class="espaceur"></div>
        <p>La mairie d’Issoire décernera en 2022 la médaille du bénévolat à Cathy pour son engagement.
            Les ambitions de Cathy pour ses prochaines années seraient, pérenniser ALSC, continuer d’être identifiés sur Issoire comme un acteur majeur et incontournable du logement par les propriétaires et les bénéficiaires, pouvoir embaucher un.e salarié.e pour le suivi administratif ( Cathy reste et restera une femme de terrain !!! ), et trouver des bénévoles sérieux et engagé.e.s?</p>
            <div class="espaceur"></div>
    </div>

    <div class="qsn_3_image"></div>


</div>

<div class="espaceur"></div>
<div class="espaceur"></div>

<div class="qsn_4">

    <div class="qsn_4_gauche">
        <p>Quelques chiffres</p>
    </div>

    <div class="qsn_4_droite">
        <p>+2000 lorem</p>
        <p>+700 lorem</p>
        <p>+200 lorem</p>
    </div>

</div>



</div>

<div class="espaceur"></div>

<h2>Petite galerie de photos</h2>

<div class="espaceur"></div>

<div class="container text-center my-3">
    
    <div class="row mx-auto my-auto qns">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/20180901_112346.jpg">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/245227387_4390597974320499_7239487432505787691_n.jpg">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/311581943_482677943899965_8179245929170364543_n.jpg">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/316407301_508425044658588_7793263675068179550_n 1.png">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="../public/img/expo Association Vendredi Issoire 26 aout.jpg">
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

<!-- footer -->
<?php require('template/footer.php'); ?>
<?php require('template/script.php'); ?>
</body>
</html>