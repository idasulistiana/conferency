	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.html">SBRC</a>
			</p>
			<ul>
				<li <?php if ($this->uri->segment(1)=='Home') echo 'class="active"'?>>
					<a href="<?php echo site_url('Home') ?>">Home</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='About_us') echo 'class="active"'?>>
					<a href="<?php echo site_url('About_us') ?>">About Us</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='venue_hospitally') echo 'class="active"'?>>
					<a href="<?php echo site_url() ?>venue_hospitally">Venue & Hospitality</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='Abstract_web') echo 'class="active"'?>>
					<a href="<?php echo site_url('Abstract_web') ?>">Abstract</a>
				</li>
				<li class="<?php if ($this->uri->segment(1)=='Registration') echo ' active'?>">
					<a  href="<?php echo site_url('Registration') ?>">Registration</a>

			</ul>
			<p class="pull-right">
				Under Construction 
			</p>
		</div>
	</div>