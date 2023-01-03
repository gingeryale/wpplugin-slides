<?php
$meta = get_post_meta($post->ID);
//var_dump($meta);
$link_text = $meta['mv_slider_link_text'][0];
$link_url = $meta['mv_slider_link_url'][0];
?>
<table class="form-table mv-slider-metabox">
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