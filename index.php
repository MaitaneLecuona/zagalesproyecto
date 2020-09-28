<?php
/**
 * @title: Proyecto integrador Ev01 - Página principal
 * @description:  Bienvenida a la aplicación
 *
 * @version    0.1
 *
 */
  include 'header.php';
?>
    <div class="jumbotron jumbotron-fluid">
        <div id="bienvenida" class="container">       
            <?php 
                  echo "<h1 class='display-3'>Bienvenid@ a ZAGALES</h1>"; 
                  if ($loggedin) echo "<span class='badge badge-default'> Has iniciado sesión: ".$user."</span>";
                  else           echo "<span class='badge badge-default'> por favor, regístrate o inicia sesión.</span>";
              ?>
        </div>
     </div>
    <div id="bienvenida" class="img-fluid" alt="Responsive image"> 
        <div class="row">
                <div class="offset-md-3 col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://cjn-ngk.org/wp-content/uploads/2016/02/entidad-zagales-burlada.jpg" class="d-block w-100" alt="simbolo">
                          </div>
                          <div class="carousel-item">
                            <img src="https://amigonianos.org/images/20150425ConvivenciaZagales4.jpg" class="d-block w-100" alt="convivencia">
                          </div>
                          <div class="carousel-item">
                            <img src="https://pbs.twimg.com/media/BiyTYxRIEAAnMyS.jpg" class="d-block w-100" alt="javierada">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                   <p class="lead">Tenemos ganas de recibir gente nueva en Zagales. ¡No dudes en apuntarte y enterarte de todo! </p>   
              </div>
        </div>                
      </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Desarrollo Web - 2º DAM.</span>
      </div>
    </footer>
  </body> 
</html>