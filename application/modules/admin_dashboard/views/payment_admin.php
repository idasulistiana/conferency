<!DOCTYPE html>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Admin_dashboard') ?>">Dashboard</a></li>
            <li class="active">Data Payment</li>
          </ol>
          
          <div class="row">            
              <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Registration</th>
                      <th>Name</th>
                      <th>Company</th>
                      <th>Email</th>
                      <th>Amount</th>
                      <th>Bank</th>
                      <th>Account Name</th>
                      <th>Account Number</th>
                      <th>Message</th>
                      <th>Confirm</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($payment as $data) { ?>
                      <tr>
                        <td><?php echo ($data->id_status == 1) ? 'Participant' : 'Presenter'; ?></td>
                        <td><?php echo $data->fname." ".$data->lname ?></td>
                        <td><?php echo $data->company ?></td>
                        <td><?php echo $data->email ?></td>
                        <td><?php echo $data->jml ?></td>
                        <td><?php echo $data->bank ?></td>
                        <td><?php echo $data->a_name ?></td>
                        <td><?php echo $data->a_number ?></td>
                        <td><?php echo $data->message ?></td>
                        <td><button class="btn btn-danger" onclick="confirm(<?php echo $data->id_status.",".$data->id.",". $data->id_regis ?>)" data-toggle="modal" data-target="#conf">Confirm</button></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="conf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure this user have paid?</h4>
            </div>
            <div class="modal-footer">
              <a href="" id="yes" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>