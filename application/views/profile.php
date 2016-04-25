<?php
 foreach ($sql->result() as $key) {
         $name = $key->name; 
         $cg = $key->CGPI_req; 
         $phone = $key->phone; 
         $email = $key->email; 
         $college = $key->college;
         $rollno = $key->rollno; 
         $branch = $key->branch; 
         $aboutyou = $key->aboutyou; 
         $skills = $key->skills;
    }
    
    $directory = 'userDocuments/'.$email.'/';
    $allowed_types = '';
    $files1 = glob($directory.'{*.jpg,*.png,*.gif}',GLOB_BRACE);
    

   $allowed_types = '';
    $files = glob($directory.'*.pdf');

    ?>
    
    




<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile</title><link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/studprofile.css">

 <link href="<?php echo base_url();?>assets/css/skills.css" rel="stylesheet"> 
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

    .ss{
        color: black;
    }
    </style>
   <script type="text/javascript">


</script>
  </head>
  <body>
<div>

</div>

  
  
    <div class="container">
      <div class="profile-userbuttons">
       
            <a href="<?php echo base_url();?>index.php/home/view_profile" class="btn btn-success btn-sm">Home</a>
       
           
        <a href = "<?php echo base_url();?>index.php/site/logout" class="btn btn-danger btn-sm">Logout</a>
    </div>

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container">
    <div class="row profile">
    
    </div>
    <div class="col-md-12">
            <div class="profile-content">
              <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Student Profile</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" style="margin-bottom: 30px;" src=" <?php echo base_url().$image=$files1[0];?>";
         class="img-circle img-responsive"> </div>
            
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
                        <td><?php echo $cg; ?></td>
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
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>

    </div>
    
  <div id="w">
    <div id="content">
      <h1 class="ss">Skills</h1>
      
      
      <div id="skillset">
    
        
         <?php 
                                       
                                       
                                       $skills = explode(' ',$skills) ;
                                 $i=0;
                                       foreach ($skills as $skill) {
                                        if($i < count($skills)-1 )
                                        {

            ?>
            <div class="skill">
          <h3><?php echo $skill;?><sup>(100%)</sup></h3>
          <span class="bar"><span class="skillbar htmlcss"></span></span>
        </div>
        <?php
          $i++;
      }}
        ?>
        
      </div>
    </div><!-- @end #content -->
  </div><!-- @end #w -->
   
               
      
   
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>


    
    
 <?php
  if($image = $files[0])
    echo '<div align="center"><a class = "btn btn-primary" target="_blank" href="'.base_url().$image.'">'."View Student Resume"."</a></div>";
 ?>
