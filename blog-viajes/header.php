<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
 <?php wp_head(); ?>
</head>

<body>

 <?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), $size, $icon); ?>
 <header id="header">
  <nav class="navbar lucklaend-nav navbar-expand-lg navbar-light fixed-top scrolling-navbar top-nav-collapse">

   <div class="container-fluid">

    <!-- Navbar brand -->
    <a href="/" class="navbar-brand"><img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="logo-lucklaend"></a>
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
     <!-- Collapsible content -->

    </div>
   </div>
  </nav>
 </header>