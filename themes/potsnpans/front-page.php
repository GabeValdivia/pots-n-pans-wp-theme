<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package potsnpans
 */

get_header();
?>
    
	<main id="primary" class="site-main">
		<!-- Hero Slider -->
		<section class="container pb-5 pt-3">
			<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="10000">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide-banner-1.jpg" class="d-block w-100" alt="Pots N' Pans Deal 1"></a>
					</div>
					<div class="carousel-item" data-bs-interval="2000">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide-banner-2.jpg" class="d-block w-100" alt="Pots N' Pans Deal 2"></a>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>	
		</section>
		<!-- End Hero Slider -->

		<!-- Best Selling Products -->
		<section class="container">

			<h1 class="text-center pt-2">Best Selling Products</h1>
			<p class="text-center pt-2">High quality cookware products worth every cent! Buy it once, buy it for life!</p>
			
			<div class="pt-5 pb-2">
				<?php echo do_shortcode('[best_selling_products columns=4 limit=4]');?>
			</div>
		</section>
		<!-- End Best Selling Products -->

		<!-- Featured CTA Section -->
		<section class="container pb-5">
			<div class="row">
				<div class="col-md-6 col-lg-3 saphire-one-cta-col rounded-start g-0">
					<h1>Saphire One</h1>
					<h4>Small details, big difference</h4>
					<ul class="hp-saphire-one-features">
						<li><img class="saphire-cta-icon" src="<?php echo get_template_directory_uri(); ?>/img/pot.svg" alt="kitchen pot icon">Pots & Pans</li>
						<li><img class="saphire-cta-icon" src="<?php echo get_template_directory_uri(); ?>/img/towel.svg" alt="kitchen towel icon">Ovenware</li>
						<li><img class="saphire-cta-icon" src="<?php echo get_template_directory_uri(); ?>/img/turkey.svg" alt="ovenware with turkey icon">Textiles</li>
					</ul>
					<button type="button" class="btn btn-lg rounded-3">Shop Now</button>
				</div>
				<div class="col-md-6 col-lg-9 g-0 saphire-right-col-img rounded-end"><!--Empty section, image served up as background image via saphire-right-col-img class. For visual effect only--></div>
			</div>
		</section>
		<!-- EndQueue
• 1 / 6
10:34
Now playing
Added to queue
Freed captive explains why Russians are taking civilians
MX
 Featured CTA Section -->

		<!-- Special Offers Products -->
		<section class="container">

			<h1 class="text-center pt-3">Special Offers</h1>
			<p class="text-center pt-2">High quality cookware products worth every cent! Buy it once, buy it for life!</p>
			
			<div class="pt-5 pb-2">
				<?php echo do_shortcode('[sale_products columns=4 limit=4]');?>
			</div>
		</section>
		<!-- End Special Offers Products -->


	</main><!-- #main -->

<?php
get_footer();