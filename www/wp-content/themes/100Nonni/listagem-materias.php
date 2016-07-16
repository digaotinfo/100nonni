<?php
/*
Template Name: Listagem de materias
*/
?>
<?php get_header();?>
	<div class="container list-artigos">

		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 10,
            'paged' => $paged
			);

		$artigos = new WP_Query($args);

		if($artigos->have_posts()):while($artigos->have_posts()): $artigos->the_post();
		?>
		<article <?php post_class();?>>
            <div class="data-wrap">
                <span><?php echo get_the_date('d.m.Y'); ?></span>
            </div>
            <h1><a href="<?php the_permalink() ?>"><?php the_title();?></a></h1>
            <div class="col-small-12 text-right">
                <?php 
                    if(get_field('informações_do_personagem')): 
                        the_field('informações_do_personagem');
                    endif;
                    ?>
            </div>
            <div class="share-wrap">
                <div class="fb-wrap col-xs-12 col-md-3 share-item">
                    <div class="fb-like" data-width="300px" data-href="<?php the_permalink() ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
                </div>
                <div class="gplus-wrap col-xs-12 col-md-1 share-item">
                    <g:plusone></g:plusone>
                </div>
                <div class="email-wrap share-item">
                    <a href="mailto:?subject=<?php the_title();?>&amp;body=<?php the_permalink() ?>" class="mail-it image-replace">mail-it</a>
                </div>
            </div>
            <p class="col-xs-12"><a href="<?php the_permalink() ?>"><?php the_excerpt() ?></a></p>
        </article>
    	<?php endwhile; endif;?>
        <div class="pagination col-xs-12">
            <div class="next">
                <?php next_posts_link( 'Próxima página' , $artigos->max_num_pages );?>
            </div>
            <div class="prev">
                <?php previous_posts_link( 'P&aacute;gina Anterior');?>
            </div>
            
        </div>
	</div>
<?php get_footer();?>