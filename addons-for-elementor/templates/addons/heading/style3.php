<?php
/**
 * Heading Template 3
 *
 * This template can be overridden by copying it to mytheme/addons-for-elementor/addons/heading/style3.php
 *
 */


use Elementor\Utils;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

list($animate_class, $animation_attr) = lae_get_animation_atts($settings['widget_animation']);

?>

<div class="lae-heading lae-<?php echo esc_attr($settings['style']); ?> lae-align<?php echo esc_attr($settings['align']); ?> <?php echo esc_attr($animate_class); ?>" <?php echo esc_attr($animation_attr); ?>>

    <<?php echo lae_validate_html_tag($settings['title_tag']); ?> class="lae-title"><?php echo wp_kses_post($settings['heading']); ?></<?php echo lae_validate_html_tag($settings['title_tag']); ?>>

</div><!-- .lae-heading -->