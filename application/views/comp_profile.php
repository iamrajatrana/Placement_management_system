<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Profile</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/compprofile.css">
  </head>
  <body>
<div>

	<?php 
  foreach ($sql->result() as $obj) 
  	{ 
  ?>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="<?php echo base_url();?>assets/images/recruiters.png" class="img-responsive img-thumbnail img-circle" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
			
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $name = $obj->name; ?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo $email = $obj->email; ?>
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
							<a href="<?php echo base_url();?>index.php/home/edit_profile">
							<i class="glyphicon glyphicon-home"></i>
							Edit Profile </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/home/view_applications">
							<i class="glyphicon glyphicon-user"></i>
							See Enrollments </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/home/interview_details">
							<i class="glyphicon glyphicon-ok"></i>
							Interview Details </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/home/change_password">
							<i class="glyphicon glyphicon-flag"></i>
							Change Password </a>
						</li>
						<li>
                           
								<a  data-toggle="modal" data-target="#exampleModal" href=""><i class="glyphicon glyphicon-search"></i>Ask Query</a>
						</li>
						<li>
                                <a href="<?php echo base_url();?>index.php/site/view_replies_recuiters"><i class="glyphicon glyphicon-envelope"></i>View Admin Messages</a>

										 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										        <h4 class="modal-title" id="exampleModalLabel">Ask Query From Administrator</h4>
										      </div>
										      <div class="modal-body">
										        <form method="post" action="<?php echo base_url();?>index.php/home/ask_query">
										          <div class="form-group">
										            <label for="recipient-name" class="control-label">Name:</label>
										            <input type="text" class="form-control" id="recipient-name" name="name" required>
										          </div>
										          <div class="form-group">
										            <label for="sub" class="control-label">Subject:</label>
										            <input type="text" class="form-control" id="sub" name="subject" required>
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
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Company Profile</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              	<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" style="margin-bottom: 30px;" src="<?php echo base_url();?>assets/images/stud.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td><?php echo $name = $obj->name;?></td>
                      </tr>
                      <tr>
                        <td>Preferred Branch:</td>
                        <td><?php echo $branch = $obj->branch; ?></td>
                      </tr>
                      <tr>
                        <td>Posts Avaialable:</td>
                        <td><?php echo $post = $obj->available_post; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>CGPI Required:</td>
                        <td><?php echo $cgpi = $obj->CGPI_req; ?></td>
                      </tr>
                        <tr>
                        <td>Contact Number:</td>
                        <td><?php echo $phone = $obj->phone; ?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><a href="mailto:info@support.com"></a><?php echo $email = $obj->email; ?></td>
                      </tr>
                        <td>About:</td>
                        <td><?php echo $about = $obj->about; ?></td>
                           
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
            </div>
		</div>
	</div>
	 <?php
                 }
                 ?>
</div>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>