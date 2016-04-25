<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/studprofile.css">

 <link href="<?php echo base_url();?>assets/css/skills.css" rel="stylesheet">
  </head>
  <body>
<div>
<?php
 
    $user = $this->session->userdata('email');   
    $directory = 'userDocuments/'.$this->session->userdata('email').'/';
    $allowed_types = '';
    $files = glob($directory.'{*.PNG,*.jpg,*.png,*.gif}',GLOB_BRACE);
?>
</div>




<div class="container">
    <div class="row profile">
    <div class="col-md-3">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
         <?php 
         if($image = $files[0]) 
          echo '<img class="img-responsive img-thumbnail img-circle" alt="" src="'.'../../'.$image.'" alt="Profile_Picture"/>'."<br/><br/>";
        ?>
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            <?php echo $name; ?>
          </div>
          <div class="profile-usertitle-job">
            <?php echo $branch; ?>
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
          <a class="btn btn-danger btn-sm" href = "../site/logout">Logout</a>
        </div>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
          <ul class="nav">
            <li class="active">
              <a href="<?php echo base_url();?>index.php/site/view_arrival">
              <i class="glyphicon glyphicon-home"></i>
              Recuiter Arrival Dates </a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/site/view_events">
              <i class="glyphicon glyphicon-user"></i>
              Events Dates </a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/students/qualified_company">
              <i class="glyphicon glyphicon-ok"></i>
              Qualified Company </a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/site/view_material">
              <i class="glyphicon glyphicon-user"></i>
              VIew Study Material </a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/site/forum">
              <i class="glyphicon glyphicon-flag"></i>
              Ask Queries in Forum </a>
            </li>
            <li>
              
             <a data-toggle="modal" data-target="#exampleModal" href=""><i class="glyphicon glyphicon-flag"></i>Ask Query</a>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Ask Query From Administrator</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo base_url();?>index.php/students/ask_query">
                              <div class="form-group">
                                <label for="recipient-name" class="control-label">Name:</label>
                                <input type="text" class="form-control" id="recipient-name" name="name" required>
                              </div>
                              <div class="form-group">
                                <label for="sub" class="control-label">Subject:</label>
                                <input type="text" class="form-control" id="sub" name="subject">
                              </div>
                              <div class="form-group">
                                <label for="message-text" class="control-label">Your Query</label>
                                <textarea class="form-control" id="message-text" rows='9' name="ask" required></textarea>
                              </div>


                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Ask</button>
                            </form>
                          </div>
                        </div>
                      </div>
            </li>
            <li>
                  <a href="<?php echo base_url();?>index.php/site/view_replies_students"><i class="glyphicon glyphicon-flag"></i>View Messages</a>
                   
            </li>
          </ul>
        </div>
        <!-- END MENU -->
      </div>
    </div>
    <div class="col-md-9">
            <div class="profile-content">
              <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Student Profile</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" style="margin-bottom: 30px;" src="<?php echo base_url();?>assets/images/stud.png" class="img-circle img-responsive"> </div>
            
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Roll No</td>
                        <td><?php echo $rollno; ?></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><?php echo $name; ?></td>
                      </tr>
                      <tr>
                        <td>Branch</td>
                        <td><?php echo $branch; ?></td>
                      </tr>
                      <tr>
                        <td>CGPI</td>
                        <td><?php echo $cgpi; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>College</td>
                        <td><?php echo $college; ?></td>
                      </tr>
                        <tr>
                        <td>Contact Number</td>
                        <td><?php echo $phone; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?php echo $email; ?></a></td>
                      </tr>
                        <td>About</td>
                        <td><?php echo $aboutyou; ?></td>
                           
                      </tr>
                     <tr>
                         

                     </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>

    </div>
   
                  <?php 
                                       
                                       
                                       $skills = explode(' ',$skills) ;
                                       

                                       $code = '<div class="container">
                                              <div class="row">
                                                <ul id="accordion" class="accordion">
                                               
                                                
                                                <li class="default open">
                                                  <div class="link"><i class="fa fa-code"></i>Professional Skills<i class="fa fa-chevron-down"></i></div>
                                                  <ul class="submenu">
                                                    <li><a href="#">';
                                        $i=0;
                                       foreach ($skills as $skill) {
                                        if($i < count($skills)-1 )
                                         $code .= '<span class="tags">'.$skill.'</span>'.'    ';
                                          $i++;
                                       }
                                       $code.='</li></a></ul>   </li>   
                                                                      </ul>  </div>';
                                       echo $code;

                            ?>
      
   
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>


    
    
 
