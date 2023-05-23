<?php $title = 'Page 404'; include(__DIR__.'/../includes/header.php'); ?>
    <main class="grid grid--center">
        <h1> OUPS.. Une erreur s'est produite. </h1>
        <a class="backBtn" href="javascript:history.go(-1)" title="retour à la page précédente"> 
           <img class="return" src="/assets/img/return.png" alt="retour"> Page précédente </a>
        <img src="/assets/img/Monster_403_Error.gif" alt="erreur 403" class="monsterError">
    </main>
<?php include(__DIR__ . '/view/includes/footer.php'); ?>
