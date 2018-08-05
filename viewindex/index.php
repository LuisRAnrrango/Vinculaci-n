<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cruz Roja</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/set1.css" />
        <link href="css/overwrite.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span>Agenda de Turnos</span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <div class="menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="http://localhost:81/Pro/viewindex/index.php">Inicio</a></li>
                            <li role="presentation"><a href="http://localhost:81/Pro/backend/web/index.php?r=citas%2Findex">Servicio</a></li>
                            <li role="presentation"><a href="http://localhost:81/Pro/backend/web/index.php?r=site%2Flogin">Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="row">
                <div class="slider">
                    <div class="img-responsive">
                        <ul class="bxslider">
                            <li><img src="img/cruzroja-1.jpg" alt="" /></li>
                            <li><img src="img/cruzroja-1.jpg" alt="" /></li>
                            <li><img src="img/cruzroja-1.jpg" alt="" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                  <h2>Multi Purpose Theme</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br> lorem sit amet scelerisque justo</p>
                </div>
                <hr>
              </div>
            </div>
          </div>-->
        <!--
          <div class="container">
            <div class="row">
              <div class="box">
                <div class="col-md-4">
                  <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                    <h4>Responsive</h4>
                    <div class="icon">
                      <i class="fa fa-heart-o fa-3x"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
                    <div class="ficon">
                      <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                  </div>
                </div>-->

        <!--        <div class="col-md-4">
                  <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                    <h4>Multi Purpose</h4>
                    <div class="icon">
                      <i class="fa fa-desktop fa-3x"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
                    <div class="ficon">
                      <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-4">
                  <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
                    <h4>Easy Customize</h4>
                    <div class="icon">
                      <i class="fa fa-location-arrow fa-3x"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
                    <div class="ficon">
                      <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                  </div>
        
                </div>
        
              </div>
            </div>
          </div>-->

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="text-center">
                        <h2>Especialidades</h2>
                        <p>Seleccione el area en el que desea ser atendido
                        </p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="grid">

                <figure class="effect-zoe">
                    <a title="seleccionar" href="http://localhost:81/Pro/backend/web/index.php?r=citas%2Findex"><img src="img/medicina.jpg" alt="img25" /></a>
                  <!--<img src="img/25.jpg" alt="img25" />-->
                      <input type="hidden" name="opcion" value="medicinageneral">
                    <figcaption>
                       <span>Medicina General</span> 
              <!--          <p class="icon-links">
                        </p>-->
                        <p class="description">Seleccione esta opción para reservar un turno</p>
                    </figcaption>
                </figure>


                <figure class="effect-zoe">
                    <a title="seleccionar" href="http://localhost:81/Pro/backend/web/index.php?r=citas%2Findex"><img src="img/cardiologia.jpg" alt="img25" /></a>
                    <figcaption>
                         <span>Cardiología</span> 

                        <p class="description">Seleccione esta opción para reservar un turno</p>
                    </figcaption>
                </figure>

                <figure class="effect-zoe">
                    <a title="seleccionar" href="http://localhost:81/Pro/backend/web/index.php?r=citas%2Findex"><img src="img/oftalmologia.jpg" alt="img25" /></a>
                    <figcaption>
                        <span>Oftalmología</span>
                        <p class="description">Seleccione esta opción para reservar un turno</p>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="content">
            <div class="grid">
                <figure class="effect-zoe">
                    <a title="seleccionar" href="http://localhost:81/Pro/backend/web/index.php?r=citas%2Findex"><img src="img/fisioterapia.jpg" alt="img25" /></a>
                    <figcaption>
                         <span>Fisioterapia</span>
                        <p class="description">Seleccione esta opción para reservar un turno</p>
                    </figcaption>
                </figure>
                
                 <figure class="effect-zoe">
                     <a title="seleccionar" href="http://localhost:81/Pro/backend/web/index.php?r=citas%2Findex"><img src="img/traumatologia.jpg" alt="img25" /></a>
                    <figcaption>
                        <span>Traumatología</span>
                        <p class="description">Seleccione esta opción para reservar un turno</p>
                    </figcaption>
                </figure>
                
                <figure class="effect-zoe">
                    <a title="seleccionar" href="http://localhost:81/Pro/backend/web/index.php?r=citas%2Findex"><img src="img/dermatologia.jpg" alt="img25" /></a>
                    <figcaption>
                         <span>Dermatologia</span>
                        <p href="http://localhost:81/Pro/backend/web/index.php?r=citas%2Findex" class="description">Seleccione esta opción para reservar un turno</p>
                    </figcaption>
                </figure>
                
<!--                <figure class="effect-zoe">                
                    <figcaption>
                        <h2>Especialidad <span>Odontologia</span></h2>
                        <p class="icon-links">
                            <a href="#"><span class="icon-heart"></span></a>
                            <a href="#"><span class="icon-eye"></span></a>
                            <a href="#"><span class="icon-paper-clip"></span></a>
                        </p>
                        <p class="description">Seleccione esta opción para reservar un turno</p>
                    </figcaption>
                </figure>-->
            </div>
        </div>
       <!--fin especiakidades-->
        <footer>
            <div class="inner-footer">
                <div class="container">
<!--                    <div class="row">
                        <div class="col-md-4 f-about">
                            <a href="index.html"><h1><span>e</span>Nno</h1></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam consectetur adipiscing elit Cras suscipit arcu libero
                            </p>
                        </div>
                        <div class="col-md-4 l-posts">
                            <h3 class="widgetheading">Latest Posts</h3>
                            <ul>
                                <li><a href="#">This is awesome post title</a></li>
                                <li><a href="#">Awesome features are awesome</a></li>
                                <li><a href="#">Create your own awesome website</a></li>
                                <li><a href="#">Wow, this is fourth post title</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 f-contact">
                            <h3 class="widgetheading">Stay in touch</h3>
                            <a href="#">
                                <p><i class="fa fa-envelope"></i> example@gmail.com</p>
                            </a>
                            <p><i class="fa fa-phone"></i> +345 578 59 45 416</p>
                            <p><i class="fa fa-home"></i> SystemDNS inc | PO Box 23456 Little Lonsdale St, New York <br> Victoria 8011 USA</p>
                        </div>
                    </div>-->
                </div>
            </div>


            <div class="last-div">
                <div class="container">
                    <div class="row">
                        <div class="copyright">
                            &copy; System Citas Medicas. All Rights Reserved
                            <div class="credits">

                                <a href="http://localhost:81/proyecto1yii2avanzado/viewindex/index.php">System Citas Médicas</a> by UTN
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="container">
                    <div class="row">
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
                        </ul>
                    </div>
                </div>-->

                <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>


            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/fliplightbox.min.js"></script>
        <script src="js/functions.js"></script>
        <script type="text/javascript">
            $('.portfolio').flipLightBox()
        </script>

    </body>

</html>

