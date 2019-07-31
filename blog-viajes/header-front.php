<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name="description" content="Ofrecemos servicios de mantenimiento, venta, instalación, reparación y modernización de elevadores para pasajeros y carga, escaleras eléctricas. Contáctanos hoy.">
 <meta name="”robots”" content="”index," follow”="">
 <title>Lucklaend Elevadores | 45 años de experiencia</title>
 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".lucklaend-nav" data-offset="75">
 <?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), $size, $icon); ?>
 <header class="site-header" id="header">
  <nav class="navbar lucklaend-nav navbar-expand-lg navbar-light fixed-top scrolling-navbar top-nav-collapse">

   <div class="container-fluid">

    <!-- Navbar brand -->
    <a href="<?php echo esc_url(home_url('/')) ?>" class="navbar-brand"><img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="logo-lucklaend" class="img-fluid"></a>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

     <!-- Links -->
     <ul class="navbar-nav ml-auto smooth-scroll">
      <li class="nav-item">
       <a class="nav-link active smooth-scroll" href="#header">Inicio</a>
      </li>
      <li class="nav-item">
       <a class="nav-link smooth-scroll" href="#about">Acerca de</a>
      </li>
      <li class="nav-item">
       <a class="nav-link smooth-scroll" href="#products">Productos</a>
      </li>
      <li class="nav-item">
       <a class="nav-link smooth-scroll" href="#services">Servicios</a>
      </li>
      <li class="nav-item">
       <a class="nav-link smooth-scroll" href="#contact">Contacto</a>
      </li>
     </ul>
     <!-- Links -->
    </div>
    <!-- Collapsable content -->
   </div>
  </nav>
  <div class="tagline text-hero">
   <div class="home-content-box">
    <div class="home-heading animated zoomIn">
     <h1><?php the_field('encabezado_hero') ?></h1>
     <p><?php the_field('contenido_hero') ?></p>
    </div>
    <div class="home-btn animated zoomIn smooth-scroll">
     <a class="btn btn-lg btn-home smooth-scroll" href="#contact" role="button" title="escríbenos">ESCRÍBENOS</a>
    </div>
   </div>
  </div>
 </header>