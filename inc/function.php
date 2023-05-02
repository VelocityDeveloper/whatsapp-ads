<?php

/**
 *
 * @link              velocitydeveloper.com
 * @since             1.2.0
 * @package           whatsapp-ads
 *
 **/

 function create_new_page()
{
    global $user_ID;
    if( get_page_by_title('Form Chat') == NULL )
    {
	$new_post = array(
		      'post_title' => 'Form Chat',
		      'post_content' => '[chat-form]',
		      'post_status' => 'publish',
		      'post_date' => date('Y-m-d H:i:s'),
		      'post_author' => $user_ID,
		      'post_type' => 'page'
		);
	$post_id = wp_insert_post($new_post);
   }
}
add_action('init','create_new_page');