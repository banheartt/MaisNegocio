<!-- Início do main -->
<main class="w-75 mx-auto d-flex flex-column align-items-center gap-5 pt-5">

<div class="container mrg">
  <div class="row align-items-center" style="padding-top: 200px;" >
    <div class="d-flex justify-content-center" style=" padding-bottom: 15px;">
      <h1>Login</h1>
    </div>

<div class="container mrg">
  <div class="row align-items-center" style="padding-bottom: 200px;">
    <div class="d-flex justify-content-center">
      <form>
        <div class="mb-3">
          <label for="InputName" class="form-label">CPF</label>
          <input class="form-control" type="text" aria-label="default input example" required>
        </div>         
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
          <a class="passLink" href="#">Esqueceu a senha?</a>
        </div>
        
        <div class="d-flex justify-content-center" style="padding: 8px;">
        <button type="submit" class="btn btn-primary rounded-pill btn-simular" style="width: 100px;">Entrar</button>
        </div>

        <div class="d-flex justify-content-center" style="padding-top: 40px;">
          <p style="font-size: 14px;">Não tem uma conta? <a class="passLink" href="/register.html">Inscreva-se</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

</main>
<!-- Fim do main -->