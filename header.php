<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  	<head>    
    	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">    
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>    
    	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    	<!--[if lt IE 9]>
      		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
  	</head>
  	<body <?php body_class(); ?>>
    	<?php do_action( 'foundationpress_after_body' ); ?>

    	<header id="masthead" class="site-header" role="banner">
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            	<span class="sr-only">Toggle navigation</span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	          	</button>	          
	          	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	        </div>
	        
	        <?php
	            wp_nav_menu( array(
	                'menu'              => 'main-menu',
	                'theme_location'    => 'main-menu',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'collapse navbar-collapse',
	        		'container_id'      => 'navbar',
	                'menu_class'        => 'nav navbar-nav',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
        	?>	        
	      </div>
	    </nav>
		</header>
    				
		
		<section class="container">
		<?php do_action( 'foundationpress_after_header' );