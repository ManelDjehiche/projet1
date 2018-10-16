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
                        <select class="form-control" name="LANGUAGE_SHOP" id="LANGUAGE_SHOP" >
                            <option selected>language</option>
                            <option value="english">english</option>
                            <option value="french">french</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="FIRST_USER" id="FIRST_USER" placeholder="First Name" required data-error="first name is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="LAST_USER" id="LAST_USER" placeholder="Last Name" required data-error="last name is required.">
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

                <h4 text-block text-black text-bold text-med m-b-40>Shop Info</h4>
                <div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" name="DOMAINE_SHOP" id="DOMAINE_SHOP" type="text" placeholder="website" required data-error="Name is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="LOGO_SHOP" id="LOGO_SHOP" placeholder="logo" required data-error="Valid email is required.">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="LANGUAGE_SHOP" id="LANGUAGE_SHOP" >
                            <option selected>language</option>
                            <option value="english">english</option>
                            <option value="french">french</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="BUSINESS_SHOP" id="BUSINESS_SHOP" >
                            <option selected>business</option>
                            <option value="company">company</option>
                            <option value="freelencer">freelencer</option>
                            <option value="non profit">non profit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="VATE_RATE_SHOP" id="VATE_RATE_SHOP" placeholder="vate rate %" required data-error="first name is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="COMPANY_SHOP" id="COMPANY_SHOP" placeholder="name of company" required data-error="last name is required.">
                    </div>
                    <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" name="SLOGAN_SHOP" id="SLOGAN_SHOP" placeholder="solgan of the shop" required data-error="Address is required.">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="SECTOR_SHOP" id="SECTOR_SHOP" >
                            <option selected>sector of shop</option>
                            <option value="healthcare">healthcare</option>
                            <option value="education">education</option>
                            <option value="technology">technology</option>
                        </select>
                    </div>
                    
                </div>
               
               
                <input class="au-btn au-btn-primary" type="submit" name = "submit" id="submit" value="Next">
            </form>
            
        </div>
    </section>
    