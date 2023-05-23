<?php $title = 'Page 404'; include(__DIR__.'/../includes/header.php'); ?>
    <main class="grid grid--center">
        <h1 class=" mt-5"> OUPS.. C'est une impasse. </h1>
        <a class="backBtn" href="javascript:history.go(-1)" title="retour à la page précédente"> 
           <img class="return" src="/assets/img/return.png" alt="retour"> Page précédente </a>
        <img src="/assets/img/Monster_404_Error.gif" alt="erreur 404" class="monsterError">
    </main>
<?php include(__DIR__ . '/../includes/footer.php'); ?>
