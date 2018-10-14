<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<div class="container">	
	<div class="row-centered">
		<div class="col-md-6">
			<!-- Start form -->
                    <form  method="post" action="<?php echo base_url(); ?>index.php/page1/index">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                      </div>
                      <div class="form-check">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button class="btn btn-info" type="submit" name="loginfacebook" id="showpassword" value="Show Password">login with facebook</button> 
                      <button class="btn btn-danger" type="submit" name="logingmail" id="showpassword" value="Show Password">Login with gmail</button> 
                    
                      </div>
                     
                      
                      
                    </form>


			<!-- End form -->
		</div>
		