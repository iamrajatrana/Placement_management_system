
<div class="container" id="login_form">

<form action="http://localhost:800/intern/index.php/login/validate_credentials" method="post" accept-charset="utf-8">
  <div class="row login_box">
      <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h3>12 : 30 AM</h3></div>
            <div class="outter"><img src="<?php echo base_url();?>assets/images/icon_user.png" class="image-circle"/></div>   
            <h1 id="hi">Hi Guest</h1>
      </div>
        
        
        <div class="col-md-12 col-xs-12 login_control">
                
                <div class="control">
                    <div class="label">Email Address</div>
                    <input type="email" class="form-control" name="username" placeholder="Email" required/>
                </div>
                
                <div class="control">
                     <div class="label">Password</div>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                </div>

                
                <div class="label">Select Designation</div>
                        <select id="sel" color="black"  name="designation" required>
                             <option value="" selected>Select Profile</option>
                              <option value="admin">Administrator</option>
                              <option value="company">Company</option>
                              <option value="student">Student</option>
                        </select>
               

                <div align="center">
                     <button type="submit" class="btn btn-orange">LOGIN</button>
                </div>
                
        </div>
        
        
            
    </div>
  </form>
</div>
