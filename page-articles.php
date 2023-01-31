<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header(); 


$args = array(
    'tax_query' => array( 
        array(
            'taxonomy' => 'post_tag',
            'field'    => 'slug',
            'terms'    => 'banner',
        ),
    ),	
    'posts_per_page' => 1
);
$banner = get_posts($args);

$args_featured = array(
    'tax_query' => array( 
        array(
            'taxonomy' => 'post_tag',
            'field'    => 'slug',
            'terms'    => 'featured',
        ),
    ),	
    'posts_per_page' => 3
);
$featured = get_posts($args_featured);

$term = get_term_by('name', 'Featured', 'post_tag');
$term_2 = get_term_by('name', 'Banner', 'post_tag');
$args_recent = array(
    "orderby"        => "date",
    "order"          => "DESC", 
    'posts_per_page' => 3,
    'paged' => 1,
);
$recent_post = new WP_Query($args_recent);

?>
<div class="articles-header">
    <div class="featured-banner">
        <?php foreach ($banner as $post) : 
			$post_id = $post->ID;
			$url = wp_get_attachment_url( get_post_thumbnail_id($post_id), 'thumbnail' ); 
		?>
        <div class="banner" style="background-image: url(<?php echo $url ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <a href="<?php echo get_permalink($post_id) ?>">
                            <div class="title">
                                <?php echo get_the_title($post_id)?>
                            </div>
                        </a>
                        <div class="text">
                            <?php echo get_the_excerpt($post_id) ?></p>
                        </div>
                        <a href="<?php echo get_permalink($post_id) ?>">
                            <div class="read-more">
                                Read More
                                <img src="<?php bloginfo('template_directory');?>/images/articles/read-more.png"
                                    alt="Read More">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; wp_reset_postdata() ?>
</div>
<div class="articles-body">
    <div class="bg">
        <img src="<?php bloginfo('template_directory');?>/images/articles/articles-bg.png" alt="Background">
    </div>
    <div class="graphics">
        <img src="<?php bloginfo('template_directory');?>/images/articles/graphic-bottom.png" alt="Background">
    </div>
    <div class="container">
        <div class="featured">
            <div class="row">
                <div class="col-12">
                    <div class="title-page">
                        <div class="title-text">
                            Featured News
                        </div>
                        <div class="title-line"></div>
                    </div>
                </div>
                <?php foreach ($featured as $post) : 
                    $post_id = $post->ID;
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post_id), 'thumbnail' ); 
                ?>
                <div class="col-12 col-lg-4">
                    <div class="item">
                        <?php gt_set_post_view(); ?>
                        <a href="<?php echo get_permalink($post_id) ?>">
                            <div class="img">
                                <img src="<?php echo $url ?>" alt="">
                            </div>
                        </a>
                        <a href="<?php echo get_permalink($post_id) ?>">
                            <div class="title">
                                <?php echo get_the_title($post_id)?>
                            </div>
                        </a>
                        <div class="text">
                            <?php echo get_the_excerpt($post_id) ?></p>
                        </div>
                        <a href="<?php echo get_permalink($post_id) ?>">
                            <div class="read-more">
                                Read More
                                <img src="<?php bloginfo('template_directory');?>/images/articles/read-more.png"
                                    alt="Read More">
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; wp_reset_postdata() ?>
            </div>
        </div>
        <div class="top-news">
            <div class="row" id="top_row">
                <div class="col-12">
                    <div class="title-page">
                        <div class="title-text">
                            Top News This Week
                        </div>
                        <div class="title-line"></div>
                    </div>
                </div>
                <?php while ( $recent_post->have_posts() ) : $recent_post->the_post();  
				$post_id = $recent_post->ID;
				$url = wp_get_attachment_url( get_post_thumbnail_id($post_id), 'thumbnail' ); 
                ?>
                <div class="col-12 item-container">
                    <div class="item">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <a href="<?php echo get_permalink($post_id) ?>">
                                    <div class="img">
                                        <img src="<?php echo $url ?>" alt="">
                                    </div>
                                </a>

                            </div>
                            <div class="col-12 col-lg-8">
                                <a href="<?php echo get_permalink($post_id) ?>">
                                    <div class="title">
                                        <?php echo get_the_title($post_id)?>
                                    </div>
                                </a>
                                <div class="text">
                                    <?php echo get_the_excerpt($post_id) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <?php wp_reset_postdata() ?>
            <div class="load-wrapper">
                <a href="#!" class="read-more" id="load-more">Load more</a>
            </div>
        </div>
    </div>
</div>

<script>
    let currentPage = 1;
    $('#load-more').on('click', function () {
        currentPage++; // Do currentPage + 1, because we want to load the next page

        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'json',
            data: {
                action: 'weichie_load_more',
                paged: currentPage,
            },
            success: function (res) {
                if (currentPage >= res.max) {
                    $('#load-more').hide();
                }
                $('#top_row').append(res.html);
            }
        });
    });
</script>
<?php
get_footer();