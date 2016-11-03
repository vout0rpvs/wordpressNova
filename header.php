<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
  </head>
  <body>
    <header>
      <div class="language">
        <a href="#">ENG</a><span>/</span><a href="#">ESP</a>
      </div>
      <div class="consult">
          FREE CONSULTATION  <span>(877) 783-4724</span>
      </div>
      <nav>
        <div class="wrapper">
					<?php wp_nav_menu('primary');?>
        </div>
      </nav>
			</header>      
