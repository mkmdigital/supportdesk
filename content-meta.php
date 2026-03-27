<?php
$st_post_meta = of_get_option('st_blog_meta' );
if (!is_array($st_post_meta)) {
	$st_post_meta = array();
}
$number = get_comments_number(get_the_ID()); ?>
<?php if ( (!empty($st_post_meta['date'])) || (!empty($st_post_meta['author'])) || (!empty($st_post_meta['category'])) || (!empty($st_post_meta['comments'])) ) { ?>
<ul class="entry-meta clearfix">

<?php if (!empty($st_post_meta['date'])) { ?>
 <li class="date"> 
    <strong><?php _e( 'Posted: ', 'framework' ); ?></strong>
    <time datetime="<?php the_time('Y-m-d')?>"><?php the_time( get_option('date_format') ); ?></time>
    </li>
<?php } ?>

<?php if (!empty($st_post_meta['author'])) { ?>
<li class="author">
	<?php if (!empty($st_post_meta['date'])) { ?><span>/</span><?php } ?> 
    <strong><?php _e( 'By: ', 'framework' ); ?></strong>
	<?php the_author(); ?></li>
<?php } ?>


<?php if ( (!empty($st_post_meta['category'])) && (!in_category( '1' )) ) { ?>
<li class="category">
<?php if (!empty($st_post_meta['author'])) { ?><span>/</span><?php } ?> 
<strong><?php _e( 'In: ', 'framework' ); ?></strong>
<?php the_category('/ '); ?></li>
<?php } ?>

<?php if( (!empty($st_post_meta['comments'])) && ($number != 0)) { ?>
	<?php if ( comments_open() ){ ?>
	<?php if (!empty($st_post_meta['category'])) { ?><span>/</span><?php } ?>
    <strong><?php _e( 'Comments: ', 'framework' ); ?></strong>
	<?php comments_popup_link( __( '0', 'framework' ), __( '1', 'framework' ), __( '%', 'framework' ) ); ?><?php } ?>
<?php } ?>
</ul>
<?php } ?>