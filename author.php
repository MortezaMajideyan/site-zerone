</div>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <!--------------content-------------->
        <div class="post-wrapper">
            <div class="post-header">

                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

            </div>
            <div class="post">
                <div class="post-content-single">
                    <?php the_content(); ?>
                </div>
            </div><!--#content3-->
        </div>
    <?php endwhile;  ?>
<?php endif;  ?>
<div class="clear"></div>
<!---------------start-footer----------->
<?php get_footer(); ?>