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
    <a class="navbar-brand" href="#"><img class="logo" id="logomenu" src="public/img/Logo.png"></a>
    <nav class="navbar navbar-expand-lg navbar-light">

        <button class="navbar-toggler" id="responsive_menu" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Qui sommes-nous ? 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="./view/Qui_sommes_nous.php">Qui sommes-nous ?</a>
          <a class="dropdown-item" href="./view/Gallerie.php">Galerie</a>
        </div>
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
    <img src="./public/img/Logo.png" class="logo" alt="Logo">
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
        Contribuer à l'éducation à la citoyenneté, au développement du lien social et au renforcement de la cohésion territoriale.
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
        <p>L’Association s’appuie sur le principe de l’intermédiation locative. Notre principale mission ? Prendre en charge des logements de propriétaires privés, qui laissent à l’association la gestion de leur bien, afin de permettre à des familles d’accéder à un logement. </p>
        <div class="espaceur_2"></div>
        <a href="./view/Nos_missions.php"><button class="accueil_bouton1 from-right">En savoir + </button></a>

    </div>

    <div class="accueil_2_droite_1"></div>


</div>

<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>

<div class="accueil_2 accueil_2_responsive">

    <div class="accueil_2_droite"></div>

    <div class="accueil_2_gauche">

        <h2>Notre histoire</h2>
        <div class="espaceur_2"></div>
        <p>Installée depuis 2003 en Auvergne, et issue des métiers de la logistique, Cathy a toujours été une femme de terrain. Engagée sur le territoire local...</p>
        <div class="espaceur_2"></div>
        <a href="./view/Qui_sommes_nous.php"><button class="accueil_bouton2 from-right">En savoir + </button></a>

    </div>

</div>

<div class="espaceur"></div>

<div class="separateur"></div>

<div class="espaceur"></div>

