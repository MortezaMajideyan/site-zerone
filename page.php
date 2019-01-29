<?php get_header(); ?>
<?php get_template_part('tool/panel-search')?>
    <h1 style="margin: 50px 0;text-align: center;font-family: F_yekan;">نظر کاربران زرون </h1>
<?php get_template_part('tool/comments')?>
<?php get_template_part('tool/post-title')?>
    <section style="height: auto;background-repeat: no-repeat;margin-top: 50px;padding-top:20px;width: 100%;background-size: 100% auto;
        background-image: url('<?php echo get_template_directory_uri(). '/images/bg.png' ?>');display: block">
        <h1 style="color: white;text-align: center;font-family: sas, Arial, sans-serif">مقالات منتشر شده</h1>
        <div class="container" style="padding: 15px 10px;margin-top: 30px;background-color: #fcfcfc;border-radius: 10px">
            <div class="row">

                <?php
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                <?php if ( $wpb_all_query->have_posts() ) : ?>
                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                        <div class="col-xs-12  col-sm-6 col-lg-3" >
                            <div class="comment" style="height: 363px;padding: 0">
                                <div style="width: 100%;height: 200px">
                                    <a href="<?php the_permalink(); ?>" >
                                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                        if ($url == '' || $url == null){
                                            $url = get_template_directory_uri().'/images/lesson.png';
                                        }?>

                                        <img src="<?php echo $url ?>" style="width: 100%;text-align: center;
                                 height: 200px;background-size: 100% 100%;">

                                    </a>
                                    <div ><?php echo the_excerpt(); ?></div>
                                </div>
                                <div style="width: 100%;height: 95px;padding: 5px">
                                    <i style="font-family: sas;font-size: 20px;color: #666666;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></i>
                                </div>
                                <div style="height: 20px;"> <span style="float: left;color: #666;padding-left: 10px;font-family: sas"><?php echo get_the_date(); ?></span></div>
                                <hr style="margin: 3px 0 10px 0">
                                <div style="height: 30px;padding-right: 10px;padding-left: 10px ">
                                    <div style="width: 31%;height: auto;text-align: center;float: left">
                                        <i class="glyphicon  glyphicon-comment"></i>
                                        <?php comments_number( 0, 1, $more ); ?>
                                    </div>
                                    <div style="width: 31%;height: auto;text-align: center;float: left">
                                        <i class="glyphicon  glyphicon-comment"></i>
                                        <?php comments_number( 0, 1, $more ); ?>
                                    </div>
                                    <div style="width: 31%;height: auto;text-align: center;float: left">
                                        <i class="glyphicon  glyphicon-comment"></i>
                                        <?php comments_number( 0, 1, $more ); ?>
                                    </div>
                                </div>

                            </div>

                        </div>


                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <br>
<?php get_template_part('tool/footer_btn')?>
<?php get_footer()?>