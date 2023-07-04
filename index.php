<?php

if ($_REQUEST['nome'] != null) {
   echo "<script>alert(\"Contato enviado com sucesso!\");</script>";
}

?>


<!DOCTYPE html>
<html>

<head>
   <title>Recanto das Oliveiras</title>
   <link rel="icon" href="./imgs/favicon.png" type="image/png" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <script src="https://kit.fontawesome.com/b3f67889b3.js" crossorigin="anonymous"></script>
   <style>
      .logo {
         width: 300px;
      }

      main {
         padding: 30px;
      }

      body {
         background-image: url('./imgs/fundo.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
         font-family: 'Roboto', sans-serif;
         font-size: 16px;
      }

      body::after {
         content: "";
         background-color: rgba(255, 255, 255, 0.65);
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         z-index: -1;
      }

      .navbar {
         background-color: rgba(255, 255, 255, 0) !important;
      }

      .navbar-nav {
         flex-direction: column;
      }

      .nav-link {
         padding: 10px 0;
         text-align: right;
         font-size: 24px;
         font-weight: bold;
         color: white;
      }

      .nav-link:hover {
         color: #fff;
      }

      header {
         background-image: url('./imgs/fundo_header.jpg');
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
         position: relative;
         height: 150px;
      }

      header::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: linear-gradient(to right, white, #abc77c);
         opacity: 0.75;
      }

      section {
         padding: 20px;
         border-radius: 10px;
         background-color: rgba(255, 255, 255, 0.65);
         margin-bottom: 30px;
      }
   </style>
</head>

<body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">
            <img src="./imgs/logo.png" alt="Logo" class="logo">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="#quem-somos">Quem somos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#servicos">Serviços</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#galeria">Galeria</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#onde-estamos">Onde estamos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#contato">Contato</a>
               </li>
            </ul>
         </div>
      </nav>
   </header>

   <main>
      <br />
      <section id="quem-somos" class="rounded">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <img src="./imgs/photo2.jpg" alt="Imagem 2" width="500px">
               </div>
               <div class="col-md-6">
                  <h1>Quem Somos</h1>
                  <p>
                     Desde 2019, estamos empenhados em fornecer um serviço excepcional, focado no bem-estar e qualidade
                     de vida dos idosos.
                  </p>
                  <p>O Lar para Idosos Recanto das Oliveiras é um lugar acolhedor e seguro, que se preocupa com o
                     bem-estar e qualidade de vida dos idosos. Nosso objetivo é oferecer um ambiente tranquilo e
                     confortável, onde os idosos possam desfrutar de momentos especiais e receber os cuidados
                     necessários.</p>
               </div>
            </div>
         </div>
      </section>

      <section id="servicos" class="rounded">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1>Serviços</h1>
                  <p>Nossos serviços são cuidadosamente planejados para atender às necessidades individuais de cada
                     idoso. Contamos com uma equipe de profissionais qualificados, incluindo médica geriatra,
                     enfermeira, nutricionista e cuidadores, que proporcionam um atendimento personalizado e de
                     qualidade.</p>
                  <ul>
                     <li>Assistência médica 24 horas</li>
                     <li>Acompanhamento nutricional</li>
                     <li>Atividades recreativas e de lazer</li>
                     <li>Cuidados de higiene e conforto</li>
                     <li>Ambiente seguro e acessível</li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <img src="./imgs/photo7.png" alt="Imagem 1" width="500px">
               </div>

            </div>
         </div>
      </section>

      <section id="galeria" class="rounded">
         <h2>Galeria</h2>
         <div class="row">

            <?php

            $dir = "./galeria/";

            $files = scandir($dir);

            $files = array_diff($files, [".", ".."]);
            foreach ($files as $file) {
            ?>

               <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <img src="<?php echo $dir . $file; ?>" class="w-75 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
               </div>

            <?php } ?>
         </div>
      </section>

      <section id="onde-estamos" class="rounded">
         <h1>Onde estamos</h1>

         <div class="map-container" style="display: flex; width: 100%;">
            <div style="padding: 10px; width: 50%;">
               <p class="endereco">R. Joaquim Nabuco, 320 - Jd. Aparecida, Alvorada - RS, 94850-610</p>
               <p class="endereco">Telefone: 51 3101-2520</p>
               <a href="https://maps.app.goo.gl/CJAVG8A3nZHQMv4v5" target="_blank">Ver no Google Maps</a>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.5105928640805!2d-51.083394!3d-30.0222062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519755e25060425%3A0xcee871703ce314ee!2sLar%20para%20Idosos%20Recanto%20das%20Oliveiras!5e0!3m2!1spt-BR!2sbr!4v1688407195430!5m2!1spt-BR!2sbr" width="50%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>

         <div class="map-container" style="display: flex; width: 100%; padding: 10px;">
            <div style="padding: 10px; width: 50%;">
               <p class="endereco">R. Wenceslau, 265 - Santa Isabel, Viamão - RS, 94500-010</p>
               <p class="endereco">Telefone: 51 3434-7379</p>
               <a href="https://www.google.com/maps/place/Lar+Recanto+das+Oliveiras+Viam%C3%A3o/@-30.06615,-51.1125266,15z/data=!4m2!3m1!1s0x0:0xd450e74285c5bc25?sa=X&ved=2ahUKEwj92ci5jvP_AhVkspUCHWN9CyYQ_BJ6BAhJEAA&hl=pt-BR&ved=2ahUKEwj92ci5jvP_AhVkspUCHWN9CyYQ_BJ6BAhXEAg" target="_blank">Ver no Google Maps</a>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13811.914106016398!2d-51.1125266!3d-30.06615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4eb75fae3beacff%3A0xd450e74285c5bc25!2sLar%20Recanto%20das%20Oliveiras%20Viam%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1688407170787!5m2!1spt-BR!2sbr" width="50%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </section>

      <section id="contato" class="rounded">
         <h1>Contato</h1>
         <p>
            Envie uma mensagem através do formulário abaixo!
         </p>
         <p>
            <a href="https://wa.me/5551991289103" target="_blank">Ou se preferir entre em contato pelo nosso whats 51-991289103</a>
            <i style="color:olive;" class="fa-brands fa-whatsapp fa-2x"></i>
         </p>
         <div class="row justify-content-around">
            <div class="col-md-6">
               <img src="./imgs/photo5.jpg" alt="Imagem 6" class="img-fluid">
            </div>
            <div class="col-md-6">
               <form action="#" method="POST">
                  <div class="form-group">
                     <label for="nome">Nome:</label>
                     <input type="text" class="form-control" id="nome" name="nome" required>
                  </div>
                  <div class="form-group">
                     <label for="email">E-mail:</label>
                     <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                     <label for="fone">Celular:</label>
                     <input type="fone" class="form-control" id="fone" name="fone" required>
                  </div>
                  <div class="form-group">
                     <label for="mensagem">Mensagem:</label>
                     <textarea class="form-control" id="mensagem" name="mensagem" rows="2" required></textarea>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Enviar">
               </form>
            </div>
         </div>
      </section>
   </main>

   <footer class="footer bg-black text-black w-100" style="background: linear-gradient(to right, white, #abc77c); padding: 10px; margin-bottom: 0px;">
      <div class="container">
         <div style="display: flex; justify-content: space-between">
            <div class="col-md-6">
               <h5>Redes Sociais</h5>
               <ul class="list-inline">
                  <li class="list-inline-item"><a href="https://www.facebook.com/residencialrecantodasoliveiras" target="_blank" class="text-black">Facebook</a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/recantodas_oliveiras/" target="_blank" class="text-black">Instagram</a></li>
               </ul>
            </div>
            <div class="col-md-6">
               <h5>Contato</h5>
               <p>Telefone/WhatsApp: <a href="tel:+5551991289103" class="text-black">(51) 99128-9103</a></p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <p class="text-center text-black">&copy; 2023 Lar para Idosos Recanto das Oliveiras. Todos os direitos reservados.</p>
            </div>
         </div>
      </div>
   </footer>



   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>