<?php get_header();?>
	<?php if(have_posts()):while(have_posts()): the_post();?>
        <div class="container galeria">
        	<div class="col-sm-4 gal-text col-xs-12">
                <h2><?php the_title();?></h2>
                <span><?php echo get_the_date('d/m/Y'); ?></span>

                <?php the_excerpt();?>
            </div>
            <?php //if( have_rows('repeater_field_name') ):?>
			<div class="col-sm-8 gal-images col-xs-12">

			 	<?php while ( have_rows('imagens') ) : the_row();?>

			    <a href="<?php the_sub_field('imagem');?>" class="boxy col-sm-4 col-xs-12 img-box"  data-lightbox="galeria" data-title="<?php the_sub_field('descricao');?>">
                    <img src="<?php the_sub_field('thumbnail');?>" />
                </a>

			    <?php endwhile;?>

			</div>
			<?php
			//endif;

			?>
        </div>
    <?php endwhile; endif;?>
<?php get_footer();?>