<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('view/template/link_index.php'); ?>
    <title>Accueil</title>
</head>

<!-- header -->
<header id="header">
    <a class="navbar-brand" href="#"><img class="logo" src="public/img/Logo.png"></a>
    <nav class="navbar navbar-expand-lg navbar-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./view/Nos_missions.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos missions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./view/Nos_missions.php">Nos missions</a>
                        <a class="dropdown-item" href="./view/Proprietaire.php">Propriétaire</a>
                        <a class="dropdown-item" href="./view/Locataires.php">Locataires</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./view/Partenaires.php">Partenaires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./view/Qui_sommes_nous.php">Qui sommes-nous ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./view/Contact.php">Contact</a>
                </li>
                <a href="./view/Contribution.php"><button class="btn btn-outline-success lien" type="button">Dons & Adhésions</button></a>
                <button class="btn btn-outline-success testtest" type="button" id="dark">Mode <i class="fa-solid fa-moon"></i> </button>
            </ul>
        </div>
    </nav>
</header>

<div class="loader-container">
    <div class="spinner"></div>
    <img src="./public/Logo.png" class="logo" alt="Logo">
</div>

<!-- hero -->
<div class="hero">
    <div></div>
    <div class="titre_hero">
        <h1>C'est grâce au logement que nous
            <br>nous construisons
        </h1>
    </div>
</div>

<div class="espaceur"></div>

<div class="accueil_1">
    <div class="accueil_1_sous_partie">
        <i class="fa-solid fa-house-crack"></i>
        Promouvoir l’autonomie et l’insertion par le logement afin de prévenir les exclusions sociales
    </div>

    <div class="accueil_1_sous_partie interieur">
        <i class="fa-solid fa-book-open"></i>
        Contribuer à éducation à la citoyenneté, au développement du lien social et au renforcement de la cohésion territoriale.
    </div>

    <div class="accueil_1_sous_partie interieur">
        <i class="fa-solid fa-hand-holding-heart"></i>
        Proposer des réponses adaptées aux difficultés des personnes qu’elle accompagne.
    </div>

    <div class="accueil_1_sous_partie interieur">
        <i class="fa-solid fa-medal"></i>
        Aider les personnes à accéder au logement autonome, à s’insérer dans ce logement et à s’y maintenir.
    </div>
</div>
<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>

<div class="accueil_2">

    <div class="accueil_2_gauche">

        <h2>Nos actions</h2>
        <div class="espaceur_2"></div>
        <p>L’Association s’appuie sur le principe de l’intermediation locative. Notre principale mission ? Prendre en charge des logements de propriétaires privés, qui laissent à l’association la gestion de leur bien, afin de permettre à des familles d’accéder à un logement. </p>
        <div class="espaceur_2"></div>
        <a href="./view/Nos_missions.php"><button class="accueil_bouton1">En savoir + </button></a>

    </div>

    <div class="accueil_2_droite_1"></div>


</div>

<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>

<div class="accueil_2">

    <div class="accueil_2_droite"></div>

    <div class="accueil_2_gauche">

        <h2>Notre histoire</h2>
        <div class="espaceur_2"></div>
        <p>Installée depuis 2003 en Auvergne, et issue des métiers de la logistique, cathy a toujours été une femme de terrain. Engagée sur le territoire local...</p>
        <div class="espaceur_2"></div>
        <a href="./view/Qui_sommes_nous.php"><button class="accueil_bouton2">En savoir + </button></a>

    </div>

</div>

<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>

<div class="accueil_3">

    <h2>Si vous avez questions, n'hésitez pas !</h2>
    <div class="espaceur"></div>
    <a href="./view/Contact.php"><button class="accueil_bouton3">Contactez-nous</button></a>

</div>

<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>

<div class="accueil_4">

    <h2>Nos Partenaires</h2>

    <div class="espaceur"></div>

    <div class="container text-center my-0">

        <div class="row mx-auto my-auto index">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="./public/img/logo_puy_de_dome_2.svg.png">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="./public/img/logo_cpam_transparent.png">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body index">
                                <img class="img-fluid" src="./public/img/cdnlogo.com_rotary.svg">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="./public/img/Ville_Issoire_Q_300dpi_transparent.png">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="./public/img/logo_ml.png">
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </div>

    </div>

</div>

<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>

<div class="accueil_5">

    <h2>Témoignages</h2>

    <div class="espaceur"></div>

    <div class="liste_temoignages">

        <div class="temoignages temoignages1">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita similique ut dignissimos adipisci natus dicta amet odit temporibus dolorum quis fugiat delectus ab accusamus fugit qui eveniet iste, quisquam laborum.</p>
            <h3>Madi Satourdine</h3>
        </div>

        <div class="temoignages temoignages2">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam molestiae temporibus a quae, adipisci soluta voluptate, ad, rerum maiores quia vero ipsa quaerat omnis voluptatibus laboriosam delectus perferendis mollitia voluptatem!</p>
            <h3>Madi Satourdine</h3>
        </div>

        <div class="temoignages temoignages3">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, sit nihil! Debitis quidem optio quam vel similique, expedita nihil repellendus laboriosam odio placeat laborum dolorum reiciendis veritatis magnam accusantium totam.</p>
            <h3>Madi Satourdine</h3>
        </div>

    </div>

</div>


<div class="espaceur"></div>

<!-- ******************************************************** -->

<footer id="footer">

    <div>
        <h2>A propos</h2>
        <div class="footer_div">
            <a href="index.php">Accueil</a>
            <a href="./view/Nos_missions.php">Nos missions</a>
            <a href="./view/Partenaires.php">Partenaires</a>
            <a href="./view/Qui_sommes_nous.php">Qui sommes-nous ?</a>
            <a href="./view/Contact.php">Contact</a>
            <a href="./view/Contribution.php">Dons et Adhésions</a>
            <a href="#">Mentions légales</a>
            <a href="#">Politique de confidentialité</a>
            <a href="#">CGU</a>
        </div>

    </div>

    <div>
        <div class="footer_contact">
            <h2>Contact</h2>
            <div class="footer_div" id="footer_sombre">
                asso.logement.solidaire.cathy@gmail.com
                <br>
                Cathy 06 33 28 01 54
                <br>
                15 boulevard de la Manlière,
                <br>
                Issoire/63500
                <br>
                France
            </div>
        </div>
        <h3>Suivez-nous sur : <a href="https://www.facebook.com/AssociationLogementSolidaireCathy/?locale=fr_FR"><i class="fa-brands fa-square-facebook"></i></a> </h3>
    </div>
    <div class="footer_gauche">

        <div class="logo_footer">
            <img src="./public/img/Ville_Issoire_Q_300dpi_transparent.png" class="taille_logo_footer" alt="Logo Ville d'Issoire">
            <img src="./public/logo_puy_de_dome_2.svg.png" class="taille_logo_footer" alt="Logo Puy-De-Dome">
        </div>

        <div class="logo_footer">
            <img src="./public/img/cdnlogo.com_rotary.svg" class="taille_logo_footer" alt="Logo Rotary issoire">
            <img src="./public/img/logo_cpam_transparent.png" class="taille_logo_footer" alt="Logo CPAM">
        </div>
        <div>
            <img src="./public/img/logo_ml.png" class="taille_logo_footer" alt="Logo mission locale">
        </div>

        <div class="espaceur"></div>

        <div class="footer_bouton">Nous soutenir</div>

    </div>


</footer>
<script src="./public/js/scripts.js"></script>
</body>

</html>