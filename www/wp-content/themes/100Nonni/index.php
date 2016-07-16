<?php get_header();?>
<?php
	// echo qtrans_getLanguage();
	// // print_r(qtrans_generateLanguageSelectCode('text'));
	// die();
?>

		<?php if(is_home()):?>
			<div class="gray">
                <div class="container">
                    <?php
	            	$args = array(
	            		'post_type' => 'banner',
	            		'posts_per_page' => 5,
	            		'post_status' => 'publish'
	            		);
	            	$banner = new WP_Query($args);

	            	// print_r($banner);

	            	if($banner->have_posts()):
	            	?>
	                <div class="col-sm-12 flexslider banner">
	                    <ul class="slides">
	                    	<?php while($banner->have_posts()): $banner->the_post();?>
	                    		<?php $hover_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');?>
	                    		<?php
	                    		//echo get_field('tipo_link');
	                    		$target = "_self";
	                    		if(get_field('tipo_link') != 'false'){
	                    			$tipo = get_field('tipo_link');
	                    			$url = get_field("link_{$tipo}");

	                    			if($tipo == 'externo'){
	                    				$target = "_blank";
	                    			}
	                    		}else{
	                    			$url = 'javascript:void(0)';
	                    		}
	                    		//echo $url;
	                    		?>
		                        <li><a href="<?php echo $url;?>" target="<?php echo $target;?>">
		                        	<?php
		                        		/*
		                        		*	caso o idioma for em italiano,
		                        		*  	sera usado o campo adicionado no admin ['imagem_em_italiano']
		                        		*	se este campo estiver vazio, sera utilizado a imagem destacada
		                        		*
		                        		*/
		                        		$img = '';
		                        		if(qtrans_getLanguage() == 'it'):
			                        		if(get_field('imagem_em_italiano')){
				                        		$getImg = get_field('imagem_em_italiano');
				                        		$img = $getImg['url'];
				                        	}else{
				                        		$img = $hover_url[0];
				                        	}
				                        else:
				                        	$img = $hover_url[0];
				                        endif;

		                        	?>
		                        	<img src="<?php echo $img?>" alt="<?php the_title();?>">
		                        	<div class="title-bg"><h3><?php
		                        	the_title();

		                        	?></h3></div>
		                        </a></li>
		                    <?php endwhile;?>
	                    </ul>
	                </div>
	                <?php endif;wp_reset_postdata();?>
                </div>
            </div>
        <?php endif;?>
			<div class="container">


                <?php
                $c = 1;
                $args = array(
                	'showposts' => 6,
                	'post_type' => 'post'
                	);

                if(is_home()){
                	$args['meta_key'] = 'destaque';
                	$args['meta_value'] = 1;
                }else{
                	$args['s'] = $_GET['s'];
                	$args['showposts'] = -1;
                }
                $artigos = new WP_Query($args);

                if($artigos->have_posts()):
                ?>
            	<div class="artigos">
            		<?php while($artigos->have_posts()): $artigos->the_post();?>
            			<article class="col-xs-12 col-md-4 col-sm-4">
	                        <div class="img-box">
	                        	<?php $hover_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home-articles');?>
	                            <a href="<?php the_permalink();?>"><img src="<?php echo $hover_url[0];?>" alt="<?php the_title();?>" /></a>
	                        </div>
	                        <div class="txt-box">
	                            <a href="<?php the_permalink();?>"><h2><?php the_title();?></h2>
	                            <p><?php the_excerpt();?></p></a>
	                        </div>
	                    </article>
	            	<?php if($c % 3 == 0 && $c < 6):?>
	            	</div>
	                <div class="artigos">
	            	<?php endif; $c++; endwhile;?>
            	</div>
            	<?php endif;wp_reset_postdata();?>

            <?php if(is_home()):?>
            <div class="artigos">
            	<div class="col-md-4 col-md-offset-4 col-sx-12">
                    <a href="<?php echo get_page_link(41); ?>" class="btn btn-default">
						<?php if(qtrans_getLanguage() == 'pt'): ?>
							Ver mais histórias!
						<?php elseif(qtrans_getLanguage() == 'it'):?>
							Vedere altre storie!
						<?php endif;?>
					</a>
                </div>
            </div>

        	<?php endif;?>
            </div>
<?php get_footer();?>
