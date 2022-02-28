<?php get_header();?>
	<div id="content">
		<div class="container">
            <div class="break">
                <?php if(function_exists('yoast_breadcrumb')) {yoast_breadcrumb('<p id="breakcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
            </div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8">
					<div class="post-news">
						<h1 class="title-news"><?php single_cat_title();?></h1>
						<div class="content-news">
                        <?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
                                <?php setpostview(get_the_ID());?>
                                <h1 class="single-title"><?php the_title();?></h1>
                                <div class="meta">
                                    <span>Ngày đăng: <?php echo get_the_date('d - m - Y');?></span>
                                    <span>Tác giả: <?php the_author();?></span>
                                    <span>Chuyên mục: <?php the_category(', ');?></span>
                                    <span>Lượt xem: <?php echo getpostviews(get_the_ID());?> lượt</span>
                                </div>
                                <article class="post-content">
                                    <?php the_content();?>
                                </article>
                                <div class="tag">
                                    <p><?php the_tags('Từ khoá: ');?></p>
                                </div>
                                <div class="like">
                                <div class="fb-like" data-href="<?php the_permalink();?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                                </div>
                                <div class="comment">
                                <div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5"></div>
                                </div>
                                <div class="content-lienquan">
                                    <h3>Bài viết liên quan</h3>
                                    <?php
                                        $categories = get_the_category(get_the_ID());
                                        if ($categories) 
                                        {
                                            $category_ids = array();
                                            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                                    
                                            $args=array(
                                                'category__in'  => $category_ids,
                                                'post__not_in'  => array($post->ID),
                                                'showposts'     =>5, // Số bài viết bạn muốn hiển thị.   
                                            );
                                            $my_query = new wp_query($args);
                                            if( $my_query->have_posts() ) 
                                            {
                                                echo '<ul class="list-news-lq">';
                                                while ($my_query->have_posts())
                                                {
                                                    $my_query->the_post();
                                                    ?>
                                                    <li>
                                                        <div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(85, 75)); ?></a></div>
                                                        <div class="item-list">
                                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                                            <div class="meta-list">
                                                                <span>Ngày đăng: <?php echo get_the_date('d - m - Y');?></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                                echo '</ul>';
                                            }
                                        }
                                    ?>
                                </div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>  
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="sidebar">
						<?php get_sidebar();?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>
			