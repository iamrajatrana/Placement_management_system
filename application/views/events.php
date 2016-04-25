<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin</title>

   
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    .profile-userbuttons {
      text-align: center;
      margin-top: 50px;
    }

    .profile-userbuttons .btn {
      text-transform: uppercase;
      font-size: 11px;
      font-weight: 600;
      padding: 6px 15px;
      margin-right: 5px;
    }

    .profile-userbuttons .btn:last-child {
      margin-right: 0px;
    }

    </style>

   
  </head>
  <body>
  <div class="container">
    <div class="profile-userbuttons">
        <a href="<?php echo base_url();?>index.php/site/welcome_back" class="btn btn-success btn-sm">Home</a>      
        <a href = "../site/logout" class="btn btn-danger btn-sm">Logout</a>
    </div>
    <h1 class="page-header">Upcoming Events</h2>
   
    <hr/>
        <table class="table table-striped table-hover">
      <tr>
        <th>Sr. No.</th>
        <th>Name</th>
        <th>Date</th>
        <th>Venue</th>
        
        <th></th>
        
      </tr>
            <?php
                
                $no =0;
                foreach( $sql2->result() as $obj)
                {
                    $no++;
            ?>
                   <tr>
                        <td><?php echo $no; ?></td>
                        <td><a href="#myModal<?php echo $no; ?>" data-toggle="modal"><?php echo $obj->event_name; ?></a></td>
                        <td><?php echo $obj->event_date; ?></td>
                        
                        <td><?php echo $obj->event_venue; ?></td>
                    </tr>
                   <?php                
                 }
                 ?>

         

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

         
        
    </table>
    </div>
  </div>
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    
  </body>
  </html>
    
   
   