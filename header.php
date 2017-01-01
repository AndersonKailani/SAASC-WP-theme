<?php
// Remove this before merging...
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title of our website -->
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
		
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether.min.css" integrity="sha256-y4TDcAD4/j5o4keZvggf698Cr9Oc7JZ+gGMax23qmVA=" crossorigin="anonymous" />
    <?php wp_head(); ?>
    
    <!-- REMOVE BEFORE MOVING TO MASTER BRANCH -->
    <script src=""></script>   
</head>
<!-- body_class() injects classes that are built in to Wordpress -->
<body <?php body_class(); ?> >
    <!-- Include Google Fonts... -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

    <!-- Wrap the entire front end and a wrapper -->
    <div id="site-wrapper">

    <!-- Navigation Menu -->
    <?php wp_nav_menu(array(
        'container' => 'nav',
        'container_class' => 'navbar navbar-fixed-top navbar-dark bg-inverse',
        'theme_location' => 'header-menu',
        'items_wrap' => '<li class="nav-item"><a class="nav-link %2$s" href="#">%3$s</a></li>'
    ));
    ?>

    <!-- Top Section -->
    <div class="container-fullwidth header">
        <div class="jumbotron">
            <div class="container">
                <h1 class="header-maintext text-center"><?php bloginfo('name'); ?></h1>
                <p><?php bloginfo('description'); ?></p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
            </div>
        </div>
    </div>

    <!-- Main content container -->
    <div class="container">
