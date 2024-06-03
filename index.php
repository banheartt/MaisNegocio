    <?php
        require_once("templates/head.php");
    ?>
<body>
    <?php
        require_once("templates/header.php");
    ?>
<!-- Início do main -->
<main class="w-75 mx-auto mt-5 d-flex flex-column align-items-center gap-5 pt-5">

    <?php
        require_once("templates/carrosselMain.php");
    ?>
    <?php
        require_once("templates/cardsServicos.php");
    ?>
    <?php
        require_once("templates/sectionQSomos.php");
    ?>
    <?php
        require_once("templates/casosSucesso.php");
    ?>

</main>
<!-- Fim do main -->

    <?php
        require_once("templates/footer.php");
    ?>

<!-- Script de inclusão do bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Fim do Script de inclusão do bootstrap -->
</body>
</html>