<?php $this->load->view('template/header'); ?>

<div class="ftco-blocks-cover-1">
	<div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
		style="background: black;">
	</div>
</div>

	<div class="site-section bg-light" id="contact-section">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-7 text-center mb-5">
					<h2>Get In Touch </h2>
					<?php if(!empty($message) && $message =='Email Sent, We will be in touch ASAP.')
					{ ?>
						<div class="alert alert-success alert-dismissible " role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong><?php echo $message; ?></strong>
						</div>

					<?php }elseif(!empty($message) && $message == 'Email not sent! Please try again.'){ ?>
						<div class="alert alert-danger alert-dismissible " role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong><?php echo $message; ?></strong>
						</div>
					<?php } ?>
				</div>

			</div>
			<div class="row">
				<div class="col-lg-8 mb-5" >
						<?php echo(form_open('sendMail')) ?>

						<div class="form-group row">
							<div class="col-md-12 mb-4 mb-lg-0">
								<input type="text" class="form-control" placeholder="Full name" name="fName">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Email address" name="email">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<textarea name="message" id="" class="form-control"  placeholder="Message"  cols="30" rows="10"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 mr-auto">
								<input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
							</div>
						</div>
					<?php echo form_close() ?>
				</div>
				<div class="col-lg-4 ml-auto">
					<div class="bg-white p-3 p-md-5">
						<h3 class="text-black mb-4">Contact Details</h3>
						<ul class="list-unstyled footer-link">
							<li class="d-block mb-3"><span class="d-block" style="color: red">Phone:</span><span>+1 3025 977 612 </span></li>
							<li class="d-block mb-3"><span class="d-block "style="color: red">Email:</span><span>info@finsys-group.com</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>




	<?php $this->load->view('template/footer'); ?>

