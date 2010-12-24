<?php get_header(); ?>

	<div class="grid_11">
	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<span class="postmetadata"><?php the_category(' / ') ?> &mdash; <?php edit_post_link('Modifier', '', ' &mdash; '); ?>  <?php comments_popup_link('Aucun commentaire', 'Un commentaire', '% commentaires'); ?></span><br/>
			    <small><span class="date"><?php the_time('d') ?></span><br /><?php the_time('M y') ?> <!-- by <?php the_author() ?> --></small>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers l'article : <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
				

				<div class="entry">
					<?php the_content("<em>Lire le reste de l'article &rarr;</em>"); ?>
				</div>
				<div class="clearfix"></div>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&larr; Articles précédents') ?></div>
			<div class="alignright"><?php previous_posts_link('Articles plus récents &rarr;') ?></div>
			<div class="clearfix"></div>
		</div>
		
		

	<?php else : ?>

		<h2 class="center">Introuvable</h2>
		<p class="center">Désolé, votre requête n'a généré aucun résultat.</p>
		<?php //get_search_form(); ?>

	<?php endif; ?>
		

	</div>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
