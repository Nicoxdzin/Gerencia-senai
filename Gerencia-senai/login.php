<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/css/css.css">
    <link rel="stylesheet" href="estilos/css/mdb.min.css">
    <title>Gerenciamento Senai</title>
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Acesso ao sistema</h3>
            <form action="login-verify.php" method="post">
              <div class="form-outline mb-4">
                <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" />
                <label class="form-label" for="usuario">Usuário</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="senha" name="senha" class="form-control form-control-lg" />
                <label class="form-label" for="senha">Senha</label>
              </div>

              <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>
            <hr class="my-4">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="estilos/js/mdb.min.js"></script>
</body>

</html>