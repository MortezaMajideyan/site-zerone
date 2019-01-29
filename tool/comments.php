<div class="container" style="padding: 0">
    <div class="row">
        <?php
        $src_count=3;
        $src_length=400;
           global $wpdb;
            $sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type,user_id,
SUBSTRING(comment_content,1,$src_length) AS com_excerpt
FROM $wpdb->comments
LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID)
WHERE comment_approved = '1' AND comment_type = '' AND post_password = ''
ORDER BY comment_date_gmt DESC
LIMIT $src_count";?>

              <?php
            $comments = $wpdb->get_results($sql);
            foreach ($comments as $comment) :?>
        <div class="col-xs-12 col-lg-4">
            <div class="comment">
                <div style="width: 100%;height: 60px">
                    <div style="height: 60px;padding-top: 20px;width: 50%;float: right">
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div style="width: 60px;height: 50px;border-radius: 0 0 5px 5px;background-color: #4088ff;display: inline;float: left">
                        <i class="glyphicon glyphicon-star" style="color: #fcfcfc;height: 50px;width: 100%;line-height: 100%;text-align: center;font-size: 30px;padding-top: 10px"></i>
                    </div>

                </div>

                <div id="text-comment" style="width: 100%;line-height: 32px;font-weight: 500; padding: 2px;font-family:sas, Arial, sans-serif;font-size: 15px;overflow: hidden;; text-align: justify;text-overflow:clip ">
                   <i> <?php echo strip_tags($comment->com_excerpt)?></i>
            </div>
              <hr style="margin: 10px 0">
              <div style="height: 60px;">
                  <?php echo get_avatar($comment->user_id, $comment->comment_author ); ?>

                  <h4 style="height: 30px;margin: 0;"><i style="line-height: 30px;"><?php echo $comment->comment_author?></i></h4>
                  <h4 style="margin: 0;height: 30px"><i style="line-height: 30px;"><a href="<?php echo get_permalink($comment->ID) . "#comment-" . $comment->comment_ID?>" ><?php echo   $comment->post_title ?></a></i></h4>
              </div>
          </div>
                </div>
            <?php
           endforeach;

        ?>
     <!--   <div class="col-xs-12 col-lg-4">
            <div class="comment">
                <div style="width: 100%;height: 60px">
                    <div style="height: 60px;padding-top: 20px;width: 50%;float: right">
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div style="width: 60px;height: 50px;border-radius: 0 0 5px 5px;background-color: #4088ff;display: inline;float: left">
                        <i class="glyphicon glyphicon-star" style="color: #fcfcfc;height: 50px;width: 100%;line-height: 100%;text-align: center;font-size: 30px;padding-top: 10px"></i>
                    </div>

                </div>

                <br>
                <div id="text-comment" style="width: 100%; padding: 5px;font-family:Tahoma;font-size: 15px;overflow: hidden;; text-align: right;text-overflow:ellipsis ">
                    <?php echo strip_tags($comment->com_excerpt)?>

                </div>
                <hr style="margin: 10px 0">
                <div style="height: 60px;">
                    <img src="<?php echo get_template_directory_uri().'/images/index.png'?>" class=" flr"
                         style="border-radius: 100%;height: 55px;margin: 2px 5px;margin-left: 15px">

                    <h4 style="padding-top: 10px;height: 35px;margin: 0"><i style="line-height: 25px;"><?php echo $comment->comment_author?></i></h4>
                    <h4 style="margin: 0"><i style="line-height: 25px"><a style="font-family: Tahoma"><a style="font-family: Tahoma"><?php echo "<a href=\"" . get_permalink($comment->ID) . "#comment-" . $comment->comment_ID . "\" title=\"on " . $comment->post_title . "\">" . $comment->comment_author . "</a>"?></a></i></h4>
                </div>
            </div>
        </div> -->
    </div>


</div>