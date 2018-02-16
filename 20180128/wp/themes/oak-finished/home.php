<?php
/*
Template Name: ブログ一覧用
*/
?>
<?php get_header(); ?>

<div class="container">
        <div class="header-page ef-parallax-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/blog-header.jpg)">
            <div class="col-md-6 col-md-offset-6">
                <div class="row">
                    <div class="inner-content">
                        <div class="header-content">
                            <h1>Blog Posts</h1>
                            <hr>
                            <p>Everything created in simple way</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container margin-top">
        <div class="blog-wrapper">

<?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>    

            <div class="blog-post">
                <div class="blog-front-image">
                    <div class="row">
                        <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0.10s">
                            <img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="Blog Image">
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <div class="blog-front-content wow animated fadeInUp" data-wow-delay="0.20s">
                                <div class="blog-front-content-inner">
                                    <span class="post-date"><?php the_time('d M - Y'); ?></span>
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>"><i class="read-more-blog-icon pe-7s-angle-right-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php endwhile; ?>
<?php endif; ?>

        </div>
    </div>

    <div class="container">
        <div class="pagination-ef wow animated fadeInUp" data-wow-delay="0.20s">
          <?php if(function_exists('wp_pagenavi')) {
            wp_pagenavi();
          } ?>
        </div>
    </div>


<?php get_footer(); ?>