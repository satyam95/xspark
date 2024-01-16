<?php
// Widget Registration

function businesssixten_widgets($id){
    register_sidebar(array(
        'name'		=> 'Footer 1',
        'id'		=> 'footer-1',
        'before_widget'	=> '<div class="xspark-footer-block footer-col-1">',
        'after_widget'	=> '</div>',
    ));
    register_sidebar(array(
        'name'		=> 'Footer 2',
        'id'		=> 'footer-2',
        'before_widget'	=> '<div class="xspark-footer-block footer-col-2">',
        'after_widget'	=> '</div>',
    ));
    register_sidebar(array(
        'name'		=> 'Footer 3',
        'id'		=> 'footer-3',
        'before_widget'	=> '<div class="xspark-footer-block footer-col-3">',
        'after_widget'	=> '</div>',
    ));
    register_sidebar(array(
        'name'		=> 'Footer 4',
        'id'		=> 'footer-4',
        'before_widget'	=> '<div class="xspark-footer-block footer-col-4">',
        'after_widget'	=> '</div>',
    ));
    register_sidebar(array(
        'name'		=> 'Footer 5',
        'id'		=> 'footer-5',
        'before_widget'	=> '<div class="xspark-footer-block footer-col-5">',
        'after_widget'	=> '</div>',
    ));
    register_sidebar(array(
        'name'		=> 'Footer Bottom 1',
        'id'		=> 'footer-btm-1',
        'before_widget'	=> '<div class="xspark-copyright-text">',
        'after_widget'	=> '</div>',
    ));
    register_sidebar(array(
        'name'		=> 'Footer Bottom 2',
        'id'		=> 'footer-btm-2',
        'before_widget'	=> '<div class="xspark-made-with">',
        'after_widget'	=> '</div>',
    ));
}
add_action('widgets_init', 'businesssixten_widgets');