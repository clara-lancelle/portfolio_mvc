<footer>
    <div class="copy-right">
        <p class="copy-right__text">
            Lancelle Clara &copy; 2022
        </p>
    </div>
</footer>
<?php if(isset($_GET['params']) && preg_match('/index/', $_GET['params'])) { ?>
    <script src="/assets/js/index.js" type="text/javascript" ></script>
    <script src="/assets/js/burgerMenu.js" type="text/javascript" defer></script>
    <script src="/assets/js/messageAjax.js" async></script> 
    
<?php } ?>
</body>
</html>