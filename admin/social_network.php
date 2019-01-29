
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
        <th><label for="telegram"><?php _e("آدرس تلگرام"); ?></label></th>
        <td>
            <input type="text" name="telegram" id="telegram" value="<?php echo esc_attr( get_the_author_meta( 'telegram', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("لینک خود را وارد کنید."); ?></span>
        </td>
    </tr>
</table>

