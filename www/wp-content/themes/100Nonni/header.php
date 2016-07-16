<?php
// define('DEBUG', true);

// if(DEBUG == true)
// {
//     ini_set('display_errors', 'On');
//     error_reporting(E_ALL);
// }
// else
// {
//     ini_set('display_errors', 'Off');
//     error_reporting(0);
// }


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name');?>
        </title>
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

        <script src="<?php bloginfo('template_url');?>/js/vendor/modernizr-2.8.3.min.js"></script>
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/ie8.css">
          <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head();?>

        <style media="screen">
            .idiomas {
                text-align: right;
                padding-top: 20px;
            }


            @media (max-width: 991px) and (min-width: 768px) {
                .ajuste-tablet-nav {
                    margin-bottom: 0 !important;
                }

                .ajuste-tablet-main {
                    padding-top: 22px !important;
                }
                .alinhamento-menu-tablet {
                    float: right !important;
                    padding-right: 15px !important;
                }
            }
        </style>
    </head>
    <body <?php body_class();?>>
        <div id="fb-root"></div>
        <!-- // <script>(function(d, s, id) {
        //   var js, fjs = d.getElementsByTagName(s)[0];
        //   if (d.getElementById(id)) return;
        //   js = d.createElement(s); js.id = id;
        //   js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=270753302945932&version=v2.0";
        //   fjs.parentNode.insertBefore(js, fjs);
        // }(document, 'script', 'facebook-jssdk'));</script> -->

        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '833091993447960',
                    xfbml      : true,
                    version    : 'v2.3'
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <header>

            <div class="container center-block">
                <?php
                $logo_lang = '';
                if(qtrans_getLanguage() == 'it'):
                    $logo_lang = 'italiano';
                endif;
                ?>
                <a href="<?php bloginfo('url');?>" id="" class="image-replace brand <?=$logo_lang?> col-md-6  hidden-xs hidden-sm">100Nonni</a>

                <div class="col-md-6 pull-right row  hidden-xs hidden-sm block-wrap">
                    <div class="col-md-4 col-md-offset-9 col-xs-12 pull-right lang-wrap idiomas">
                        <?php echo qtrans_generateLanguageSelectCode('image'); ?>
                    </div>

                    <div class="col-md-7 col-md-offset-5 hidden-xs hidden-sm form-wrap">
                        <form action="<?php bloginfo('url');?>" method="get" class="pull-right">
                            <label for="search">
                                <?php if(qtrans_getLanguage() == 'pt'){
                                    echo "Busca";
                                }elseif(qtrans_getLanguage() == 'it'){
                                    echo "CERCA";
                                }?>
                                 :
                            </label>
                            <input type="text" name="s" id="search" value="" />
                        </form>
                    </div>

                    <?php if(qtrans_getLanguage() == 'pt'): ?>
                        <nav class="col-md-12 navigation ">
                            <a href="<?php bloginfo('url');?>" class="<?php is_page_on('home');?>">Home</a>
                            <a href="<?php echo get_page_link(2); ?>" class="<?php is_page_on(2);?>">Sobre o Projeto</a>
                            <a href="<?php echo get_page_link(41); ?>" class="<?php is_page_on(41);?>">Perfis</a>
                            <a href="<?php echo get_page_link(51); ?>" class="<?php is_page_on(51);?>">Galeria</a>
                            <a href="<?php echo get_page_link(37); ?>" class="<?php is_page_on(37);?>">Fale Conosco</a>
                        </nav>
                    <?php elseif(qtrans_getLanguage() == 'it'):?>
                        <nav class="col-md-12 navigation ">
                            <a href="<?php bloginfo('url');?>" class="<?php is_page_on('home');?>">Home</a>
                            <a href="<?php echo get_page_link(2); ?>" class="<?php is_page_on(2);?>">Sul Progetto</a>
                            <a href="<?php echo get_page_link(41); ?>" class="<?php is_page_on(41);?>">Profili</a>
                            <a href="<?php echo get_page_link(51); ?>" class="<?php is_page_on(51);?>">Foto</a>
                            <a href="<?php echo get_page_link(37); ?>" class="<?php is_page_on(37);?>">Contattaci</a>
                        </nav>
                    <?php endif;?>

                </div>

            </div>

            <nav class="navbar navbar-default navbar-static-top hidden-lg hidden-md ajuste-tablet-nav" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php bloginfo('url');?>">&nbsp;</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php if(qtrans_getLanguage() == 'pt'): ?>
                        <ul class="nav navbar-nav alinhamento-menu-tablet">
                            <li  class="<?php is_page_on('home');?>"><a href="<?php bloginfo('url');?>">Home</a></li>
                            <li class="<?php is_page_on(2);?>"><a href="<?php echo get_page_link(2); ?>">Sobre o Projeto</a></li>
                            <li class="<?php is_page_on(41);?>"><a href="<?php echo get_page_link(41); ?>">Perfis</a></li>
                            <li class="<?php is_page_on(51);?>"><a href="<?php echo get_page_link(51); ?>">Galeria</a></li>
                            <li class="<?php is_page_on(37);?>"><a href="<?php echo get_page_link(37); ?>">Fale Conosco</a></li>
                        </ul>
                        <?php elseif(qtrans_getLanguage() == 'it'):?>
                        <ul class="nav navbar-nav alinhamento-menu-tablet">
                            <li  class="<?php is_page_on('home');?>"><a href="<?php bloginfo('url');?>">Home</a></li>
                            <li class="<?php is_page_on(2);?>"><a href="<?php echo get_page_link(2); ?>">Sul Progetto</a></li>
                            <li class="<?php is_page_on(41);?>"><a href="<?php echo get_page_link(41); ?>">Profili</a></li>
                            <li class="<?php is_page_on(51);?>"><a href="<?php echo get_page_link(51); ?>">Foto</a></li>
                            <li class="<?php is_page_on(37);?>"><a href="<?php echo get_page_link(37); ?>">Contattaci</a></li>
                        </ul>
                        <?php endif;?>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->

                <div class="container idiomas">
                    <div class="col-md-3 col-md-offset-9 col-xs-12 pull-right lang-wrap">
                        <?php echo qtrans_generateLanguageSelectCode('image'); ?>
                    </div>
                </div>

            </nav>


        </header>
        <div id="main" class="ajuste-tablet-main">
