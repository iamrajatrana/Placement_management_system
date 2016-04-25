<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Edit Company Profile</title>

   
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
        <a href="<?php echo base_url();?>index.php/home/view_profile" class="btn btn-success btn-sm">Home</a>      
        <a href = "../site/logout" class="btn btn-danger btn-sm">Logout</a>
    </div>
      <h1 class="page-header">Change Password</h1>


    <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/home/change_password_to">
  <div class="form-group">
    <label for="opassword" class="col-sm-2 control-label">Enter Old Password</label>
    <div class="col-sm-5">
        <input type="password" class="form-control" value = "" id="password" name="opassword" placeholder="eg. ONGC" required>
    </div>
  </div>

  <div class="form-group">
   <label for="npassword" class="col-sm-2 control-label">Enter New Password</label>
   <div class="col-sm-5">
      
      <input type="password" class="form-control" value = "" id="npassword" name="npassword" placeholder="eg. ONGC" required>
    </div>
  </div>


  <div class="form-group">
   <label for="n1password" class="col-sm-2 control-label">Confirm New Password</label>
   <div class="col-sm-5">
      
      <input type="password" class="form-control" value = "" id="n1password" name="n1password" placeholder="eg. ONGC" required>
    </div>
  </div>

<div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8 col-md-offset-2">
            <input class="btn btn-primary" value="Save Changes" type="submit">
            &nbsp;&nbsp;&nbsp;
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
  <!-- <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-default">Change Password</button>
    </div>
  </div> -->
</form>

</div>