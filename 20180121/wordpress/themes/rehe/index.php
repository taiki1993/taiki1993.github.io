<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php if ( is_home() || is_front_page() ) : ?>
  <section class="first">
    <h3>ようこそ</h3>
    <p>このサイトは、WordPress練習用に作ったサイトです。子テーマを適用しています。ホームページの表示を　設定＞表示設定＞最新の投稿　としている場合、このページはindex.phpを使って表示されます。</p>
  </section>
  <section class="first">
    <h3>配列の練習</h3>
    <p><?php
      $week = array('月','火','水','木','金');
      foreach($week as $day){
        echo '「'.$day.'」';
      }
      $week[] = '土';
      echo '「'.$week[5].'」';
      $week[6] = '日';
      echo '「'.$week[6].'」';
    ?></p>
  </section>
  <section class="first">
    <h3>連想配列の練習</h3>
    <!--WPループで表示したい記事の条件　ここから-->
    <!--連想配列で指定する-->
    <?php
      $args = array(
       'post_type' => 'post', //投稿タイプ「投稿（post）」
       'category__in' => array( 1, 2, 4 ), //カテゴリーID
      );
      $the_query = new WP_Query( $args );
    ?>
    <!--WPループで表示したい記事の条件　ここまで-->
    <!--WPループの開始　ここから-->
    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <!--WPループの開始　ここまで-->
    <!--記事毎の表示処理を書く　ここから-->
    <article>
    <a href="<?php the_permalink(); ?>">
    <h4><?php the_title(); ?></h4>
    </a>
    <p class="post_cat">カテゴリ: <?php the_category(', '); ?></p>
    <p class="post_date">更新日: <?php the_time('Y年n月j日'); ?></p>
    <div class="post_excerpt"><?php the_excerpt(); ?></div>
    <hr>
    </article>
    <!--記事毎の表示処理を書く　ここまで-->
    <!--WPループの終了　ここから-->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <!--WPループの終了　ここまで-->
  </section>
  <?php else : ?>
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
  <?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
