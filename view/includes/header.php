<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <meta name="description"
        content="Portfolio et CV de lancelle clara, développeuse web en formation à La Manu (Compiègne).">
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <Link href="/assets/style/css/main.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Lancelle Clara - Portfolio - <?= $title ?> </title>
</head>
<body>
    <?php if($_GET['params'] !== '' && preg_match('/admin/', $_GET['params'])) { ?>
    <header class="nav_ban">
        <nav class="navbar__items navbar">
            <ul class="logo_only">
                <a class="navbar__items__logo" href="/index" title="lien vers la page d'accueil">
                    <img class="logo" src="/assets/img/logo.png" alt="logo">
                </a>
            </ul>
        </nav>
        <div class="bloc__banner bloc__banner--small">
            <div class="banner__content">
                <header class="banner__header">
                    <h1 class="banner__header__title">Lancelle Clara</h1>
                    <h2 class="banner__header__desc">Etudiante en développement Web</h2>
                </header>
                <div class="banner__body">
                    <h3 class="banner__body__welcome"> <?= $title ?> </h3>
                </div>
            </div>
        </div>
    </header>
    <?php } else { ?>
        <header class="nav_ban">
        <div class="navbar">
                <a class="navbar__items__logo" id="home_link" href="#" title="lien vers la page d'accueil">
                    <img class="logo" src="assets/img/logo.png" alt="logo du portfolio de Lancelle Clara">
                </a>

            <div id="menu-button">
                <div id="line-1"></div>
                <div id="line-2"></div>
                <div id="line-3"></div>
            </div>

            <nav class="navbar__items" role="navigation" id="menu">
                <ul>
                    <li class="navbar__items__link">
                        <a href="#moi" title="lien vers section : à propos de moi"> A propos de moi </a>
                    </li>
                    <li class="navbar__items__link">
                        <a href="#compétences" title="lien vers section : compétences"> Compétences </a>
                    </li>
                    <li class="navbar__items__link">
                        <a href="#réalisations" title="lien vers section : réalisations"> Réalisations </a>
                    </li>
                    <li class="navbar__items__link">
                        <a href="#contact" title="lien vers section : contact"> Contact </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="bloc__banner">
            <div class="banner__content">
                <header class="banner__header">
                    <h1 class="banner__header__title">Lancelle Clara</h1>
                    <h2 class="banner__header__desc">Etudiante en développement Web</h2>
                </header>
                <div class="banner__body">
                    <h3 class="banner__body__welcome"> Bienvenue sur mon Portfolio </h3>
                    <p class="banner__body__desc"> Vous trouverez ici mes compétences, mes réalisations ainsi que mon
                        CV. </p>
                </div>
                <a href="#" id="scroll_down_btn" class="scroll-down" address="true">
                    <svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                    </svg>
                </a>
            </div>
        </div>
    </header>
<?php } ?>
