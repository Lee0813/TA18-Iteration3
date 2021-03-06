<?php
function wp_statistics_generate_pages_postbox_content() {
	global $wpdb;

	$result   = $wpdb->get_results( "SELECT `pages`.`uri`,`pages`.`id`,`pages`.`type`, SUM(`pages`.`count`) + IFNULL(`historical`.`value`, 0) AS `count_sum` FROM `{$wpdb->prefix}statistics_pages` `pages` LEFT JOIN `{$wpdb->prefix}statistics_historical` `historical` ON `pages`.`uri`=`historical`.`uri` AND `historical`.`category`='uri' GROUP BY `uri` ORDER BY `count_sum` DESC LIMIT 10" );
	$site_url = site_url();
	$counter  = 0;
	echo "<table width=\"100%\" class=\"widefat table-stats\" id=\"last-referrer\"><tr>";
	echo "<td width='10%'>" . __( 'ID', 'wp-statistics' ) . "</td>";
	echo "<td width='40%'>" . __( 'Title', 'wp-statistics' ) . "</td>";
	echo "<td width='40%'>" . __( 'Link', 'wp-statistics' ) . "</td>";
	echo "<td width='10%'>" . __( 'Visits', 'wp-statistics' ) . "</td>";
	echo "</tr>";

	foreach ( $result as $item ) {
		$counter += 1;

		// Lookup the post title.
		$page_info = wp_statistics_get_page_info( $item->id, $item->type );
		$title     = mb_substr( $page_info['title'], 0, 200, "utf-8" );
		$page_link = $page_info['link'];

		/**
		 * Check Get title by url
		 * @since v12.5.7
		*/
		if ( $page_link == '' ) {
			$page_link = htmlentities( $site_url . $item->uri, ENT_QUOTES );
			$id        = wp_statistics_uri_to_id( $item->uri );
			$post      = get_post( $id );
			if ( is_object( $post ) ) {
				$title = $post->post_title;
			} else {
				if ( $item->uri == '/' ) {
					$title = get_bloginfo();
				}
			}
		}

		echo "<tr>";
		echo "<td style=\"text-align: left\">" . $counter . "</td>";
		echo "<td style=\"text-align: left\">" . $title . "</td>";
		echo '<td style="text-align: left"><a href="' . $page_link . '" target="_blank">' . htmlentities( urldecode( $item->uri ), ENT_QUOTES ) . '</a></td>';
		echo '<td style="text-align: left"><a href="' . WP_Statistics_Admin_Pages::admin_url( 'pages', array( 'page-uri' => htmlentities( $item->uri, ENT_QUOTES ) ) ) . '">' . number_format_i18n( $item->count_sum ) . '</a></td>';
		echo '</tr>';

	}
	echo '</table>';
}
