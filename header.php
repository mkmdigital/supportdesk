<?php
/**
 * The Header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<meta name="google-site-verification" content="OA-XdLJ18HffI5EEEnPaD-AQlzGM91oj54fbwbUfQXI" />

<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"Diese Webseite nutzt \"Cookies\" um bestimmte Inhalte zur Verfügung zu stellen.","dismiss":"Ok!","learnMore":"Mehr dazu.","link":"http://bundeswehr-lexikon.de/impressum-datenschutz/","theme":"light-bottom"};
</script>

<script type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>
<!-- End Cookie Consent plugin -->

</head>
<body <?php body_class(); ?>>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1529996203977964',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<!-- #primary-nav-mobile -->
<nav id="primary-nav-mobile">
<a class="menu-toggle" href="#"></a>
<?php wp_nav_menu( array('theme_location' => 'primary-nav', 'container' => false, 'menu_class' => 'clearfix', 'menu_id' => 'mobile-menu', )); ?>
</nav>
<!-- /#primary-nav-mobile -->

<!-- #header -->
<header id="header" class="clearfix" role="banner">

<div class="ht-container">

<div id="header-inner" class="clearfix">
<!-- #logo -->
  <div id="logo">
      <a title="<?php bloginfo( 'name' ); ?>" href="<?php echo home_url(); ?>">
      <img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo get_theme_mod( 'st_site_logo' ); ?>" />
      </a>
  </div>
<!-- /#logo -->


<!-- #primary-nav -->
<nav id="primary-nav" role="navigation" class="clearfix">
  <?php if ( has_nav_menu( 'primary-nav' ) ) { ?>
    <?php wp_nav_menu( array('theme_location' => 'primary-nav', 'container' => false, 'menu_class' => 'nav sf-menu clearfix' )); ?>
     <?php } else { ?>
	 <ul>
     <?php echo wp_list_pages( array( 'title_li' => '' ) ); ?>
    </ul>
  <?php } ?>
</nav>
<!-- #primary-nav -->


</div>
</div>
</header>
<!-- /#header -->
