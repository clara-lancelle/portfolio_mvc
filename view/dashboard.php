<?php include(__DIR__.'/includes/header.php'); ?>
    <main>
        <section class="bloc messages bloc--smallMargin">
            <h3 class="header__title"> Mes messages </h3>
            <?php
            if(isset($message)) { ?>
                <h4 class="message" ><?= $message ?></h4>
            <?php } else {
                foreach($messages as $message) { 
            ?>  
            <div class="message__card body--small">
                <div class="card__header">
                    <p class="body__desc text--center">
                        <?php echo ' "  ' .$message['content']. '  " '; ?>
                    </p>
                </div>
                <div class="section-divider divider--100"></div>
                <div class="card__body">
                    <div class="inline-center">
                        <img class="message__icon" src="/assets/img/avatar.png" alt="avatar icon">
                        <p class="body__desc body__desc--smallMargin text--center">
                            <?php echo $message['lastname'].'   '.$message['firstname']; ?>
                        </p>
                    </div>
                    <div class="inline-center">
                        <img class="message__icon" src="/assets/img/email.png" alt="email icon">
                        <p class="body__desc body__desc--smallMargin text--center">
                            <?= $message['email']; ?>
                        </p>
                    </div>
                    <div class="inline-center">
                        <img class="message__icon" src="/assets/img/date-calendar.png" alt="date-calendar icon">
                        <p class="body__desc body__desc--smallMargin text--center">
                            <?= $message['date_time'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php }
            } ?>
        </section>
        <ul class="pagination">
            <li class="page-item <?php echo ($pagination['currentPage'] > 1)?: "disabled";?>">
                <a aria-hidden="true" class="page-link" href="/admin/dashboard?page=<?= $pagination['currentPage'] - 1 ?>" aria-label="Previous" >
                    <span class="pagination_icon" > < </span>
                </a>
            </li>
            <?php for($page = 1; $page <= $pagination['numberOfPages']; $page++): ?>
                <li class="page-item <?php ($pagination['currentPage'] != $page)?:"disabled" ;?>">
                    <a href="/admin/dashboard?page=<?= $page ?>" class="page-link--middle"><?= $page ?></a>
                </li>
            <?php endfor ?>
            <li class="page-item <?php echo ($pagination['currentPage'] != $pagination['numberOfPages'])?: "disabled" ;?>">
                <a class="page-link" href="/admin/dashboard?page=<?= $pagination['currentPage'] + 1 ?>" aria-label="Next">
                    <span class="pagination_icon" aria-hidden="true"> > </span>
                </a>
            </li>
        </ul>
    </main>
    <a class="logout" href="/admin/logout">
        <button class="btn" type="submit" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
            </svg>
        </button>
    </a>
<?php include(__DIR__.'/includes/footer.php'); ?>
