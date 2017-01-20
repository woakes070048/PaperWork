<?php
  $this->load->view('template/top');
  echo link_tag('vendor/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css');
  $this->load->view('template/nav_bar');
?>
<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('sidebar');?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Vacancy <small>Add</small></h1>
      <?php echo form_open('vacancy/processAdd','','class="form"')?>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="">Vacancy Code</label>
            <?php echo form_input('txt_code',''); ?>
            <p class="help-block">2-10 Characters</p>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="">Vacancy Name</label>
            <?php echo form_input('txt_name',''); ?>
            <p class="help-block">2-250 Characters</p>
          </div>
        </div>

        <div class="col-sm-2">
          <div class="form-group">
            <label for="">Quantity</label>
            <?php echo form_number('nm_qty',1,'min=0'); ?>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="form-group">
            <label for="">Area</label>
            <?php echo form_dropdown('slc_area',$optArea,'');?>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="form-group">
            <label for="">Job Type</label>
            <?php echo form_dropdown('slc_jobType',$optJobType,'');?>
            </select>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="form-group">
            <label for="">Job Function</label>
            <?php echo form_dropdown('slc_jobFunc',$optJobFunc,'');?>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="form-group">
            <label for="">Job Level</label>
            <?php echo form_dropdown('slc_jobLevel',$optJobLevel,'');?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="">Open Date</label>
            <?php echo form_date('dt_open',''); ?>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="">Close Date</label>
            <!-- <input type="text" class="datepicker"/> -->
            <?php echo form_date('dt_close',''); ?>
          </div>
        </div>
      </div>



      <div class="form-group">
        <label for="">Description</label>
        <?php echo form_textarea('txt_desc',''); ?>
      </div>

      <div class="form-group">
        <label for="">Requirement</label>
        <p class="help-block">Optional</p>
        <?php echo form_textarea('txt_req',''); ?>
      </div>

      <div class="form-group">
        <label for="">Benefit</label>
        <p class="help-block">Optional</p>
        <?php echo form_textarea('txt_benefit',''); ?>
      </div>
      <hr />
      <h2>Phase</h2>
      <table class="table table-hover">
        <thead>
          <th>Phase Name</th>
          <th>Select</th>
          <th>Order</th>
        </thead>
        <tbody>
          <tr>
            <td>
              Screening CV
            </td>
            <td>
              <input type="checkbox" value="" checked="checked" disabled>
            </td>
            <td>
              Begin (1)
            </td>
          </tr >
          <?php
            $count = 2;
            foreach ($phase as $row) {
              echo '<tr>';
              echo '<td>'.$row->title.'</td>';
              echo '<td>'.form_checkbox('chk_phase[]',$row->code,'','class="chk_phase" id="chk_phase_'.$row->code.'"').'</td>';
              echo '<td>'.form_number('nm_order_'.$row->code,$count,'min=2 max=98 class="form-control nm_order" data-code="'.$row->code.'"').'</td>';
              echo '</tr>';
              $count++;
            }

          ?>
          <tr>
            <td>
              Sign Contract
            </td>
            <td>
              <input type="checkbox" value="" checked="checked" disabled>
            </td>
            <td>
              End (<?php echo $count; ?>)
            </td>
          </tr>


        </tbody>
      </table>
      <hr />

      <div class="row" >
        <div class="col-xs-12 col-md-6">
          <a class="btn btn-default btn-lg btn-block">Cancel</a>

        </div>
        <div class="col-xs-12 col-md-6">
          <button type="submit" class="btn btn-lg btn-primary btn-block">Save</button>

        </div>
      </div>
      <?php echo form_close()?>

    </div>
  </div>
</div>

<?php
  echo $this->load->view('template/bot');
?>

<script type='text/javascript' src="<?php echo base_url(); ?>vendor/handlebars/handlebars.runtime.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>vendor/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"></script>

<script>
  $('textarea').wysihtml5();
  $('.nm_order').change(function(event) {
    /* Act on the event */
    var val = $(this).val();
    var code = $(this).data('code');
    if (val > 1 ) {
      $('#chk_phase_'+code).attr('checked', 'checked');
    } else {
      $('#chk_phase_'+code).removeAttr('checked');

    }
  });
</script>
