<!DOCTYPE html>
<html lang="en">
	<head>	
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name="description" content="">
			<meta name="author" content="">
			<title>Starter Template for Bootstrap</title>
			<!-- Bootstrap core CSS -->
			<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">

			<!-- Custom styles for this template -->		

			<?php wp_head(); ?>
		</head>
		<body>
		<div class="container">
			<div class="top-nav">
				<div class="row justify-content-between align-items-center">
					<div class="col-xl-auto col-lg-3">
						<div class="logo">
							<?php the_custom_logo(); ?>
						</div>
					</div>
					<div class="col-xl-auto col-lg-9">
						<button class="top-nav_btn">
							<i class="icon-menu"></i>
						</button>

						<?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => 'ul',
							'container_class' => 'top-nav_menu',
							'container_id'    => '',
							'menu_class'      => 'top-nav_menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) );
						 ?>
						
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.top-nav -->