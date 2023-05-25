<?php include(__DIR__.'/includes/header.php'); ?>
<div id="moi"></div>
    <main>
        <button id="scroll_up_btn" class="scroll_top" title="Go to top">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                <path
                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
            </svg>
        </button>

        <section class="bloc aboutMe">
            <div class="aboutMe__content">
                <header class="aboutMe__content__header">
                    <h3 class="header__title">A propos de moi</h3>
                    <h4 class="header__subtitle">Qui suis-je ?</h4>
                </header>
                <div class="section-divider"></div>
                <div class="aboutMe__content__body">
                    <figure class="body__img myPic">
                        <!--<img src="/assets/img/photo_cv_2.0.jpg" alt="Photo d'identité / de profil de lancelle Clara"> -->
                        <div class="profilImg"></div>
                    </figure>
                    <p class="body__desc">
                        Je m'appelle Clara, j'ai 25 ans et je suis développeuse web junior !<br>
                        J'intégrerai, en septembre, la licence générale informatique du lycée Saint Vincent à Senlis (60),
                         que je réaliserai en alternance.<br> <br>

                        En 2021, j’ai décidé d’effectuer une reconversion professionnelle,
                        de septembre 2021 à septembre 2022, je me suis formée, en autodidacte,
                        aux langages et outils de bases du métier de développeur via des sites internet comme OpenClassroom et Pierre Giraud. <br><br>
                        Je suis passionnée par les langages et logiciels que j'apprends,
                        j'aime tester mes connaissances et réaliser des projets dans lesquels je peux me confronter à de nouvelles problématiques. <br>

                        J’ai récemment obtenu le titre professionnel d’Etat « Développeur Web et Web Mobile » (RNCP 31114, Bac+2),
                        suite à une formation intensive 'Développeur web et web mobile' à La Manu (école du numérique), Compiègne. <br> <br>      
                    </p>
                </div>
                <div class="aboutMe__content__btn btn">
                    <a href="/assets/img/cv_lancelle_clara_portfolio.pdf" class="cv__btn" target="_blank"
                        title="CV de clara lancelle"> Mon CV <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                        </svg></a>
                </div>
            </div>
            <div id="compétences"></div>
        </section>

        <section class="bloc">
            <div class="skills__content">
                <header class="skills__content__header">
                    <h3 class="header__title">Mes compétences</h3>
                    <h4 class="header__subtitle"> Les logiciels et langages auxquels je me suis formée : </h4>
                    <div class="section-divider"></div>
                </header>
                <div class="skills__content__body">
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/HTML5_logo.png" alt="logo HTML5">
                            </figure>
                            <h5>HTML5</h5>
                            <div class="grade">
                                <div class="progress p85">
                                    <p> 85% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/CSS3_logo.png" alt="logo CSS3">
                            </figure>
                            <h5>CSS3</h5>
                            <div class="grade">
                                <div class="progress p85">
                                    <p> 85% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/JavaScript_logo.png" alt="logo JS">
                            </figure>
                            <h5>JavaScript</h5>
                            <div class="grade">
                                <div class="progress p60">
                                    <p> 60% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/python.png" alt="logo Python">
                            </figure>
                            <h5>Python</h5>
                            <div class="grade">
                                <div class="progress p10">
                                    <p> 10% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/React-icon.png" alt="logo React js">
                            </figure>
                            <h5>React JS</h5>
                            <div class="grade">
                                <div class="progress p30">
                                    <p> 30% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="https://alfredotoledo.neocities.org/pictures/Php_01-01.png"
                                    alt="logo PHP">
                            </figure>
                            <h5>PHP</h5>
                            <div class="grade">
                                <div class="progress p70">
                                    <p> 70% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/mySql_logo.png" alt="logo MySQL">
                            </figure>
                            <h5>MySQL</h5>
                            <div class="grade">
                                <div class="progress p60">
                                    <p> 60% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/php_my_admin_logo.png" alt="logo PHPMyAdmin">
                            </figure>
                            <h5>PHPMyAdmin</h5>
                            <div class="grade">
                                <div class="progress p70">
                                    <p> 70% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/symfony.png" alt="logo Symfony">
                            </figure>
                            <h5>Symfony</h5>
                            <div class="grade">
                                <div class="progress p10">
                                    <p> 10% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/sass_logo.png" alt="logo SCSS">
                            </figure>
                            <h5>SASS</h5>
                            <div class="grade">
                                <div class="progress p80">
                                    <p> 80% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/Git_logo.png" alt="logo Git">
                            </figure>
                            <h5>GIT</h5>
                            <div class="grade">
                                <div class="progress p60">
                                    <p> 60% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/Bootstrap_logo.png" alt="logo Bootstrap">
                            </figure>
                            <h5>Bootstrap</h5>
                            <div class="grade">
                                <div class="progress p85">
                                    <p> 85% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="/assets/img/WordPress_logo.png" alt="logo WordPress">
                            </figure>
                            <h5>WordPress</h5>
                            <div class="grade">
                                <div class="progress p50">
                                    <p> 50% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i = 0; ?>
            </div>
        </section>
        <section class="bloc">
            <div class="skills__degree">
                <h4 class="header__subtitle"> Les certificats de réussite obtenus via Openclassroom : </h4>
                <div class="section-divider"></div>
                <div class="skills__degree__content">
                    <div class="card-degree">
                        <h5> HTML 5 et CSS 3 </h5>
                        <img class="degree" src="/assets/img/op_html_css.png"
                            alt="diplome HTML CSS lancelle clara OpenClassroom">
                        <!-- The Modal -->
                        <img class="modalBtn" title="Zoomer" src="/assets/img/glass.png" alt="Zoomer">
                        <div class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img class="degree--modal" src="/assets/img/op_html_css.png"
                                alt="diplome HTML CSS lancelle clara OpenClassroom">
                            </div>
                        </div>
                    </div>
                    <div class="card-degree">
                        <h5> PHP et MySQL </h5>
                        <img class="degree" src="/assets/img/op_php_mysql.png"
                            alt="diplome PHP/MYSQL lancelle clara OpenClassroom">
                            <!-- The Modal -->
                        <img class="modalBtn" title="Zoomer" src="/assets/img/glass.png" alt="Zoomer">
                        <div class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                            <span class="close">&times;</span>
                            <img class="degree--modal" src="/assets/img/op_php_mysql.png"
                                    alt="diplome PHP/MYSQL lancelle clara OpenClassroom">
                            </div>
                        </div>
                    </div>
                    <div class="card-degree">
                        <h5> SASS </h5>
                            <img class="degree" src="/assets/img/op_sass.png"
                                alt="diplome SASS lancelle clara OpenClassroom">
                                <!-- The Modal -->
                        <img class="modalBtn" title="Zoomer" src="/assets/img/glass.png" alt="Zoomer">
                        <div class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                            <span class="close">&times;</span>
                            <img class="degree--modal" src="/assets/img/op_sass.png"
                                    alt="diplome SASS lancelle clara OpenClassroom">
                            </div>
                        </div>
                    </div>
                    <div class="card-degree">
                        <h5> Bootstrap </h5>
                        <img class="degree" src="/assets/img/op_bootstrap.png"
                            alt="diplome BOOTSTRAP lancelle clara OpenClassroom">
                        <!-- The Modal -->
                        <img class="modalBtn" title="Zoomer" src="/assets/img/glass.png" alt="Zoomer">
                        <div class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                            <span class="close">&times;</span>
                            <img class="degree--modal" src="/assets/img/op_bootstrap.png"
                                    alt="diplome BOOTSTRAP lancelle clara OpenClassroom">
                            </div>
                        </div>
                    </div>
                    <div class="card-degree">
                        <h5> Modélisation de Bases de Données </h5>
                        <img class="degree" src="/assets/img/op_bdd.png"
                            alt="diplome conception de Base de données lancelle clara OpenClassroom">
                        <!-- The Modal -->
                        <img class="modalBtn" title="Zoomer" src="/assets/img/glass.png" alt="Zoomer">
                        <div class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                            <span class="close">&times;</span>
                            <img class="degree--modal" src="/assets/img/op_bdd.png"
                                    alt="diplome conception de Base de données lancelle clara OpenClassroom">
                            </div>
                        </div>
                    </div>
                    <div class="card-degree">
                        <h5> Comprendre le Web </h5>
                            <img class="degree" src="/assets/img/op_comprendre_le_web.png"
                                alt="diplome comprendre le web lancelle clara OpenClassroom">
                                <!-- The Modal -->
                            <img class="modalBtn" title="Zoomer" src="/assets/img/glass.png" alt="Zoomer">
                            <div class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                <span class="close">&times;</span>
                                <img class="degree--modal" src="/assets/img/op_comprendre_le_web.png"
                                    alt="diplome comprendre le web lancelle clara OpenClassroom">
                                </div>
                            </div>  
                        <div id="réalisations"></div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="bloc">
            <div class="achiev__content">
                <header class="achiev__content__header">
                    <h3 class="header__title">Mes réalisations</h3>
                    <h4 class="header__subtitle"> Mon travail :</h4>
                    <div class="section-divider"></div>
                </header>
                <div class="achiev__content__body">
                    <article class="card">
                        <div class="card__title">
                            <h5>Par ici les sorties</h5>
                        </div>
                        <figure class="card__img">
                            <img class="modalBtn" src="/assets/img/pils.png"
                                    alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                            <div class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                <span class="close">&times;</span>
                                <img class="sites--modal" src="/assets/img/pils.png"
                                    alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                                </div>
                            </div>  
                            <img class="modalBtn" src="/assets/img/pils_phone.png"
                                    alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                            <div class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                <span class="close">&times;</span>
                                <img class="sites--modal" src="/assets/img/pils_phone.png"
                                    alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                                </div>
                            </div> 
                            <img class="modalBtn" src="/assets/img/pils_profil.png"
                                    alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                            <div class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                <span class="close">&times;</span>
                                <img class="sites--modal" src="/assets/img/pils_profil.png"
                                    alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                                </div>
                            </div>  
                        </figure>
                        <div class="card__desc">
                            <p class="body__desc">
                            "Par ici les sorties" est le projet que j'ai créé afin de valider ma formation de développeur web à La Manu, école du numérique. <br>
                                Ce projet à été pensé avec l’objectif de faciliter la diffusion des événements locaux,
                                    qu’ils soient organisés par des particuliers ou des professionnels. 
                                    Dans un second temps, 
                                    les producteurs et artisans ont la possibilité de créer des pages vitrines afin de faire connaître leurs activités.
                                <br> <br>
                                Outils utilisés : 
                                <br>
                                Trello : Organisation des tâches à réaliser,visualisation des besoins du projet.
                                <br>
                                Gloomaps : Création de l’arborescence du site, représentation des différentes pages et fonctionnalités nécessaires.
                                <br>
                                Figma : Maquettage en trois phases (zoning, wireframe, prototype).
                                <br><br>
                                Langages utilisés : HTML/CSS/JavaScript/PHP/SQL
                                <br><br>
                                Librairies et API : 
                                <br>
                                Vicopo API : Permet l’autocomplétion des champs de ville et code postal sur les différents formulaires du site.
                                <br>
                                JQuery : Librairie Javascript, utilisée ici avec Vicopo.
                                <br>
                                OpenStreetMap API : Permet l’accès à une base de données géographique et à des fonds de carte. (OpenSource)
                                <br>
                                Leaflet : Librairie javascript permettant l’affichage de la carte et des makers de positions. (OpenSource)
                                <br>
                                Nominatim API : Permet d’envoyer des requêtes afin convertir une ville, code postal (..) en géocodes et inversement.
                            </p>
                        </div>
                        <div class="card__link">
                                <div class="github">
                                    <p> Retrouvez ce projet sur mon dêpot GitHub : </p>
                                    <a href="https://github.com/clara-lancelle/Pils" target="_blank"
                                        title="lien vers le github de mon site : PILS - Par ici les sorties par clara Lancelle">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="web">
                                    <p> Ou en ligne à l'adresse :
                                        <a href="https://pils.lancelle-clara.fr/home"
                                            class="website_link" target="_blank"
                                            title="lien vers mon site : PILS - Par ici les sorties par clara Lanclle">
                                            https://pils.lancelle-clara.fr/home</a>
                                    </p>
                                </div>
                            </div>
                    </article>
                    <article class="card">
                            <div class="card__title">
                                <h5>Carnet de recettes partagées</h5>
                            </div>
                            <figure class="card__img">
                                <img class="modalBtn" src="/assets/img/co.png"
                                    alt="site web créé par lancelle clara : Mon carnet de recettes / My recipes booklet">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/co.png"
                                        alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                                    </div>
                                </div>  
                                <img class="modalBtn" src="/assets/img/screen.png"
                                    alt="site web créé par lancelle clara : Mon carnet de recettes / My recipes booklet">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/screen.png"
                                        alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                                    </div>
                                </div>  
                                <img class="modalBtn" src="/assets/img/my.png"
                                    alt="site web créé par lancelle clara : Mon carnet de recettes / My recipes booklet">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/my.png"
                                        alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                                    </div>
                                </div>  
                            </figure>
                            <div class="card__desc">
                                <p class="body__desc">
                                    J'ai réalisé ce site web dynamique et responsive durant mon année d'apprentissage du
                                    code en autodidacte, en suivant les consignes d'une épreuve de BTS. <br>
                                    Cette épreuve ne demandait pas de créer un site web, mais de manipuler les entrées
                                    d'une base de donnée
                                    et d'être en capacité de les afficher, de les modifier et de les supprimer. <br>
                                    J'ai décidé d'en faire un site web à part entière afin de tester mes compétences et
                                    de me confronter à de nouvelles problématiques. <br>
                                    Avec les langages et outils suivants : HTML, CSS, PHP, MySQL, Bootstrap, PHPMyAdmin.
                                    <br><br>
                                    Fonctionalités : <br><br>
                                    - Inscription, connexion, deconnexion. <br>
                                    - Enregistrement de nouvelles recettes. <br>
                                    - Modification de ses recettes. <br>
                                    - Affichage de l'ensemble des recettes de la communautée. <br>
                                    - Affichage de l'ensemble de ses recettes. <br>
                                </p>
                            </div>
                            <div class="card__link">
                                <div class="github">
                                    <p> Retrouvez ce projet sur mon dêpot GitHub : </p>
                                    <a href="https://github.com/clara-lancelle/TD_Recipes" target="_blank"
                                        title="lien vers le github de mon site de recettes de cuisines : mon carnet de recettes / my recipes booklet par clara Lancelle">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="web">
                                    <p> Ou en ligne à l'adresse :
                                        <a href="https://recipes.lancelle-clara.fr/welcome_page.php"
                                            class="website_link" target="_blank"
                                            title="lien vers mon site de recettes de cuisines : mon carnet de recettes / my recipes booklet par clara Lanclle">
                                            https://recipes.lancelle-clara.fr/welcome_page.php </a>
                                    </p>
                                </div>
                            </div>
                    </article>
                    <article class="card">
                            <div class="card__title">
                                <h5>ShiFuMi - Pierre Feuille Papier Ciseaux Lezard Spock </h5>
                            </div>
                            <figure class="card__img">
                                <img class="modalBtn" src="/assets/img/shifumi.png"
                                        alt="site web créé par lancelle clara : shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/shifumi.png"
                                        alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                                    </div>
                                </div> 
                                <img class="modalBtn" src="/assets/img/shifumi_phone.png"
                                        alt="site web créé par lancelle clara : shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/shifumi_phone.png"
                                        alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                                    </div>
                                </div> 
                                <img class="modalBtn" src="/assets/img/shifumi_played.png"
                                        alt="site web créé par lancelle clara : shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/shifumi_played.png"
                                        alt="site web créé par lancelle clara : PILS - Par ici les sorties">
                                    </div>
                                </div> 
                            </figure>
                            <div class="card__desc">
                                <p class="body__desc">
                                    Ce ShiFuMi est un exercice proposé durant ma formation de 'développeur web et web
                                    mobile' <br>
                                    Il est codé en Javascript / CSS / HTML. <br>

                                    Utilisation : <br> <br>

                                    Vous faites un partie de ShiFuMi contre l'ordinateur. <br>

                                    Cette version est inspirée de la serie 'The Big Bang Theory' et possède 5
                                    possibilités de coups : <br>
                                    pierre - papier - ciseaux - lezard - spock. <br>
                                    Les règles sont expliquées sur le site. <br>
                                    Pour gagner la partie il vous faudra trois victoires. <br><br>

                                    Fonctionalités : <br><br>
                                    - Jouer ! <br>
                                    - Rejouer !<br>
                                </p>
                            </div>
                            <div class="card__link">
                                <div class="github">
                                    <p> Retrouvez ce projet sur mon dêpot GitHub : </p>
                                    <a href="https://github.com/clara-lancelle/ShiFuMi" target="_blank"
                                        title="lien vers le github de mon site shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript / par clara Lancelle">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="web">
                                    <p> Ou en ligne à l'adresse :
                                        <a href="https://shifumi.lancelle-clara.fr/" class="website_link"
                                            target="_blank"
                                            title="lien vers mon site shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript / par clara Lancelle">
                                            https://shifumi.lancelle-clara.fr/</a>
                                    </p>
                                </div>
                            </div>
                    </article>
                    <article class="card">
                            <div class="card__title">
                                <h5> Amaranth - Art come from the soul </h5>
                            </div>
                            <figure class="card__img">
                                <img class="modalBtn" src="/assets/img/amaranth_home.png"
                                        alt="site web créé par lancelle clara : Amaranth - Art come from the soul / Wordpress">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/amaranth_home.png"
                                        alt="site web créé par lancelle clara : Amaranth - Art come from the soul / Wordpress">
                                    </div>
                                </div> 
                                <img class="modalBtn" src="/assets/img/amaranth_phone_contact.png"
                                        alt="site web créé par lancelle clara : Amaranth - Art come from the soul / Wordpress">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/amaranth_phone_contact.png"
                                        alt="site web créé par lancelle clara : Amaranth - Art come from the soul / Wordpress">
                                    </div>
                                </div> 
                                <img class="modalBtn" src="/assets/img/amaranth_shop.png"
                                        alt="site web créé par lancelle clara : Amaranth - Art come from the soul / Wordpress">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/amaranth_shop.png"
                                        alt="site web créé par lancelle clara : Amaranth - Art come from the soul / Wordpress">
                                    </div>
                                </div> 
                            </figure>
                            <div class="card__desc">
                                <p class="body__desc">
                                    Ce <em>Site web e-commerce Wordpress</em> est un exercice proposé durant ma
                                    formation de
                                    'développeur web et web
                                    mobile' <br><br><br>
                                    Il est entièrement réalisé via le CMS Wordpress. <br>
                                    Le constructeur de page Elementor a été utilisé pour concevoir ce site web. <br>
                                    L'extention <em>WooCommerce</em> m'a permis de réaliser la partie e-commerce de ce
                                    site
                                    (panier, produits, boutique, ..), <br>
                                    l'extention <em>Contact Form 7 </em> m'a aidé à réaliser le formulaire de contact.
                                    <br><br>
                                    Amaranth est le site web d'un artiste parisien souhaitant faire connaitre son
                                    travail,
                                    ses actualitées mais aussi vendre ses oeuvre. <br><br><br><br>

                                    Nb : Amaranth traite d'une entreprise fictive, toutes les images sont libres de
                                    droit.
                                    <br>
                                </p>
                            </div>
                    </article>
                    <article class="card">
                            <div class="card__title">
                                <h5> Calendar - Generateur de calendrier PHP methode MVC</h5>
                            </div>
                            <figure class="card__img">
                                <img class="modalBtn" src="/assets/img/calendar.png"
                                        alt="site web créé par lancelle clara : Calendar - générateur de calendrier PHP méthode MVC">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/calendar.png"
                                        alt="site web créé par lancelle clara : Calendar - générateur de calendrier PHP méthode MVC">
                                    </div>
                                </div>
                                <img class="modalBtn" src="/assets/img/calendar_phone.png"
                                        alt="site web créé par lancelle clara : Calendar - générateur de calendrier PHP méthode MVC">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/calendar_phone.png"
                                        alt="site web créé par lancelle clara : Calendar - générateur de calendrier PHP méthode MVC">
                                    </div>
                                </div>
                                <img class="modalBtn" src="/assets/img/calendar_empty.png"
                                        alt="site web créé par lancelle clara : Calendar - générateur de calendrier PHP méthode MVC">
                                <div class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img class="sites--modal" src="/assets/img/calendar_empty.png"
                                        alt="site web créé par lancelle clara : Calendar - générateur de calendrier PHP méthode MVC">
                                    </div>
                                </div>
                            </figure>
                            <div class="card__desc">
                                <p class="body__desc">
                                    Ce <em>Calendrier réalisé en PHP</em> est un exercice proposé durant ma
                                    formation de
                                    'développeur web et web
                                    mobile' <br><br><br>
                                    Il est entièrement réalisé en HTML / CSS / PHP .<br>
                                    J'ai d'abord réalisé cet exercice comme demandé dans l'énoncé (sans PHP orienté
                                    objet).<br>
                                    J'ai ensuite décidé de transformer mon travail avec la méthode Model View Controller
                                    afin
                                    d'obtenir un calendrier en POO.
                                    <br>
                                    Pour l'utiliser il suffit de fournir un mois, une année et grâce à l'algorithme mis
                                    en place, il génère le calendrier demandé entre 1900 et aujourd'hui. <br> <br>
                                </p>
                            </div>
                            <div class="card__link">
                                <div class="github">
                                    <p> Retrouvez ce projet sur mon dêpot GitHub : </p>
                                    <a href="https://github.com/clara-lancelle/Calendar" target="_blank"
                                        title="lien vers le github de Calendar - générateur de calendrier PHP méthode MVC par clara Lancelle">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="web">
                                    <p> Ou en ligne à l'adresse :
                                        <a href="https://calendar.lancelle-clara.fr/" class="website_link"
                                            target="_blank"
                                            title="lien vers le site web de Calendar - générateur de calendrier PHP méthode MVC par clara Lancelle">
                                            https://calendar.lancelle-clara.fr/</a>
                                    </p>
                                </div>
                            </div>
                    </article>
                    <div id="contact"></div>
                </div>
            </div>
        </section>
        <section class="bloc">
            <div class="contact__content">
                <header class="contact__content__header">
                    <h3 class="header__title">Contact</h3>
                    <h4 class="header__subtitle">Comment me contacter :</h4>
                    <div class="section-divider"></div>
                </header>
                <div class="contact__content__body body--small">
                    <div class="link svg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                        <a class="contact__link" href="mailto : lancelle.clara@hotmail.com"
                            title="lien vers ma boite mail">Email : lancelle.clara@hotmail.com </a>
                    </div>
                    <div class="link svg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-linkedin"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                        <a class="contact__link" href="https://www.linkedin.com/in/clara-lancelle-159634238/"
                            target="_blank" title="lien vers le compte linkedin de lancelle clara">
                            Linkedin : Lancelle Clara </a>
                    </div>
                </div>
                <div class="contact__content__form">
                    <div class="form__title">
                        <h5>Vous pouvez aussi me transmettre un message via ce formulaire :</h5>
                    </div>
                    <?php
                    if (isset($return['message'])) {
                        echo
                            '<p class="return_message return">' . $return['message'] . '</p>
                           <div class="return_divider"></div> ';
                    }
                    if (!empty($return['errors'])) {

                        foreach ($return['errors'] as $error) {
                            echo '<p class="return_error return">' . $error . '</p>';
                        }
                    }
                    ?>
                    <form class="form__contact" action="javascript:void(0);" id="messageForm">
                        <input name="lastname" id="lastname" type="text" class="form__contact__field"
                            placeholder="Votre nom...">
                        <input name="firstname" id="firstname" type="text" class="form__contact__field"
                            placeholder="Votre prénom...">
                        <input name="email" id="email" type="email" class="form__contact__field"
                            placeholder="Votre email...">
                        <textarea name="message" id="message" class="form__contact__field"
                            placeholder="Votre message..."></textarea>

                        <button class="send btn" id="messageFormBtn" type="submit">Envoyer</button>
                        <p id="ajaxMessage"></p>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php include(__DIR__.'/includes/footer.php'); ?>
