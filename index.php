<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package michiko
 */

get_header(); ?>

<section id='top-signup' class='center'>
	<div class='section-inner'>
		<div class='vacancy'>
			<div class='status'>

				<?php 
					query_posts('p=7');
					while ( have_posts() ): the_post(); 
						if ( CFS()->get('vacancy') == 0 ) {
					   		echo "<div class='no'>NO</div>";
						}
					endwhile; 
				?>

				<div class='yes'>VACANCY</div>
			</div>
		</div>
		<div class='signup'>
			<h3 class='message'>Signup for our mialing list to find out about open spots, events, and other happenings.</h3>
			<!-- <form class='signup-form'>
				<input type="text" name="email">
				<input type="submit" name="submit">
			</form> -->
			<div id="mc_embed_signup">
			<form class='subscribe' action="https://dannyfabricant.us17.list-manage.com/subscribe/post?u=b8a4a2f5082699553a98936a8&amp;id=7930919427" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
				
				<input type="email" value="" name="EMAIL" class="email small" id="mce-EMAIL" placeholder="email address" required>
				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b8a4a2f5082699553a98936a8_7930919427" tabindex="-1" value=""></div>
			   
			    </div>
			</form>
			</div>
		</div>
	</div>
</section>

<section id='carousel'>
	<div id="Glide" class="glide">

	    <div class="glide__arrows">
	        <button class="glide__arrow prev" data-glide-dir="<">
				<?= get_template_part( 'images/image', 'larr.svg' ); ?>
	        </button>
	        <button class="glide__arrow next" data-glide-dir=">">
				<?= get_template_part( 'images/image', 'rarr.svg' ); ?>
	        </button>
	    </div>

	    <div class="glide__wrapper">
	        <ul class="glide__track">
	            <li class="glide__slide">
	            	<img src="<?= get_template_directory_uri() . '/images/carousel/IMG_6290.jpg'; ?>">
	            </li>
	            <li class="glide__slide">
	            	<img src="<?= get_template_directory_uri() . '/images/carousel/IMG_6291.jpg'; ?>">
	            </li>
	        </ul>
	    </div>

	    <div class="glide__bullets"></div>

	</div>
</section>
<section id='info' class='center'>
	<div class='section-inner'>
		<h1 id='about'>Some text about 200 Riders Club, who we are, what we do, and how things work.</h1>
		<div id='facility'>
			<h2>Facility</h2>
			<h3 class='tagline'> Your personal door code gets you 24/7 access to the facility and all our resources.</h3>
			<div class='list'>
				<div class='list-item'>
					<div class='dot'></div>
					<div class='text'>Reserved parking space.</div>
				</div>
				<div class='list-item'>
					<div class='dot'></div>
					<div class='text'>Personal Shelf storage space.</div>
				</div>
				<div class='list-item'>
					<div class='dot'></div>
					<div class='text'>Wrenches, ratches, and all tools you need to perform basic maintenance.</div>
				</div>
				<div class='list-item'>
					<div class='dot'></div>
					<div class='text'>Bridgeport milling machine</div>
				</div>
				<div class='list-item'>
					<div class='dot'></div>
					<div class='text'>Makerbot 3d printer</div>
				</div>
			</div>
		</div>
		<div id='pricing'>
			<div class='price'>
				<h2>Pricing</h2>
				<h3>$275 / Month</h3>
			</div>
			<div class='signup'>
				<h2 class='medium'>Get on our mailing list to hear about vacancies first!</h2>
				<form class='subscribe' action="https://dannyfabricant.us17.list-manage.com/subscribe/post?u=b8a4a2f5082699553a98936a8&amp;id=7930919427" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					
					<input type="email" value="" name="EMAIL" class="email small" id="mce-EMAIL" placeholder="email address" required>
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b8a4a2f5082699553a98936a8_7930919427" tabindex="-1" value=""></div>
				   
				    </div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
