<?php get_header(); ?>

<?php 
	if ( is_page('2')) {
	
?>

<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAs-AeXRfe7G8WFxVYEphTQBR07ZlHIqEkBLQ2rOeuA1mTf4BeUxT0MWtX3xnCUsLPudAApJ8FqnqgCA" type="text/javascript"></script>
   <script type="text/javascript">
function initialize() {
     if (GBrowserIsCompatible()) {
	        geoXml = new GGeoXml("http://maps.google.com/maps/ms?ie=UTF8&hl=en&msa=0&msid=207264463711218357759.000491c24f8b67becd2bc&ll=48.864715,-133.945312&spn=30.619027,79.013672&z=4&output=kml");
	        map = new GMap2(document.getElementById("map_canvas")); 
	        map.setCenter(new GLatLng(48.458352,-94.921875), 3); 
	        map.setUIToDefault();
	        map.addOverlay(geoXml);
	      }
	
   }

   </script>



	<div id="map_canvas" style="width: 848px; height: 398px;border: 1px solid #909090;"></div>
		
	<div id="two-blocks">
		<div id="left">
			<h1>Why?</h2>
			<p>		We met because of this truck.</p>



			<p>	Lillian had quit her job in New York and was WWOOFing in Cambria, CA. Brian had also quit his job in LA and was living out of his truck, driving to Alaska, when he showed up at the same hostel to work for a week. They became immediately inseparable, and when Brian returned to the road, Lillian was in the passenger seat.</p>



				<p>We only got as far as the Puget Sound when Brian was rehired at his old job and returned to LA. Lillian went home to New York, but we never stopped talking about how incredibly free we felt while living in that truck – how close we were to the places we stayed, how much we saw by traveling from place to place with nothing between us but the camper shell on the bed. We longed to return to a less materialistic way of life, to only have as much with us as we could keep in the cab and the back, to erase the excess baggage by lightening our load. Most importantly, however, we wanted to be strangers again. It is a unique perspective, being alone and foreign in a place; it encourages both external curiosity and inward contemplation. We thought that if we could slow down and take in our surroundings, really look at this country and the world we live in, then maybe we could understand ourselves a little better.</p>



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
