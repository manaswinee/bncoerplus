<?php
    $icon_name = $iconClass = $animate_class = $icon_font_size = '';
    $icon_name = "icon_" . $atts['icon_type'];
    $iconClass = isset($atts[$icon_name])?$atts[$icon_name]:'';
    $animate_class = isset($atts['css_animation']) ? $atts['css_animation'] : '';
    $icon_font_size = isset($atts['fancy_icon_fontsize']) ? $atts['fancy_icon_fontsize'] : '65px';
    $css_animation_delay = isset($atts['css_animation_delay']) ? $atts['css_animation_delay'] : '0ms'; 
?>
<div class="cms-fancyboxes-wraper <?php echo esc_attr($atts['template']);?> <?php echo esc_attr($animate_class); ?> clearfix" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if($atts['title']!=''):?>
        <div class="cms-fancyboxes-head">
            <div class="cms-fancyboxes-title">
                <?php echo apply_filters('the_title',$atts['title']);?>
            </div>
            <div class="cms-fancyboxes-description">
                <?php echo apply_filters('the_content',$atts['description']);?>
            </div>
        </div>
    <?php endif;?>
    <div class="cms-fancyboxes-body">
        <div class="cms-fancybox-item <?php echo (!empty($iconClass)) ? 'has-fancy-icon' : '' ?>">
            <?php 
            $image_url = '';
            if (!empty($atts['image'])) {
                $attachment_image = wp_get_attachment_image_src($atts['image'], 'full');
                $image_url = $attachment_image[0];
            }
            ?>
            <?php if (!empty($iconClass)) : ?>
                <div class="fancy-box-icon clearfix">
                    <i class="<?php echo esc_attr($iconClass);?>" style="font-size:<?php echo esc_attr($icon_font_size); ?>"></i>
                </div>
            <?php endif; ?>

            <?php if($atts['title_item']):?>
                <h3 class="fancy-title"><?php echo apply_filters('the_title',$atts['title_item']);?></h3>
            <?php endif;?>
            <?php if($atts['description_item']): ?>
            <div class="fancy-box-content">
                <?php echo apply_filters('the_content',$atts['description_item']);?>
            </div>
            <?php endif; ?>
            <?php if($atts['button_text']!=''):?>
                <div class="cms-fancyboxes-foot">
                    <?php
                    $class_btn = ($atts['button_type']=='button')?'btn btn-large':'';
                    ?>
                    <a href="<?php echo esc_url($atts['button_link']);?>" class="<?php echo esc_attr($class_btn);?>"><?php echo esc_attr($atts['button_text']);?></a>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>