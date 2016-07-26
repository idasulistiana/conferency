<html>
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>
		<?php 
			if($content_view == 'home'){
				$this->load->view('home');
			}
		?>
	</body>
	<footer>
		
	</footer>
</html>