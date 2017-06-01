<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flatter
 */

get_header(); ?>

	<?php $status=get_theme_mod('slider_category_status'); 
	if($status==0):?> 
	<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
		<!--スライドをめくる用の●アイコンを削除
       	<ol class="carousel-indicators">
       	<?php $i = 0; $num=get_theme_mod('slider_category_display_num'); ?>
       	<?php while($i<=$num) { ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="<?php if($i==0){echo 'active';}?>"></li>
         <?php $i=$i+1;}?> 
        </ol> -->

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
        	<?php
				$cid = get_theme_mod('slider_category_display');
				$category_link = get_category_link($cid);
				$flatter_cat = get_category($cid);
				if ($flatter_cat) {
        	?>

        	<?php
				global $post;
				$cnum=get_theme_mod('slider_category_display_num');
				$cnum=$cnum+1;
	            $args = array(
	              'posts_per_page' => $cnum,
	              'paged' => 1,
	              'cat' => $cid
	            );
	            $loop = new WP_Query($args);

	          
	            if ($loop->have_posts()) :  while ($loop->have_posts()) : $loop->the_post();
	          ?>
            
            <div class="item">
            	<div class="overlay"></div>
            	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'flatter-slider-thumb' ); ?>
				<div class="fill" style="background-image: url( <?php if ( has_post_thumbnail() ) {
					echo $image[0]; } else { ?>
				<?php echo esc_url( get_template_directory_uri());?>/images/hpl_top.jpg <?php } ?> )">
                </div>
                
                <div class="carousel-caption outer">
                 	<div class="middle">
                    	<div class="inner wow zoomIn" data-wow-duration="1.5s">
                    		<!--<h3><?php the_title();?></h3>タイトルを変更-->
							<h3>Human Performance Laboratory</h3>
                    		<?php /* the_excerpt();*/?><!--サブタイトルを変更-->
							<h4>加藤貴昭研究室</h4>
                    		<div class="buttons text-center">
                    		<?php if(get_theme_mod('slider_button')) { ?>
                    			<span><a href="<?php echo esc_url(get_theme_mod( 'slider_button', 'http://oceanwebthemes.com' )); ?>" class="btn btn-slider" title=""><?php echo esc_attr(get_theme_mod('slider_contact_title','Contact Us'));?></a></span>
                    		<?php }?>
							    <!-- About USのリンクを、固定ページ「HPLとは」にする-->
                    			<!--<span><a href="<?php the_permalink();?>" class="btn btn-slider" title=""><?php _e('About Us','flatter'); ?></a></span>-->
								<span><a href="http://localhost/index.php/hpl/" class="btn btn-slider" title=""><?php _e('About Us','flatter'); ?></a></span>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
            <?php                 
      			endwhile;
      				wp_reset_postdata();  
      			endif;                             
    				}
    		?>
        </div>
    </header>
<?php else:?>
	<?php $status=get_theme_mod('welcome_text_status','1'); 
	if($status==0):?> 
		<section class="page-header" style="background:#404040 url( <?php if ( get_header_image() ) { header_image(); }  ?>)"> 
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <div class="block">
	                        <h2 class="page-title" style="color:#<?php echo header_textcolor(); ?>"><?php echo esc_attr(get_theme_mod('welcome_textbox','Welcome to Flatter'));?></h2>
	                        <div class="underline"></div>
	                        <p style="color:#<?php echo header_textcolor(); ?>"><?php echo esc_attr(get_theme_mod('welcome_textarea','Welcome to Flatter'));?></p>
	                        <?php flatter_breadcrumbs(); ?>
	                    </div>
	                </div>
	            </div>
	        </div>
		</section>
	<?php else:?>
		<section class="page-header" style="background:#404040 url( <?php if ( get_header_image() ) { header_image(); }  ?>)"> 
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <div class="block">
	                        <h2 class="page-title" style="color:#<?php echo header_textcolor(); ?>"><?php _e('Welcome to ','flatter'); echo bloginfo('title'); ?></h2>
	                        <div class="underline"></div>
	                        <?php flatter_breadcrumbs(); ?>
	                    </div>
	                </div>
	            </div>
	        </div>
		</section>		
	<?php endif;?>
