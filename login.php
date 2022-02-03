<?php
include 'head.php';
include 'navbar.php';
?>

<main class="form-signin">
      
  <div class="mx-auto p-2" style="max-width: 500px;">
    <form class="mx-auto mt-5 text-center" method="post">
      <i class="fs-1 fas fa-tshirt" id="logo" style="color: green;"></i>
      <h1 class="h3 mb-3 fw-normal">Insira seu Login</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Endereço de Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Senha</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Resgatar senha
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Confirmar</button>
      <a href="cad.php">Cadastrar</a><br>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </div>

</main>

<?php
  include '../includes/footer.php';
?>
    
  </body>
</html>
