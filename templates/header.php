<!-- Implementação do vlibras -->
<div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <!-- Fim da Implementação do vlibras -->

 <!-- Início do header -->
<header class="d-flex justify-content-between position-fixed z-3 bg-white w-100 py-2 px-5" style="box-shadow: 0px 0px 8px 0.8px rgba(0,0,0,0.15);">
  <a href="/index.html" class="my-auto mx-5"><img src="/public/Logo..svg" class="my-auto" alt="Mais Negócios"></a>
    <nav class="navbar navbar-expand-lg navbar-light my-auto">
      <div class="container-fluid" style="padding: 0px;">
        <div class="ms-5 ps-3">
          <button class="navbar-toggler ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>  
        <div class="collapse navbar-collapse my-auto mx-1" id="navbarNav">
          <ul class="navbar-nav gap-4 align-items-center">
            <li class="nav-item">
              <a class="nav-links active link-hover" aria-current="page" href="/index.html">Início</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle link-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Serviços
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/servicos.html">Simular empréstimo</a></li>
                <!-- Opção oculta para ser implementada no futuro -->
                <li style="display: none;"><a class="dropdown-item" href="/index.html">Renegociar dívidas</a></li>  
                <!-- Fim da opção oculta para ser implementada no futuro --> 
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-links active text-nowrap link-hover" aria-current="page" href="/quemSomos.html">Quem somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-links active link-hover" aria-current="page" href="/index.html">Educação</a>
            </li>
            <li class="nav-item">
              <a class="nav-links active link-hover" aria-current="page" href="/faq.html">FAQ</a>
            </li>
            <a href="/login.html"><button class=" btn-header border-0 rounded-pill text-white btn-autorizacao"><img src="/public/person-fill.svg" style="padding: 0px 4px 2px 0px">Entrar</button></a>
          </ul>
        </div>
      </div>
    </nav>  
</header>
<!-- Fim do header -->