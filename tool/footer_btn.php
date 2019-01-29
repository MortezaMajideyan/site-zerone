<div
    <div style="width:100%;height: auto;padding: 0px 10% 0px 10%;background-color: #fcfcfc;float: right;font-family: Arial;padding: 10px 5px" ;id="detail">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div style="height: auto;width: 100%;margin: auto;direction: ltr">
                        <img src="<?php echo get_template_directory_uri().'/images/sep.png'?>" style="width: 23%;height: 100%">
                        <img src="<?php echo get_template_directory_uri().'/images/samand.png'?>" style="width: 23%;height: 100%">
                        <img src="<?php echo get_template_directory_uri().'/images/nashr-d3.png'?>" style="width: 23%;height: 100%">
                        <img src="<?php echo get_template_directory_uri().'/images/enamad.png'?>" style="width: 23%;height: 100%">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <span style="font-family: sans-serif;font-weight: bold;float: right">درباره لایف کد</span>
                    <p style="text-align: justify;direction: rtl;clear: right;margin-top: 5px ;font-size: 1.1em" id="text-detail">
                        <span style="font-weight: bolder">لایف کد</span>
                        یک برند نوپا در زمینه تهیه و تولید اموزش های دیجیتال است که در سال 97 توسط جوانان متخصص و متعد شروع به کار کرد.
                        تیم لایف کد از جوانان متخصص در زمینه های برق,کامپیوتر,برنامه نویسی و گرافیک و... تشکیل شده است.
                        تیم ما یک محیط امن برای شما محیا کرده است تا با خیال راحت و
                        کمترین هزینه بهترین کیفیت اموزشی و پشتیبانی 24 ساعته را در اختیار شما کاربر گرامی قرار دهیم.
                    </p>
                </div>
            </div>
        </div>

<hr>
        <div style="display: block;clear: left;text-align: center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4" style="height: 200px">
                        <div style="width: 100%;height: auto;float: left;padding: 1% 1% ;">
                            <div class="row">
                                <div class="col-xs-12" style="text-align: right">
                                    <h5 style="font-weight: bold">تماس با ما</h5>
                                    <i style="font-weight: normal">جهت ارتباط مستقیم با تیم زرون برای مشاوره و پشتیبانی</i>
                                    <br>
                                    <br>
                                    <i class="fas fa-at" style="color: #dc3545;font-size: 15px"></i>
                                    <i style="font-weight: bold">ایمیل:</i>
                                    <i  style="font-weight: bold"><?php echo get_bloginfo( 'admin_email' ) ?></i>
                                    <br>
                                    <br>
                                    <i class="fas fa-phone" style="color: #0fadc6;font-size: 15px"></i>
                                    <i style="font-weight: bold">تماس با ما:</i>
                                    <i  style="font-weight: bold">09178459003</i>
                                    <br>
                                    <br>
                                    <i class="fas fa-headset" style="color: #1e7e34;font-size: 15px"></i>
                                    <i style="font-weight: bold">پشتیبانی در تلگرام:</i>
                                    <i  style="font-weight: bold">@lifecode</i>
                                </div>

                                <br>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4" style="height: 200px;">
                            <h4 style="margin-top: 5px">ما را دنبال کنید با عضویت در خبرنامه از اخرین اخبار ما اگاه بایشید</h4>

                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">

                            <button type="submit" value="ثبت " class="btn btn-success" style="margin-top: 10px"> ثبت کردن</button>
                        <div style="margin-top: 10px"></div>
<div style="text-align: center;height: 60px;width: 100%">

                        <a style="display: inline-block;margin: 5px 2px;height: 40px;width: 40px;border-radius: 50%;margin-right: 2px"><i class="fas fa-telegram" style="color: #0fadc6;font-size: 15px"></i></a>
                        <a style="display: inline-block;margin: 5px 2px;background-image: url('<?php  echo get_template_directory_uri().'/images/index.png' ?>');background-repeat: no-repeat;background-size: cover;height: 40px;width: 40px;border-radius: 50%;margin-right: 2px"></a>
                        <a style="display: inline-block;margin: 5px 2px;background-image: url('<?php  echo get_template_directory_uri().'/images/index.png' ?>');background-repeat: no-repeat;background-size: cover;height: 40px;width: 40px;border-radius: 50%;margin-right: 2px"></a>
                        <a style="display: inline-block;margin: 5px 2px;background-image: url('<?php  echo get_template_directory_uri().'/images/index.png' ?>');background-repeat: no-repeat;background-size: cover;height: 40px;width: 40px;border-radius: 50%;margin-right: 2px"></a>

</div></div>
                    <div class="col-xs-6 col-md-2" style="height: 200px;">
                        <div  class="tool_footer">
                            <h5 style="text-align: right">بخش های سایت</h5>
                            <?php
                            if ( has_nav_menu( 'foot_step' ) ) {
                                wp_nav_menu( array( 'theme_location' => 'foot_step' ) );
                            } ?>

                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div  class="tool_footer">
                            <h5 style="text-align: right">دوره های برگزار شده</h5>
                            <?php
                            if ( has_nav_menu( 'foot_course' ) ) {
                                wp_nav_menu( array( 'theme_location' => 'foot_course' ) );
                            } ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div style="width: 100%;height: auto ;text-align: center;display: blockborder-top: 2px solid #888;padding: 0 10% 0 10%"><i>
            حقوق مادی و معنوی تمامی آثار و محتویات عرضه شده در این وب سایت، متعلق به شرکت «<span style="font-weight: bolder">
        علم سازان جنوب</span>» و پدیدآورندگان آثار بوده و حسب مورد دارای مجوز از مراجع ذی صلاح می باشد.

            کپی برداری از مطالب این سایت حتی با ذکر منبع جایز نیست.
            </i>
            <br>
            <br>
            <i style="margin-left: auto;margin-right: auto">با<i class="fas fa-heart" style="color: red;"></i>  ساخته شده برای زرون</i>
        </div>

    </div>

