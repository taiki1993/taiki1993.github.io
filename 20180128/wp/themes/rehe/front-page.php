<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
  
  <section class="first wrap">
    <h3>ようこそ</h3>
    <p>このサイトは、WordPress練習用に作ったサイトです。子テーマを適用しています。ホームページの表示を　設定＞表示設定＞固定ページ　としている場合、このページはfront-page.phpを使って表示されます。</p>
  </section>
  <section class="first wrap">
    <h3>コメント、$post変数、echoによる出力、エスケープ処理</h3>
    <p><?php 
      # 1行コメント
      //1行コメント
      /*
      複数行コメント
      複数行コメント
      */
      echo 'PHPからテキストを出力'; ?></p>
      <?php echo '<p>PHPのechoで出力してみる</p>'; //HTMLタグはPHPタグに含めないほうが煩雑にならない ?>
    <p><?php //変数をつかってみよう。echoする前はエスケープ処理を入れて無害化する。
      $myPostId = esc_html($post->ID);
      $myPostTitle = esc_html($post->post_title);
      $myPostSlug = esc_html($post->post_name);
      echo '固定ページの投稿IDは「'.$myPostId.'」<br>';
      echo '固定ページのタイトルは「'.$myPostTitle.'」<br>';
      echo '固定ページのスラッグは「'.$myPostSlug.'」<br>';
    ?>
    </p>
  </section>
  <section class="first wrap">
    <h3>スーパーグローバル変数「GETパラメタ」を表示してみる</h3>
    <p>スーパーグローバル変数とは、スクリプト全体を通してすべてのスコープで使用可能な変数。<br>URLにパラメタをつけてURLを表示することで、そのページのPHPに値を渡すことができます。<br>URLに記述する方式をGET方式といいます。（POST方式はフォーム送信時によく利用される方式です）</p>
    <?php $param = esc_attr($_GET['param']);
    echo 'GETパラメタparamの内容は「'.$param.'」です。'; ?>
   </section>
  <section class="first wrap">
    <h3>変数の中身をダンプしてみる</h3>
    <?php print_r($post); ?>
   </section>
		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
