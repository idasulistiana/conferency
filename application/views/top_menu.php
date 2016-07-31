<div id="header">
		<div class="header_body">
			<?php if($this->session->userdata('status') == ""){ ?>
			<div class="btn_register">
				<span></span>
				<!-- <a href="index.html" class="logo"><img src="<?php echo base_url() ;?>/assets/images/logo.png" alt=""></a> -->
				<button type="button" class="btn btn-info">Organization Commitee</button>
				<a href="<?php echo site_url('Registration') ?>" class="btn btn-danger" title="Register as Speaker">Submit Abstract</a>
				<a href="<?php echo site_url('Registration/participant') ?>" class="btn btn-success" title="Register as Participant">Register Now</a>
				<a href="<?php echo site_url('Login') ?>" class="btn btn-warning" title="Login">&emsp;Login&emsp;</a>
			</div>
			<?php } ?>
			<ul>
				<?php if($this->session->userdata('status') == ""){ ?>
				<li class="active">
					<a href="<?php echo site_url('Home') ?>">Home</a>
				</li>
				<li>
					<a href="<?php echo site_url('About_us') ?>">About Us</a>
				</li>
				<li>
					<a href="<?php echo site_url('Abstract_web') ?>">Abstract</a>
				</li>
				<li>
					<a href="<?php echo site_url() ?>journals.php">Journals</a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('registration') ?>">Registration</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo site_url() ?>registration/">Speakers</a>
							</li>
							<li>	
								<a href="<?php echo site_url() ?>registration/participant">Participants</a>
							</li>
						</ul>
				</li>
				<li>
					<a href="<?php echo site_url() ?>technical.php">Technical Program</a>
					<!-- <div> -->
		<!-- 				<a href="<?php echo site_url() ?>technical/call_for_abstract.php">Call For Abstract</a>
					</div>
					<div>	
						<a href="<?php echo site_url() ?>technical/brochure.php">Brochure & Contact Details</a>
					</div>
					<div>	
						<a href="<?php echo site_url() ?>technical/speaker_guidelines.php">Speaker guidelines</a>
					</div> -->
				</li>
				<li>
					<a href="<?php echo site_url() ?>venue_hospitally">Venue & Hospitality</a>
				</li>
				<li>
					<a href="<?php echo site_url() ?>awards.php">Awards</a>
				</li>
				<li>
					<a href="<?php echo site_url() ?>sponsor.php">Sponsor</a>
				</li>
				<?php }else{ if($this->session->userdata('status') == 2){ ?>
				<li>
					<a href="<?php echo site_url('Speaker/speaker_abstract') ?>">Abstract</a>
				</li>
				<li>
					<a href="<?php echo site_url('Speaker/schedule') ?>">Your Schedule</a>
				</li>
				<?php } ?>
				<li>
					<a href="<?php echo site_url('Speaker/rundown') ?>">Rundown</a>
				</li>
				<li>
					<a href="<?php echo site_url('Speaker/logout') ?>">Logout</a>
				</li>
				<?php } ?>
			</ul>
		</div>
		</div>