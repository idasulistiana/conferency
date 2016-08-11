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
		}else if ($content_view == 'rundown'){
			$data['rundown1'] = $rundown1;
			$data['rundown2'] = $rundown2;
			$this->load->view('rundown', $data);
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
    <?php if($content_view== 'rundown'){ ?>
    	function ubah(x){
    		var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    $("#pres").html(xhttp.responseText);
                    $('#id').val(x);
                }
            };
            var c1 = $('#c1_'+x).val();
            var c2 = $('#c2_'+x).val();
            xhttp.open("GET", "<?php echo site_url() ?>admin_dashboard/list_speaker/"+$('#c1_'+x).val()+";"+$('#c2_'+x).val(), true);
            xhttp.send();
    	}
    <?php } ?>
  </script>