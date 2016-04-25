

<head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/message.css">
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
    .profile-userbuttons{
      margin-top: -10px;
      margin-bottom: 30px;
    }
    </style>
   <script type="text/javascript">


</script>

</head>
<body>
            <div class="container">
                 <div class="profile-userbuttons">
        <a href="<?php echo base_url();?>index.php/home/view_profile" class="btn btn-success btn-sm">Home</a>      
        <a href = "<?php echo base_url();?>index.php/site/logout" class="btn btn-danger btn-sm">Logout</a>
    </div>
                <div class="row">
                
                    <div class="panel panel-default widget">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-comment"></span>
                            <h3 class="panel-title">
                                Messages</h3>
                        
                                
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <?php
                                   foreach ($query->result() as $query) {
                                       
                                   
                                ?>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-xs-2 col-md-1">
                                            <img src="<?php echo base_url();?>assets/images/email.png" class="img-circle img-responsive" alt="" /></div>
                                        <div class="col-xs-10 col-md-11">
                                            <div>
                                                <a  href="#"><b class="sub"><?php echo $query->subject;?></b>
                                                    </a>
                                                <div class="mic-info">
                                                   <b> By: </b><a href="#"><?php echo $query->name;?>(<?php echo $query->email;?>)</a> on <b><?php echo $query->date;?></b>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                               <b>Your Query:</b>  <?php echo $query->query;?>
                                            </div>
                                           
                                            <div class="comment-text">
                                               <b>Admin Reply:</b>  <?php echo $query->reply;?>
                                            </div>
                                            
                
                                        
                                    </div>
                                </li>
                               <?php

                               };
                               ?>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
 <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
