
<html>

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
        <a href="<?php echo base_url();?>index.php/site/admin" class="btn btn-success btn-sm">Home</a>      
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
                                               <b>Message:</b>  <?php echo $query->query;?>
                                            </div>
                                           
                                    
                <a  href="#" class="btn btn-sm btn-hover btn-primary"  data-toggle="modal" data-target="#exampleModal<?php echo $query->query_id;?>" href="" ><span class="glyphicon glyphicon-share-alt" style="padding-right:3px;"></span>Reply</a>
                  <a href="<?php echo base_url();?>index.php/students/dont_show_2/<?php echo $query->query_id;?>" class="btn btn-sm btn-hover btn-danger"><span class="glyphicon glyphicon-remove" style="padding-right:3px;"></span>Don't Show Again</a>
                  
                                         
                        <div class="modal fade" id="exampleModal<?php echo $query->query_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Reply to <?php echo $query->name;?></h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>index.php/students/reply_to_recruiter_query/<?php echo $query->query_id;?>">
          
          <div class="form-group">
            <label for="message-text" class="control-label">Your Reply</label>
            <textarea class="form-control" id="message-text" rows='9' name="reply" required></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Reply</button>
        </form>
      </div>
    </div>
  </div>
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
