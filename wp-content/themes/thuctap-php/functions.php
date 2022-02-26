<?php 
function initTheme(){
	/*Chuyển về trình soạn thảo phiên bản cũ*/
	add_filter('use_block_editor_for_post', '__return_false');

	/*Đăng kí menu cho website*/
	register_nav_menu('menu-header',__( 'Menu header' ));


	/*Hàm đếm lượt views truy cập website*/
	function setpostview($postID){
		$count_key ='views';
		$count = get_post_meta($postID, $count_key, true);
		if($count == ''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		} else {
			$count++;
			update_post_meta($postID, $count_key, $count);
		}
	}
	function getpostviews($postID){
		$count_key ='views';
		$count = get_post_meta($postID, $count_key, true);
		if($count == ''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0";
		}
		return $count;
	}

}



add_action('init','initTheme');
