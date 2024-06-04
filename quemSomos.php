  <?php
    require_once("templates/head.php");
  ?>
<body>
  <?php
    require_once("templates/header.php");
  ?>

<!-- Início do main -->
    <main class="w-75 mx-auto d-flex flex-column align-items-center gap-5 pt-5">

    <?php
      require_once("templates/sectionQSomos.php");
    ?>
    
    <?php
      require_once("templates/cardsServicos.php");
    ?> 

      <section class="row gap-4 justify-content-center" style="padding: 48px;">
        <h1 class="color-1 tituloSecao" style="padding-top: 60px;">Nossa equipe</h1>
        <div class="card" style="width: 18rem; padding: 0px;">
          <img src="./img/teste.jpg" class="card-img-top w-100 h-100" alt="Abraão Carvalho">
          <div class="card-body">
            <h5 class="tituloCards">Abraão Carvalho</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem; padding: 0px;">
          <img src="./img/teste.jpg" class="card-img-top w-100 h-100" alt="Abraão Carvalho">
          <div class="card-body">
            <h5 class="tituloCards">Abraão Carvalho</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem; padding: 0px;">
          <img src="./img/teste.jpg" class="card-img-top w-100 h-100" alt="Abraão Carvalho">
          <div class="card-body">
            <h5 class="tituloCards">Abraão Carvalho</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

          <div class="card" style="width: 18rem; padding: 0px;">
            <img src="./img/teste.jpg" class="card-img-top w-100 h-100" alt="Abraão Carvalho">
            <div class="card-body">
              <h5 class="tituloCards">Abraão Carvalho</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card" style="width: 18rem; padding: 0px;">
            <img src="./img/teste.jpg" class="card-img-top w-100 h-100" alt="Abraão Carvalho">
            <div class="card-body">
              <h5 class="tituloCards">Abraão Carvalho</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
      </section>


      </div> <!-- Remover? -->
    </section> <!-- Remover? --> 
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