<?php

if (!class_exists('MV_Slider_Settings')) {
    class MV_Slider_Settings
    {
        public static $options;
        public function __construct()
        {
            self::$options = get_option('mv_slider_options');
            add_action('admin_init', array($this, 'admin_init'));
        }
        public function admin_init()
        {
            register_setting('mv_slider_group', 'mv_slider_options');
            add_settings_section(
                'mv_slider_main_section',
                'How it works?',
                null,
                'mv_slider_page1'
            );
             add_settings_section(
                'mv_slider_second_section',
                'Other Plugin Options',
                null,
                'mv_slider_page2'
            );

            add_settings_field(
                'mv_slider_shortcode',
                'Shortcode',
                array($this, 'mv_slider_shortcode_callback'),
                'mv_slider_page1',
                'mv_slider_main_section',
            );
             add_settings_field(
                'mv_slider_title',
                'Slider Title',
                array($this, 'mv_slider_title_callback'),
                'mv_slider_page2',
                'mv_slider_second_section',
            );
               add_settings_field(
                'mv_slider_bullets',
                'Slider Bullets',
                array($this, 'mv_slider_bullets_callback'),
                'mv_slider_page2',
                'mv_slider_second_section',
            );
        }
        public function mv_slider_shortcode_callback()
        {
?>
            <span>USe Shortcod [mv_sider] to display the slider in any page/post/wigit</span>
<?php

        }
        public function mv_slider_title_callback(){
            ?>
            <input 
            type="text"
            name="mv_slider_option[mv_slider_title]"
            id="mv_slider_title"
            value="<?php echo isset(self::$options['mv_slider_title']) ? esc_attr(self::$options['mv_slider_title]) : ''; ?>"
            >
            <?php
        }
        public function mv_slider_bullets_callback(){
            ?>
            <input
            type="checkbox"
            name="mv_slider_options[mv_slider_bullets]"
            id="mv_slider_bullets"
            value="1"
            <?php 
            if(isset(self::$options['mv_slider_bullets'])){
                checked("1", self::$options['mv_slider_bullets'], true);
            }
            ?>
            >
            <label for="mv_slider_bullets">Whether to display bullets by slide</label>
            <?php
        }
    }
}
