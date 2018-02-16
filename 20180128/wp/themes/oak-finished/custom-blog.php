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
                            <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="Blog Image">
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <div class="blog-front-content wow animated fadeInUp" data-wow-delay="0.20s">
                                <div class="blog-front-content-inner">
                                    <span class="post-date"><?php the_date('d M - Y'); ?></span>
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
        <ul class="pagination-ef wow animated fadeInUp" data-wow-delay="0.20s">
            <li>
                <a href="#">
                    <i class="pe-7s-angle-left"></i>
                </a>
            </li>
            <li class="current"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">8</a></li>
            <li>
                <a href="#">
                    <i class="pe-7s-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>


<?php get_footer(); ?>