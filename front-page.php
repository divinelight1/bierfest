<?php include 'header.php'; ?>
<div class="homepage-big-header">
  <div class="row">
    <div class="top-bar">
      <ul class="top-bar-menu">
        <li><?php echo get_option('emailtopbar'); ?></li>
        <li><?php echo get_option('telephonetopbar'); ?></li>
      </ul>
    </div><!-- /top-bar -->
  </div><!-- /row -->
  <div class="row">
    <div class="main-menu">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div><!-- /main-menu -->
  </div><!-- /row -->
  <div class="row">
    <div class="logo-holder">
      <img src="<?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                echo $image[0];
                ?>" alt="<?php bloginfo('name'); ?>">
    </div><!-- /logo-holder -->
  </div><!-- /row -->
  <div class="row">
    <div class="main-article">
      <h3>Wetziker Bierfäscht</h3>
      <img src="http://placehold.it/50x7" alt="">
      <p class="main-article-paragraph">Nunc nibh lectus, rhoncus sit amet sagittis a, malesuada fermentum magna. Sed lacinia semper tellus, pharetra dapibus leo ultrices volutpat. Nullam odio ligula, fringilla quis sagittis quis, varius sed erat. Maecenas sem massa, faucibus sed arcu non, semper varius ligula.</p>
    </div>
  </div><!-- /row -->
</div><!-- /homepage-big-header -->

<?php include('footer.php'); ?>
