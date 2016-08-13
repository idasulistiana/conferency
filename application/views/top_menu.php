<div class="col-sm-12 benner">
		<div class="top_benner">
				<div class="text_title"> INTERNATIONAL CONFERENCE ON BIOMASS: <br>
				Technology, Aplication, and Sustainable Development
	<!-- <img src="<?php echo base_url()?>assets/images/Logo_SBRC.png" class="img_logo_sbrc"> 
		<span class="title_sbrc">INTERNATIONAL CONFERENCE ON BIOMASS<br></span>
		<span class="title_ipb">Technology, Application and Sustainable Development</span>
		<!-- <img src="<?php echo base_url()?>assets/images/Logo_ipb.png" class="img_logo_ipb"> -->
			</div>
	</div>
</div>

<div id="header">
	<div class="	header_body">
		<?php if($this->session->userdata('status') == ""){ ?>
		<div class="clearfix"></div>
		<div class="col-sm-12 ">
				<!-- <div class="col-sm-8">
					<div class="body_btn_register">
					<a href="index.html" class="logo"><img src="<?php //echo base_url() ;?>/assets/images/logo.png" alt=""></a>
					<button type="button" class="btn btn-info">Organization Commitee</button>
					<a href="<?php //echo site_url('Registration') ?>" class="btn btn-danger" title="Register as Speaker">Submit Abstract</a>
					<a href="<?php// echo site_url('Registration/participant') ?>" class="btn btn-success" title="Register as Participant">Register Now</a>
					<a href="<?php// echo site_url('Login') ?>" class="btn btn-warning" title="Login">&emsp;Login&emsp;</a>
					</div>
				</div> -->
		
<!-- 			<div class="col-sm-3 form-group">
				<div class="search_input">
					<input type="text" class="form-control" placeholder="search">
				</div>
			                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          -->
			<?php }else echo '<br><br><div class="clearfix"></div>'; ?>
			<div class="clearfix"></div>
			<ul class="line_top_menu">
				<?php if($this->session->userdata('status') == ""){ ?>
				<li <?php if ($this->uri->segment(1)=='home' || $this->uri->segment(1)=='') echo 'class="active selected"'?>>
					<a href="<?php echo site_url('home') ?>">Home</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='about_us') echo 'class="active"'?>>
					<a href="<?php echo site_url('about_us') ?>">About Us</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='abstract_web') echo 'class="active"'?>>
					<a href="<?php echo site_url('abstract_web') ?>">Abstract</a>
				</li>
				<li class="<?php if ($this->uri->segment(1)=='registration') echo ' active'?>">
					<a  href="<?php echo site_url('registration') ?>">Registration</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='technical_program') echo 'class="active"'?> class="dropdown">
					<a  href="<?php echo site_url('technical_program') ?>" data-toggle="dropdown">Technical Program</a>
						<ul class="dropdown-menu">
							<li class="col-sm-12">
								<a href="<?php echo site_url() ?>technical_program/call_paper">Call for Paper</a>
							</li>
							<li class="col-sm-12">
								<a href="<?php echo site_url() ?>technical_program/speaker_guidelines"> Speaker Guidelines</a>
							</li>
							<li class="col-sm-12">
								<a href="<?php echo site_url() ?>technical_program/proceeding"> Proceeding</a>
							</li>
						</ul>
				</li>
				<li <?php if ($this->uri->segment(1)=='venue_hospitally') echo 'class="active"'?>>
					<a href="<?php echo site_url() ?>venue_hospitally">Venue & Hospitality</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='payment') echo 'class="active"'?>>
					<a href="<?php echo site_url() ?>payment">Payment Confirmation</a>
				</li>
	<!-- 			<li <?php //if ($this->uri->segment(1)=='awards') echo 'class="active"'?>>
					<a href="<?php echo site_url() ?>awards">Awards</a>
				</li>
				<li <?php //if ($this->uri->segment(1)=='sponsor') echo 'class="active"'?>>
					<a href="<?php echo site_url() ?>sponsor">Sponsor</a>
				</li> -->
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
</div>
