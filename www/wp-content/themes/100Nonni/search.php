<?php get_header();?>
			<div class="container">
                <?php 
                global $wp_query;
                $c = 1;

                $args = array(
                	'showposts' => 6,
                	'post_type' => 'post',
                	'paged' => $paged
                	);
                $args['s'] = $_GET['s'];
                $args['showposts'] = 9;

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
	            	<?php if($c % 3 == 0 && $c < 9):?>
	            	</div>
	                <div class="artigos">
	            	<?php endif; $c++; endwhile;?>
            	</div>
            	<div class="pagination col-xs-12">
		            <div class="next">
		                <?php next_posts_link( 'Próxima página' , $artigos->max_num_pages );?>
		            </div>
		            <div class="prev">
		                <?php previous_posts_link( 'P&aacute;gina Anterior');?>
		            </div>
		            
		        </div>
			    <?php else: ?>
			    <div class="no-results">
			    	<div class="sadface center-block"></div>
			    	<h1>Nenhum resultado encontrado.</h1>
                	<p>Sua busca por <em>"<?php the_search_query()?>"</em> não retornou resultados. <br/>Tente novamente com outros termos</p>
			    </div>
            	<?php endif;?>
            </div>
<?php get_footer();?>