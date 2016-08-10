<html>
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>
	<?php $this->load->view('leftmenu_admin'); ?>
	<?php
		if($content_view == 'admin_dashboard'){
			$this->load->view('admin_dashboard');
		}else if($content_view == 'participant'){
			$data['presenter'] = $presenter;
			$this->load->view('participant', $data);
		}else if($content_view == 'presenter'){
			$data['presenter'] = $presenter;
			$this->load->view('presenter', $data);
		}else if ($content_view == 'padmin'){
			$data['payment'] = $presenter;
			$this->load->view('payment_admin', $data);
		}else if ($content_view == 'data_rundown'){
			$this->load->view('data_rundown');
		}
	?>
	</body>
	<footer>
		<?php $this->load->view('footer'); ?>
	</footer>
</html>

    <script type="text/javascript">
    $(document).ready(function () {
      $('.table').dataTable();
    });    
    function confirm(x, y,z){
    	$('#yes').attr('href', '<?php echo site_url() ?>Admin_dashboard/confirm_payment/'+x+'/'+y+'/'+z);
    }
    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
      var btn = $(this);
      btn.button('loading');
  });
  </script>