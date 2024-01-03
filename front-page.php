<?php get_header(); ?>



<div id="hero">



    <div id="container" class="d-flex align-items-center h-100">


        <h1>Where Juicy Girls Shop</h1>


    </div>


<div class="content">


        <div class="container">


            <?php if(have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>
            
            <?php endwhile; else: endif;?>
        </div>

</div>

<?php get_footer(); ?>
                                                  