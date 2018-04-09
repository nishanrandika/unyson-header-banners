<?php if (!defined('FW')) { die('Forbidden'); }

$options = array(
    //Banner Tab
    'tab_banner' => array(
        'type' => 'tab',
        'title' => __('Content', 'fw'),
        'options' => array(
            'image_upload' => array(
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
                        'title' => array(
                            'type'  => 'wp-editor',
                            'label' => __('Title', 'fw'),
                            'desc'  => __('This is the text that appears on your title area', 'fw'),
                            'size' => 'small',
                            'wpautop' => true,
                            'editor_type' => false,
                        ),
                        'content' => array(
                            'type'  => 'wp-editor',
                            'label' => __('Content', 'fw'),
                            'desc'  => __('This is the text that appears on your content area', 'fw'),
                            'size' => 'small',
                            'wpautop' => true,
                            'editor_type' => false, // tinymce, html
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
                        'title' => array(
                            'type'  => 'wp-editor',
                            'label' => __('Title', 'fw'),
                            'desc'  => __('This is the text that appears on your title area', 'fw'),
                            'size' => 'small',
                            'wpautop' => true,
                            'editor_type' => false,
                        ),
                        'content' => array(
                            'type'  => 'wp-editor',
                            'label' => __('Content', 'fw'),
                            'desc'  => __('This is the text that appears on your content area', 'fw'),
                            'size' => 'small',
                            'wpautop' => true,
                            'editor_type' => false,
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
                                'choose' => array(
                                    'type'  => 'multi-picker',
                                    'label' => false,
                                    'desc'  => false,
                                    'picker' => array(
                                        'actions' => array(
                                            'label'   => __('Choose', 'fw'),
                                            'type'    => 'radio',
                                            'choices' => array(
                                                'image'  => __('Image', 'fw'),
                                                'video' => __('Video', 'fw')
                                            ),
                                            'desc'    => __('Choose a option for your slide', 'fw'),
                                        )
                                    ),                                    
                                    'choices' => array(
                                        'image' => array(
                                            'image' => array(
                                                'type'  => 'background-image',
                                                'label' => __('Image', 'fw'),
                                                'desc'  => __('Either upload a new, or choose an existing image from your media library', 'fw'),
                                                'images_only' => true,                    
                                            )                                            
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
                                            'loop' => array(
                                                'type' => 'switch',
                                                'label' => 'Enable Video Loop',
                                                'desc' => __('Select whether the video should be lopped or not', 'fw'), 
                                                'true' => array(
                                                    'value' => 'true',
                                                    'label' => __('Yes', 'fw'),
                                                ),
                                                'false' => array(
                                                    'value' => 'false',
                                                    'label' => __('No', 'fw'),
                                                ),
                                            ),                                            
                                        ),
                                    ),
                                    'show_borders' => false,
                                ),                                
                                'title' => array(
                                    'type'  => 'wp-editor',
                                    'label' => __('Title', 'fw'),
                                    'desc'  => __('This is the text that appears on your title area', 'fw'),
                                    'size' => 'small',
                                    'wpautop' => true,
                                    'editor_type' => false,
                                ),
                                'content' => array(
                                    'type'  => 'wp-editor',
                                    'label' => __('Content', 'fw'),
                                    'desc'  => __('This is the text that appears on your content area', 'fw'),
                                    'size' => 'small',
                                    'wpautop' => true,
                                    'editor_type' => false,
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
        'title' => __('Content Styles', 'fw'),
        'options' => array(
            'slideshow_size' => array(
                'type'  => 'select',
                'label' => __('Slideshow Image Size', 'fw'),
                'desc'  => __('Choose images size for your slideshow', 'fw'),
                'choices' => array(
                    '1030' => __('Large (1030x1030)', 'fw'),
                    '1500' => __('Extra Large (1500x1500)', 'fw'),
                ),
            ),
            'slideshow_behaviour' => array(
                'type'  => 'select',
                'label' => __('Slideshow Image Scrolling', 'fw'),
                'desc'  => __('Choose the behaviour of the slideshow image when scrolling up or down on the page', 'fw'),
                'choices' => array(
                    'scroll' => __('Scroll', 'fw'),
                    'fixed' => __('Fixed', 'fw'),
                    'parallax' => __('Parallax', 'fw'),
                ),
            ),            
            'content_color' => array(
                'type' => 'color-picker',
                'label' => 'Content Text Color',
                'desc' => __('This is the text that appears on your slider', 'fw')
            ),
            'content_shadow' => array(
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
            'box_text_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Text Color',
                'desc' => __('This is the text that appears on your slider boxes', 'fw')
            ),
            'box_hover_background_color' => array(
                'type'  => 'rgba-color-picker',
                'label' => __('Box Background Hover Color', '{domain}'),
                'desc'  => __('This color appears on your box', '{domain}'),
            ),
            'box_hover_text_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Text Hover Color',
                'desc' => __('This color appears on your box content, when hover', 'fw')
            ),
            'box_border_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Border Color',
                'desc' => __('This color appears on your box border', 'fw')
            ),
        )
    ),

    //Config Tab
    'tab_config' => array(
        'type' => 'tab',
        'title' => __('Screen Options', 'fw'),
        'options' => array(
            'slideshow_transition' => array(
                'type'  => 'select',
                'label' => __('Slideshow Transition', 'fw'),
                'desc'  => __('Choose the transition for your slideshow', 'fw'),
                'choices' => array(
                    'fade' => __('Fade', 'fw'),
                    'sidewards' => __('Slide Sidewards', 'fw'),
                ),
            ),
            'arrow' => array(
                'type' => 'switch',
                'label' => 'Slideshow Arrows',
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
                'label' => 'Slideshow Dots',
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
                'label' => 'Autorotation Active',
                'desc' => __('Check if the slideshow should rotate by default', 'fw'), 
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
                'label' => __('Autorotation Speed', 'fw'),
                'desc' => __('Autorotation speed in milliseconds', 'fw')
            ),
            'speed' => array(
                'type' => 'text',
                'value' => '300',
                'label' => __('Animation Speed', 'fw'),
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
            'duration' => array(
                'type' => 'text',
                'label' => __('Slider Video Duration', 'fw'),
                'desc' => __('In the middle of the video set the exact time the video should stop and image slider should start in milliseconds', 'fw')
            ),
            'begining' => array(
                'type' => 'switch',
                'label' => 'Slider Video Play From Begining',
                'desc' => __('Play video from begining every time or let it play from stop point', 'fw'), 
                'true' => array(
                    'value' => 'true',
                    'label' => __('Yes', 'fw'),
                ),
                'false' => array(
                    'value' => 'false',
                    'label' => __('No', 'fw'),
                ),
            ),
        )
    ),
);