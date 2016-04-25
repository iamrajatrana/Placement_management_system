



<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Profile</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/compprofile.css">
  <style type="text/css">
     .im{
      width: 56%;
      position: relative;
      height: auto;
      left: 22%;
     }
     .profile-content{
      margin-bottom: -40px;
     }

     .panel-title{
      font-size: 40px;
      font-weight: bolder;
     }

  </style>
  </head>
  <body>
<div>

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
						
					</div>
					<div class="profile-usertitle-job">
						
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
							<a href="<?php echo base_url();?>index.php/site/admin_area">Add Events and Recruiters</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/site/add_student">Add Student</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/site/add_recruiter">Add Recruiter</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/site/forum">Go to Forum</a>
						</li>
						<li>
                           
								<a href="<?php echo base_url();?>index.php/site/view_student_message">View Student Messages</a>
						</li>
						<li>
                                <a href="<?php echo base_url();?>index.php/site/view_recruiter_message">View Recuiter Messages</a>
						</li>
						<li>
                                <a href="<?php echo base_url();?>index.php/upload/upload_material">Upload Material</a>
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
              <b><h2 align="center" class="panel-title">Welcome Admin</h2></b>
            </div>
            
            <p><img class="im" src="<?php echo base_url();?>assets/images/download.png"></p>
            </div>
            </div>
		</div>
		
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>