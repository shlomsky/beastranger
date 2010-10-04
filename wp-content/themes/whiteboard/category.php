<?php get_header(); ?>

<div id="content">

	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?>

		<div class="postinfo">
			<?php the_time() ?>, <?php the_time('F j, Y'); ?><br />
			By <?php the_author_posts_link() ?>
		</div>
		<div id="post-content">
			<?php the_content(); ?>
			
		</div><!--#post-content-->

		
	<?php endwhile; else: ?>
		<div class="no-results">
			<p>
				<strong>Nothing yet.</strong>
				
			</p>
		
		</div><!--noResults-->
	<?php endif; ?>
		
	<div class="newer-older">
			
				
				<span style="float:left;"><?php previous_posts_link('« Newer Posts', 0); ?></span>
		
					<span style="float:right;"><?php next_posts_link('Older Posts »', 0); ?></span>
				
			
	
	</div><!--.newer-older-->
	
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>