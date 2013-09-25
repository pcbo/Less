<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title>pcbo</title>

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="icon" type="image/png" href="http://www.pcbo.me/wp-content/uploads/2013/09/favicon.gif">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<?php
	     /*-----------------------------------------------------------------------------------*/
	     /* Start header
	     /*-----------------------------------------------------------------------------------*/
	?>

		<header id="masthead" class="site-header" role="banner">
		     <div class="container">
		         
		          <div class="gravatar">
		               <?php
		                    // grab admin email and their photo
		                    $admin_email = get_option('admin_email');
		                    echo get_avatar( $admin_email, 100 );
		               ?>
		          </div><!--/ author -->
		         
		          <div id="brand">
		               <h2><a href="http://www.pcbo.me"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h2> &mdash; <h3>founder @ <a href="http://www.muchowork.com">muchowork.com</a></h3>
		          </div><!-- /brand -->
		    
		          <nav role="navigation" class="site-navigation main-navigation">
		               <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		          </nav><!-- .site-navigation .main-navigation -->
		         
		          <div class="clear"></div>
		     </div><!--/container -->
		         
		</header><!-- #masthead .site-header -->

		<div class="container">

		     <div id="primary">
		          <div id="content" role="main">


		<?php
		     /*-----------------------------------------------------------------------------------*/
		     /* Start Home loop
		     /*-----------------------------------------------------------------------------------*/
		    
		     if( is_home() || is_archive() ) {
		    
		?>
		               <?php if ( have_posts() ) : ?>

		                    <?php while ( have_posts() ) : the_post(); ?>

		                         <article class="post">
		                        
		                              <h1 class="title">
		                                        <?php the_title() ?>
		                              </h1>
		                              <div class="post-meta">
		                                   <?php if( comments_open() ) : ?>
		                                        <span class="comments-link">
		                                             <?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
		                                        </span>
		                                   <?php endif; ?>
		                             
		                              </div><!--/post-meta -->
		                             
		                              <div class="the-content">
		                                   <?php the_content( 'Continue...' ); ?>
		                                   <?php wp_link_pages(); ?>
		                              </div><!-- the-content -->
		                             
		                              <div class="meta clearfix">
		                                   <div class="category"><?php echo get_the_category_list(); ?></div>
		                                   <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
		                              </div><!-- Meta -->
		                             
		                         </article>

		                    <?php endwhile; ?>
		                   
		                    <!-- pagintation -->
		                    <div id="pagination" class="clearfix">
		                         <div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
		                         <div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
		                    </div><!-- pagination -->


		               <?php else : ?>
		                   
		                    <article class="post error">
		                         <h1 class="404">Nothing posted yet</h1>
		                    </article>

		               <?php endif; ?>

		         
		     <?php } //end is_home(); ?>

		<?php
		     /*-----------------------------------------------------------------------------------*/
		     /* Start Single loop
		     /*-----------------------------------------------------------------------------------*/
		    
		     if( is_single() ) {
		?>

		               <?php if ( have_posts() ) : ?>

		                    <?php while ( have_posts() ) : the_post(); ?>

		                         <article class="post">
		                        
		                              <h1 class="title"><?php the_title() ?></h1>
		                              <div class="post-meta">
		                                   <?php if( comments_open() ) : ?>
		                                        <span class="comments-link">
		                                             <?php comments_popup_link( __( 'Comment', 'less' ), __( '1 Comment', 'less' ), __( '% Comments', 'less' ) ); ?>
		                                        </span>
		                                   <?php endif; ?>
		                             
		                              </div><!--/post-meta -->
		                             
		                              <div class="the-content">
		                                   <?php the_content( 'Continue...' ); ?>
		                                  
		                                   <?php wp_link_pages(); ?>
		                              </div><!-- the-content -->
		                             
		                              <div class="meta clearfix">
		                                   <div class="category"><?php echo get_the_category_list(); ?></div>
		                                   <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
		                              </div><!-- Meta -->                             
		                             
		                         </article>

		                    <?php endwhile; ?>
		                   
		                    <?php
		                         // If comments are open or we have at least one comment, load up the comment template
		                         if ( comments_open() || '0' != get_comments_number() )
		                              comments_template( '', true );
		                    ?>


		               <?php else : ?>
		                   
		                    <article class="post error">
		                         <h1 class="404">Nothing posted yet</h1>
		                    </article>

		               <?php endif; ?>


		     <?php } //end is_single(); ?>
		    
		<?php
		     /*-----------------------------------------------------------------------------------*/
		     /* Start Page loop
		     /*-----------------------------------------------------------------------------------*/
		    
		     if( is_page()) {
		?>

		               <?php if ( have_posts() ) : ?>

		                    <?php while ( have_posts() ) : the_post(); ?>

		                         <article class="post">
		                        
		                              <h1 class="title"><?php the_title() ?></h1>
		                             
		                              <div class="the-content">
		                                   <?php the_content(); ?>
		                                  
		                                   <?php wp_link_pages(); ?>
		                              </div><!-- the-content -->
		                             
		                         </article>

		                    <?php endwhile; ?>

		               <?php else : ?>
		                   
		                    <article class="post error">
		                         <h1 class="404">Nothing posted yet</h1>
		                    </article>

		               <?php endif; ?>

		     <?php } // end is_page(); ?>

		          </div><!-- #content .site-content -->
		     </div><!-- #primary .content-area -->

		</div><!-- / container-->

		<!-- Google analytics code -->
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-39798468-1']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>

	</body>
	<footer>
		<h6>@pcbo presidential seal of approval.</h6>
	</footer>
</html>