<?php endif;?>

	<section class="inner-content toppage-inner-content">
    	<div class="container">
        	<div class="row">  		

				<div class="col-md-12 detail-content">
					<?php if ( have_posts() ) : ?>
						<div class="masonry-3">
							<?php if (! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
							<?php endif; ?>

						<!--投稿ページの表示を削除-->
							<?php /* Start the Loop */ ?>
							<?php //while ( have_posts() ) : the_post(); ?>

								<?php

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									//get_template_part( 'template-parts/content', get_post_format() );
								?>


<!--ここから〜トップページに固定ページ3つを追加-->
<!--<div class="post-69 post type-post status-publish format-standard hentry category-1" >-->

	<!--hentryを削除-->
<div class="post-69 post type-post status-publish format-standard category-1" >

<div class="single-post " >


    <h3 class="post-title"><center><font color="#EEEEEE">HPL</font></center></h3>

    <!--<h6 class="post-info">5月 09 2017- POSTED BY kikuchi</h6>-->
	 <img src="http://localhost/wp-content/uploads/2017/05/横から見た目のアイコン素材.png" class="toppage-image">
    <!--<p>スポーツ心理学とは</p>-->

    <!--<div align="right"><a href="http://localhost/index.php/hpl/" title="" class="btn read-more">Read More</a></div>-->
	    <div align="center"><div style="margin-top : 20px"><a href="http://localhost/index.php/hpl/" title="" class="btn read-more">Read More</a></div></div>
    <!--
    <div class="tag-comment">
        <span class="pull-left"><i class="fa fa-tags"></i></span>

        <span class="pull-right"><i class="fa fa-comments"></i><span><span class="screen-reader-text">スポーツ科学とは は</span></span></span>
    </div>-->
</div>
</div>

<div class="post-69 post type-post status-publish format-standard category-1" >
<div class="single-post " >
 	<h3 class="post-title"><font color="#EEEEEE"><center>人間工学</font></center></h3>
	 <img src="http://localhost/wp-content/uploads/2017/05/ハートのマーク2.png"  class="toppage-image">
    <div align="center"><div style="margin-top : 20px"><a href="http://localhost/index.php/ergonomics/" title="" class="btn read-more">Read More</a></div></div>

</div>
</div>

<div class="post-69 post type-post status-publish format-standard category-1" >
<div class="single-post " >
    <h3 class="post-title"><font color="#EEEEEE"><center>スポーツ心理学</font></center></h3>
		 <img src="http://localhost/wp-content/uploads/2017/05/スポーツシューズアイコン1.png" class="toppage-image">
    <div align="center"><div style="margin-top : 20px"><a href="http://localhost/index.php/sportscience/" title="" class="btn read-more">Read More</a></div></div>
    </div>
</div>

<!--ここまで-->






							<?php //endwhile; ?>
						</div>
						
						
						<?php flatter_pagination_bars(); ?>

						<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>

				<?php get_sidebar('right');?>
			</div>
		</div>
	</section>

<!--お知らせセクションを追加-->
	<section>
		<section class="inner-content">
    	<div class="container">
        	<div class="row">  		
				<div class="col-md-12 detail-content">
					<div class="news-section">
					<h3 class="aaa">News</h3>

<!--お知らせ表示開始-->
<?php
global $post; $lastposts = get_posts('numberposts=5&cat=0'); //表示件数とカテゴリID
foreach($lastposts as $post) :
setup_postdata($post);
$post_title = $post->post_title;
if(mb_strlen($post_title)>40) { //記事タイトルの文字数
	$post_title = mb_substr($post_title,0,50).'...';
}
?>
<dl class="info_sample">
<dt><?php echo date("Y.m.d  ", strtotime($post->post_date)); ?></dt>
<dd>
<?php
      $days=30; //Newをつける日数
      $today=date_i18n('U'); $entry=get_the_time('U');
      $diff1=date('U',($today - $entry))/86400;
      if ($days > $diff1){
        echo'<font color="F26964">New!</font>';
         }
?>
<a href="<?php echo get_permalink( get_the_ID() ); ?>" id="post-<?php the_ID(); ?>"> <?php echo $post_title; ?></a></dd>
</dl>
<?php endforeach; ?>
<!--お知らせ表示ここまで-->

    </div>
		</div>
			</div>
				</div>
	</section>
<?php get_footer(); ?>