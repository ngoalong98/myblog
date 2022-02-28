<?php get_header();?>
	<div id="content">
		<div class="slider">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item">
						<img src="https://via.placeholder.com/1920x500">
					</div>
					<div class="item">
						<img src="https://via.placeholder.com/1920x500">
					</div>
					<div class="item active">
						<img src="https://via.placeholder.com/1920x500">
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
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
							<div class="news-detail">
								<a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?></a>
								<div class="info-post">
									<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
									<div class="meta">
										<span>Ngày đăng: <?php echo get_the_date('d - m - Y');?></span>
									</div>
									<?php the_excerpt();?>
								</div>
								<div class="clear"></div>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="quatrang">
							<?php
								global $wp_query;
								$big = 999999999;
								echo paginate_links( array(
									'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'prev_text'    => __('«'),
									'next_text'    => __('»'),
									'current' => max( 1, get_query_var('paged') ),
									'total' => $wp_query->max_num_pages
									) );
							?>
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
			