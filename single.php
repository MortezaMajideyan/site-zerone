<?php get_header(); ?>
<?php set_post_view(get_the_ID())?>
<div class="container" style="width: 100%;padding: 0;background-color: transparent !important;">
    <section style="height: auto;background-repeat: no-repeat;margin-top: 0;padding-top:20px;width: 100%;background-size: 100% 400px;
        background-image: url('<?php echo get_template_directory_uri(). '/images/bg.png' ?>');display: block">
        <?php if (function_exists('breadcrumb_navigation')) breadcrumb_navigation(); ?>
        <h1 style="color: white;text-align: center;font-family: sas, Arial, sans-serif" id="title_search"><?php the_title(); ?></h1>
        <div class="container" >
            <div class="row">

                    <div id="main-content" class="col-sm-12 col-md-9 flr" style="padding: 15px 10px;margin-top: 30px;background-color: #fcfcfc;border-radius: 10px 10px 0 0" >
                        <div>
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()):the_post(); ?>

                                    <?php the_content(); ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    <hr>
                        <i class="fas fa-clock-o" ></i>
                        <span class="meta date"><?php echo get_the_date('Y/m/d'); ?></span

                         <i class=""></i>
                        <span class="meta author"><?php /*//echo get_the_author(); */?></span>

                        <i class="fas fa-eye" style="color: #c7254e"></i>
                        <span class="meta like"><?php echo get_post_view(get_the_ID()); ?></span>

                        </div>

                        <div class="well" style="margin-bottom: 30px;direction: rtl;padding: 20px">
                            <div id="tag-single">
                                <i class="fas fa-tags" style="color: #20c997"></i>
                                <?php the_tags(' ',','); ?>
                                    <i class="fas fa-share" style="float: right ;margin-left: 5px"></i>
                                    <i style="float: right;font-size: 10px"> اشتراک گداری</i>
                            </div>
                        </div>
                        <br>
                        <div class="well">
                            <div class="post-author">
                                <div class="avatar">
                                    <?php echo get_avatar(get_the_author_meta('ID')); ?>
                                </div>
                                <div class="author-profile">
                                    <?php echo get_the_author_posts_link(); ?>
                                </div>
                                <div class="author-description">
                                    <?php echo get_the_author_meta('description'); ?>
                                </div>

                            </div>
                            <br>
                            <div class="row">

                                <div class="col-xs-12 tac">
                                    <?php $url_facbook = get_user_meta($current_user->ID,'facebook',true);
                                    if ($url_facbook != "#"){
                                        ?>
                                        <a href="<?php echo $url_facbook ?>"><i class="fab fa-facebook-square facebook"></i></a>
                                        <?php
                                    }
                                    ?>
                                    <!--  TODO: Below code for share link post in social network -->
                                    <!--  <a
                                   href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>">
                                    <i class="fab fa-facebook-square facebook"></i>
                                </a> -->

                                    <?php $url_twiter = get_user_meta($current_user->ID,'twitter',true);
                                    if ($url_twiter != "#"){
                                        ?>
                                        <a href="<?php echo $url_twiter  ?>"><i class="fab fa-twitter-square twitter"></i></a>
                                        <?php
                                    }
                                    ?>


                                    <?php $url_gplus = get_user_meta($current_user->ID,'gplus',true);
                                    if ($url_gplus != "#"){
                                        ?>
                                        <a href="<?php echo $url_gplus  ?>"><i class="fab fa-google-plus-square gplus"></i></a>
                                        <?php
                                    }
                                    ?>

                                    <?php $url_telegram = get_user_meta($current_user->ID,'telegram',true);
                                    if ($url_telegram != "#"){
                                        ?>
                                        <a href="<?php echo $url_telegram ?>"><i class="fab fa-telegram telegram"></i></a>
                                        <?php
                                    }
                                    ?>


                                    <?php $url_instagram = get_user_meta($current_user->ID,'instagram',true);
                                    if ($url_instagram != "#"){
                                        ?>
                                        <a href="<?php echo $url_instagram ?>"><i class="fab fa-instagram instagram"></i></a>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                            <hr>
                            <div class="post-categories" >
                                <span >دسته بندی ها: </span>
                                <?php the_category(','); ?>
                            </div>
                        </div>
                        <div class="well" >
                    <span class=""><i class="fas fa-comment"></i>
                        <?php
                        comments_popup_link('بدون دیدگاه', '1 دیدگاه', '% دیدگاه', 'comments-link', 'دیدگاه ها غیر فعال');
                        ?>
                        </span>
                        </div>
                        <div class="well" id="comment-single">

                                <?php comments_template( '/tool/template-comment.php' );?>

                        </div>
                    </div>
                <div class="col-sm-12 col-md-3" style="margin-top: 30px">
                    <div class="shadow" style="height: 400px"></div>
                </div>
                    </div>


    </section>
        </div>
</div>
<?php get_template_part('tool/footer_btn')?>
<?php get_footer(); ?>

