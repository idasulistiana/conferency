<div id="body">
	<div class="content">
	<div class="col-md-6 col-sm-8 col-xs-6">
	<h3>Login</h3>
	<form method="POST" action="<?php echo site_url('Login/plogin') ?>">
		<div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </div>
              <input id="user" type="text" name="user" class="form-control" placeholder="Username" required>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-lock"></i>
              </div>
              <input id="psw" type="password" name="psw" class="form-control" placeholder="Password" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Login</button>
          <br><br>
	</form>
	</div>
	</div>
</div>