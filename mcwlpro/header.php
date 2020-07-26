<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162525420-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162525420-2');
</script>

<style>
/*-----contactform7----*/
#cf7md-form .mdc-button::before, #cf7md-form .mdc-button::after, #cf7md-form .mdc-button--raised:not(:disabled), #cf7md-form .mdc-button--unelevated:not(:disabled) {
    background-color: #b00020 !important;
}
#cf7md-form .mdc-button--raised:not(:disabled):hover, #cf7md-form .mdc-button--unelevated:not(:disabled):hover {
    background-color: #6c757d !important;
}

</style>

	<!-- Hotjar Tracking Code for http://mirpurceramic.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1642012,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<script type="text/javascript">
document.addEventListener('wpcf7mailsent', function( event ){
	if ( '3123' === event.detail.contactFormId ) {
    location = 'https://mirpurceramic.com/thank-you-quotation/';
  }else{
	location ='https://mirpurceramic.com/thank-you/';
  }
}, false);
</script>


	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
	<div class="main-area">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo-area">
						<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
					</div>
				</div>
				<div class="col-md-7">
					<div class="menu-area">
						<div class="main-menu">
							<!--<ul id="menu">
								<li class="first-menu" id="active"><a href="<?php echo home_url(); ?>">Home</a></li>
								<li id="sub-menu"><a href="#">About Us</a>
									<ul>
										<li><a href="about-us.html">Company Profile</a></li>
										<li><a href="#">Awards & Achivement</a></li>
										<li><a href="https://khadimceramic.com/">Khadim Ceramics</a></li>
										<li id="sub-menu"><a href="find-us.html">Find Us</a>
											<ul>
												<li><a href="#">Khadim Ceramics</a></li>
												<li id="sub-menu"><a href="#">Find Us</a>
													<ul>
														<li><a href="#">Kcl</a></li>
														<li><a href="#">Find Us</a></li>
														<li><a href="#">Careers</a></li>
														<li><a href="#">CSR</a></li>
													</ul>
												</li>
												<li><a href="#">Careers</a></li>
												<li><a href="#">CSR</a></li>
											</ul>
										</li>
										<li><a href="careers.html">Careers</a></li>
										<li><a href="#">CSR</a></li>
									</ul>
								</li>
								<li id="sub-menu"><a href="#">Products</a>
									<ul>
										<li><a href="#">Products Review</a></li>
									</ul>
								</li>
								<li><a href="#">News & Events</a></li>
								<li id="sub-menu"><a href="#">Download</a>
									<ul>
										<li><a href="https://khadimceramic.com/wp-content/uploads/2018/10/catalogue-for-pdf.pdf">Catalogue</a></li>
										<li><a href="https://khadimceramic.com/wp-content/uploads/2019/02/Final-Price-List-25-2-2019.pdf">Price List</a></li>
									</ul>-->

									<?php wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class'=> 'mainmenu',
							//'walker'  => new Child_Wrap(),
							'items_wrap' => '<ul class="" id="menu">%3$s</ul>',
							'link_before'     => '',
							'link_after'      => '',
							//'fallback_cb' => ''
						));
						 ?>

								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="phone-number">
						<p>+88 01730 010 555</p>
					</div>
				</div>
			</div>
		</div>
		</header>
