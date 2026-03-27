<!-- #footer-bottom -->
<footer id="footer" class="clearfix">

<?php if ( ( is_active_sidebar( 'st_sidebar_footer' ) ) && ( get_theme_mod( 'st_style_footerwidgets' ) != 'off' )) { ?>

<div id="footer-widgets" class="clearfix">
    <div class="ht-container">
        <div class="row">
        	<?php dynamic_sidebar( 'st_sidebar_footer' ); ?>
        </div>
    </div>
</div>

<?php } ?>

<div id="footer-bottom" class="clearfix">
<div class="ht-container">
  <?php if (get_theme_mod( 'st_copyright' )) { ?>
  <small id="copyright" role="contentinfo"><?php echo get_theme_mod( 'st_copyright' ); ?></small>
  <?php } ?>


  <?php if ( has_nav_menu( 'footer-nav' ) ) { /* if menu location 'footer-nav' exists then use custom menu */ ?>
  <nav id="footer-nav" role="navigation">
    <?php wp_nav_menu( array('theme_location' => 'footer-nav', 'depth' => 1, 'container' => false, 'menu_class' => 'nav-footer clearfix' )); ?>
  </nav>
  <?php } ?>
</div>
</div>

</footer> 
<!-- /#footer-bottom -->


<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4821316-71', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>