<section class="section bg-white p-t-70 p-b-40">
        <div class="container">
            <h3 class="text-block text-black text-bold text-med m-b-40">Registration</h3>
            <div class="messages" id="status"></div>
            <form method="post" action="Registration" name="registration" id="registration-form" role="form" data-toggle="validator">
                <h4 text-block text-black text-bold text-med m-b-40>User Info</h4>
                <div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" name="EMAIL_USER" id="EMAIL_USER" type="text" placeholder="Email" required data-error="Name is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="password" name="PASSWORD_USER" id="PASSWORD_USER" placeholder="Password"  required data-error="Valid email is required.">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="COUNTRY_USER" id="COUNTRY_USER" >
                            <option selected>Country</option>
                            <option value="United Stats">United Stats</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="France">France</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="CURRENCY_USER" id="CURRENCY_USER" >
                            <option selected>currency</option>
                            <option value="euro">euro</option>
                            <option value="dollar">dollar</option>
                            <option value="pound">pound</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="LANGUAGE_USER" id="LANGUAGE_USER" >
                            <option selected>language</option>
                            <option value="english">english</option>
                            <option value="french">french</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="FIRST_NAME_USER" id="FIRST_NAME_USER" placeholder="First Name" required data-error="first name is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="LAST_NAME_USER" id="LAST_NAME_USER" placeholder="Last Name" required data-error="last name is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="ADDRESS_USER" id="ADDRESS_USER" placeholder="Address" required data-error="Address is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="ZIP_CODE_USER" id="ZIP_CODE_USER" placeholder="zip code" required data-error="zip code is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="CITY_USER" id="CITY_USER" placeholder="city" required data-error="city is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="tel" name="PHONE_USER" id="PHONE_USER" placeholder="Phone Number" id="phone" name="phone" required data-error="Valid Phone is required.">
                    </div>
                    
                </div>

                
               
               
                <input class="au-btn au-btn-primary" type="submit" name = "submit" id="submit" value="Next">
            </form>
            
        </div>
    </section>
    