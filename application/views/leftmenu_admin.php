<div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo" style="color:white"><h1>Administrator Internation Conference on Biomass</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <!-- <li>
            <form class="navbar-form">
              <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
              <span class="btn btn-default">Go</span>
            </form>
          </li> -->
<!--           <li class="active"><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Nested Menu <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="#">Aenean</a></li>
              <li><a href="#">Pellentesque</a></li>
              <li><a href="#">Congue</a></li>             
              <li><a href="#">Interdum</a></li>
              <li><a href="#">Facilisi</a></li>
            </ul>
          </li> -->
          <li <?php if ($this->uri->segment(2) == 'participant' || $this->uri->segment(2) == ""): ?>
            class="active"
          <?php endif ?>><a href="<?php echo site_url('Admin_dashboard/participant') ?>"><i class="glyphicon glyphicon-user"></i><!-- <span class="badge pull-right">9</span> -->Data Participant</a></li>
          <li <?php if ($this->uri->segment(2) == 'presenter'): ?>
            class="active"
          <?php endif ?>><a href="<?php echo site_url('Admin_dashboard/presenter') ?>"><i class="glyphicon glyphicon-user"></i><!-- <span class="badge pull-right">42</span> -->Data Presenter</a></li>
          <li><a href=""><i class="glyphicon glyphicon-calendar"></i><!-- <span class="badge pull-right">NEW</span> -->Data Rundown</a></li>
          <li <?php if ($this->uri->segment(2) == 'payment'): ?>
            class="active"
          <?php endif ?>><a href="<?php echo site_url('Admin_dashboard/payment') ?>"><i class="glyphicon glyphicon-credit-card"></i>Data Payment</li>
          <li><a href="" data-toggle="modal" data-target="#confirmModal"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

       <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="<?php echo site_url('Admin_dashboard/logout') ?>" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>