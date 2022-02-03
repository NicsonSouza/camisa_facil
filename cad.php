<?php
include 'head.php';
include 'navbar.php';
?>
<!-- Custom styles for this template -->
<link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <main>
      <h4 class="h1 mb-3 text-center mt-5">Cadastro</h4>
      <form class="needs-validation" novalidate>
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">Nome</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-12">
            <label for="username" class="form-label">E-mail</label>
            <div class="input-group has-validation">
              <span class="input-group-text">@</span>
              <input type="text" class="form-control" id="username" placeholder="Digite seu email" required>
              <div class="invalid-feedback">
                Seu email deve ser preenchido.
              </div>
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-muted">(Opicional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="usuario@gmail.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="col-12">
            <label for="address" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="address" placeholder="Rua, número e bairro" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="col-12">
            <label for="address2" class="form-label">Endereço 2 <span class="text-muted">(Opicional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Casa ou apartamento">
          </div>

          <div class="col-md-5">
            <label for="country" class="form-label">País</label>
            <select class="form-select" id="country" required>
              <option value="">Escolha...</option>
              <option>Brasil</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-4">
            <label for="state" class="form-label">Estado</label>
            <select class="form-select" id="state" required>
              <option value="">Escolha...</option>
              <option>Bahia</option>
            </select>
            <div class="invalid-feedback">
              Insira um Estado Válido.
            </div>
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <hr class="my-4">

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="same-address">
          <label class="form-check-label" for="same-address">Endereço escolhido é o mesmo que meu endereço de cobrança?</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="save-info">
          <label class="form-check-label" for="save-info">Guarde esta informação para a próxima vez</label>
        </div>
        <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar Informações</button>
      </form>
    </main>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 Amazing Shirt</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>
  </div>

  <?php
  include '../includes/footer.php';
  ?>

  <script src="../js/form-validation.js"></script>
</body>

</html>