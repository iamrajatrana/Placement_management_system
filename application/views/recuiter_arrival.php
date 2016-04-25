<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recruiter Arrival</title>
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
  <!-- 
<?php echo $name = $this->session->userdata('user');?> -->


  <div class="container">
    <div class="profile-userbuttons">
        <a href="welcome_back" class="btn btn-success btn-sm">Home</a>      
        <a href = "../site/logout" class="btn btn-danger btn-sm">Logout</a>
    </div>
    <h1 class="page-header">Recruiter Arrival Schedule</h2>
   
    <hr/>
        <table class="table table-striped table-hover">
      <tr>
        <th>Sr. No.</th>
        <th>Company Name</th>
        <th>Arrival Date</th>
        <th>Branch</th>
        
        <th>Venue</th>
        
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
                    </tr>
                   <?php                
                 }
                 ?>


         
        
    </table>
    </div>

  </body>
  </html>
    
   
   