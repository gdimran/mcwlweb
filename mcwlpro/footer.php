		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-social">
							<article>
							<!--<span>Follow Us: </span>-->
							<a href="https://www.facebook.com/mirpurceramics/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/fb.png" alt="" target="_blank"/></a>
							<a href="https://www.linkedin.com/company/mirpur-ceramic-works-ltd/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/link.png" alt="" target="_blank"/></a>
							<a href="https://www.youtube.com/channel/UCduRxwJFHzUwEPvPo84oRfw"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/yt.png" alt="" target="_blank"/></a>
							</article>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="footer-copyright">
							<div class="footer-menu">
								<!--<ul>
									<li class="footer-first-menu" ><a href="#">Sales Conditions</a></li>
									<li><a href="#">Credits</a></li>
									<li><a href="#">Copyright 2019 Mirpur Ceramics Limited</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>-->
											<?php wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'container' => false,
							'menu_class'=> '',
							'items_wrap' => '<ul class="" id="">%3$s</ul>',
							'link_before'     => '',
							'link_after'      => '',
						));
						 ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


	</div>











	<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-for-slicknav.min.js"></script>
	<script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.min.js"></script>-->







	<script type="text/javascript">
//	jQuery(document).ready(function(){
//		jQuery('#menu').slicknav();
//	});
//

	</script>

	<?php wp_footer() ?>



	<script type="text/javascript">
	    function updateOutput() {
	            //get form
	        var form = document.getElementById("calc");
	            //get output
	        var out1 = form.elements["totalProduct"];
	        var out2 = form.elements["totalPrice"];
	            //get two numbers
	        var num1 = parseInt(form.elements["product-cat"].value);
	        var num2 = parseInt(form.elements["product-required"].value);
	        var num3 = parseInt(form.elements["coverage-area"].value);
	        out1.value = num2*num3;
	        out2.value=num1*num2*num3;

	    }

	</script>

</body>
</html>
