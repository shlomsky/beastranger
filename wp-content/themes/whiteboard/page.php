<?php get_header(); ?>

<?php 
	if ( is_page('2')) {
	
?>

	<div id="map">
		<iframe width="848" style="border:1px solid #c0c0c0;" height="398" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=104024361749664089066.000491c24f8b67becd2bc&amp;ll=33.997956,-118.475447&amp;spn=0.028463,0.07287&amp;z=14&amp;output=embed"></iframe>
		</div>
		
	<div id="two-blocks">
		<div id="left">
			<h1>Why?</h2>
			<p>	Brian and I met because of this truck.</p><p>

				I had quit my job in New York and was WWOOFing at a hostel in Cambria, CA. Brian had also quit his job in LA and was living out of his truck, driving to Alaska, when he showed up at Cambria to work for a week. We hit it off and I moved into the truck with him and we continued north. We got as far as the Puget Sound when Brian was rehired at his old job and returned back to LA. I went home to New York, but we never stopped talking about how incredibly free we felt while living in that truck – how close we were to the places we stayed, how much we saw by travelling from place to place with nothing between us but the camper shell on the bed. We longed to return to a less materialistic way of life, to only have as much with us as we could keep in the cab and the back, to erase the excess baggage by lightening our load. Most importantly, however, we wanted to be strangers again. It is a unique perspective, being alone and foreign in a place; it encourages both external curiosity and inward contemplation. We thought that if we could slow down and take in our surroundings, really look at this country and the world we come from, then maybe we could understand ourselves a little better.</p><p>

				Aside from our desire to return to the truck, I had begun to take poetry classes. I have been a poet since I was a teenager, but I had never really considered myself a writer until a couple of years ago. I started to wonder what would happen if I let myself focus on writing for a few months, let it be the only task I have each day. Would I become a better writer?</p><p>

				So a year ago, Brian and I decided to make a plan. We would travel the country, live in the truck, and write. This is our adventure.</p>
		</div><!--#left-->
		<div id="right">
			<h1>How?</h2>
			<p>	Brian and I will travel by day in the cab, and sleep by night in the bed. Our truck is equipped with the following: </p>

			<ul>	<li>a camper shell and carpeting</li>

				<li>foam for a mattress (including a fitted sheet which may or may not actually fit)</li>

				<li>pillows, comforter, blanket, two sleeping bags</li>

				<li>shoes and clothes</li>

				<li>an electric lantern and a flashlight</li>

				<li>a propane camping stove</li>

				<li>various canned foods, ramen, granola, maybe some bananas</li>

				<li>a pot, a pan, an electric tea kettle, and some silverware</li>

				<li>awesome travel mugs, a water bottle, and a 7 gallon water container</li>

				<li>vitamins so we don’t get scurvy</li>

				<li>no-rinse soap, deodorant, toothbrushes, toothpaste, baking soda, and other hygienic necessities</li>

				<li>a stereo so we can listen to This American Life</li>

				<li>some books </li></ul>

			<p>	You can follow our journey on the map above and through the blog posts, poems and photos. Help us out with suggestions, comments, or just a friendly hello. We’re so happy we can share our trip with you!</p>
		</div><!--#right-->
		</div><!--#two-blocks-->
		
		<?php get_footer(); ?>

<?php
}
	else {

?>	

<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>

			<h1><?php the_title(); ?></h1>

		
			<?php echo '<div class="featured-t
			humbnail">'; the_post_thumbnail(); echo '</div>'; ?>

			<div class="suggestinfo">
				<?php the_content(); ?>
				<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
			</div><!--#pageContent -->

		</div><!--#post-# .post-->

		<?php comments_template( '', true ); ?>

	<?php endwhile; ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php } ?>
