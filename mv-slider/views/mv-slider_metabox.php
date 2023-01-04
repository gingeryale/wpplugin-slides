<?php
$meta = get_post_meta($post->ID);
//$meta['mv_slider_link_text'][0];
// echo out the var OR - would be false if key had more than 1 value
//var_dump($meta);
$link_text = get_post_meta($post->ID, 'mv_slider_link_text', true);
$link_url = get_post_meta($post->ID, 'mv_slider_link_url', true);
?>
<table class="form-table mv-slider-metabox">
    <input type="hidden" name="mv_slider_nonce" value="<?php echo wp_create_nonce("mv_slider_nonce"); ?>" />
    <tbody>
        <tr>
            <th>
                <label for="mv_slider_link_text">link Text</label>
            </th>
            <td>
                <input type="text" id="mv_slider_link_text" name="mv_slider_link_text" value="<?php echo (isset($link_text)) ? esc_html($link_text) : ''; ?>" class="regular-text link-text" required>
            </td>
        </tr>
        <tr>
            <th>
                <label for="mv_slider_link_url">link URL</label>
            </th>
            <td>
                <input type="url" id="mv_slider_link_url" name="mv_slider_link_url" value="<?php echo (isset($link_url)) ? esc_url($link_url) : ''; ?>" class="regular-text link-url" required>
            </td>
        </tr>
    </tbody>
</table>