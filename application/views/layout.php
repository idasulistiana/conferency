<html>
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>
		<?php $this->load->view('top_menu') ;?>
			<?php 
				if($content_view == 'home'){
					$this->load->view('home');
				}else if ($content_view=='about_us'){
					$this->load->view('about_us');
				}else if ($content_view=='abstract_web'){
					$this->load->view('abstract_web');
				}else if ($content_view=='registration_speaker'){
					$this->load->view('registration_speaker');
				}else if ($content_view=='venue_hospitally'){
					$this->load->view('venue_hospitally');
				}
			?>
		<?php $this->load->view('bottom_menu') ;?>
	</body>
	<footer>
		<?php $this->load->view('footer'); ?>
	</footer>
</html>