<div class="accueil_3">

    <h2>Si vous avez questions, n'hésitez pas !</h2>
    <div class="espaceur"></div>
    <a href="./view/Contact.php"><button class="accueil_bouton3 from-right">Contactez-nous</button></a>

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
                                <img class="img-fluid" src="./public/img/cdnlogo.com_rotary.svg" alt="Logo Rotary">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="./public/img/Ville_Issoire_Q_300dpi_transparent.png" alt="Logo Ville Issoire">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="./public/img/logo_ml.png" alt="Logo Mission Locale">
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

        <div class="temoignages temoignages1 testtesttest">
            <p>"Fraîchement arrivée dans la région en 2022, je rêvais d'un nouveau départ en toute simplicité.
                Les aléas de la vie font que ma situation personnelle ainsi que familiale s'est doucement dégradée. Jeune maman sans emploi, le salaire de mon compagnon ne suffisait plus à subvenir aux besoins de notre petite famille. 
                Les dettes s'accumulaient et nous peinions à trouver un logement dû à notre situation. Petit à petit, les portes se fermaient et les démarches encourus ne portaient pas leurs fruits.
                Redirigée via un organisme social, j'ai eu vent de l'association de Cathy. Prête à tout pour nous sortir de cette situation compliquée, elle à tout de suite cerné notre problème et a mis tout en oeuvre afin de nous trouver un logement.
                Impliquée et déterminée, Cathy a su trouver les mots auprès de propriétaires qui ont confiance en sa démarche. Une vraie lueure d'espoir est apparue.
                Aujourd'hui, grâce à son implication sans faille, nous avons su redresser la pente et reprendre notre vie en main. Mille mercis".</p>
            <h4>Axelle, locataire</h4>
        </div>

        <div class="temoignages temoignages2 testtesttest2">
            <p>"Étant propriétaire de plusieurs logements sur le bassin d'Issoire, j'ai connu l'association via un tract laissée dans une pharmacie. Ne connaissant absolument pas le concept de sous-locations associatifs je me suis posé la question d'une démarche plus étique basée sur la solidarité. Le temps ainsi que les frais investit dans les méthodes traditionnelles ne finissaient plus. J'ai toujours eu plaisir à prendre mon rôle de propriétaire à coeur, effectuer de petits travaux d'électricité, de maçonnerie, réparer, déboucher et j'en passe !  Aujourd'hui, je suis heureux de faire confiance à une femme qui se bat pour une cause juste, l'insertion par le logement. Les loyers sont honorés chaque mois et je suis prévenu en temps et en heure des opérations que nécessite mes biens. Les prix au m2 sont calculés en fonction du département alors certes, ce n'est pas optimal, mais ce n'est rien à côté du gain de tranquillité obtenu.
            Cathy est une femme droite dans ses bottes qui sait où elle met les pieds. Comme moi, vous pouvez aussi vous impliquer dans le quotidien de personnes qui en ont besoin. Comme moi, devenez un propriétaire solidaire. 
              ".</p>
            <h4>E.Vicens,<br/> Propriètaire Solidaire</h4>
        </div>

        <div class="temoignages temoignages3">
            <p>"Après une longue vie commune tumultueuse soldée par une séparation déchirante, j'ai dû repartir de zéro. De nouveau dans ma région natale ma situation imposée un retour aux sources évident. J'ai eu la chance de pouvoir être hébergée chez un couple d'amis de façon provisoire. Consciente que je ne pouvais m'imposer trop longtemps dans leur vie de jeune parents, il me fallait vite une solution. Dû à mon âge avancé et seulement bénéficiaire du RSA, il était dur de trouver un patron ou un propriétaire qui me fasse confiance. Mes demandes de logements sociales n'aboutissaient pas et j'étais à deux doigts de me retrouver dans une situation très précaire. Au bord du gouffre et sans issue, une rencontre chaleureuse a sonnée comme une véritable renaissance. Cathy, Incarnation même de la bienveillance. Grâce elle, je me suis enfin sentie comprise. Son écoute et sa compassion mon enfin permis de relever la tête. Après avoir mené un travail d'arrache pieds, j'ai pu être relogée et enfin me sentir vivre de nouveau seulement quinze jours après notre rencontre. Merci infiniment".</p>
            <h4>Béatrice, locataire</h4>
        </div>

    </div>

</div>


<div class="espaceur"></div>
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
            <a href="./public/formulaire/MentionsLegales_finale.pdf">Mentions légales</a>
            <a href="./public/formulaire/Politique-de-confidentialite_finale.pdf">Politique de confidentialité</a>
            <a href="./public/formulaire/CGU_finale.pdf">Conditions générales d'utilisation</a>
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
        <h3>Suivez-nous sur : <a href="https://www.facebook.com/AssociationLogementSolidaireCathy/?locale=fr_FR"  target="_blank"><i class="fa-brands fa-square-facebook"></i></a> </h3>
    </div>
    <div class="footer_gauche">

        <div class="logo_footer">
            <img src="./public/img/Ville_Issoire_Q_300dpi_transparent.png" class="taille_logo_footer" alt="Logo Ville d'Issoire">
            <img src="./public/img/logo_puy_de_dome_2.svg.png" class="taille_logo_footer" alt="Logo Puy-De-Dome">
        </div>

        <div class="logo_footer">
            <img src="./public/img/cdnlogo.com_rotary.svg" class="taille_logo_footer" alt="Logo Rotary issoire">
            <img src="./public/img/logo_cpam_transparent.png" class="taille_logo_footer" alt="Logo CPAM">
        </div>
        <div>
            <img src="./public/img/logo_ml.png" class="taille_logo_footer ml" alt="Logo mission locale">
        </div>

        <div class="espaceur"></div>

        <a href="./view/Contribution.php"><button  class="footer_bouton from-right">Nous soutenir</button></a>

    </div>


</footer>
<script src="./public/js/scripts.js"></script>
</body>

</html>