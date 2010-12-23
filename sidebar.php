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

