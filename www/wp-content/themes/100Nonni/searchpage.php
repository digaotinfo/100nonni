<?php
/*
Template Name: Resultados da busca
*/
?>

<?php get_header();?>
<div class="artigos">
	<?php 
    $c = 1;
    
    global $query_string;

	$query_args = explode("&", $query_string);
	$search_query = array();

	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach

	$search = new WP_Query($search_query);

    if($search->have_posts()):
    ?>
	<div class="artigos">
		<?php while($search->have_posts()): $search->the_post();?>
			<article class="col-xs-12 col-md-4 col-sm-4">
                <div class="img-box">
                	<?php $hover_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');?>
                    <a href="<?php the_permalink();?>"><img src="<?php echo $hover_url[0];?>" alt="<?php the_title();?>" /></a>
                </div>
                <div class="txt-box">
                    <a href="<?php the_permalink();?>"><h2><?php the_title();?></h2>
                    <p><?php the_excerpt();?></p></a>
                </div>
            </article>
    	<?php if($c % 3 == 0):?>
    	</div>
        <div class="artigos">
    	<?php endif; $c++; endwhile;?>
	</div>
	<?php endif;wp_reset_postdata();?>
</div>
<?php get_footer()?>