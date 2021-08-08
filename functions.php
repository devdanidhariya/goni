<?php

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function goni_scripts() {
    global $is_IE, $wp_scripts;
    // If not IE, use the standard stylesheet.
    wp_enqueue_style('goni-main-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
    
    wp_enqueue_style('goni-base', get_template_directory_uri() . '/assets/css/base.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('goni-main', get_template_directory_uri() . '/assets/css/main.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('goni-vendor', get_template_directory_uri() . '/assets/css/vendor.css', array(), wp_get_theme()->get('Version'));
    
    
    wp_register_script('goni-modernizr',get_template_directory_uri() . '/assets/js/modernizr.js',array());
    wp_enqueue_script('goni-modernizr');
    wp_register_script('goni-pace',get_template_directory_uri() . '/assets/js/pace.min.js',array());
    wp_enqueue_script('goni-pace');
    
    wp_register_script('goni-jquery',get_template_directory_uri() . '/assets/js/jquery-2.1.3.min.js',array(),true);
    wp_enqueue_script('goni-jquery');

    wp_register_script('goni-plugins',get_template_directory_uri() . '/assets/js/plugins.js',array(),true);
    wp_enqueue_script('goni-plugins');


    

    wp_register_script('goni-main-js',get_template_directory_uri() . '/assets/js/main.js',array());
    wp_enqueue_script('goni-main-js');

    //localize script with custom var
    wp_localize_script(
        'goni-main-js',
        'goni_data',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce("goni"),
        )
    );

}
register_nav_menus( array(  
    'primary' => __( 'Primary Navigation', 'primary' )
    ) ); 

add_action('wp_enqueue_scripts', 'goni_scripts');

//Ajax hooks 
add_action('wp_ajax_contact_form_submit', 'contact_form_submit_handler');
add_action('wp_ajax_nopriv_contact_form_submit',  'contact_form_submit_handler');
/*
*  post_form_save_handler
*
*  Use for post save handler.
*  @type	function
*
*  @param   N/A
*  @return	json data
*/
function contact_form_submit_handler(){
    check_ajax_referer('goni', 'security');  //Check security


    
    $data = array();
    parse_str($_POST['data'], $data); //serialize POST to array

    if ($data) :
        $contactName   = sanitize_text_field($data['contactName']);
        $contactEmail    = sanitize_text_field($data['contactEmail']);
        $contactSubject   = sanitize_text_field($data['contactSubject']);
        $contactMessage    = sanitize_text_field($data['contactMessage']);

        $admin_email = get_option('admin_email');
        $blog_title = get_bloginfo();


        //set header
        $headers = array('Content-Type: text/html; charset=UTF-8', 'From: blog_title <' . $admin_email . '>');

        //set mail subject
        $subject = "[$blog_title] contact request ";

        // Mail body start
        $message  = "<b>contactName:</b> $contactName<br>";
        $message .= "<b>contactEmail</b>: $contactEmail<br>";
        $message .= "<b>contactSubject</b>: $contactSubject<br>";
        $message .= "<b>contactMessage</b>: $contactMessage<br>";
    
        $message .= "Regards,<br>All at $blog_title<br>";
        $message .= site_url();
        // Mail body end
        


        $mail = wp_mail($admin_email, $subject, $message, $headers); //Send mail

        if ($mail) { //check error
            wp_send_json_success(array('status' => 1,'message' => __('Your message was sent, thank you!', 'goni')));
        } else {
            wp_send_json_error(array('status' => 0,'message' => __('Something went wrong. Please try again.', 'goni')));
        }
    else :
            wp_send_json_error(array('status' => 0,'message' => __('Something went wrong please try again later', 'goni')));
    endif;
    wp_die();
}