<?php get_header(); ?>

<section id="home" class="mt-3">
<div class="container"> 
    <div class="row"> 
        <div class="container mt-4 mb-4 col-12"> 
            <div class="card">
            <div class="row">
                <div class="card-body col-12 col-xl-6 col-lg-6">
                    <img class="rounded img-fluid" src="https://nexing.com.br/wp-content/uploads/2021/03/dia-mulher-mg.png" alt="Imagem de capa do card">
                </div>

                <div class="card-body col-12 col-xl-6 col-lg-6 m-auto">
                    <h1 class="text-center" style="color: #FF5714"> Você acaba de ganhar uma Massagem </h1>
                    <h6 class="text-center">  Neste dia da mulher, queremos presentear mulheres guerreiras como você. Preencha o formulário e será redirecionada para agendar sua massagem. </h6>
                        <form class="contact-form">
                            <label for=""><strong>Nome</strong></label>
                            <input class="name form-control" type="text" placeholder="insira aqui seu nome"/>
                            <label for="" class="mt-1"><strong>Telefone</strong></label>
                            <input class="telefone form-control" type="text" placeholder="insira aqui seu WhatsApp"/>
                            <button class="btn btn-sucess btn-lg btn-block mt-2" style="background-color:#FF7842; color:#FFF" type="submit" onclick="window.location.href = 'https://api.whatsapp.com/send?phone=5598991690707&text=Oi!%20Quero%20agendar%20minha%20massagem.'">Agendar Massagem</button>
                        </form>
                        <p class="mt-3 text-center"><a href="www.nexing.com.br" class="badge badge-light mt-3 m-auto" style="font-size:10px">Desenvolvido por Nexing</a>  </p>
                        
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>


<?php get_footer(); ?>
