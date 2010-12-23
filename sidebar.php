	<div id="sidebar" class="grid_5">
		<ul class="nobullet">
			<li><?php if(function_exists('get_search_form')) : ?>
				<?php get_search_form(); ?>
				<?php else : ?>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				<?php endif; ?></li>
				
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>-->
			
			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>Archives de la catégorie <strong><?php single_cat_title(''); ?></strong></p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>Archives du <?php the_time('j F Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>Archives de <?php the_time('F Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>Archives de <?php the_time('Y'); ?>.</p>

			<?php /* If this is a search archive */ } elseif (is_search()) { ?>
			<p>Résultats pour <strong>'<?php the_search_query(); ?>'</strong>.</p>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>Page <?php $_GET['paged'] ?> des archives.</p>

			<?php } ?>

			</li> <?php }?>

			<?php //wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('title_li=<h2>Catégories</h2>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>
			<?php } ?>

			<?php endif; ?>
		</ul>
	</div>

