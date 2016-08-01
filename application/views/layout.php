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
				}else if ($content_view=='awards'){
					$this->load->view('awards');
				}else if ($content_view=='sponsor'){
					$this->load->view('sponsor');
				}else if ($content_view=='technical_program'){
					$this->load->view('technical_program');
				}}else if ($content_view=='registration_participant'){
					$this->load->view('registration_participant');
				}else if ($content_view=='login'){
					$this->load->view('login');
				}else if ($content_view=='home_speaker'){
					$this->load->view('home_speaker');
				}else if ($content_view=='abstract_speaker'){
					$data['abstract'] = $abstract;
					$this->load->view('abstract_speaker', $data);
				}else if ($content_view=='cabs_speaker'){
					$this->load->view('cabs_speaker');
				}


			?>
		<?php $this->load->view('bottom_menu') ;?>
	</body>
	<footer>
		<?php $this->load->view('footer'); ?>
	</footer>
</html>
