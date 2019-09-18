<?php 
	add_theme_support('post-thumbnails');
	add_filter('except_length', function($length){
		return 10;
	});
?>