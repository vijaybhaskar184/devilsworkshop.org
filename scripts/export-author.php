<?php
/**
    Put this in wordpress document root and open http:..example.com/export-author.php
**/

// display all erros
error_reporting(-1);

// load wordpress
require_once('wp-load.php');

// global $wpdb;

/**
	Check if gravatar is set for given email address
**/

function validate_gravatar($email) {
	// Craft a potential url and test its headers
	$hash = md5(strtolower(trim($email)));
	$uri = 'http://www.gravatar.com/avatar/' . $hash . '?d=404';
	$headers = @get_headers($uri);
	if (!preg_match("|200|", $headers[0])) {
		$has_valid_avatar = FALSE;
	} else {
		$has_valid_avatar = TRUE;
	}
	return $has_valid_avatar;
}

/**
	Function to list authors with important attributes (usermeta)
	Please change function to suit your needs
**/

function rt_list_authors() {
	global $wpdb;

	$count = 0;

	// get all authors who has atleast one published post. Authors are sorted by number of posts
	foreach ( (array) $wpdb->get_results("SELECT DISTINCT post_author, COUNT(ID) AS count FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' GROUP BY post_author ORDER BY count DESC" ) as $row ) {
		$count++;
		//get author data (mostly from wp_users table)
		$author = get_userdata( $row->post_author );

		//calculate gravatar
		$avatar = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $author->user_email ) ) ) . "?s=256";

		//do not edit spaces inside "    "
		echo "    " . 	$author->user_login . ":" . "\n";

		if($author->first_name)
			echo "      first_name: "	.	$author->first_name . "\n";
		if($author->last_name)
			echo "      last_name: "	.	$author->last_name . "\n";
		if($author->display_name)
			echo "      display_name: "	.	$author->display_name . "\n";
		if(validate_gravatar($author->user_email) )
			echo "      avatar: "		.	$avatar . "\n";
		if ($author->user_url)
			echo "      homepage: "		.	$author->user_url . "\n";


		// for current author, fetch additioal metadata stored by rtCamp's user-info plugin.
		// Ignore empty meta_values
		$extra = $wpdb->get_results( "SELECT meta_key, meta_value FROM $wpdb->usermeta WHERE user_id = " . $author->ID . " AND (meta_key LIKE 'rt_user_%' OR meta_key LIKE 'user_%' OR meta_key = 'wp_29_rtrs_users_details' OR meta_key = 'description') AND meta_value <> '' ", ARRAY_A);


		//loop thorugh keys as we want to print differnt key name
		foreach ($extra as $ex ){
			switch	($ex['meta_key']){
				case 'rt_user_twitter':
							echo "      twitter: "		.	$ex['meta_value'] . "\n";
							break;
				case 'rt_user_facebook':
							echo "      facebook: "		.	$ex['meta_value'] . "\n";
							break;
				case 'rt_user_linkedin':
							echo "      linkedin: "		.	$ex['meta_value'] . "\n";
							break;
				case 'rt_user_gender':
							echo "      gender: "		.	strtolower($ex['meta_value']) . "\n";
							break;
				case 'rt_user_googleplus':
							echo "      googleplus: "	.	$ex['meta_value'] . "\n";
							break;
				case 'rt_user_github':
							echo "      github: "		.	$ex['meta_value'] . "\n";
							break;
				case 'rt_user_wordpress':
							echo "      wordpress: "	.	$ex['meta_value'] . "\n";
							break;
				case 'rt_user_stackexchange':
							echo "      stackexchange: " .	$ex['meta_value'] . "\n";
							break;
				case 'rt_user_location':
							echo "      location: "	 	.	$ex['meta_value'] . "\n";
							break;
				case 'description':
							echo "      bio: "	 		.	str_replace(array("\r", "\n"), ' ', strip_tags($ex['meta_value'])) . "\n";
							break;
				//devils workshop author-adsense plugin support			
				case 'wp_29_rtrs_users_details':
							$adsense = unserialize($ex['meta_value']);
							if($adsense['rtrs_pub_id'])
								echo "      adsense_pub_id:  "	 .	$adsense['rtrs_pub_id'] . "\n";
							if($adsense['rtrs_slot_id'])
								echo "      adsense_slot_id: "	 .	$adsense['rtrs_slot_id'] . "\n";
							break;
			} //end of switch
		}//end of inner for loop
	}//end of outer loop
/* 	echo "\n\n Exported " . $count . " authors"; */
}//end of func

// Call list author function
rt_list_authors();
?>
