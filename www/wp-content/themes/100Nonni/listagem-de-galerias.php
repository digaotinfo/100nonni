<?php
/*
Template Name: Listagem de galerias
*/
$is_on = 0;
if(@$_GET['orderby'] == 'date'){
    $is_on = 1;
}
if(@$_GET['orderby'] == 'title'){
    $is_on = 2;
}
?>
<?php get_header();?>
        <div class="container galeria">
                <div class="orderby-wrap">
                    <ul class="list-inline orderby col-sm-12 col-xs-12">
                        <li>Organizar:</li>
                        <li <?php if($is_on > 1){ echo "class='on'";}?>>
                            <a href="<?php echo add_query_arg( array('orderby' => 'title', 'order' => 'ASC'), get_page_link(51) );?>">Por evento</a>
                        </li>
                        <li <?php if($is_on < 2){ echo "class='on'";}?>>
                            <a href="<?php echo add_query_arg( array('orderby' => 'date', 'order' => 'DESC'), get_page_link(51) );?>">Mais recentes</a>
                        </li>
                    </ul>
                </div>

                <div class="gallery-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'galeria',
                        'posts_per_page' => 9,
                        'paged' => $paged
                        );
                    if (@$_GET['orderby']) {
                        $args['orderby'] = $_GET['orderby'];
                        $args['order'] = $_GET['order'];
                    }

                    $galerias = new WP_Query($args);
                    if($galerias->have_posts()):while($galerias->have_posts()): $galerias->the_post();

                    $hover_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
                            if(empty($hover_url[0])){
                                $first_img = true;
                                while( have_rows('imagens') && $first_img ): the_row();  
                                    $hover_url[0] = get_sub_field('imagem');
                                    $first_img = false;
                                endwhile;
                            }
                    ?>
                    <div class="col-md-4 col-sm-6 col-sx-12 gallery">
                        <div class="img-box">
                            <a href="<?php the_permalink();?>"><img src="<?php echo $hover_url[0];?>" /></a>
                        </div>
                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        <span><?php echo get_the_date('d/m/Y'); ?></span>
                    </div>
                    <?php endwhile; endif;?>
                    
                </div>
                <div class="pagination col-xs-12">
                    <div class="next">
                        <?php next_posts_link( 'Próxima página' , $galerias->max_num_pages );?>
                    </div>
                    <div class="prev">
                        <?php previous_posts_link( 'P&aacute;gina Anterior');?>
                    </div>
                    
                </div>
            </div>
<?php get_footer();?>