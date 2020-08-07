<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DentalCare System</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <header id="header">
      <a href="#" class="logo">DC System</a>
      <ul>
        <li><a href="#home" class="active" onclick="toggle()">Inicio</a></li>
        <li><a href="#servicios" onclick="toggle()">Servicios</a></li>
        <li><a href="#nosotros" onclick="toggle()">Nosotros</a></li>
        <li><a href="#contactos" onclick="toggle()">Contactos</a></li>
        <li><a href="#equipo" onclick="toggle()">Equipo</a></li>
        <li><a href="login.html">Acceder</a></li>
      </ul>
      <div class="toggle" onclick="toggle()"></div>
    </header>
    <section id="home">
      <div>
        <h2 class="h2">Dental Care Systems</h2>
        <p class="p">
         Haga sus citas medicas, de manera rapida y eficiente con nosotros.
        </p>
        <a href="login.html">Acceder Ya!</a>
      </div>
      <img src="img/imagen3.jpg" alt="" srcset="" />
    </section>
    <h3 class="centerH2 h2" id="servicios">Nuestros Servicios</h3>
    <div class="body">
      <div class="container">
        <div class="card">
          <div class="imgBx" data-text="Citas Claras">
            <img src="img/service1.png" />
          </div>
          <div class="content">
            <div>
              <h3>Citas Claras</h3>
              <p>
                Hagas sus citas de manera facil y rapida, sin inconvenientes.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="imgBx" data-text="En Linea">
            <img src="img/service3.png" />
          </div>
          <div class="content">
            <div>
              <h3>Todo en Linea</h3>
              <p>
                Par mejor rapidez, a la hora de solicitar su cita medica
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="imgBx" data-text="Desde Casa">
            <img src="img/service2.png" />
          </div>
          <div class="content">
            <div>
              <h3>Desde la Comodidad de tu Hogar</h3>
              <p>
               Desde su casa, o de donde quiera que estes, siempre estaremos disponible para usted.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="imgBx" data-text="Seguridad">
            <img src="img/service4.png" />
          </div>
          <div class="content">
            <div>
              <h3>Mayor Seguridad de tus Datos</h3>
              <p>
               Protegiendo sus creedenciales, para una mejor seguridad y confianza al adquirir su solicitud
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="about-section"  id="nosotros">
      <img src="img/about_us.png" alt="" srcset="" />
      <div class="about-text">
        <h3 class="h2">Sobre Nosotros</h3>
        <p>
          Somos una empresa de se encarga de brindarles servicios de consulta de
          citas medicas a los hospitales o consultorios clinicos de manera facil
          a traves de nuestra pagina web.
        </p>
      </div>
    </section>
    <h3 class="centerH2 h2" id="contactos">Contactanos</h3>
    <div class="container-contact">
      <div class="form">
        <div class="contact-info">
          <h3 class="title-h3">Mantengámonos en contacto</h3>
          <p class="text">
            Para cualquier duda, comentario o reclamacion, nos puedes hacer saber de manera directa utilizando nuestras redes sociales o llenando el formulario de al lado, para mayor rapidez.
          </p>
          <div class="info">
            <div class="information">
              <img src="img/gps.svg" alt="" srcset="" class="icon" />
              <p>Lorem Ipsum, No.32, Lorem, Lorem Ipsum 13224</p>
            </div>
            <div class="information">
              <img src="img/correo.svg" alt="" srcset="" class="icon" />
              <p>dentalcaresystems@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.svg" alt="" srcset="" class="icon" />
              <p>123-456-7890</p>
            </div>
          </div>
          <div class="social-media">
            <p>Conectate con Nosotros:</p>
            <div class="social-icons">
              <a href="#"> <i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-google-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="contact_form.php" method="post">
            <h3 class="title-h3">Contactanos Hoy!</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Nombre</label>
              <span>Nombre</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Correo Electronico</label>
              <span>Correo Electronico</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Telefono</label>
              <span>Telefono</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Mensaje</label>
              <span>Mensaje</span>
            </div>
            <input type="submit" name="submit" value="Enviar" class="btn" />
          </form>
        </div>
      </div>
    </div>
    <section id="equipo">
      <div>
        <h2 class="h2">Nuestro Equipo</h2>
        <p class="p">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta enim
          pariatur iste, molestias placeat inventore voluptatum error fugit, vel
          libero perspiciatis eos saepe cum! Similique dolor maiores earum
          impedit corporis porro rerum eum repellendus placeat autem tempora
          accusantium illo numquam modi ratione soluta distinctio, quis repellat
          aliquam! Aliquid nemo nisi sit nihil id quasi, dolore facere possimus.
          Ducimus dolorem necessitatibus rem, ipsam, earum nam praesentium
          deleniti dolor dolorum eligendi culpa.
        </p>
      </div>
    </section>
    <footer>
      <div class="footer-container">
        <div class="left-col">
         <h1 class="h1-footer">DentalCare System</h1>
          <div class="social-media-footer">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <p class="rights-text">&copy 2020 Dental Care System Todos los Derechos Reservados.</p>
        </div>
        <div class="right-col">
           <h1>Nuestro Newsletter</h1>
           <div class="border-footer"></div>
           <p>Ingrese su correo para tener noticias y actualizaciones.</p>
           <form action="" class="newsletter-form">
             <input type="text" class="textb" placeholder="Ingrese Su Correo">
             <input type="submit" class="btn-footer" value="Enviar">
           </form>
        </div>
      </div>
    </footer>
    <script src="js/app.js"></script>
  </body>
</html>
