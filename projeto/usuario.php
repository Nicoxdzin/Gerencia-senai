<!DOCTYPE html>
<html lang="en">
<body>
    <?php include('estilos/css/estilizacao.html'); ?>
    <div class="bg-centro">
        <div class="row p-0 m-0">
            <div class="col-md-4 container m-3">
                <img src="imagens/prius.jpg" alt="">
            </div>
            <div class="col-md-7 my-4">
                <span class="cmsi p-1 shadow-sm">CMSI</span>
                <p class="fw-bold text-light my-2">Bem vindo ao CMSI(Centro de mobilidade sustentável e inteligente)</p>
                <p class="text-light parag mb-5">Nestas seções abaixo você poderá reservar um dos<br> nossos laboratórios,
                consultar os equipamentos<br> disponíveis e também baixar os seus manuais!</p>
                <a href="" class="text-light mt-2 linkk fw-bold ">Continuar para vídeo institucional <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <div class="content">
      <h2 class="">
         <button class="accordion-button" type="button">
            <i class="bi bi-chevron-down float-start p-4"></i>
            Nossos Contatos
         </button>
      </h2>
    <div class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent=".accordion">
         <div class="accordion-body px-4">
         <div class="card bg-primary" style="width: 18rem;">
               <span class="text-center">Teste</span>
            </div>
         </div>   
    </div>
<script>
   var collapseButtons = document.querySelectorAll('.accordion-button');
   
   collapseButtons.forEach(function(button) {
     button.addEventListener('click', function() {
       var collapseIcon = this.querySelector('.bi');
       var collapseContent = this.parentNode.nextElementSibling;
       
       if (collapseContent.classList.contains('show')) {
         collapseContent.classList.remove('show');
         collapseIcon.classList.replace('bi-chevron-up', 'bi-chevron-down');
       } else {
         collapseContent.classList.add('show');
         collapseIcon.classList.replace('bi-chevron-down', 'bi-chevron-up');
       }
     });
   });
</script>
    </div>
    
</body>
</html>