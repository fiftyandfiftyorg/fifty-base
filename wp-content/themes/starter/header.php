<?php //Header Variables
    $google_analytics = get_field('google_analytics','options');
    $additional_css = get_field('additional_css','options');
    $site_logo = get_field('site_logo','options');
    $company_email = get_field('company_email','options');
    $company_address = get_field('company_address','options');
    $company_phone = get_field('company_phone','options');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/img/your-favicon.png">
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/90a3beb93d.js"></script>
    <?php if ($google_analytics):?>
        <?php echo $google_analytics;?>
    <?php endif;?>
</head>
<body <?php body_class(); ?>>
<?php if($additional_css):?>
  <style>
    <?php echo $additional_css;?>
  </style>
<?php endif;?>
<header class="header">
  <div class="header-container max-width pad-hit">
    <div class="header-container__left-side">
      <a href="<?php echo get_home_url(); ?>" class="logo">
          <?php if ($site_logo):?>
            <img class="logo-image" src="<?php echo $site_logo['url']?>" alt="<?php echo $site_logo['alt']?>"/>
          <?php else:?>
            <img class="logo-image" src="<?php echo get_template_directory_uri();?>/assets/img/your-logo.png" alt="Company Logo"/>
          <?php endif;?>
      </a>
    </div>
    <div class="header-container__right-side">
      <?php if( have_rows('social_links','options') ):?>
        <div class="header-socials">
              <?php while( have_rows('social_links','options') ) : the_row();
                $social_label = get_sub_field('social_label');
                $social_url = get_sub_field('social_url');
                $social_icon = get_sub_field('social_icon');
              ?>
              <div class="header-socials__item">
                  <a class="social-icon social-icon-<?php echo $social_label;?>" href="<?php echo $social_url;?>" target="_blank">
                    <?php echo $social_icon;?>
                  </a>
              </div>
            <?php endwhile;?>
        </div>
      <?php endif;?>
    </div>


    <div id="hamburger-menu" class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
  </div>
  <nav class="menu-container">
    
      <?php
          wp_nav_menu( array(
            'theme_location'  => 'main-menu',
            'container'       => false,
            'menu_class'      => 'max-width',
            'fallback_cb'     => '__return_false',
            'items_wrap'      => '<ul id="%1$s" class="menu max-width nav-list navbar-ul nav-type-normal">%3$s</ul>',
            'depth'           => 2
          ) );
        ?>
    </nav>
</header>