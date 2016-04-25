<!--  -->


 <html>
<head>
<title>Upload Material</title>
</head>
<body>


<?php echo form_open_multipart('upload/doo_upload');?>


 <div class="form-group">
                       <label for="name" class="col-md-2 control-label ">Enter Subject Name</label>
                        <div class="col-md-5">
                       <input type="text" class="form-control" id="name" name="name" placeholder="eg. PHP eBook" required>
                       </div>
          </div>

        <br><br><br>
           <div class="form-group">
			            <label for="details" class="col-md-2 control-label ">Enter Details</label>
			            <div class="col-md-5">
			            <input type="text" class="form-control" id="details" name="details" placeholder="Material Details" required>
			            </div>
          </div>
<br><br>


 <div class="form-group">
      <label for="userfile" class="col-md-2 control-label ">Upload File</label>
  <div class="col-md-5">
<input type="file"  class="form-control" id="userfile" name="userfile" onchange="alertFilename()" size="20" required />
</div>
</div>
<br /><br />

<input class="btn btn-success" type="submit" value="upload" />

</form>

</body>
</html>