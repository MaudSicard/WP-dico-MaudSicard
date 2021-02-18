<?php
get_header();
?>
  <main class="container-fluid">
    <div class = "d-flex justify-content-between">
    <?php
            $menu = wp_nav_menu([
                'menu'=> 'Menu', //nom de menu à afficher
                'container'=> 'nav col-5',// le container du menu sera une balise nav
                'menu_class'=>'navbar-nav', // class css appliquée au menu
                'echo'=>false // nous demandons à wp de ne pas afficher le menu mais de nous retourner le html généré
            ]);
            echo $menu;
      ?>
      <div class="container col-9">
      <?php   
      if (have_posts()) {
          while (have_posts()) {
              the_post();
              get_template_part('article');
          }
      }
      ?>
      </div>
    </div>
    </main>
  <?php
get_footer();
?>