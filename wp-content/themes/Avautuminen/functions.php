<?php

function custom_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'custom_theme_setup');

function rekisteroi_menu() {
    register_nav_menu('reuna', 'Paavalikko');
}

add_action('init', 'rekisteroi_menu');

function lisaa_kirjasto() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/js/app.js',
        array('jquery')
    );
}

add_action ('wp_enqueue_scripts', 'lisaa_kirjasto');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'vimpaimet',
        'id' => 'vimpaimet'
    ));
}

?>

<?php
/*AVAUTUMISTEN LYHENNÖS*/
function wpdocs_custom_excerpt_length( $length ) {
    return 14;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/*[...] VAIHTAMINEN*/
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>

<?php
// CUSTOM FORM CREATION
// Check if the form was submitted
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] )) {

        // Do some minor form validation to make sure there is content
        if (isset ($_POST['title'])) { 
                $title =  $_POST['title']; 
        } else { 
                echo 'Please enter a title';
        }
        if (isset ($_POST['description'])) { 
                $description = htmlentities(trim(stripcslashes($_POST['description']))); 
    } else {
        echo 'Please enter the content';
        }

        // Add the content of the form to $post as an array
        $type = trim($_POST['Type']);
        $post = array(
                'post_title'    => $title,
                'post_content'  => $description,
                'post_category' =>   array($_POST['cat']),  // Usable for custom taxonomies too 
                'post_status'   => 'publish',                     // Choose: publish, preview, future, etc.
                'tags_input'    => array($tags),
                'tax_input'    => array( $type),
                'comment_status' => 'open',
                'post_author' => '2',
        );
        $new_post = wp_insert_post($post);
                
                if (!function_exists('wp_generate_attachment_metadata')){
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                require_once(ABSPATH . "wp-admin" . '/includes/file.php');
                require_once(ABSPATH . "wp-admin" . '/includes/media.php');
            }
             if ($_FILES) {
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                        return "upload error : " . $_FILES[$file]['error'];
                    }
                    $attach_id = media_handle_upload( $file, $new_post );
                }   
            }
            if ($attach_id > 0){
                //and if you want to set that image as Post  then use:
                update_post_meta($new_post,'_thumbnail_id',$attach_id);
            }
        wp_set_post_terms($post_id,$type,'Type',true);

        wp_redirect(home_url('')); // redirect to home page after submit
        exit();

            if ($_FILES) {
                foreach ($_FILES as $file => $array) {
                    $newupload = insert_attachment($file,$post_id);
                    // $newupload returns the attachment id of the file that
                    // was just uploaded. Do whatever you want with that now.
                }
        }
}
 // end IF
?>