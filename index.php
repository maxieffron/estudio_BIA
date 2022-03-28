<?php
 
// grab recaptcha library
require_once "recaptchalib.php";
 

// your secret key
$secret = "6LdH7EkaAAAAAKe7lnLZnvY6PkQIzDDHS7oSMCBd";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);


?>



<!DOCTYPE html>
<html lang="es-la">

<head>
  <meta charset="utf-8">
  
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="google-site-verification" content="pnt316tsc3LJaGwALibcmdmQWYqPfP2UWVZ29ROz9Iw" />

  <meta name="robots" content="index,follow">
  
  <meta name="description" content="Estudio Jurídico BIA | Av. Carlos Pellegrini 385 Piso 4, Dpto A, Buenos Aires, Argentina.">
  
  <meta name="keywords" content="Estudio Juridico BIA, Despidos, accidentes de trabajo, sucesiones, divorcios, derecho penal, derecho tributario">
  
  <meta name="author" content="Maximiliano Effron">
  
  <meta name="copyright" content="Estudio Jurídico BIA">
  
  <link rel="canonical" href="https://www.estudiojuridicobia.com.ar/">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">

  <!-- Archivos CSS del directorio "Vendor" -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
 
  <link href="assets/css/style.css" rel="stylesheet">
  
  <title>Estudio Jurídico BIA</title>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

      
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        
        <a href="https://www.estudiojuridicobia.com.ar/"><img src="assets/img/Logo_BIA.png" alt="Estudio Juridico BIA" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#about">Inicio</a></li>
          <li><a href="#team">Nosotros</a></li>
          <li><a href="#portfolio">Áreas de Práctica</a></li>
          <li><a href="#faq">Preguntas Frecuentes</a></li>
          <li><a href="#contact">Contacto</a></li>  

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  

  <!-- Carousel -->
  <section id="intro">
    
    <div class="intro-container">
      
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        
        <!-- slides -->
        <ol class="carousel-indicators">

          <li data-target="#introCarousel" data-slide-to="0" class="active"></li>

          <li data-target="#introCarousel" data-slide-to="1" class=""></li>

          <li data-target="#introCarousel" data-slide-to="2" class=""></li>

          <li data-target="#introCarousel" data-slide-to="3" class=""></li>

          <li data-target="#introCarousel" data-slide-to="4" class=""></li>

        </ol>

        <div class="carousel-inner" role="listbox">

          
          <!-- FOTO Nº1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/intro-1.jpg)">
           
            <div class="carousel-container">
              
              <div class="container">
                
              </div>
            
            </div>
             
          </div>


          <!-- FOTO Nº2 -->
          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/intro-2.jpg)">
            
            <div class="carousel-container">

              <div class="container">

              </div>
            
            </div>
            
          </div>


          <!-- FOTO Nº3 -->
          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/intro-3.jpg)">
            
            
            <div class="carousel-container">

              <div class="container">
                
              </div>

            </div>
            
          </div>


          <!-- FOTO Nº4 -->
          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/intro-4.jpg)">
            
            
            <div class="carousel-container">

              <div class="container">
                
              </div>

            </div>
            
          </div>


          <!-- FOTO Nº5 -->
          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/intro-5.jpg)">
            
            <div class="carousel-container">

              <div class="container">

              </div>

            </div>

          </div>

        </div>


        <!-- Flecha Izquierda -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>


        <!-- Flecha Derecha -->
        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>

    </div>

  </section>





  <main id="main">
    
    <!-- ======= Inicio ======= -->
    <section id="about" class="about">
      <div class="container">


        <div class="section-title" data-aos="fade-up">
          <h1>Estudio Jurídico BIA</h1>
        </div>

        <div class="row justify-content-between">
          
            <div class="row">
              
              <!-- FOTO DE LOS DUEÑOS -->   
              <div class="col-lg-6 d-flex align-items-center justify-content-center about-img">
                <img src="assets/img/about-estudio.jpg" class="img-fluid" alt="Estudio Juridico BIA" data-aos="zoom-in">
              </div>
              
              <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
                  <p>
                    Estudio Jurídico BIA fue fundado hace más de 23 años. 
                    Nuestro estudio está compuesto por distintos profesionales que poseen altísima trayectoria en cada materia y por eso poseemos vasta experiencia en las 
                    áreas de practica que manejamos. Nos caracteriza la confianza, el compromiso y la seriedad con la que tratamos a cada cliente a quien 
                    asesoramos para brindarle una solución rápida y eficiente a sus inconvenientes. 
                    Contamos con un completo equipo de abogados especialistas como así también colaboradores externos (médicos, psicólogos, arquitectos, contadores, etc.) para 
                    ofrecer el mejor servicio integral que el cliente merece.                      
                  </p>
              </div>
              
            </div>

        </div>

        <div class="col-md-12">
            <h3 data-aos="fade-up">LOGROS DE LA EMPRESA</h3>
           
            <ul data-aos="fade-up" data-aos-delay="100" style="list-style-type:disc;">
              
              <li> Mediante la acción de amparo hemos obtenido la cobertura total para niños con autismo que incluye la escolarización especial, medicamentos, traslados y todas las prestaciones médicas que requieren.</li>

              <li> Recientemente, logramos medida cautelar favorable contra  la provincia de Cordoba por trato discriminatorio en el cobro del impuesto a los ingresos brutos.</li>

              <li> Obtuvimos el reconocimiento judicial del carácter laboral de la patología lumbalgia y hernia de disco que habia sido rechazado por la A.R.T.</li>

              <li> En un juicio contra la AFIP, hemos logrado exenciones del impuesto al valor agregado de una mutual de trabajadores que realizaba obras públicas.</li>

            </ul>

        </div>

      </div>
    </section>

    <!-- ======= Nosotros ======= -->
    <section id="team" class="team">
      
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Nosotros</h2>
          <p>Les presentamos a todos los miembros que forman parte del staff del estudio.</p>
        </div>

        <div class="row">


          <!-- EMPLEADO Nº1 -->
          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            
            <div class="member">
              <img src="assets/img/Staff/team-doris.jpg" class="img-fluid" alt="Doctora Doris Bodner">
              
              
              <div class="member-info">
              
                   
                <div class="member-info-content">
                  <h4>Dra. Doris E. Bodner (Socia)</h4>
                  <span>Universidad de Buenos Aires (UBA)</span>
                  <p>Idiomas:Español e Inglés <br>
                  <p>Áreas de Práctica: <br>
                     Derecho Laboral y Accidentes de Riesgos de Trabajo. <br>
                  </p> 
                </div>
                
              </div>

            </div>

          </div>


          <!-- EMPLEADO Nº2 -->
          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            
            <div class="member">
              <img src="assets/img/Staff/team-hernan.jpg" class="img-fluid" alt="Doctor Hernán Iannello">
              
              <div class="member-info">
                
                <div class="member-info-content">
                  <h4>Dr. Hernán F. Iannello (Socio)</h4>
                  <span>Universidad de Buenos Aires (UBA) <br>
                  Especialista en Derecho Penal y Constitucional. Diplomatura en Psiquiatría Forense en la Universidad de Belgrano.
                  </span>
                  <p>Idiomas:Español, Inglés e Italiano</p> 
                  <p> Áreas de Práctica: Derecho Penal y Amparos de Salud. </p>  
                </div>

              </div>

            </div>

          </div>


          <!-- EMPLEADO Nº3 -->
          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            
            <div class="member">
              <img src="assets/img/Staff/team-fernando.jpg" class="img-fluid" alt="Doctor Fernando Gabriel Coltelli">
              
              <div class="member-info">
                
                <div class="member-info-content">
                  <h4>Dr. Fernando G. Coltelli (Socio)</h4>
                  <span>Universidad de Belgrano. Especialista en Derecho Tributario en la Universidad Austral</span>
                  <p>Idiomas:Español e Inglés</p>
                   <p>Áreas de Practica: <br>
                       Derecho Tributario, Derecho Penal Tributario y Derecho Comercial, Litigios Civiles y Contencioso Administrativo.
                   </p> 
                </div>
                
              </div>

            </div>

          </div>


          <!-- EMPLEADO Nº4 -->
          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            
            <div class="member">
              <img src="assets/img/Staff/team-juan_cruz.jpg" class="img-fluid" alt="Doctor Juan Cruz Zucco">
              
              <div class="member-info">
                
                <div class="member-info-content">
                  <h4>Dr. Juan Cruz Zucco (Abogado)</h4>
                  <span>Universidad de Buenos Aires (UBA)</span>
                  <p>Idiomas:Español e Inglés</p>
                   <p>Áreas de practica: <br>
                      Daños y perjuicios, Accidentes de Tránsito, Derecho sucesorio, Divorcios y Derecho de Familia.
                   </p> 
                </div>
                
              </div>

            </div>

          </div>

        </div>

      </div>
    </section>


    <!-- ======= Äreas de Práctica ======= -->
    <section id="portfolio" class="portfolio">
      
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Áreas de Práctica</h2>
          <p></p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


          <!-- AMPAROS DE SALUD -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" id="amparos" >
            
            <div class="portfolio-wrap">
            
              <img src="assets/img/areas_practica/imagenes/ap-amparos_de_salud.jpg" class="img-fluid" alt="Amparos de salud">
            
              <div class="portfolio-links">
                <a href="assets/img/areas_practica/textos/txt-amparos_de_salud.jpg" data-gall="portfolioGallery" class="venobox" title="Más Información"><i class="icofont-plus-circle"></i></a>
              </div>
              
              <div class="area-titulo">
                <h4>Amparos de salud</h4>
              </div>
            
            </div>
            
          </div>
          
          <!-- ACCIDENTES DE TRÁNSITO -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-card" id="acctransito">
   
            <div class="portfolio-wrap">
 
              <img src="assets/img/areas_practica/imagenes/ap-accidentes_transito.jpg" class="img-fluid" alt="Accidentes de Tránsito">
              
              <div class="portfolio-links">
                <a href="assets/img/areas_practica/textos/txt-accidentes_transito.jpg" data-gall="portfolioGallery" class="venobox" title="Más Información"><i class="icofont-plus-circle"></i></a>
              </div>
             
              <div class="area-titulo">
                <h4>Accidentes de Tránsito</h4>
              </div>
              
            </div>
            
          </div>
          
          
          <!-- DERECHO PENAL -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-card" id="derpenal">
              
            <div class="portfolio-wrap">
                
              <img src="assets/img/areas_practica/imagenes/ap-derecho_penal.jpg" class="img-fluid" alt="Derecho Penal">
              
              <div class="portfolio-links">
                <a href="assets/img/areas_practica/textos/txt-derecho_penal.jpg" data-gall="portfolioGallery" class="venobox" title="Más Información"><i class="icofont-plus-circle"></i></a>
              </div>
              
              <div class="area-titulo">
                <h4>Derecho Penal</h4>
              </div>
              
            </div>
            
          </div>


          <!-- DERECHO TRIBUTARIO -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" id="dertribu">
            
            <div class="portfolio-wrap">
              
              <img src="assets/img/areas_practica/imagenes/ap-derecho_tributario.jpg" class="img-fluid" alt="Derecho Tributario">
             
              <div class="portfolio-links">
                <a href="assets/img/areas_practica/textos/txt-derecho_tributario.jpg" data-gall="portfolioGallery" class="venobox" title="Más Información"><i class="icofont-plus-circle"></i></a>
              </div>

              <div class="area-titulo">
                <h4>Derecho Tributario</h4>
              </div>

            </div>

          </div>
          
          <!-- DESPIDOS -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-card" id="despidos">
          
            <div class="portfolio-wrap">
          
              <img src="assets/img/areas_practica/imagenes/ap-despidos.jpg" class="img-fluid" alt="Despidos">
          
              <div class="portfolio-links">
                <a href="assets/img/areas_practica/textos/txt-despidos.jpg" data-gall="portfolioGallery" class="venobox" title="Más Información"><i class="icofont-plus-circle"></i></a>
          
              </div>
              
              <div class="area-titulo">
                <h4>Despidos</h4>
              </div>
              
            </div>
            
          </div>
          
          <!-- ACCIDENTES DE TRABAJO -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" id="acctrabajo">
        
            <div class="portfolio-wrap">
        
              <img src="assets/img/areas_practica/imagenes/ap-accidentes_trabajo.jpg"  class="img-fluid" alt="Accidentes de Trabajo">
        
              <div class="portfolio-links">
                <a href="assets/img/areas_practica/textos/txt-accidentes_trabajo.jpg" data-gall="portfolioGallery" class="venobox" title="Más Información"><i class="icofont-plus-circle"></i></a>
              </div>
              
              <div class="area-titulo">
                <h4>Accidentes de Trabajo</h4>
              </div>
              
            </div>
            
          </div>


          <!-- ENFERMEDADES -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" id="enfermedades" >
        
            <div class="portfolio-wrap">
        
              <img src="assets/img/areas_practica/imagenes/ap-enfermedades_profesionales.jpg" class="img-fluid" alt="Enfermedades Profesionales">
        
              <div class="portfolio-links">
                <a href="assets/img/areas_practica/textos/txt-enfermedades_profesionales.jpg" data-gall="portfolioGallery" class="venobox" title="Más Información"><i class="icofont-plus-circle"></i></a>
              </div>
              
              <div class="area-titulo">
                <h4>Enfermedades Profesionales</h4>
              </div>
              
            </div>
            
          </div>

          
          <!-- SUCESIONES -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" id="sucesiones">
           
            <div class="portfolio-wrap">
           
              <img src="assets/img/areas_practica/imagenes/ap-sucesiones.jpg" class="img-fluid" alt="Sucesiones">
           
              <div class="portfolio-links">
                <a href="assets/img/areas_practica/textos/txt-sucesiones.jpg" data-gall="portfolioGallery" class="venobox" title="Más Información"><i class="icofont-plus-circle"></i></a>
              </div>
              
              <div class="area-titulo">
                <h4>Sucesiones</h4>
              </div>
              
            </div>
            
          </div>


          <!-- DIVORCIOS -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app"  id="divorcios">
            
            <div class="portfolio-wrap">
            
              <img src="assets/img/areas_practica/imagenes/ap-divorcios.jpg" class="img-fluid" alt="Divorcios">
            
              <div class="portfolio-links">
                <a href="assets/img/areas_practica/textos/txt-divorcios.jpg" data-gall="portfolioGallery" class="venobox" title="Más Información"><i class="icofont-plus-circle"></i></a>
              </div>
              
              <div class="area-titulo">
                <h4>Divorcios</h4>
              </div>
              
            </div>
            
          </div>

        </div>

      </div>

    </section>
    

   
    <!-- ======= Preguntas Frecuentes ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Preguntas Frecuentes</h2>
          <p>
              Aquí respondemos brevemente las consultas más frecuentes que recibimos en el estudio. <br>
              Si desea más información, contáctenos para recibir asesoramiento.
          </p>
        </div>

        <ul class="faq-list">

          <!-- PREGUNTA Nº1 -->
          <li data-aos="fade-up" data-aos-delay="100">
           
            <a data-toggle="collapse" class="collapsed" href="#faq1"> Me quiero jubilar y quieren excluirme o ya me excluyeron de la obra social. ¿Qué puedo hacer? <i class="icofont-simple-up"></i></a>
           
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
                Debe iniciar de inmediato una acción de judicial de amparo para evitar la desafiliación de su obra social o medicina prepaga o bien la reincorporación a la misma. 
                Permanecer afiliado es un derecho amparado por nuestra Constitución Nacional. 
                Las obras sociales y empresas de medicina prepaga incumplen y desafilian a beneficiarios que han alcanzado la edad jubilatoria, dejándolos desamparados
                de la cobertura médica que gozaron durante toda su vida. Si esto ha ocurrido o está por ocurrir consulte de manera urgente.
              </p>
            </div>
          </li>


          <!-- PREGUNTA Nº2 -->
          <li data-aos="fade-up" data-aos-delay="200">
           
            <a data-toggle="collapse" href="#faq2" class="collapsed">¿Qué me corresponde si me despiden sin causa? <i class="icofont-simple-up"></i></a>
           
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Si fue despedido sin causa luego del periodo de prueba, tiene derecho a cobrar: Indemnización por antigüedad, Indemnización sustitutiva de preaviso, 
                Integración mes de despido y salarios adeudados,  Vacaciones proporcionales, SAC Proporcional, SAC sobre integración mes de despido, SAC sobre preaviso. 
                Si la relación estaba incorrectamente registrada o no entregan los certificados de trabajo, y ello se pudo comprobar, corresponde adicionarle las multas de ley. 
                Si fue desvinculado a partir del 13/12/2019 corresponde la doble indemnización con el tope de ley. 
                Es importante que reciba asistencia legal para la redacción de telegramas ya que cualquier error o firma de documentación sin asesoramiento puede ser irreversible.
              </p>
            </div>
          </li>


          <!-- PREGUNTA Nº3 -->
          <li data-aos="fade-up" data-aos-delay="300">
           
            <a data-toggle="collapse" href="#faq3" class="collapsed">¿Qué debe cubrir la A.R.T.? <i class="icofont-simple-up"></i></a>
            
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Las A.R.T. se encuentran obligadas por ley a brindar las prestaciones médicas: tratamiento médico y farmacológico, prótesis y ortopedia, rehabilitación kinesiológica
                o la que el paciente necesite, traslados, recalificación profesional y prestaciones dinerarias: Pago de salario, indemnización por incapacidad psicofísica, prestación por gran invalidez
                e indemnización a los derechohabientes de un trabajador fallecido por causas laborales.
              </p>
            </div>
          </li>


          <!-- PREGUNTA Nº4 -->
          <li data-aos="fade-up" data-aos-delay="400">
           
            <a data-toggle="collapse" href="#faq4" class="collapsed">¿Qué hago si la A.R.T. me rechaza la enfermedad profesional por considerar prexistente/inculpable? <i class="icofont-simple-up"></i></a>
           
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Se debe iniciar el trámite de correspondiente ante la Superintendencia de Riesgos de Trabajo para que determine el carácter laboral de la enfermedad profesional. 
                Para ello, con la asistencia letrada obligatoria, se debe realizar un reclamo que detalle la actividad normal y habitual desarrollada puesto de trabajo, horario laboral, 
                fecha de comienzo a exposición de riesgo, lugar de trabajo, primera manifestación de la enfermedad profesional y todo otro dato de interés.
              </p>
            </div>
          </li>


          <!-- PREGUNTA Nº5 -->
          <li data-aos="fade-up" data-aos-delay="500">
           
            <a data-toggle="collapse" href="#faq5" class="collapsed">¿Qué se necesita para iniciar una sucesión? <i class="icofont-simple-up"></i></a>
           
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                - Partida de defunción. <br>
                - Acreditación de vinculo que unía a la persona fallecida con quien inicia el trámite, como puede ser partida de nacimiento, partida de matrimonio, etc. <br>
                - Detalle de los bienes: En caso de existir bienes, se debe aportar los datos necesarios para individualizar los mismos. <br>
                - Testamento: Solo si lo hubiere.
              </p>
            </div>
          </li>


          <!-- PREGUNTA Nº6 -->
          <li data-aos="fade-up" data-aos-delay="600">
            <a data-toggle="collapse" href="#faq6" class="collapsed">¿Qué necesito para divorciarme? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                El trámite de divorcio es sencillo, rápido y solo requiere partida de matrimonio y DNI de quien lo inicia.                
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>


    <!-- ======= Contacto ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>CONTACTO</h2>
          <p>Escríbanos su consulta y en breve nos pondremos en contacto con usted.</p>
        </div>
        
        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Dirección:</h4>
                <p>
                  Av. Carlos Pellegrini 385 <br>
                  Piso 4, Dpto A <br>
                  CABA, Buenos Aires<br>
                  Argentina. CP: 1009
                </p>
                
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>consultas@estudiobia.com.ar</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Teléfonos:</h4>
                <p>Fijo: 4-506-0757<br>
                Celular: +54 9 11-6978-8767</p>
              </div>

              <div class="phone" id="info-redes-sociales">
                <i class="icofont-at"></i>
                <h4>Redes Sociales:</h4>
                

                <p>

                <!-- FACEBOOK -->
                <a target="_blank" href="https://www.facebook.com/estudiojuridicobia" class="facebook"><img src="assets/img/redes_Sociales/facebook_Icon.png" title="Facebook" alt="Facebook Estudio Juridico BIA">
                </a>
                         Facebook <br><br>
                
                <!-- INSTAGRAM -->
                <a target="_blank" href="https://www.instagram.com/estudiojuridicobia/" class="Instagram"> <img src="assets/img/redes_Sociales/instagram_Icon.png" title="Instagram" alt="Instagram Estudio Juridico BIA">
                </a>
                         Instagram <br>
                </p>

              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.009931156702!2d-58.382998984770396!3d-34.60391038045942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacf109ee593%3A0x1b48c31d9cb9fa93!2sCarlos%20Pellegrini%20385%2C%20C1035%20CABA!5e0!3m2!1ses!2sar!4v1610838885510!5m2!1ses!2sar" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">

            <!-- ** FORMULARIO DE CONTACTO **- -->
            <form name="formulario" id="formdata" method="post" class="php-email-form">  

               <div class="form-row">
                  

                  <!-- ** NOMBRE ** -->
                  <div class="form-group col-md-6">
                    
                    <input type="text" name="nombre" class="form-control" id="name" data-rule="minlen:4" data-msg="Por favor, ingrese al menos 4 caracteres."
                    placeholder="Nombre y Apellido" tabindex="1" />
                    
                    <div class="validate" id="validate_Nombre" style="display:none">El campo Nombre es obligatorio.</div>
                    
                    <div class="validate" id="validate_Len_Nombre" style="display:none">Por favor, ingrese al menos 4 caracteres.</div>
                    
                    
                  </div>


                  <!-- ** TELEFONO ** -->
                  <div class="form-group col-md-6">
                    
                    <input type="tel" class="form-control" name="telefono" id="telefono" data-rule="minlen:8" data-msg="Por favor, ingrese al menos 8 caracteres."
                    placeholder="Teléfono" tabindex="2" />
                    
                    <div class="validate" id="validate_Telefono" style="display:none">El campo Teléfono es obligatorio.</div>
                    
                    <div class="validate" id="validate_Len_Telefono" style="display:none">Por favor, ingrese al menos 8 caracteres.</div>
                  </div>

               </div>

               <div class="form-row">


                  <!-- ** EMAIL **- -->
                  <div class="form-group col-md-6">
                    
                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Por favor, ingrese un Email válido."
                    placeholder="Email" tabindex="3" />
                    
                    <div class="validate" id="validate_Email" style="display:none">El campo Email es obligatorio</div>
                    
                    <div class="validate" id="validate_Email_OK" style="display:none">Por favor, ingrese un Email válido.</div>
                  </div>


                  <!-- ** ASUNTO ** -->  
                  <div class="form-group col-md-6">              
                  
                    <select class="form-control" name="asunto" id="subject" tabindex="4" onchange="document.getElementById('asunto')">
                      <option value="Consulta" selected="selected">Consulta</option>

                      <option value="Cita">Cita</option>

                      <option value="Presupuesto">Presupuesto</option>

                      <option value="Otro">Otro</option>
                    </select>

                  </div>  

                </div>  

                <!-- ** MENSAJE **- -->
                <div class="form-group">
                  
                  <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Por favor, escriba un mensaje." placeholder="Mensaje" tabindex="5"></textarea>
                  
                  <div class="validate" id="validate_Msj" style="display:none">El campo Mensaje es obligatorio.</div>
                </div>
                
               <div class="form-row">
                     
                    <!-- CAPTCHA -->
                    <div class=" form-group col-md-7 d-flex align-items-stretch captcha">
                      
                        <div id="re_captcha" class="form-group col-md-7 g-recaptcha" data-sitekey="6LdH7EkaAAAAAB2TNW20xdCuqlC8YgN8-8_5uPx6">
                        </div> 

                    </div>
                    
                    <!-- RELLENO PARA COMPLETAR LAS 12 COLUMNAS  -->
                    <div class="form-group col-md-1 col-sm-0 col-xs-0"> </div>
                    
                    <!-- ** BOTÓN ENVIAR **- -->
                    <div class="text-center form-group col-md-3">
                        <button id = "btn-enviar" data-toggle="modal" type="button" tabindex="6">Enviar</button>
                    </div>
                    
                    <button id = "btn-presionar" data-target="#exito" data-toggle="modal" type="button" tabindex="6" style="display:none">Presionar</button>
                    
                    <button id = "btn-error" data-target="#fracaso" data-toggle="modal" type="button" tabindex="7" style="display:none">Error</button>
                    
                    <button id = "btn-campos_obligatorios" data-target="#campos_obligatorios" data-toggle="modal" type="button" tabindex="8" style="display:none">Campos Obligatorios</button>
                    
                    
                    <!-- RELLENO PARA COMPLETAR LAS 12 COLUMNAS  -->
                    <div class="form-group col-md-1 col-sm-0 col-xs-0"> </div>
                    
               </div>
               
            <!-- </div> -->
            
            </form>
              
          </div>
          
        
          <!-- SI TODO FUE OK CON EL ENVÍO DEL MAIL, MOSTRAMOS ESTE POP UP -->
          <div class="container">
              <!-- Modal-->
              <div class="modal fade" id="exito" role="dialog" style="display:none">
                <div class="modal-dialog">
                
                  <div class="modal-content pop-up">
                    <div class="modal-header">
                      <h4 class="modal-title"> <img src="Modal/Check_Ok.png" width="50" height="50" alt="Mail enviado con éxito"> 
                  Su mensaje ha sido enviado. <br> Muchas gracias!!
                 </h4>
                    </div>
                    <div class="modal-body" align="center">
                      <p>En breve nos pondremos en contacto con usted.</p>
                  <img src="Modal/Logo_BIA.png" width="200" height="200" align="modal-content" alt="Estudio Juridico BIA">
                  
                    </div>
        
                  </div>
                  
                </div>
        
              </div>
              
           </div>
           
    
          <!-- SI HUBO UN ERROR CON EL ENVÍO DEL MAIL, MOSTRAMOS ESTE POP UP -->
          <div class="container">
              <div class="modal fade" id="fracaso" role="dialog" style="display:none">
                <div class="modal-dialog">
                
                  
                  <div class="modal-content pop-up">
                    <div class="modal-header">
        
                      <h4 class="modal-title"> <img src="Modal/Check_Error.png" width="50" height="50" alt="Se ha producido un error al enviar el mail"> 
                  Se ha producido un error al enviar el email.
                 </h4>
                    </div>
                    <div class="modal-body" align="center">
                      <p>Por favor, aguarde unos minutos e intente nuevamente completar los datos.</p>
                      
                  <img src="Modal/Logo_BIA.png" width="200" height="200" align="modal-content" alt="Estudio Juridico BIA">
                  
                    </div>
                    
                  </div>
                  
                </div>
        
              </div>  
              
          </div>
          
          
          <!-- SI HAY CAMPOS OBLIGATORIOS SIN COMPLETAR EN EL FORMULARIO DE ENVÍO DE MAIL, MOSTRAMOS ESTE POP UP -->
          <div class="container">
              <div class="modal fade" id="campos_obligatorios" role="dialog" style="display:none">
                <div class="modal-dialog">
                
                  
                  <div class="modal-content pop-up">
                    <div class="modal-header">
        
                      <h4 class="modal-title"> <img src="Modal/Check_Error.png" width="50" height="50" alt="No es posible enviar el mail"> 
                  No es posible enviar el email.
                 </h4>
                    </div>
                    <div class="modal-body" align="center">
                      <p>Por favor, complete todos los campos obligatorios del formulario.</p>
                      
                  <img src="Modal/Logo_BIA.png" width="200" height="200" align="modal-content" alt="Estudio Juridico BIA">
                  
                    </div>
                    
                  </div>
                  
                </div>
        
              </div>  
              
          </div>
    
            
            
        </div>

      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>CONTACTO</h4>
            <p>
              <strong class = "datos">Dirección:</strong>
              Av. Carlos Pellegrini 385, Piso 4, Dpto A <br>
              CABA, Buenos Aires<br>
              Argentina. CP: 1009 <br>
              <strong class = "datos">Horario:</strong> Lunes a Viernes de 8 a 16 hs<br>
              <strong class = "datos">Teléfono Fijo:</strong> 4-506-0757<br>
              <strong class = "datos">Teléfono Celular:</strong>
              +54 9 11-6978-8767<br>
              <strong class = "datos">Email:</strong> consultas@estudiobia.com.ar<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>MENU</h4>
            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="#about">Inicio</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#team">Nosotros</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Áreas de Práctica</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#faq">Preguntas frecuentes</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contacto</a></li>
            </ul>
          </div>

          
          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>ÁREAS DE PRÁCTICA</h4>
            <ul>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#amparos">Amparos de Salud</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#acctransito">Accidentes de Tránsito</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#derpenal">Derecho Penal</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#dertribu">Derecho Tributario</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#despidos">Despidos</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#acctrabajo">Accidentes de Trabajo</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#enfermedades">Enfermedades Profesionales</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#sucesiones">Sucesiones</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#divorcios">Divorcios</a></li>

            </ul>
          </div>
          

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
            <h4>SEGUINOS EN</h4>
          
            <div class="social-links mt-3">
             
               <!-- FACEBOOK -->
               <a target="_blank" href="https://www.facebook.com/estudiojuridicobia" class="facebook"><img src="assets/img/redes_Sociales/facebook_Icon.png" title="Facebook" alt="Facebook Estudio Juridico BIA">
               </a>


              <!-- INSTAGRAM -->
               <a target="_blank" href="https://www.instagram.com/estudiojuridicobia/" class="Instagram"><img src="assets/img/redes_Sociales/instagram_Icon.png" title="Instagram" alt="Instagram Estudio Juridico BIA">
               </a>

            </div>
            
          </div>



        </div>

      </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright 2022 <strong><span>Maximiliano Effron</span></strong>. Todos los derechos reservados
      </div>
    </div>

  </footer>


  <!-- WHATSAPP -->
  <a data-aos="fade-up" data-aos-offset="140" target="_blank" class="appWhatsapp" href="https://api.whatsapp.com/send?phone=5491169788767&text=Hola,%20en%20qu%C3%A9%20podemos%20ayudarte?">  
    <img src="assets/img/WhatsApp.png" alt="WhatsApp BIA">

  </a>

  <!-- FLECHA -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
  
  
  <!-- VALIDAR SOLO NÚMEROS EN UN INPUT "TEXT" -->    
  <script>
      window.addEventListener("load", function() {
      formulario.telefono.addEventListener("keypress", soloNumeros, false);
    });
    
    //Solo permite introducir numeros.
    function soloNumeros(e){
      var key = window.event ? e.which : e.keyCode;
      if (key < 48 || key > 57) {
        e.preventDefault();
      }
    }
  </script>      
  
   

  <!-- Librerías externas para manejar el popup modal -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
  <!-- Este script es necesario para poder enviar correctamente el mail
  y debe ir justo ANTES de llamar a la función que envía el mail-->
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script> 
  
  <script>
    
    $(document).on('ready',function(){

	  $('#btn-enviar').click(async function(){
		var url = "forms/mail.php";
		
        //Validamos que los datos del formulario estén correctos
        if (!validarFormulario()){
			event.preventDefault();

			$("#btn-campos_obligatorios").click(); 
			
		}
        
        else {
            
            var valido = false;
            
            try {
        	const r = await $.ajax({
        	   
        	   type: "POST",                 
    		   url: url,                    
    		   data: $("#formdata").serialize(),

    		}); 
    		
    		
		   //TODO FUE OK
		   
			 $("#btn-presionar").click();   
			 
			 //Redireccionamos la página (En este caso, cargamos la misma) a los 3 segundos
        	 setTimeout(function(){
        	     url = "https://www.estudiojuridicobia.com.ar";
                 $(location).attr('href',url);
             },3000);
			 
			   
            }
            catch {
                
              // HUBO UN ERROR
              
              $("#btn-error").click(); 
              
            }
    		 
        }
    	 
	  });

	});
       
    
    function validarFormulario(){
				
		//Ocultamos todos los divs que muestran un error de validación al 
		//completar el campo.
		$('.validate').hide();
		
		var result = true;
		var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		
		//****** CAMPO NOMBRE ******
		
		//Validación Nº1: Campo Obligatorio
		if ($('input[name=nombre]').val().length === 0) {
			result = false;
			//Si hay un error, mostramos el texto que corresponde.
			$("#validate_Nombre").fadeIn("slow");
		}
		
		
		//Validación Nº2: Mínimo de caracteres
		else if ($('input[name=nombre]').val().length <4) {
			result = false;
			//Si hay un error, mostramos el texto que corresponde.
			$("#validate_Len_Nombre").fadeIn("slow");
		}
		
		//****** CAMPO TELEFONO ******
		
		//Validación Nº1: Campo Obligatorio
		if ($('input[name=telefono]').val().length === 0) {
			result = false;
			//Si hay un error, mostramos el texto que corresponde.
			$("#validate_Telefono").fadeIn("slow");
		}
		
		//Validación Nº2: Mínimo de caracteres
		else if ($('input[name=telefono]').val().length < 8) {
			result = false;
			//Si hay un error, mostramos el texto que corresponde.
			$("#validate_Len_Telefono").fadeIn("slow");
		}
		
	
		//****** CAMPO EMAIL ******
		
		//Validación Nº1: Campo Obligatorio
		if ($('input[name=email]').val().length === 0) {
			result = false;
			//Si hay un error, mostramos el texto que corresponde.
			$("#validate_Email").fadeIn("slow");
		}
		
		
		//Validación Nº2: Validamos que el mail sea un mail con caracteres correctos
		else if (!re.test($('input[name=email]').val())) {
			result = false;
			//Si hay un error, mostramos el texto que corresponde.
			$("#validate_Email_OK").fadeIn("slow");

		}
		
		
		//****** CAMPO MENSAJE ******
		
		//Campo Obligatorio
		if ($('textarea[name=message]').val().length === 0) {
			result = false;
			//Si hay un error, mostramos el texto que corresponde.
			$("#validate_Msj").fadeIn("slow");
		}
		
		
		return result;
	}
    
  </script>
  
  
  <!-- ARCHIVOS DE JAVA SCRIPT -->
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <!-- Recaptcha -->
  <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

</body>

</html>