<div class="container">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form method="post" action="Profile">
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="EMAIL_USER" value="<?php echo $EMAIL_USER; ?>" name="EMAIL_USER" class="form-control here" required="required" type="text">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="FIRST_NAME_USER" value="<?php echo $FIRST_NAME_USER; ?>" name="FIRST_NAME_USER" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label  class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="LAST_NAME_USER" value="<?php echo $LAST_NAME_USER; ?>" name="LAST_NAME_USER" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-4 col-form-label">Address</label> 
                                <div class="col-8">
                                  <input id="ADDRESS_USER" value="<?php echo $ADDRESS_USER; ?>" name="ADDRESS_USER" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-4 col-form-label">zip code</label> 
                                <div class="col-8">
                                  <input id="ZIP_CODE_USER" value="<?php echo $ZIP_CODE_USER; ?>" name="ZIP_CODE_USER" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-4 col-form-label">City</label> 
                                <div class="col-8">
                                  <input id="CITY_USER" value="<?php echo $CITY_USER; ?>" name="CITY_USER" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                    <select class="form-control" name="COUNTRY_USER" id="COUNTRY_USER" >
                                        <option <?php if ($COUNTRY_USER == "United Stats") echo "selected";?> value="United Stats">United Stats</option>
                                        <option <?php if ($COUNTRY_USER == "United Kingdom") echo "selected";?> value="United Kingdom">United Kingdom</option>
                                        <option <?php if ($COUNTRY_USER == "France") echo "selected";?> value="France">France</option>
                                    </select>
                                </div>
                              <div class="form-group row">
                                <label class="col-4 col-form-label">Phone Number</label> 
                                <div class="col-8">
                                  <input id="PHONE_USER" value="<?php echo $PHONE_USER; ?>" name="PHONE_USER" class="form-control here" required="required" type="text">
                                </div>
                              </div>

                               
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" id="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>