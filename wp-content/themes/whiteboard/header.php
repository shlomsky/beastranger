<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
	<?php if ( is_tag() ) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo '404 Not Found | '; bloginfo( 'name' );
		} else {
			echo wp_title( ' | ', false, right ); bloginfo( 'name' );
		} ?>
	</title>
	<!-- While these meta keywords are not ideal and the meta description could be better, they are better than nothing -->
	<meta name="keywords" content="<?php bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<link rel="canonical" href="<?php echo curPageURL(); ?>" />
	<!--
		optional HTML 5 Shim
		Fixes the new HTML 5 elements (article, header, etc.) for IE8 and below
		http://code.google.com/p/html5shim/
	-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="//blueprint/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="//blueprint/print.css" type="text/css" media="print">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--
	Pulls the latest version of jQuery from Google's CDN
	http://code.google.com/apis/libraries/
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="main"><!-- this encompasses the entire Web site -->
	<div id="header">
		
			<div id="header-container">
				<div id="logo">
					<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">
						<img src="<?php bloginfo('url'); ?>/images/logo.png" border="0" />
					</a>
				</div><!--#logo-->
			
				<div id="daytracker">
					<!-- <script>

					var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

					function countup(yr,m,d){
					var today=new Date()
					var todayy=today.getYear()
					if (todayy < 1000)
					todayy+=1900
					var todaym=today.getMonth()
					var todayd=today.getDate()
					var todaystring=montharray[todaym]+" "+todayd+", "+todayy
					var paststring=montharray[m-1]+" "+d+", "+yr
					var difference=(Math.round((Date.parse(todaystring)-Date.parse(paststring))/(24*60*60*1000))*1)
					difference+=""
					document.write("Day "+difference+" ")
					}
					//enter the count up date using the format year/month/day
					countup(2010,10,08)
					</script> --> 114 Days
				</div>   
			
				<div id="quote" class="calibri">
					<em>&quot;I hope that my brief time as a stranger 
					will allow me to be a stranger everywhere I go 
					and I will not fear to sit alone and smile.&quot; </em>
					<span class="source">-Lillian Meredith</span>
				</div><!--#quote-->
			</div><!--#header-container-->
		
			<div id="nav">
				<div id="menu">
					
					<?php 
						if ( is_page('2')) {
					?>
							<li><a href='/'><img src='images/atruckpilgrimage_active.png' border='0' /></a></li>
								  <li><a href='/category/the-daily-update'><img src='images/thedailyupdate.png' border='0' /></a></li>
								  <li><a href='/category/poetry'><img src='images/poetry.png' border='0' /></a></li>
							 	  <li><a href='/category/photographs'><img src='images/photographs.png' border='0' /></a></li>
								  <li><a href='/suggestions'><img src='images/suggestions.png' border='0' /></a></li>
					<?php 
						}
						
						elseif ( is_category('3')) {
					?>
							<li><a href='/'><img src='/images/atruckpilgrimage.png' border='0' /></a></li>
								  <li><a href='/category/the-daily-update'><img src='/images/thedailyupdate_active.png' border='0' /></a></li>
								  <li><a href='/category/poetry'><img src='/images/poetry.png' border='0' /></a></li>
							 	  <li><a href='/category/photographs'><img src='/images/photographs.png' border='0' /></a></li>
								  <li><a href='/suggestions'><img src='/images/suggestions.png' border='0' /></a></li>
					<?php
						}
						
						elseif ( is_category('4')) {
							?>
							<li><a href='/'><img src='/images/atruckpilgrimage.png' border='0' /></a></li>
								  <li><a href='/category/the-daily-update'><img src='/images/thedailyupdate.png' border='0' /></a></li>
								  <li><a href='/category/poetry'><img src='/images/poetry_active.png' border='0' /></a></li>
							 	  <li><a href='/category/photographs'><img src='/images/photographs.png' border='0' /></a></li>
								  <li><a href='/suggestions'><img src='/images/suggestions.png' border='0' /></a></li>
					<?php
						}
						
						elseif ( is_category('5')) {
						?>
							<li><a href='/'><img src='/images/atruckpilgrimage.png' border='0' /></a></li>
								  <li><a href='/category/the-daily-update'><img src='/images/thedailyupdate.png' border='0' /></a></li>
								  <li><a href='/category/poetry'><img src='/images/poetry.png' border='0' /></a></li>
							 	  <li><a href='/category/photographs'><img src='/images/photographs_active.png' border='0' /></a></li>
								  <li><a href='/suggestions'><img src='/images/suggestions.png' border='0' /></a></li>
					<?php
						}
						
						elseif ( is_page('5')) {
						?>
							<li><a href='/'><img src='/images/atruckpilgrimage.png' border='0' /></a></li>
								  <li><a href='/category/the-daily-update'><img src='/images/thedailyupdate.png' border='0' /></a></li>
								  <li><a href='/category/poetry'><img src='/images/poetry.png' border='0' /></a></li>
							 	  <li><a href='/category/photographs'><img src='/images/photographs.png' border='0' /></a></li>
								  <li><a href='/suggestions'><img src='/images/suggestions_active.png' border='0' /></a></li>
					
					<?php
						}
						else { ?>
							<li><a href='/'><img src='/images/atruckpilgrimage.png' border='0' /></a></li>
								  <li><a href='/category/the-daily-update'><img src='/images/thedailyupdate.png' border='0' /></a></li>
								  <li><a href='/category/poetry'><img src='/images/poetry.png' border='0' /></a></li>
							 	  <li><a href='/category/photographs'><img src='/images/photographs.png' border='0' /></a></li>
								  <li><a href='/suggestions'><img src='/images/suggestions.png' border='0' /></a></li>
					<?php	}
						
					?>
					
					
				</div><!--#menu-->
			</div><!--#nav-->
			
	</div><!--#header-->
	<div class="clear"></div>
	
	<div id="bios">
		<li>
			<img src="<?php bloginfo('url'); ?>/images/bio_brian.png"><br />
			Brian Andrich<br />
			26 years old<br />
			Los Angeles, CA<br />
			<a href="http://brianandrich.com">Website</a>
		</li>
		<li>
			<img src="<?php bloginfo('url'); ?>/images/bio_lillian.png"><br />
			Lillian Meredith<br />
			25 years old<br />
			New York, NY<br />
			<a href="http://lillianmeredith.com">Website</a>
		</li>
		<li>
			<img src="<?php bloginfo('url'); ?>/images/bio_truck.png"><br />
			Ford Ranger<br />
			10 years old<br />
			Dearborn, MI<br />
			
		</li>
	</div><!-- #bios-->
	
	
	<div class="container">