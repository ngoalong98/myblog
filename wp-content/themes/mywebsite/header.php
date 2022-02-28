<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo('charset'); ?>>">
    <link rel="pingback" href="http://gmgp.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <title>
        <?php
            wp_title('|', true, 'right');
            bloginfo('name');
        ?>
    </title>
        <?php wp_head();?>
	</head>
	<body>
		<div class="wallpaper">
			<header>
				<div class="main-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<div class="logo">
									<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url')?>/images/logo.png" alt="Blog Huy kira"></a>
									<?php if(is_home()){ ?>
										<h1><?php bloginfo('name');?></h1>
									<?php } ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<div class="banner">
									<a href="#"><img src="https://via.placeholder.com/900x100" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-nav">
					<div class="container">
						<div class="menu-header">
                        <?php wp_nav_menu( 
                            array( 
                                'theme_location' => 'topmenu', 
                                'container' => 'false', 
                                'menu_id' => 'top-menu', 
                                'menu_class' => 'top-menu'
                            ) 
                            ); ?>
						</div>
					</div>
				</div>
			</header>