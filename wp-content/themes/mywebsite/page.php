<?php get_header();?>
	<div id="content">
		<div class="container">
			<div class="break">
                <?php if(function_exists('yoast_breadcrumb')) {yoast_breadcrumb('<p id="breakcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
            </div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="post-news">
						<h1 class="title-news"><?php single_cat_title();?></h1>
						<div class="content-news">
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php setpostview(get_the_ID());?>
                                    <h1 class="single-title"><?php the_title();?></h1>
                                    <article class="post-content">
                                        <?php the_content();?>
                                    </article>
                                <?php endwhile; ?>
                            <?php endif; ?>
						</div>  
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3">
					<div class="sidebar">
						<?php get_sidebar();?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>
			