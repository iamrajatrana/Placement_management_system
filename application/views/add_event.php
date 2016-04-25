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
        <a href="<?php echo base_url();?>index.php/site/admin" class="btn btn-success btn-sm">Home</a>      
        <a href = "<?php echo base_url();?>index.php/site/logout" class="btn btn-danger btn-sm">Logout</a>
    </div>
      <?php
          if($op == 'add')
         {
                 $event_name = "";
                 $date = "";
                 $require = "";
                 $venue = "";
                 $id = "";
                 $about = "";
         }

         else if( $op == 'edit')
         {
             foreach ($sql1->result() as $obj) {
                 $event_name = $obj->event_name;
                 $date = $obj->event_date;
                 $require = $obj->event_require;
                 $venue = $obj->event_venue;
                 $about  = $obj->event_about;
                 $id = $obj->event_id;
             }
         }

      ?>
      <h1 class="page-header">Hello Admin, <?php if($op == 'add') echo "Add"; else if($op == 'edit') echo "Edit";?> Event</h1>

         <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/site/add_event_to">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Event Name</label>
    <div class="col-sm-5">
      <input type="hidden" class="form-control" name="id" value = "<?php echo $id;?>" >
      <input type="hidden" class="form-control" name="op" value = "<?php echo $op;?>" >
      <input type="text" class="form-control" value = "<?php echo $event_name;?>" id="name" name="name" placeholder="eg. ONGC" required>
    </div>
  </div>
  
  

   <div class="form-group">
    <label for="date" class="col-sm-2 control-label">Date</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" value = "<?php echo $date;?>" id="date" name="date" placeholder="Arrival Date" required>
   
     </div>
  </div>

   <div class="form-group">
    <label for="venue" class="col-sm-2 control-label">Venue & Time</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" value = "<?php echo $venue;?>" id="venue" name="venue" placeholder="eg. Auditorium , 1pm" required>
    </div>
    </div>

     <div class="form-group">
    <label for="require" class="col-sm-2 control-label">Requirements</label>
    <div class="col-sm-5">

      <input type="text" class="form-control" value = "<?php echo $require;?>" id="require" name="require" placeholder="eg. pen,pencil,papper" required>
    </div>
      </div>
     <div class="form-group">
    <label for="about" class="col-sm-2 control-label">About Event</label>
    <div class="col-sm-5">
      <textarea class="form-control" rows="5" id="about" name="about" required><?php echo $about; ?></textarea>
      </div>
  </div>
 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <input class="btn btn-primary" value="Set Event" type="submit">
      &nbsp;&nbsp;&nbsp;
      <input class="btn btn-default" value="Cancel" type="reset">
    </div>
  </div>
</form>
  </div>
 


    
</body>
</html>