<div class="container" style="margin-top: 80px;padding: 0">
    <div class="row" >



        <div class="col-xs-12 col-md-6" style="margin-bottom:20px ">

            <div class="shadow" style="padding-top: 0;height: 610px">
                <div style="width: 100%;height: 50px;text-align: right">
                    <i class="fas fa-microphone-alt" style="display: inline;float: right;margin: 0 10px;font-size: 20px;line-height: 50px;color: #009dcd"></i>
                    <i style="font-size: 20px;color: #009dcd;font-family: sas;text-align: center;line-height: 50px"> آخرین ویدیو های آموزشی</i>
                </div>
                <hr style="margin: 8px 0">
            <div style="width: 96%;height: 100px;border-radius: 10px;background-color: #b8daff;margin:6px 10px"></div>
            <div style="width: 96%;height: 100px;border-radius: 10px;background-color: #b8daff;margin:6px 10px"></div>
            <div style="width: 96%;height: 100px;border-radius: 10px;background-color: #b8daff;margin:6px 10px"></div>
            <div style="width: 96%;height: 100px;border-radius: 10px;background-color: #b8daff;margin:6px 10px"></div>
            <div style="width: 96%;height: 100px;border-radius: 10px;background-color: #b8daff;margin:6px 10px"></div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6" style="">

            <div class="shadow" style="padding-top: 0;height: 610px">
                <div style="width: 100%;height: 50px;text-align: right">
                    <i class="fas fa-graduation-cap" style="display: inline;float: right;margin: 0 10px;font-size: 20px;line-height: 50px;color: limegreen"></i>
                    <i style="font-size: 20px;color: limegreen;font-family: sas;text-align: center;line-height: 50px"> آخرین ویدیو های آموزشی</i>
                </div>
                <hr style="margin: 8px 0">
                <ul style="margin: 10px 40px 0 0">
                    <?php
                    global $post;
                    $args = array( 'posts_per_page' =>6);
                    $lastposts = get_posts( $args );
                    foreach ( $lastposts as $post ) :
                        setup_postdata( $post );
                        ?>

                        <li style="display: block;float: none;width: 100%;height: 80px;border: none;line-height: normal
                        ;border-right: 6px solid #e4e4e4;" >
                        <span class="span-image-lastpost" id="img-lastpost">
                            <a href="#" >
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                        if ($url == '' || $url == null){
                            $url = get_template_directory_uri().'/images/lesson.png';
                        }?>
                                <img src="<?php echo $url ?>" class="icon-posttitle" id="post_title_image">
                    </a>
                        </span>
                            <div style="float: right;width: 90%;height: 40px;overflow: hidden;">
                                <!-- panel last post -->
                                <i class="i-in-lastpost" id="i-in-lastpost"><?php the_title(); ?></i>
                            </div>
                            <div style="float: left;width: 90%;height: 20px;overflow: hidden;">
                                <i style="float: left;height: 20px;margin-left: 5px;font-family: sas;"><?php echo get_the_date(); ?></i>
                                <i class="glyphicon glyphicon-calendar" style="display: inline;float: left;margin-left: 10px"></i>
                                <i style="float: left;height: 20px;margin-left: 35px;font-family: sas">122</i>
                                <i class="glyphicon glyphicon-eye-open" style="display: inline;float: left;margin-left: 10px"></i>
                            </div>

                        </li>


                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </div>

</div>