<?php get_header();?>
	<div class="container list-artigos">

		<?php
		if(have_posts()):while(have_posts()): the_post();
		?>
		<article <?php post_class();?>>
            <div class="data-wrap">
                <span><?php echo get_the_date('d.m.Y'); ?></span>
            </div>
            <h1><?php the_title();?></h1>
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
            <div class="article-content"><?php the_content() ?></div>


            
            <?php 

            $posts = get_field('galeria_da_materia');

            if( $posts ): ?>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <div class="gallery-wrap">
                        <div id="carousel">
                            <ul class="slides">
                                <?php if(have_rows('imagens')): while ( have_rows('imagens') ) : the_row();?>
                                <li><img src="<?php the_sub_field('thumbnail');?>" /></li>
                                <?php endwhile; endif;?>
                            </ul>
                        </div>
                        <div id="slider">
                            <ul class="slides">
                                <?php if(have_rows('imagens')): while ( have_rows('imagens') ) : the_row();?>
                                <li><img src="<?php the_sub_field('imagem');?>" /></li>
                                <?php endwhile; endif;?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif;?>
        </article>
        <div class="fb-comments hidden-xs hidden-sm">
            <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="1140" data-numposts="10" data-colorscheme="light"></div>
        </div>
        <div class="fb-comments hidden-xs hidden-lg hidden-md">
            <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="940" data-numposts="10" data-colorscheme="light"></div>
        </div>
        <div class="fb-comments hidden-sm hidden-lg hidden-md">
            <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="260" data-numposts="10" data-colorscheme="light"></div>
        </div>
        
    	<?php endwhile; endif;?>
	</div>
<?php get_footer();?>