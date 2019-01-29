<div class="container" >

    <div class="row" style="width: 100%">

        <div class="col-xs-12" style="padding: 0;-webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .12);margin: 15px 0;border-radius: 10px 10px 0px 0px">
            <div style="height: 200px;border-radius: 10px 10px 0px 0px;background-color: #00aaaa">
                
                <img src="<?php echo get_template_directory_uri().'/images/banner-lara.png' ?>" style="width: 100%;text-align: center;
                    height: 200px;background-size: 100% 100%;border-radius: 10px 10px 0px 0px;">

            </div>
            <div style="width: 100%;height: auto;min-height: 250px;background-color: #fcfcfc;padding:20px 10px 10px">
                <h3 style="width: 100%;color: #666;font-family: sas, Arial, sans-serif;text-align: center
                ;margin: 0;line-height: 50px;margin-bottom: 30px"><i><?php echo get_bloginfo( 'description' ) ?></i></h3>

                <form method="get" action="<?php echo bloginfo('url'); ?>" class="search">
                            <div class="input-group" style="width: 80%;margin: auto">
                                <input name="s" type="text" class="search-input flr" style="padding: 0 10px;background-color: #fcfcfc;border: 2px solid #e7eaef;border-left: none;border-radius: 0 10px 10px 0;width: 100%;height: 60px;font-size: 20px;font-family: Tahoma" placeholder="چه می خواهید؟">
                                <div class="input-group-btn" >
                                    <button class="btn" style="border-radius: 10px 0 0 10px;font-weight: bolder;width: 100px;background-color: #2ddd75;height: 60px;" type="submit">
                                        <i id="icon-serch" class="" style="color: #fafafd;font-size: 15px;font-family: sans-serif"> جستجو</i></button>
                                </div>
                            </div>
                    </form>

                <div style="height: 60px;width: 100%;margin-top: 30px;font-family: sans-serif;color: #555;font-weight: bolder">
                    <div class="stat-item" id="sub-s1">
                        <span><i class="glyphicon glyphicon-adjust ic-text" ></i></span>
                        <span><i class="hr"></i></span>

                        <?php
                        $result = count_users();
                        ?>
                        <span><h4 style="line-height: 60px;margin-top: 5px;display: inline"><?php echo $result['total_users'] ?> دانشجو </h4></span>

                    </div>
                    <div class="stat-item" id="sub-s2">
                        <span><i class="glyphicon glyphicon-alert ic-text"></i></span>
                        <span><i class="hr"></i></span>
                        <span><h4 style="line-height: 60px;margin-top: 5px;display: inline"><?php

                                    $count_posts = wp_count_posts();

                                    $published_posts = $count_posts->publish;

                                    echo $published_posts;
                                ?>مقاله</h4></span>

                    </div>
                    <div class="stat-item" id="sub-s3">
                        <span><i class="glyphicon glyphicon-level-up ic-text"></i></span>
                        <span><i class="hr"></i></span>
                        <h3 style="display: inline;line-height: 60px">fdgdfgdf</h3>
                    </div>
                    <div class="stat-item" id="sub-s4">
                        <span><i class="glyphicon glyphicon-time ic-text"></i></span>
                        <span><i class="hr"></i></span>
                        <span>hghjghj آموزش</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
