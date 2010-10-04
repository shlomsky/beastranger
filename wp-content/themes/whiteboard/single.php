<?php get_header(); ?>
<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
					<h1 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?>

					<div class="postinfo">
						<?php the_time() ?>, <?php the_time('F j, Y'); ?><br />
						By <?php the_author_posts_link() ?>
					</div>
					<div id="post-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
					</div><!--#post-content-->
					
					<div id="post-meta">
						
					
						<p>
							<?php the_category(', ') ?>
							<br />
							<?php the_tags('Tags: ', ', ', ' '); ?>
						</p>
					
					</div><!--#post-meta-->
					
				

				</div><!-- #post-## -->

				<div class="newer-older">


							<span style="float:left;"><?php next_post_link('%link', '« Newer Post', TRUE); ?></span>

								<span style="float:right;"><?php previous_post_link('%link', 'Older Post »', TRUE); ?> </span>



				</div><!--.newer-older-->
				

			

	<?php endwhile; ?><!--end loop-->
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>