
<h1>Update Your Details</h1>


<?php echo form_open_multipart('upload/do_upload');?>

<fieldset>
     <legend>Personal Information</legend>

     <div class="form-group">
            <label for="name" class="col-md-2 control-label ">Enter Name</label>
            <div class="col-md-5">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
            </div>
          </div>

<br><br>
       
 <div class="form-group">
            <label for="branch" class="col-md-2 control-label ">Select Branch</label>
            <div class="col-md-5">
            <select class="form-control" name="branch" id="branch" class="select-style" required>
             <option value="">Select Your branch</option>
             <option value="arc">Architecture</option>
             <option value="chem">Chemical Engg.</option>
             <option value="cse">Computer Science & Engg.</option>
             <option value="civ">Civil Engg.</option>
             <option value="eee">Electrical Engg.</option>
             <option value="ece">Electronics and Communication Engg.</option>
             <option value="mec">Mechanical Engg.</option>
      </select>
            </div>
          </div>

      
<br><br>
       

 <div class="form-group">
            <label for="phone" class="col-md-2 control-label ">Enter Phone No</label>
            <div class="col-md-5">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="eg. 988********" required>
            </div>
          </div>

<br><br>
       
       <div class="form-group">
            <label for="email" class="col-md-2 control-label ">Enter CGPI</label>
            <div class="col-md-5">
            <input type="text" class="form-control" id="email" name="email" placeholder="eg. 8.05" required>
            </div>
          </div>
<br><br>
       
                 
       <div class="form-group">
            <label for="college" class="col-md-2 control-label ">Enter College Name</label>
            <div class="col-md-5">
            <input type="text" class="form-control" id="college" name="college" placeholder="say. NIT" required>
            </div>
          </div>
<br><br>
       
           <div class="form-group">
            <label for="skills" class="col-md-2 control-label ">Write Skills</label>
            <div class="col-md-5">
                    <textarea id="skills" name="skills" class="form-control" placeholder="say. HTML CSS PHP" required></textarea>
            </div>
          </div>
<br><br><br>
       
         <div class="form-group">
            <label for="aboutyou" class="col-md-2 control-label ">About You</label>
            <div class="col-md-5">
                    <textarea id="aboutyou" name="aboutyou" class="form-control" placeholder="Your Bio" required></textarea>
            </div>
          </div> 
     <br><br> 

</fieldset>
<br><br><br>
<fieldset>

<legend>Upload Photo & Resume</legend>
<div class="form-group">
            <label for="userphoto" class="col-md-2 control-label ">Your Photo (Max Size 400KB)</label>
            <div class="col-md-5">
            <input class="form-control" id="userphoto" type="file" name="userphoto"  size="20" required/>
            </div>
          </div>




<br>
<br>
<br>


<div class="form-group">
            <label for="userfile" class="col-md-2 control-label ">Your Resume( *PDF only)</label>
            <div class="col-md-5">
            <input class="form-control" id="userfile" type="file" name="userfile"  size="20" required/>
            </div>
          </div>


<br>
<br>
<br>
<input type="submit" value="upload" class="btn btn-success" />
<input type="reset" name="reset" value="Reset" class="btn btn-danger" />

</form>