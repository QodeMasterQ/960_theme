<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title( '|', true, 'right' ); ?> Basic HTML &amp; CSS Test</title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/960.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
<header class="branding container_12">
    <div class="grid_12">
        <h1 class="logo"><img src="<?php echo get_template_directory_uri();?>/images/detroix.png" alt=""><span class="sr-only">Detroix</span></h1>
        <nav class="menu main-menu">
            <h1 class="sr-only">Main Menu</h1>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '' ) ); ?>
        </nav>
    </div>
</header>
<div class="top-bar">
    <div class="top-bar-inner container_12">
        <div class="grid_12">

            <nav class="menu corporate-menu">
                <h1 class="sr-only">Corporate Menu</h1>
                <?php wp_nav_menu( array( 'theme_location' => 'corp-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '' ) ); ?>            
            </nav>
        </div>
    </div>
</div>
<div class="hero container_12">
    <div class="grid_12">
        <img src="images/hero.jpg" alt="">
        <ul class="indicators">
            <li><a href="#" title="" class="active"></a></li>
            <li><a href="#" title=""></a></li>
            <li><a href="#" title=""></a></li>
        </ul>
    </div>
</div>
<div class="main border-top container_12">
    <div class="grid_4 border-right">
        <div class="grid--inner">        
            <h2><?php the_field( 'callout_1_header' ); ?></h2>
            <?php if ( get_field( 'callout_1_img') ) { ?>
                <img src="<?php the_field( 'callout_1_img' ); ?>" />
            <?php } ?>
            <p><?php the_field( 'callout_1_content' ); ?></p>
            <a href="<?php the_field( 'callout_1_link' ); ?>" title="MORE" class="btn">MORE</a>
        </div>
    </div>
    <div class="grid_4 border-right">
        <div class="grid--inner">
            <h2><?php the_field( 'callout_2_header' ); ?></h2>
            <?php if ( get_field( 'callout_2_img') ) { ?>
                <img src="<?php the_field( 'callout_2_img' ); ?>" />
            <?php } ?>
            <p><?php the_field( 'callout_2_content' ); ?></p>
            <a href="<?php the_field( 'callout_2_link' ); ?>" title="MORE" class="btn">MORE</a>
        </div>
    </div>
    <div class="grid_4">
        <div class="grid--inner">
            <h2><?php the_field( 'callout_3_header' ); ?></h2>
            <?php if ( get_field( 'callout_3_img') ) { ?>
                <img src="<?php the_field( 'callout_3_img' ); ?>" />
            <?php } ?>
            <p><?php the_field( 'callout_3_content' ); ?></p>
            <a href="<?php the_field( 'callout_3_link' ); ?>" title="MORE" class="btn">MORE</a>
        </div>
    </div>
</div>
<footer class="colophon">
    <div class="colophon-inner container_12">
        <div class="grid_4">
            <h2>Services</h2>
            <?php wp_nav_menu( array( 'theme_location' => 'serv-menu', 'container' => '', 'menu_class' => 'services', 'menu_id' => '' ) ); ?>
            <a href="/services/" title="MORE" class="btn">MORE</a>
        </div>
        <div class="grid_4">
            <h2>Opportunities</h2>
            <ul class="opportunities">
                <li>
                    <h3><a href="#">Lorem ipsum dolor sit.</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum deserunt dolore nobis alias ducimus porro voluptas, suscipit possimus!</p>
                </li>
                <li>
                    <h3><a href="#">Lorem ipsum dolor sit.</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos exercitationem molestias aperiam ipsa quo officiis blanditiis rem ducimus?</p>
                </li>                
            </ul>
            <a href="#" title="MORE" class="btn">MORE</a>
        </div>
        <div class="grid_4">
            <h2>News</h2>
            <ul class="news">
            <?php

            global $post;
            $args = array( 'posts_per_page' => 5 );

            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <li>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt();?>
                </li>
            <?php endforeach; 
            wp_reset_postdata();?>

            </ul>
            <a href="/news/" title="MORE" class="btn">MORE</a>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="copyright-inner container_12">
        Detroix &copy; 2012 &bull; <a href="/privacy-policy/">Privacy Policy</a>.
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>