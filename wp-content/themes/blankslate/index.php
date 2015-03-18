<?php get_header(); ?>

<?php

$defaults = array(
    'theme_location'  => '',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => '',
    'container_id'    => 'scrollsections-navigation',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul>%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
);

wp_nav_menu( $defaults );

?>

    <div id="homepage" class="wrap scrollsections hp" >

        
        <img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.gif" alt="Josephine Leung Design" width="200" height="208">
                
            <div class="content">
                    
                <blockquote>"The <span>details</span> are not the details.<br>They MAKE the design."</blockquote>
                <div class="quote_author">Charles Eames</div>
                <a class="scroll_to_explore" href="#aboutus">Scroll to explore</a>

            </div>

    </div>

    <div id="aboutus" class="wrap scrollsections hp">
            
        <div class="content">
        <!-- only show "About" post -->
            <?php $test = new WP_Query('category_name=About&showposts=1');
                while ($test->have_posts()) : $test->the_post(); ?>
                    <h1><?php the_title(); ?></h1>    
                    <?php the_content();?>
                    <a class="download_link" href="/?page_id=2">View CV</a>
                    <a class="view_cv" href="/?page_id=2">View CV</a>
            <?php endwhile;?>

        </div>

    </div>
       
        <!-- only show "work-entry" post -->
        <?php query_posts( array ( 'category_name' => 'work-entry' ) );?>
        <!-- add slide anchors after each row of thumbs http://www.wpbeginner.com/wp-themes/how-to-create-a-grid-display-of-post-thumbnails-in-wordpress-themes/ -->
        <?php
        $counter = 1; 
        $grids = 4; 
        ?>

<ul id="project_thumbs" class="scrollsections">
<h1>Work</h1>
<!-----------------------Thumbs gallery -->
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                 
            <?php if($counter == 5) : // $counter = 0;?>
                <li class="scrollsections">
            <?php else: ?>
                <li>
            <?php endif; ?>
            <?php $counter++; ?>


            <a href="<?php the_permalink();?>">
                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog' );
                            $url = $thumb['0'];
                        ?>



                        <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" />
                        <span id="thumb_category_name">
                            <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                              foreach($posttags as $tag) {
                                echo $tag->name . ' '; 
                              }
                            }
                            ?>
                        </span>
                        <span id="thumb_project_name">
                            <?php if (strlen($post->post_title) > 35) {
                                echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...'; } else {
                                the_title();
                            } ?>
                            
                        </span>
                    </a>
                </li>




            <?php endwhile; endif; ?>   
            <div class="cf"></div>  
</ul>

        <div id="contact" class="wrap low_section scrollsections hp">
                
                <div class="content">
                    <h1>Contact</h1>

                    <ul class="contact-info">
                        <li>
                            <span class"underline" >PHONE</span>:
                            <span><a class="contact-links" href="tel:+447557132401" style="font-style:italic">(+44)7557132401</a></span>
                        </li>
                        <li>
                            <span class"underline">MAIL</span>:
                            <span><a class="contact-links" href="mailto:josephineleung106@gmail.com" style="font-style:italic">josephineleung106@gmail.com</a></span>
                        </li>
                    </ul>

                    <ul class="social_links">
                        <li><a href="https://www.facebook.com/josephineleung106?ref=tn_tnmn" class="f"></a></li>
                        <li><a href="https://twitter.com/josephineleung1" class="t"></a></li>
                        <li><a href="http://www.linkedin.com/pub/josephine-leung/30/610/b3a" class="l"></a></li>
                        <li><a href="https://plus.google.com/u/0/117171332891237752117/posts" class="p"></a></li>
                    </ul>

                </div>
        </div>

<?php get_template_part( 'nav', 'below' ); ?>
</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.scrollSections.js"></script>

<script>




// use scrollTo plugin on desktop and custom script on other devices
<?php 
    if (! ($detect->isMobile() || $detect->isTablet())) { ?>
        $(function() {  $('.scrollsections').scrollSections();});           
<?php }
    else{ ?>
        $("[id*='menu-item']").children().click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr("href")).offset().top
            }, 1500);
        });
<?php } ?>





</script>
<?php get_footer(); ?>