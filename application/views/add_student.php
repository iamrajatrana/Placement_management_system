
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
    #gen {
      text-decoration: none;
      margin-top: 15px;
    }

    </style>
    <script type="text/javascript">
        function gen()
        {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for( var i=0; i < 5; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
            
        document.getElementById('pass').value = text;
        }
    </script>

 

  
    <div class="container">
      
<h1 class="page-header">Add Student</h1>
<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/students/add_now">
          <!-- <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="form-group">
            <label for="mail" class="control-label">Email ID</label>
            <input type="text" class="form-control" id="mail" name="mail">
          </div>

          
          <div class="form-group">
            <label for="pass" class="control-label">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
            <a href="javascript:gen();">Generate Random Password</a>
          </div> -->

         <div class="form-group">
  <label for="recipient-name" class="col-md-2 control-label ">Name:</label>
   <div class="col-md-5">
           <input type="text" class="form-control" id="recipient-name" name="name" placeholder="Enter Name" required>
    </div>
  </div>


<div class="form-group">
  <label for="roll" class="col-md-2 control-label ">Roll No:</label>
   <div class="col-md-5">
           <input type="text" class="form-control" id="roll" name="roll" placeholder="eg 12345" required>
    </div>
  </div>


   <div class="form-group">
   <label for="mail" class="col-md-2 control-label">Email ID</label>
   <div class="col-md-5">
       <input type="text" class="form-control"  id="mail" name="mail" placeholder="Enter Email ID" required>
    </div>
  </div>

  <div class="form-group">
   <label for="pass" class="col-md-2 control-label">Password</label>
   <div class="col-md-5">
       <input type="password" class="form-control"  id="pass" name="pass" placeholder="Enter Password" required>
       <br><a href="javascript:gen();"class="btn btn-success btn-sm"  >Generate Random Password</a>
    </div>
  </div>
  
      <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8 col-md-offset-2">
            <input class="btn btn-primary" value="Add Student" type="submit" >
            &nbsp;&nbsp;&nbsp;
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
    </form>
</div>
<br>
<br>