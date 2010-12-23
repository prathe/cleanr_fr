<?php get_header(); ?>
<div class="grid_11">
	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content(); ?>
				

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p class="small">Tags: ', ', ', '</p>'); ?>

				<p class="postmetadata alt">
					<small>
						Cet article a été publié le <?php the_time('j F Y') ?> à <?php the_time() ?>
						sous <?php the_category(', ') ?>.
						Vous pouvez vous abonner aux <?php post_comments_feed_link('fil RSS'); ?> des commentaires de cet article.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							Vous pouvez <a href="#respond">laisser un commentaire</a> ou faîtes un <a href="<?php trackback_url(); ?>" rel="trackback">rétrolien</a> depuis votre site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Vous pouvez faire un <a href="<?php trackback_url(); ?> " rel="trackback">rétrolien</a> depuis votre site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							Vous pouvez laisser un commentaire.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							La section des commentaires est fermée.

						<?php } edit_post_link('Modifier cet article','','.'); ?>

					</small>
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
