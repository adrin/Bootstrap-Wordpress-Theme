<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title part of the header, this is best titling for wordpress sites this optimize for SEO -->
	<title>
<?php 
if (function_exists('is_tag') && is_tag()) { 
	echo 'Tag Archive for &quot;'.$tag.'&quot; - '; 
} elseif (is_archive()) { 
	wp_title(''); echo ' Archive - '; 
} elseif (is_search()) { 
	echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
} elseif (!(is_404()) && (is_single()) || (is_page())) { 
	wp_title(''); echo ' - '; 
} elseif (is_404()) {
	echo 'Not Found - '; 
}
bloginfo('name');
?>
</title>

	<!-- Bootstrap files add + JQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- Style file >> File: Style.css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	
</head>
<body>