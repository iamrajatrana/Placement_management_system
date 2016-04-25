
  <div class="container">
    <h1 class="page-header">Recruiter Arrival Schedule</h1>
    <a href="<?php echo base_url();?>/index.php/site/add_schedule" class="btn btn-primary">Add a Schedule</a>
    <hr/>
        <table class="table table-striped table-hover">
      <tr>
        <th>Sr. No.</th>
        <th>Company Name</th>
        <th>Arrival Date</th>
        <th>Branch</th>
        
        <th>Venue</th>
        <th>Action</th>
      </tr>
            <?php
                
                $no =0;
                foreach( $sql1->result() as $obj1)
                {
                    $no++;
            ?>
                   <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj1->compName; ?></td>
                        <td><?php echo $obj1->date; ?></td>
                        <td><?php echo $obj1->branch; ?></td>
                        <td><?php echo $obj1->venue; ?></td>
                        <td>
                          <a href="<?php echo base_url();?>index.php/site/update_schedule/<?php echo $obj1->id;?>" class="btn btn-success btn-sm">Edit</a>
                          <a href="javascript:if(confirm('')){ document.location='<?php echo base_url(); ?>index.php/site/delete_schedule/<?php echo $obj1->id;?> '}" class="btn btn-danger btn-sm">Delete</a></td>
                   </tr>
                   <?php                
                 }
                 ?>


         
        
    </table>
    </div>

    <div class="container">
          <h1 class="page-header">Events Schedule</h1>
    <a href="<?php echo base_url();?>/index.php/site/add_event" class="btn btn-primary">Add an Event</a>
    <hr/>
        <table class="table table-striped table-hover">
      <tr>
        <th>Sr. No.</th>
        <th>Event Name</th>
        <th>Date</th>
        <th>Venue</th>
        <th>Action</th>
      </tr>
            <?php
                
                $no =0;
                foreach( $eve->result() as $obj)
                {
                    $no++;
            ?>
                   <tr>
                        <td><?php echo $no; ?></td>
                        <td>
                          <a href="#myModal<?php echo $no; ?>" data-toggle="modal"><?php echo $obj->event_name; ?></a>
                          </td>
                        <td><?php echo $obj->event_date; ?></td>
                        <td><?php echo $obj->event_venue; ?></td>
                        
                        <td>
                          <a href="<?php echo base_url();?>index.php/site/update_event/<?php echo $obj->event_id;?>" class="btn btn-success btn-sm">Edit</a>
                          <a href="javascript:if(confirm('')){ document.location='<?php echo base_url(); ?>index.php/site/delete_event/<?php echo $obj->event_id;?> '}" class="btn btn-danger btn-sm">Delete</a></td>
                          


<div class="modal fade bs-example-modal-sm" id="myModal<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $obj->event_name; ?></h4>
      </div>
      <div  class="modal-body">

          
          
          <dl>
  <dt>Event Name</dt>
  <dd><?php echo $obj->event_name; ?></dd>
  <hr/>
  <dt>Event Date</dt>
  <dd><?php echo $obj->event_date; ?></dd>
  <hr/>
  <dt>Event Venue</dt>

  <dd><?php echo $obj->event_venue; ?></dd>
  <hr/>
  <dt>Event Requirements</dt>
  <dd><?php echo $obj->event_require; ?></dd>
  <hr/>
  <dt>About Event</dt>
  <dd> <?php echo $obj->event_about; ?></dd>
</dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                   </tr>
                   <?php                
                 }
                 ?>
         
        
    </table>
    </div>
    
   
   