<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Add Schedule</title>

   
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

         if( $op == 'edit')
         {
             foreach ($sql->result() as $obj) {
                 $comp = $obj->compName;
                 $date = $obj->date;
                 $branch = $obj->branch;
                 $venue = $obj->venue;
             }
         }
         else if($op == 'add')
         {
                 $comp = "";
                 $date = "";
                 $branch = "";
                 $venue = "";
                 $id = "";
         }

      ?>
      <h1 class="page-header">Hello Admin, <?php if($op == 'add') echo "Add"; else if($op == 'edit') echo "Edit";?> Arrival</h1>
         <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/site/add_schedule_to">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Company Name</label>
    <div class="col-sm-5">
      <input type="hidden" class="form-control" name="id" value = "<?php echo $id;?>" >
      <input type="hidden" class="form-control" name="op" value = "<?php echo $op;?>" >
      <input type="text" class="form-control" value = "<?php echo $comp;?>" id="name" name="name" placeholder="eg. ONGC" required>
    </div>
  </div>
  
   <div class="form-group">
    <label for="branch" class="col-sm-2 control-label">Branch</label>
    <div class="col-sm-5">

      <input type="text" class="form-control" value = "<?php echo $branch;?>" id="branch" name="branch" placeholder="eg. CSE, ECE" v>
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
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8 col-md-offset-2">
            <input class="btn btn-primary" value="Set Schedule" type="submit">
            &nbsp;&nbsp;&nbsp;
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
  <!-- <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-default"></button>
    </div>
  </div> -->
</form>

    </div>
    
</body>
</html>