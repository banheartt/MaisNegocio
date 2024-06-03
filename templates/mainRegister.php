<!-- Início do main -->
<main>
    <div class="container mrg">
        <div class="row align-items-center" style="padding-top: 200px; padding-bottom: 200px;">
          <div class="col-7">
            <h1>Cadastro</h1>
            <p><b>Simule seu empréstimo</b> sem sair de casa.</p>
          </div>
          <div class="col">
            <form>
              <div class="mb-3">
                <label for="InputName" class="form-label">Nome completo</label>
                <input class="form-control" type="text" aria-label="default input example" required>
              </div>       
              <div class="mb-3">
                <label for="InputPhone" class="form-label">CPF</label>
                <input class="form-control" placeholder="000.000.000-00" type="text" aria-label="default input example" required>
              </div>     
              <div class="mb-3">
                <label for="InputEmail1" class="form-label">E-mail</label>
                <input type="email" placeholder="seuemail@exemplo.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="InputPhone" class="form-label">Celular</label>
                <input class="form-control" placeholder="(DDD) 12345-6789" type="text" aria-label="default input example" required>
              </div>  

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required>
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirme sua senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required>
              </div>
              
              <div class="checkbox">
                <input type="checkbox" id="signupCheck" required>
                <label for="signupCheck" style="font-size: 14px; padding-bottom: 10px;">Eu li e concordo com os <a href="#">Termos e Condições.</a></label>
              </div>
    
              <button type="submit" class="btn btn-primary rounded-pill btn-simular">Cadastrar</button>

            </form>
          </div>
        </div>
      </div>
</main>
<!-- Fim do main -->