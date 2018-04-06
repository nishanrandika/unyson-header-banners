<?php if (!defined('FW')) { die('Forbidden'); }

$options = array(
    //Banner Tab
    'tab_banner' => array(
        'type' => 'tab',
        'title' => __('Banner', 'fw'),
        'options' => array(
            'e25_image_upload' => array(
                'type'  => 'multi-picker',
                'label' => false,
                'desc'  => false,
                'picker' => array(
                    'gadget' => array(
                        'label'   => __('Banner Type', 'fw'),
                        'type'    => 'select',
                        'choices' => array(
                            'image'  => __('Image Banner', 'fw'),
                            'video' => __('Video Banner', 'fw'),
                            'slider' => __('Slider Banner', 'fw'),
                        ),
                        'desc'    => __('Select your banner type', 'fw'),
                    )
                ),    
                'choices' => array(
                    'image' => array(
                        'image' => array(
                            'type'  => 'background-image',
                            'label' => __('Image', 'fw'),
                            'desc'  => __('Either upload a new, or choose an existing image from your media library', 'fw'),
                            'images_only' => true,                    
                        ),
                        'content' => array(
                            'type' => 'text',
                            'label' => __('Content', 'fw'),
                            'desc' => __('This is the text that appears on your header', 'fw')
                        ),
                        'boxes' => array(
                            'type'  => 'addable-option',
                            'value' => array('', ''),
                            'label' => __('Boxes', 'fw'),
                            'desc'  => __('Click to add or edit / Drag to reorder', 'fw'),
                            'option' => array( 'type' => 'text' ),
                            'add-button-text' => __('Add', 'fw'),
                            'sortable' => true,
                        ),
                    ),
                    'video' => array(
                        'video' => array(
                            'type'  => 'oembed',
                            'label' => __('Video URL', '{domain}'),
                            'desc'  => __('Insert Video URL to embed this video', 'fw'),
                            'preview' => array(
                                'width'  => 300,
                                'height' => 300,
                                'keep_ratio' => true
                            )
                        ),
                        'content' => array(
                            'type' => 'text',
                            'label' => __('Content', 'fw'),
                            'desc' => __('This is the text that appears on your header', 'fw')
                        ),
                        'boxes' => array(
                            'type'  => 'addable-option',
                            'value' => array('', ''),
                            'label' => __('Boxes', 'fw'),
                            'desc'  => __('Click to add or edit / Drag to reorder', 'fw'),
                            'option' => array( 'type' => 'text' ),
                            'add-button-text' => __('Add', 'fw'),
                            'sortable' => true,
                        ),
                    ),
                    'slider' => array(
                        'group' => array(
                            'type' => 'addable-popup',
                            'value' => array(
                                array(
                                    'image' => '',
                                    'title' => '',
                                    'content' => '',
                                )
                            ),
                            'label' => __('Slider', 'fw'),
                            'desc'  => __('Click to add or edit / Drag to reorder.', 'fw'),
                            'template' => '{{- title }}',
                            'popup-title' => null,
                            'size' => 'medium',
                            'limit' => 5,
                            'add-button-text' => __('Add', 'fw'),
                            'sortable' => true,
                            'popup-options' => array(
                                'image' => array(
                                    'type'  => 'background-image',
                                    'label' => __('Image', 'fw'),
                                    'desc'  => __('Either upload a new, or choose an existing image from your media library', 'fw'),
                                    'images_only' => true,                    
                                ),
                                'title' => array('type' => 'text'),
                                'content' => array(
                                    'type' => 'text',
                                    'label' => __('Content', 'fw'),
                                    'desc' => __('This is the text that appears on your header', 'fw')
                                ),
                                'boxes' => array(
                                    'type'  => 'addable-option',
                                    'value' => array('', ''),
                                    'label' => __('Boxes', 'fw'),
                                    'desc'  => __('Click to add or edit / Drag to reorder', 'fw'),
                                    'option' => array( 'type' => 'text' ),
                                    'add-button-text' => __('Add', 'fw'),
                                    'sortable' => true,
                                ),
                            )
                        )
                    )
                ),
                'show_borders' => false,
            )
        )
    ),
    
    //Style Tab
    'tab_style' => array(
        'type' => 'tab',
        'title' => __('Banner Style', 'fw'),
        'options' => array(
            'e25_content_color' => array(
                'type' => 'color-picker',
                'label' => 'Content Text Color',
                'desc' => __('This is the text that appears on your slider', 'fw')
            ),
            'e25_content_shadow' => array(
                'type' => 'switch',
                'label' => 'Content Text shadow',
                'desc' => __('This is the text that appears on your slider', 'fw'),                
                'false-choice' => array(
                    'value' => 'false',
                    'label' => __('False', 'fw'),
                ),
                'true-choice' => array(
                    'value' => 'true',
                    'label' => __('True', 'fw'),
                ),
            ),
            'e25_box_text_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Text Color',
                'desc' => __('This is the text that appears on your slider boxes', 'fw')
            ),
            'e25_box_hover_background_color' => array(
                'type'  => 'rgba-color-picker',
                'label' => __('Box Background Hover Color', '{domain}'),
                'desc'  => __('This color appears on your box', '{domain}'),
            ),
            'e25_box_hover_text_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Text Hover Color',
                'desc' => __('This color appears on your box content, when hover', 'fw')
            ),
            'e25_box_border_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Border Color',
                'desc' => __('This color appears on your box border', 'fw')
            ),
        )
    ),

    //Config Tab
    'tab_config' => array(
        'type' => 'tab',
        'title' => __('Slider Config', 'fw'),
        'options' => array(
            'arrow' => array(
                'type' => 'switch',
                'label' => 'Arrows',
                'desc' => __('Prev/Next arrows', 'fw'),                
                'true-choice' => array(
                    'value' => 'true',
                    'label' => __('Yes', 'fw'),
                ),
                'false-choice' => array(
                    'value' => 'false',
                    'label' => __('No', 'fw'),
                ),                
            ),
            'dots' => array(
                'type' => 'switch',
                'label' => 'Dots',
                'desc' => __('Show dot indicators', 'fw'), 
                'true-choice' => array(
                    'value' => 'true',
                    'label' => __('Yes', 'fw'),
                ),
                'false-choice' => array(
                    'value' => 'false',
                    'label' => __('No', 'fw'),
                ),                
            ),
            'fade' => array(
                'type' => 'switch',
                'label' => 'Fade',
                'desc' => __('Enable fade', 'fw'), 
                'true-choice' => array(
                    'value' => 'true',
                    'label' => __('Yes', 'fw'),
                ),
                'false-choice' => array(
                    'value' => 'false',
                    'label' => __('No', 'fw'),
                ),                
            ),
            'infinite' => array(
                'type' => 'switch',
                'label' => 'Infinite',
                'desc' => __('Infinite loop sliding', 'fw'),
                'true-choice' => array(
                    'value' => 'true',
                    'label' => __('Yes', 'fw'),
                ),
                'false-choice' => array(
                    'value' => 'false',
                    'label' => __('No', 'fw'),
                ),
            ),
            'autoplay' => array(
                'type' => 'switch',
                'label' => 'Autoplay',
                'desc' => __('Enables autoplay', 'fw'), 
                'true-choice' => array(
                    'value' => 'true',
                    'label' => __('Yes', 'fw'),
                ),
                'false-choice' => array(
                    'value' => 'false',
                    'label' => __('No', 'fw'),
                ),                
            ),
            'autoplay_speed' => array(
                'type' => 'text',
                'value' => '500',
                'label' => __('Autoplay Speed', 'fw'),
                'desc' => __('Autoplay speed in milliseconds', 'fw')
            ),
            'speed' => array(
                'type' => 'text',
                'value' => '300',
                'label' => __('Speed', 'fw'),
                'desc' => __('Slide/Fade animation speed', 'fw')
            ),            
            'pause_on_hover' => array(
                'type' => 'switch',
                'label' => 'pause On Hover',
                'desc' => __('Pause Autoplay On Hover', 'fw'), 
                'true-choice' => array(
                    'value' => 'true',
                    'label' => __('Yes', 'fw'),
                ),
                'false-choice' => array(
                    'value' => 'false',
                    'label' => __('No', 'fw'),
                ),                
            ),
            'touch_move' => array(
                'type' => 'switch',
                'label' => 'Touch Move',
                'desc' => __('Enable slide motion with touch', 'fw'), 
                'true-choice' => array(
                    'value' => 'true',
                    'label' => __('Yes', 'fw'),
                ),
                'false-choice' => array(
                    'value' => 'false',
                    'label' => __('No', 'fw'),
                ),                
            ),
        )
    ),
);