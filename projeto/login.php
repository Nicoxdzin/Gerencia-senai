<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
 <?php include('estilos/css/estilizacao.html'); ?>
<section class="vh-100" style="background-color: #0078d4;">
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
           <a href="" class="text-center">Esqueceu sua senha?</a>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="estilos/js/mdb.min.js"></script>
<script src="estilos/js/sweetalert2.all.min.js"></script>
<?php if(isset( $_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset ($_SESSION['msg']);}  
    session_destroy();?>            

</html>