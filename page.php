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
<div class="main border-top container_12">
    <div class="grid_12">
    <?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="content">
            <?php the_content(); ?>            
        </div>
    <?php endwhile; ?>
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
                <li>
                    <span class="date date--one">
                        <span class="day">09</span>
                        <span class="month">Nov</span>
                    </span>
                    <h3><a href="#">Lorem ipsum dolor sit.</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                    <span class="date date--two">
                        <span class="day">17</span>
                        <span class="month">Nov</span>
                    </span>
                    <h3><a href="#">Lorem ipsum dolor sit.</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit.</p>
                </li>
                <li>
                    <span class="date date--three">
                        <span class="day">21</span>
                        <span class="month">Nov</span>
                    </span>
                    <h3><a href="#">Lorem ipsum dolor sit.</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>                                
            </ul>
            <a href="#" title="MORE" class="btn">MORE</a>
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