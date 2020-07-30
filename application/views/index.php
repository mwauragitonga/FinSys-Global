<?php $this->load->view('template/header'); ?>



	<div class="ftco-blocks-cover-1">
		<div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo base_url(); ?>assets/images/home2.webp')">
			<div class="container">
				<div class="row align-items-center ">
					<div class="col-md-5 mt-5 pt-5">
						<h1 class="mb-3">A High End ICT Solutions Company.</h1>
						<p>We are a company passionate about using technology to help businesses improve operations, streamline operations  and ultimately
							grow by providing  software and hardware Solutions.</p>
						<style type="text/css">
							#aboutButton , #servicesButton {
								display:inline-block;
								/**other codes**/
							}
						</style>
						<div class="col-lg-12 " >
<!--							<p ><a href="--><?php //echo base_url(); ?><!--about" id="aboutButton" class="col-lg-6 btn btn-primary">About Us</a></p>-->
							<p ><a href="#about"  id="servicesButton" class="col-lg-6 btn btn-primary">Our Services</a></p>
						</div>

					</div>
					<div class="col-md-6 ml-auto">
						<div class="white-dots">
							<img src="<?php echo base_url(); ?>assets/images/img_2.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="site-section" id="about">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-7 mb-5">
					<h5 class="subtitle">About Us</h5>
					<h2>A creative IT Solutions Company with a great track record of delivering excellent services to all our clients.</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-enhanced_encryption"></span>
              </span>
						<h3>Cyber Security</h3>
						<p>As the adoption of technology increases, so do the threats users face online.
							We will help you protect yourself and your business from any threats online.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-assistive-listening-systems"></span>
              </span>
						<h3>Unified Communications</h3>
						<p>Collaboration is key for any business, we help improve collaboration and performance of your workforce through efficient collaboration tools.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-connectdevelop"></span>
              </span>
						<h3>Networking</h3>
						<p>At the work place, good and dependable network infrastructure has become a necessity. Build a good foundation for your business through our superior networking solutions.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-database"></span>
              </span>
						<h3>Datacenter Solutions</h3>
						<p>We design, implement and maintain different data center solutions in line with your business' needs.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-security"></span>
              </span>Information Security</h3>
						<p>Security of the data shared across devices and users cannot be overlooked. We help businesses ensure information remains secure online and on premise.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-cloud"></span>
              </span>
						<h3>Cloud Solutions</h3>
						<p>Looking to decentralize operations? Looking to declutter your office space?  Look no further, our cloud solutions will sort you out!</p>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-12 text-center">
					<a href="<?php echo base_url(); ?>services"" class="btn btn-primary">View All Services</a>
				</div>
			</div>
		</div>
	</div>





	<div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo base_url(); ?>assets/images/hero_2.jpg');">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-7 text-center mb-5">
					<h2 class="text-white">Are you ready to revolutionize your business for the better?</h2>
					<br> <br>
					<p><a href="#" class="btn btn-primary">Contact Us Today</a></p>

				</div>
			</div>

		</div>
	</div>


<!-- P.S Banner with projects may come in here-->

	<?php $this->load->view('template/footer'); ?>




