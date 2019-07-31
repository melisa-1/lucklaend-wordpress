<?php

// Scripts y Styles //
function blog_viajes_styles()
{

  // Normalize//
  wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '8.0.1');

  //Google Fonts//
  wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Poppins:400,700,800&display=swap', array(), '1.0.0');

  // Font Awesome //
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');

  //Animate//
  wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', array(), '3.7.0');

  // Bootstrap Css//
  wp_enqueue_style(' bootstrap ', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");


  // Owl-carousel-css//
  wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(), '2.2.0');

  // Owl-theme-carousel-default-css//
  wp_enqueue_style('owl-theme-default-carousel-css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(), '2.2.0');

  // Hoja de Estilos Principal //
  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont', 'animate-css', 'fontawesome'), '1.0.0');


  //Jquery//
  wp_enqueue_script(' jquery ');

  //Popper//

  wp_enqueue_script(' popper_js ', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', ' 1.12.9', true);

  //Bootstrap JS//

  wp_enqueue_script(' bootstrapjs ', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), ' 4.0.0', true);

  // WOW //
  wp_enqueue_script(' wowjs ', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), ' 1.3.0', true);

  // JqEasing
  wp_enqueue_script(' jq-easing ', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), '1.3.2', true);

  // Owl Carousel
  wp_enqueue_script(' owl-carousel-js ', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), ' 2.2.0', true);

  // Scripts//
  wp_enqueue_script('scritps', get_template_directory_uri() . '/js/scripts.js', array('jquery'), ' 1.0.0', true);
}
add_action('wp_enqueue_scripts', 'blog_viajes_styles');

//Navegación//

// Imagen Hero //
function blog_viajes_hero_image()
{
  // obtener id pagina principal //
  $front_page_id = get_option('page_on_front');
  // Obtener id imagen
  $id_imagen = get_field('imagen_hero', $front_page_id);
  // Obtener la imagen
  $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

  // STyle CSS
  wp_register_style('custom', false);
  wp_enqueue_style('custom');

  $imagen_destacada_css = "
  body.home .site-header {
    background-image:linear-gradient(rgba(255, 255, 255, 0.256), rgba(254, 254, 254, 0.078)),
url($imagen);
}
  ";
  wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'blog_viajes_hero_image');

// Imagen Dev //
function blog_viajes_hero_image_dev()
{
  // obtener id pagina principal //
  $front_page_id = get_option('page_on_front');
  // Obtener id imagen
  $id_imagen = get_field('imagen_dev', $front_page_id);
  // Obtener la imagen
  $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

  // STyle CSS
  wp_register_style('custom', false);
  wp_enqueue_style('custom');

  $imagen_destacadadev_css = "
  @media (max-width: 768.98px){
  body.home .site-header {
    background-image:linear-gradient(rgba(255, 255, 255, 0.256), rgba(254, 254, 254, 0.078)),
url($imagen);
}
}
  ";
  wp_add_inline_style('custom', $imagen_destacadadev_css);
}
add_action('init', 'blog_viajes_hero_image_dev');
