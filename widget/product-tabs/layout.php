<div class="ufo-product-tab-wrapper">
    <div class="tabs">
        <?php if($settings['tab_heading1']){?>
            <div class="tab_heading"><span class="tab_sub_heading"><?php echo wp_kses_data($settings['tab_sub_heading1']);?></span><?php echo wp_kses_data($settings['tab_heading1']);?></div>
        <?php } ?>
        <div class="tab-buttons">
            <?php if($settings['tabs_button']){
                $index = 0;
                foreach($settings['tabs_button'] as $tab){
                    $index++;
                    if($index == 1){
                        $class = 'active';
                    }else{
                        $class = '';
                    }
                ?>
            <div class="tab-button <?php echo esc_attr($class);?>" data-tab="<?php echo esc_attr($tab['tab_id']);?>">
                <?php if($tab['discount']){?>
                <div class="discount-badge">
                    <span><?php echo wp_kses_data($tab['discount']);?></span>
                </div>
                <?php }?>
                <?php echo wp_get_attachment_image($tab['tab_image']['id'], 'full');?>
                <div class="title"><?php echo wp_kses_data($tab['tab_title']);?></div>
                <div class="price"><?php echo wp_kses_data($tab['tab_s_price']);?> <span class="original-price"><?php echo wp_kses_data($tab['tab_r_price']);?></span></div>
            </div>
            <?php } } ?>
        </div>
        <?php if($settings['tab_heading2']){?>
            <div class="tab_heading"><span class="tab_sub_heading"><?php echo wp_kses_data($settings['tab_sub_heading2']);?></span><?php echo wp_kses_data($settings['tab_heading2']);?></div>
        <?php } ?>
        <div class="tab-content">
            <?php if($settings['tabs_content']){
            $index3 = 0;
            foreach($settings['tabs_content'] as $content){
            $index3++;
            if($index3 == 1){
                $class3 = 'active';
                $checked = 'checked';
            }else{
                $class3 = '';
                $checked = '';
            }
            if($content['free_item'] == 'active'){
                $free = 'product-free';
            }else{
                $free = '';
            }
            ?>
            <div class="product <?php echo esc_attr($free);?> <?php echo esc_attr($class3);?>" data-tab-id="<?php echo $content['content_id'];?>">
                <input type="radio" id="product-<?php echo $content['_id'];?>" name="product" data-link="<?php echo esc_url($content['content_link']['url']);?>" <?php echo esc_attr($checked);?>>
                <label for="product-<?php echo $content['_id'];?>" class="product_wrap">
                    <div class="product-image">
                        <?php echo wp_get_attachment_image($content['content_image']['id'], 'full');?>
                    </div>
                    <div class="pack_title_saving">
                        <p class="pack_title"><?php echo wp_kses_data($content['content_title']);?></p>
                        <p class="savings"><?php echo wp_kses_data($content['content_sv_price']);?></p>
                        <?php if($content['free_shipping']){?>
                        <span class="free-ship-text"><?php echo wp_kses_data($content['free_shipping']);?></span>
                        <?php } ?>
                    </div>
                    <div class="price"><span class="sale_price"><?php echo wp_kses_data($content['content_s_price']);?></span> <del class="original-price"><?php echo wp_kses_data($content['content_r_price']);?></del></div>
                </label>
                <?php if($content['free_item'] == 'active'){?>
                <div class="free-item">
                    <div class="free-item-wrap">
                        <div class="free-image">
                            <?php echo wp_get_attachment_image($content['free_item_image']['id'], 'full');?>
                        </div>
                        <div class="free-text">
                            <p><?php echo wp_kses_data($content['free_item_title']);?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } } ?>
        </div>
    </div>
    <?php if($settings['button_text']){?>
    <a href="#" class="bundle-buy" id="bundleBuy"><?php echo wp_kses_data($settings['button_text']);?></a>
    <?php } ?>
</div>