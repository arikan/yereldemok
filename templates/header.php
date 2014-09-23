<header class="banner navbar navbar-default navbar-static-top text-center">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse pull-right" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>

  </div>

  <div class="container">
    <div class="jumbotron">
      <h1>
        Yerel bölgesel kamu yatırımları ve politikaları
      </h1>
      <br />
      <a href="http://yereldemokrasi.net/sistem-nasil-isliyor/" class="btn btn-default btn-lg">
        SİSTEM NASIL İŞLİYOR
      </a>
      &nbsp;&nbsp;
      <a href="http://yereldemokrasi.net/nasil-mudahil-olabiliriz/" class="btn btn-default btn-lg">
        NASIL MÜDAHİL OLABİLİRİZ
      </a>
      <!-- <button type="button" class="btn btn-default btn-lg"></button> -->
      <!-- <button type="button" class="btn btn-default btn-lg">NASIL MÜDAHİL OLABİLİRİZ</button> -->
    </div>
  </div>

</header>