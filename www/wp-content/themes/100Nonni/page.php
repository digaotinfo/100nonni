<?php get_header();?>
<div class="container">
	<?php while(have_posts()): the_post();?>

		<?php if(has_post_thumbnail()):?>
			<div class="col-sm-6 img-box post-thumbnail">
	            <?php the_post_thumbnail();
	             ?>
	            <p class="wp-caption-text"><?php echo get_post(get_post_thumbnail_id($post->ID))->post_content;?></p>
	        </div>
	    <?php endif;?>
		<h1><?php the_title();?></h1>
		<div class="article-content"><?php the_content() ?></div>
	<?php endwhile;?>
</div>
<?php get_footer();?>