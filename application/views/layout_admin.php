<html>
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>
	<?php $this->load->view('leftmenu_admin'); ?>
	<?php
		if($content_view == 'admin_dashboard'){
			$this->load->view('admin_dashboard');
		}else if($content_view == 'data_participant'){
			$this->load->view('data_participant');
		}else if($content_view == 'data_presenter'){
			$this->load->view('data_presenter');
		}else if ($content_view == 'data_payment'){
			$this->load->view('data_payment');
		}else if ($content_view == 'data_rundown'){
			$this->load->view('data_rundown');
		}
	?>
	</body>
	<footer>
		<?php $this->load->view('footer'); ?>
	</footer>
</html>