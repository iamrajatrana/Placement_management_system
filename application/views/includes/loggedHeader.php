<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
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
   <script type="text/javascript">


</script>
  
    <div class="container">
      <div class="profile-userbuttons">
        <?php if($this->session->designation == 'admin')
        {
          ?>
           <a href="<?php echo base_url();?>index.php/site/admin" class="btn btn-success btn-sm">Home</a>  
           <?php
        }
        else if($this->session->designation == 'student')
        {
          ?>
            <a href="<?php echo base_url();?>index.php/site/welcome_back" class="btn btn-success btn-sm">Home</a>
        <?php
      }
      else
      {
        ?>
      
    
            <a href="<?php echo base_url();?>index.php/home/view_profile" class="btn btn-success btn-sm">Home</a>
            <?php
          }
        ?>
           
        <a href = "<?php echo base_url();?>index.php/site/logout" class="btn btn-danger btn-sm">Logout</a>
    </div>