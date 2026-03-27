<?php
/**
* The template for displaying Knowledge Base search results pages.
*
*/
?>

<?php 
// Get position and location of sidebar
$st_kb_sidebar_location = of_get_option('st_kb_sidebar_location');
if (!is_array($st_kb_sidebar_location)) {
	$st_kb_sidebar_location = array();
}

if (!empty($st_kb_sidebar_location['search'])) {
	$st_kb_sidebar_position = of_get_option('st_kb_sidebar');
} else {
	$st_kb_sidebar_position = 'off';
}
?>

<?php if (!empty($_GET['ajax'])) { // Is Live Search ?>

<?php if ( have_posts() ) { ?>

<ul id="search-result">
	<?php while (have_posts()) : the_post(); ?>
    
		<li class="sr-<?php echo get_post_type( $post->ID ); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        
	<?php endwhile; ?>
</ul>

<?php } else { ?>

<ul id="search-result">
  <li class="nothing-here"><?php _e( "Sorry, no posts were found.", "framework" ); ?></li>
</ul>

<?php } ?>

<?php } else { // Is Normal Search ?>

<?php get_header(); ?>

<?php get_template_part( 'page-header', 'kb' ); ?>


<!-- #primary -->
<div id="primary" class="sidebar-<?php echo $st_kb_sidebar_position; ?> clearfix"> 
<div class="ht-container">
<!-- #content -->
  <section id="content" role="main">
  
<?php
// The Query
global $query_string;
$search_query = new WP_Query( $query_string . '&posts_per_page=8' );
?>
<?php if ( $search_query->have_posts() ) { ?>

	<?php /* Start the Loop */ ?>
	<?php while ( $search_query->have_posts() ) : $search_query->the_post(); ?>

	<?php get_template_part( 'content-kb', get_post_format() );	?>

	<?php endwhile;  ?>

	<?php st_content_nav( 'nav-below' );?>

<?php } else { ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php } ?>
<?php wp_reset_postdata(); ?>
    
</section>
<!-- /#content -->


<?php if ($st_kb_sidebar_position != 'off') {
  get_sidebar('kb');
  } ?>

</div>
</div>
<!-- /#primary -->

<?php get_footer(); ?>

<?php } ?>