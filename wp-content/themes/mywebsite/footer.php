<footer>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="block-footer">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=page&p=2'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<h3><?php the_title();?></h3>
									<?php the_excerpt();?>
									<a href="<?php the_permalink();?>" class="readmore">Xem thêm</a>
								<?php endwhile; wp_reset_postdata(); ?>		
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="block-footer">
								<h3>Chuyên mục</h3>
								<ul>
									<?php
										$args = array(
											'child_of'  => 0,
											'<strong>orderby</strong>'    => 'íd',
										);
										$categories = get_categories( $args );
										foreach ( $categories as $category ) { ?>
										<li>
											<a href="<?php echo get_term_link($category->slug, 'category');?>">
												<?php echo $category->name ; ?>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="block-footer">
								<h3>Liên hệ</h3>
								<p>Địa chỉ: 888 Tôn Đức Thắng - Hòa Khánh - Liên Chiểu</p>
								<p>Điện thoại: 01658949680</p>
								<p>Email: huykira@gmail.com</p>
								<p>Website: https://huykira.net</p>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<p>Bản quyền thuộc về Author </p>
				</div>
			</footer>
		</div>
        <?php wp_footer();?>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&		appId=390997558543113&autoLogAppEvents=1" nonce="uewOONPJ">
		</script>
	</body>
</html>