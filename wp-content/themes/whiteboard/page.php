<?php get_header(); ?>

<?php 
	if ( is_page('2')) {
	
?>

	<div id="map">
		<iframe width="848" height="398" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=264+4th+avenue+venice+ca&amp;daddr=34.05946,-118.25236+to:34.13069,-118.26766+to:35.4099793,-119.4121476+to:35.61172,-119.64977+to:35.602,-119.21175+to:camp+wawona+yosemite+to:Yosemite+National+Park,+California+95389+(Tamarack+Flat+Campground)+to:37.9808,-120.64126+to:37.89277,-121.48719+to:37.9942795,-122.2961021+to:san+francisco,+ca&amp;hl=en&amp;geocode=FYLEBgIdIzXw-Cld3VWTz7rCgDHP5nAIMBtZ4Q%3BFcS0BwIduJzz-Cm_7MfarMfCgDE28JKeWCiLHw%3BFQLLCAId9GDz-ClfmNTg7sDCgDHmil-XOsgE6g%3BFTtQHAIdTerh-ClbSmcgNlPqgDFh_-eVb8GxOw%3BFUhkHwIdFkre-Cm1W0Ialw_rgDG460NRPFIJ8A%3BFVA-HwIdGvnk-CmhlMaLdffqgDG4v_NGV7QhIg%3BFdnbPAIdMZve-CGVqJXxGmJABSkpNT7eSpCWgDHxMu7_FKuHpA%3BFVQNQAIdDvfc-CH9ClXlqt88Lg%3BFYCKQwIdFCnP-ClJd2XevuyQgDEO2G4vUxgSiA%3BFaIyQgIdqkDC-CkD439QzhqQgDGTDcK2Trre4w%3BFSe_QwId2ui1-Cl7XW_YG3eFgDG2xFsi7-Dy7Q%3BFVJmQAIdKAe0-CkhAGkAbZqFgDH_rXbwZxNQSg&amp;mra=dpe&amp;mrcr=2&amp;mrsp=10&amp;sz=11&amp;via=1,2,3,4,5,8,9,10&amp;sll=37.915493,-122.178268&amp;sspn=0.286021,0.617294&amp;ie=UTF8&amp;ll=36.615528,-119.772949&amp;spn=3.509414,9.30542&amp;z=7&amp;output=embed"></iframe>
		</div>
		
	<div id="two-blocks">
		<div id="left">
			<h1>Why?</h2>
			<p>		We met because of this truck.</p>



			<p>	Lillian had quit her job in New York and was WWOOFing in Cambria, CA. Brian had also quit his job in LA and was living out of his truck, driving to Alaska, when he showed up at the same hostel to work for a week. They became immediately inseparable, and when Brian returned to the road, Lillian was in the passenger seat.</p>



				<p>We only got as far as the Puget Sound when Brian was rehired at his old job and returned to LA. Lillian went home to New York, but we never stopped talking about how incredibly free we felt while living in that truck – how close we were to the places we stayed, how much we saw by traveling from place to place with nothing between us but the camper shell on the bed. We longed to return to less materialistic way of life, to only have as much with us as we could keep in the cab and the back, to erase the excess baggage by lightening our load. Most importantly, however, we wanted to be strangers again. It is a unique perspective, being alone and foreign in a place; it encourages both external curiosity and inward contemplation. We thought that if we could slow down and take in our surroundings, really look at this country and the world we come from, then maybe we could understand ourselves a little better.</p>



			<p>	Lillian wants to focus on her writing, through poems and blog posts. Brian will take the time to read, study and learn more about life.</p>



				<p> Welcome to our adventure. 
			</p>
		</div><!--#left-->
		<div id="right">
			<h1>How?</h2>
			<p>	We will travel by day in the cab, and sleep by night in the bed. Our truck is equipped with the following: </p>

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
