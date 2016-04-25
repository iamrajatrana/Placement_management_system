<hr>
<a href="../home/view_profile">View Profile</a>
<a href="../home/edit_profile">Edit Profile</a>
<a href="<?php echo base_url();?>index.php/home/view_applications">See Enrollments</a>
<a href="../home/interview_details">Interview Details</a>

<a href="../home/change_password">Change Password</a>
<a href="">Logout</a>
<hr>

<a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" href="">Ask Query</a>
<a href="<?php echo base_url();?>index.php/site/view_replies_recuiters">View Admin Messages</a>

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