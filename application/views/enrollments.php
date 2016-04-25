  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>See Enrollments</title>

   
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
    <h1>See Enrollments</h1>
    <hr/>
        <table class="table table-striped table-hover">
      <tr>
        <th>Sr. No.</th>
        <th>Enrollment ID</th>
        <th>Name</th>
        <th>View Profile</th>
        
        
        
        
      </tr>
            <?php
                
                $no =0;
                foreach( $sql->result() as $obj1)
                {
                    $no++;
            ?>
                   <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj1->student_id; ?></td>
                        <td><?php echo $obj1->name; ?></td>
                       
                        
                        <td>
                          <a href="<?php echo base_url(); ?>index.php/home/see_profile/<?php echo $obj1->student_id;?>" class="btn btn-primary"   value="View" >View</a>
                          </td>
                           
         
        
                          
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