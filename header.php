<html <?php language_attributes();?>
  <head>
    <meta charset= "<?php bloginfo('charset');?>">
    <title>
      <?php bloginfo('name');?> |
      <?php is_front_page()? bloginfo ('description'): wp_title();?>
    </title>

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Exo|Yanone+Kaffeesatz" rel="stylesheet">
    <!--css-->
    <link href="<?php bloginfo('template_url');?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?> "rel="stylesheet">
    <script src="<?php bloginfo('template_url');?>/main.js"></script>
    <?php wp_head();?>
  </head>
  <!--contenue du site-->
  <body>
    <!--header-->
      <header class="container-fluid header">
      <div class="container">
        <div class="row">


        <div id="bloc page" class="col-5">
        <img src="http://localhost:8888/wordpress/wp-content/uploads/2017/06/retro.png" alt="retro game">
        </div>
          <!-- <a href="#"class="logo"></a> -->
        <nav class="menu" class=col-5>
          <a href="pagemanga.html">Accueil</a>
          <a href="http://localhost:8888/wordpress/page-manga/">Manga</a>
          <a href="http://localhost:8888/wordpress/pageactu/">Actualité</a>
          <a href="http://localhost:8888/wordpress/pagecontact/">Contact</a>
        </nav>
</div>
</div>

</header>
    <!--end header-->
