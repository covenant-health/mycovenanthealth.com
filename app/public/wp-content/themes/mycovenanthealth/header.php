<?php
/**
 * Header template
 * Author     : John Galyon <https://github.com/covenant-health/>
 * Author URI : https://www.covenanthealth.com
 * Created    : 05.13.2020
 * @version 1.0.0
 * @package WordPress
 * @subpackage covenant
 */
?>

<!DOCTYPE html>
<html class="no-js" lang="<?php echo get_bloginfo( 'language' ); ?>">
<head>
	<meta charset="<?php echo get_bloginfo( 'charset' ); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#00549f">

	<link rel="apple-touch-icon" href="<?php echo trailingslashit( get_stylesheet_directory_uri() ); ?>img/apple-touch-icon.png">

	<link rel="shortcut icon" href="<?php echo trailingslashit( get_stylesheet_directory_uri() ); ?>favicon.png" type="image/x-icon">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

	<?php wp_head(); ?>
</head>
