<?php
$st_kb_meta = of_get_option('st_kb_meta' );
if (!is_array($st_kb_meta)) {
	$st_kb_meta = array();
}
$number = get_comments_number(get_the_ID());
?>
<?php if ( (!empty($st_kb_meta['date'])) || (!empty($st_kb_meta['author'])) || (!empty($st_kb_meta['comments'])) ) { ?>
<ul class="entry-meta clearfix">
<?php if (!empty($st_kb_meta['date'])) { ?>
    <li class="date"> 
    <strong><?php _e( 'Created: ', 'framework' ); ?></strong>
    <time datetime="<?php the_time('Y-m-d')?>"><?php the_time( get_option('date_format') ); ?></time>
    </li>
<?php } ?>
<?php if (!empty($st_kb_meta['author'])) { ?>
	<li class="author">
	<?php if (!empty($st_kb_meta['date'])) { ?><span>/</span><?php } ?> 
    <strong><?php _e( 'Author: ', 'framework' ); ?></strong>
	<?php the_author(); ?></li>
<?php } ?>
<?php if( (!empty($st_kb_meta['comments'])) && ($number != 0)) { ?>
	<?php if ( comments_open() ){ ?><li class="comments">
	<?php if (!empty($st_kb_meta['author'])) { ?><span>/</span><?php } ?>
    <strong><?php _e( 'Comments: ', 'framework' ); ?></strong>
	<?php comments_popup_link( __( '0', 'framework' ), __( '1', 'framework' ), __( '%', 'framework' ) ); ?></li><?php } ?>
<?php } ?>
</ul>
<?php } ?>