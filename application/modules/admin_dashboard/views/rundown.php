<!DOCTYPE html>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin_dashboard') ?>">Dashboard</a></li>
            <li class="active">Data Rundown</li>
          </ol>
          
          <div class="row">            
              <div class="table-responsive">
                Day-1: Monday, October 10th, 2016
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th align="center">Time</th>
                      <th align="center">Activities</th>
                      <th align="center">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $x = 1; foreach ($rundown1 as $data) { ?>
                    <?php
                      $row_data = explode(' ', $data->category);
                      $a = $row_data[0];
                      $b = $row_data[2];
                    ?>
                      <tr>
                        <td><?php echo $x ?><input type="hidden" id="c1_<?php echo $data->id_ev ?>" value="<?php echo $a ?>"><input type="hidden" id="c2_<?php echo $data->id_ev ?>" value="<?php echo $b ?>"></td>
                        <?php if(substr($data->etime,0,5) != '00:00'){ ?>
                        <td><?php echo substr($data->stime,0,5)." - ".substr($data->etime,0,5) ?></td>
                        <td><?php echo $data->event ?></td>
                        <?php }else{ ?>
                        <td colspan="2"><b><?php echo $data->event ?></b></td>
                        <?php } ?>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#edit" onclick="ubah(<?php echo $data->id_ev ?>)">Edit</button></td>
                      </tr>
                    <?php $x++; } ?>
                  </tbody>
                </table>
              </div>
              <div class="clearfix"></div>
              <div class="table-responsive">
                Day-2:  Tuesday, October 11, 2016
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th align="center">Time</th>
                      <th align="center">Activities</th>
                      <th align="center">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $x = 1; foreach ($rundown2 as $data) { ?>
                    <?php
                      $row_data = explode(' ', $data->category);
                      $a = $row_data[0];
                      $b = $row_data[2];
                    ?>
                      <tr>
                        <td><?php echo $x ?><input type="hidden" id="c1_<?php echo $data->id_ev ?>" value="<?php echo $a ?>"><input type="hidden" id="c2_<?php echo $data->id_ev ?>" value="<?php echo $b ?>"></td>
                        <?php if(substr($data->etime,0,5) != '00:00'){ ?>
                        <td><?php echo $data->stime." - ".$data->etime ?></td>
                        <td><?php echo $data->event ?></td>
                        <?php }else{ ?>
                        <td colspan="2"><b><?php echo $data->event ?></b></td>
                        <?php } ?>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#edit" onclick="ubah(<?php echo $data->id_ev ?>)">Edit</button></td>
                      </tr>
                    <?php $x++; } ?>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
      <!-- MODAL -->
    <div class="modal fade" id="edit" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
                    <label><h4 class="modal-title" id="myModalLabel">Edit Rundown</font></h4></label>
                </div>
                <form id="frm" method="POST" action="<?php echo site_url('admin_dashboard/ubah') ?>">
                <div class="modal-body">
                    <div class="form-group">
                      <label>Activities</label>
                      <textarea name="activities" class="form-control"></textarea>
                      <input type="hidden" name="id" id="id">
                    </div>
                    <div class="form-group">
                      <label>Presenter</label>
                      <div id="pres"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>