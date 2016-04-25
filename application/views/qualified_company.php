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
    <h1 class="page-header">Apply Now</h2>
    <hr/>
        <table class="table table-striped table table-hover">
      <tr>
        <th>Sr. No.</th>
        <th>Company Name</th>
        <th>Required CGPI</th>
        <th>Prefered Branch</th>
        <th>Available Post</th>
        <th>Action</th>
      </tr>
            <?php
                
                $no =0;
                foreach( $sql->result() as $obj1)
                {
                    $no++;
            ?>
                   <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj1->name; ?></td>
                        <td><?php echo $obj1->CGPI_req; ?></td>
                        <td><?php echo $obj1->branch; ?></td>
                        <td><?php echo $obj1->available_post; ?></td>
                        <td>
                          
                          <input type="button" value="Apply Now" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $no; ?>"/>
                        </td>
                            <div class="modal fade" id="exampleModal<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Job Application for <?php echo $obj1->name; ?></h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>index.php/students/apply_now/<?php echo $obj1->companyID;?>/<?php echo $obj1->job_id;?>">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="name" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Why you should be selected for this job ?</label>
            <textarea class="form-control" id="message-text" rows='9' name="why" required></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
      </div>
    </div>
  </div>
                         
                   </tr>
                   <?php                
                 }
                 ?>


         
        
    </table>
    </div>

 <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>