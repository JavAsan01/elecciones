<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GEOLOCALIZACION</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/icon.png">
    <!-- CSS here -->
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animated-headline.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/magnific-popup.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/fontawesome-all.min.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/themify-icons.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slick.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/nice-select.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

    <!-- CDN DE JQuery -->
  	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  	<!-- CDN DE BOOTSTRAP -->
  	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<!-- Optional theme -->
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  	<!-- Latest compiled and minified JavaScript -->
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	<!-- IMPORTACION DE API KEY DE GOOGLE MAPS -->
  	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcLcLBEAz0-5WQAt9Njj5kFlYuj-NUoSA&libraries=places&callback=initMap"></script>

    <!-- Importacion de jquery framwork JS para programar de forma mas elegante -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <!-- CND MENSAJE FLOTANTES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- tag para archivo Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CND MENSAJE FLOTANTES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- tag para archivo Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <!-- ? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url(); ?>/assets/img/logo/CNE.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
      <!--? Header Start -->
      <div class="header-area  pt-20" data-background="<?php echo base_url(); ?>/assets/img/gallery/footer_bg.png">
          <div class="main-header header-sticky">
              <div class="container-fluid">
                  <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index"><img src="<?php echo base_url(); ?>/assets/img/logo/logo_header1.png" alt="" width="120%"></a>
                        </div>
                    </div>
                    <!-- <div class="col-xl-2 col-lg-2 col-md-1">
                      <div class="col-xl-2 col-lg-2 col-md-1">
                        <h3 style="color:white">CNE ELECCIONES 2023</h3>
                      </div>
                    </div> -->
                    <!-- MENU NAVBAR -->
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active"><a href="<?php echo base_url(); ?>">INICIO</a></li>
                                        <!-- <li><a href="about.html">About</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li> -->
                                        <li><a href="<?php echo base_url();?>">SERVICIOS</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url();?>/candidaturas/nuevo">Registrar nuevos candidatos</a></li>
                                                <li><a href="<?php echo site_url();?>/candidaturas/lista">Listado de Candidatos</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url();?>">REPORTES</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url();?>/Maps/mapaG">Reporte General</a></li>
                                                <li><a href="<?php echo site_url();?>/Maps/mapaP">Candidatos a Presidente</a></li>
                                                <li><a href="<?php echo site_url();?>/Maps/mapaA">Candidatos a Asambleistas Nacionales</a></li>
                                                <li><a href="<?php echo site_url();?>/Maps/mapaAP">Candidatos a Asambleistas Provinciales</a></li>
                                                <li><a href="<?php echo site_url();?>/Maps/mapaIG">Reporte General de Ideologías Políticas</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li><a href="contact.html">CONTÁCTANOS</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                            <!-- <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="from.html" class="btn header-btn">INICIO SESIÓN</a>
                            </div> -->
                        </div>
                      </div>
                      <!-- Mobile Menu -->
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Header End -->
    </header>
