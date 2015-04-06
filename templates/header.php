<header class="banner navbar navbar-default navbar-static-top text-center">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
                <img src="http://yereldemokrasi.net/wp-content/themes/roots/assets/img/yerel-demokrasi-logo.png" class="img-responsive">
            </a>
        </div>

        <nav class="collapse navbar-collapse pull-right" role="navigation">
            <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;
            ?>
        </nav>
    </div>

    <?php if (is_front_page()) { ?>
        <div class="container">
            <div class="jumbotron">
                <h2>Bölgesel Kamu Politikaları ve Yatırımları</h2>
                <br />
                <a href="http://yereldemokrasi.net/sistem-nasil-isliyor/" class="btn btn-default btn-md">SİSTEM NASIL İŞLİYOR?</a>
                &nbsp;&nbsp;
                <a href="http://yereldemokrasi.net/nasil-mudahil-olabiliriz/" class="btn btn-default btn-md">NASIL MÜDAHİL OLABİLİRİZ?</a>
            </div>
        </div>
    <? } else { ?>
        <div class="container text-left submenu">
            <a href="http://yereldemokrasi.net/sistem-nasil-isliyor/" class="btn btn-default btn-xs">Sistem Nasıl İşliyor?</a>
            <a href="http://yereldemokrasi.net/nasil-mudahil-olabiliriz/" class="btn btn-default btn-xs">Nasıl Müdahil Olabiliriz?</a>
        </div>
    <? } ?>

</header>