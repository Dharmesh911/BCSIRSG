<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */ 
global $base_url;
?><!DOCTYPE html>
<head>
<meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="utf-8">
  <?php print $head; ?>
  <title><?php 
  	$pTitle = '';
  	if(drupal_get_title()){
		$pTitle = t(drupal_get_title()).'/';
	}
  	print $pTitle.t(variable_get('site_name')); ?></title>
 <meta http-equiv="cleartype" content="on">
  <?php print $styles; ?>
  <?php print $scripts; ?>
<!--[if lt IE 9]>
      <script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/kvit/js/html5shiv-3.7.2.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_url; ?>/sites/all/themes/kvit/js/respond-1.4.2.min.js"></script>
    <![endif]-->
  </head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
