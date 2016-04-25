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
      <?php
             foreach ($sql->result() as $obj) {
                  $name = $obj->name;
                  $phone = $obj->phone;
                  $email = $obj->email;
                  $cgpi = $obj->CGPI_req;
                  $post = $obj->available_post;
                  $branch = $obj->branch;
                  $about = $obj->about;
             }
      ?>

      <h1 class="page-header">Edit Profile</h1>
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/home/edit_profile_to">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Company Name</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" value = "<?php echo $name;?>" id="name" name="name" placeholder="eg. ONGC" required>
    </div>
  </div>

  <div class="form-group">
   <label for="phone" class="col-sm-2 control-label">Phone</label>
   <div class="col-sm-5">
      
      <input type="text" class="form-control" value = "<?php echo $phone;?>" id="phone" name="phone" placeholder="eg. ONGC" required>
    </div>
  </div>

  <div class="form-group">
  <label for="email" class="col-sm-2 control-label">Email</label>
   <div class="col-sm-5">
           <input type="text" class="form-control" value = "<?php echo $email;?>" id="email" name="email" placeholder="eg. ONGC" required>
    </div>
  </div>

   <div class="form-group">
   <label for="cg" class="col-sm-2 control-label">Required CGPI</label>
   <div class="col-sm-5">
       <input type="text" class="form-control" value = "<?php echo $cgpi;?>" id="cg" name="cg" placeholder="eg. ONGC" required>
    </div>
  </div>
   
   <div class="form-group">
   <label for="post" class="col-sm-2 control-label">Available Post</label>
   <div class="col-sm-5">
     
      <input type="text" class="form-control" value = "<?php echo $post;?>" id="post" name="post" placeholder="eg. ONGC" required>
    </div>
  </div>

  <div class="form-group">
  <label for="branch" class="col-sm-2 control-label">Preffered Branch</label>
   <div class="col-sm-5">
     
      <input type="text" class="form-control" value = "<?php echo $branch;?>" id="branch" name="branch" placeholder="eg. ONGC" required>
    </div>
  </div>

   <div class="form-group">
  <label for="about" class="col-sm-2 control-label">About Company</label>
   <div class="col-sm-5">
      <textarea class="form-control" rows="3" id="about" name="about" required><?php echo $about; ?></textarea>
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
    <div class=" col-sm-5">
      <button type="submit" class="btn btn-default">Edit Profile</button>
    </div>
  </div> -->
</form>

    </div>
    
</body>
</html>