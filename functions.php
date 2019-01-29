<?php
add_action('after_setup_theme', 'register_menu');
add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );
    function register_menu()
    {
        $menu_footer = array('foot_course' => 'دوره های برگزار شده','foot_step' => 'بخش های سایت');
    register_nav_menus($menu_footer);

    }
function get_post_likes($post_id){

    if(intval($post_id)){

        $post_likes = get_post_meta($post_id,'likes',true);
        return intval($post_likes);

    }

    return 0;

}
function set_post_likes($post_id){

    if( intval( $post_id ) ){

        $likes = get_post_likes($post_id);
        $likes++;
        update_post_meta($post_id,'likes',$likes);

        return $likes;
    }
    return 0;

}
function set_post_view($post_id){
    if (intval($post_id)){
        $view = get_post_view($post_id);
        $view = $view+1;
        update_post_meta($post_id,'views',$view);
    }
}
function get_post_view($post_id){
    if (intval($post_id)){
        $post_view = get_post_meta( $post_id, 'views', true );
        return intval($post_view);
    }
    return 0;
}
function extra_user_profile_fields( $user ) {
    ?>
<h3>شبکه های اجتماعی</h3>
<table class="form-table">
    <tr>
        <th><label for="address"><?php _e("آدرس فیسبوک"); ?></label></th>
        <td>
            <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("لینک خود را وارد کنید."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="address"><?php _e("آدرس تویتر"); ?></label></th>
        <td>
            <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("لینک خود را وارد کنید."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="address"><?php _e("آدرس اینستاگرام"); ?></label></th>
        <td>
            <input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("لینک خود را وارد کنید."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="address"><?php _e("آدرس گوگل پلاس"); ?></label></th>
        <td>
            <input type="text" name="gplus" id="gplus" value="<?php echo esc_attr( get_the_author_meta( 'gplus', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("لینک خود را وارد کنید."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="telegram"><?php _e("آدرس تلگرام"); ?></label></th>
        <td>
            <input type="text" name="telegram" id="telegram" value="<?php echo esc_attr( get_the_author_meta( 'telegram', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("لینک خود را وارد کنید."); ?></span>
        </td>
    </tr>
</table>
<?php
}
function save_extra_user_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }

    update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
    update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
    update_user_meta( $user_id, 'gplus', $_POST['gplus'] );
    update_user_meta( $user_id, 'telegram', $_POST['telegram'] );
    update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
}

/**
 *
 */
function breadcrumb_navigation() {
    $delimiter = '';
    $home = 'صفحه نخست ';
    $before = '<li><span>';
    $after = '</span></li>';
    $slash = '<h3 style="display: inline">/</h3>';
    echo '<div class="crumbs"><ul>';
    global $post;
    $homeLink = get_bloginfo('url');
    if (!is_home() && !is_front_page()) {
        echo '<li><a href="' . $homeLink . '">' . $home .$slash. '</a></li>';
        if ( is_category() ) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent !=$parentCat ) echo('<li>'.get_category_parents($parentCat, TRUE, '</li><li>').$slash.'</li>');
            echo $before .  single_cat_title('', false).$slash . $after;
        } elseif ( is_search() ) {
            echo $before . 'نتیاج جستجو برای "' . esc_attr(get_search_query()) . '"' . $after;
        } elseif ( is_day() ) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
            echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
            echo $before . 'بایگانی روزانه "' . get_the_time('d') . '"'.$slash . $after;
        } elseif ( is_month() ) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
            echo $before . 'بایگانی ماهانه "' . get_the_time('F') . '"'.$slash . $after;
        } elseif ( is_year() ) {
            echo $before . 'بایگانی سالانه "' . get_the_time('Y') . '"'.$slash . $after;
        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name .'</a></li>' . $slash . ' ';
                echo $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat;
                echo '<li>' . get_category_parents($cat, TRUE, '</li><li>') .$slash. '</li>';
                echo $before . get_the_title(). $after;
            }
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name.$slash  . $after;
        } elseif ( is_attachment() ) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif ( is_page() && !$post->post_parent ) {
            echo $before . get_the_title() . $after;
        } elseif ( is_page() && $post->post_parent ) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif ( is_tag() ) {
            echo $before . 'بایگانی بر اساس تگ "' . single_tag_title('', false) . '"' . $after;
        } elseif ( is_author() ) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'نوشته های ارسالی توسط "' . $userdata->display_name . '"' . $after;
        } elseif ( is_404() ) {
            echo $before . 'خطای 404: صفحه مورد نظر پیدا نشد.' . $after;
        }
        if ( get_query_var('paged') ) {
            echo $before . get_query_var('paged') . $after;
        }
    }
    echo '</ul></div><br style="clear:both;" />';
}
?>

