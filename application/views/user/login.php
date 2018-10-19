
<section class="section bg-white p-t-70 p-b-40">
  <div class="container">
      <h3 class="text-block text-black text-bold text-med text-center m-b-40">login</h3>
      <div class="messages" id="status"></div>
      <form method="post" action="Login" name="contact" id="contact-form" role="form" data-toggle="validator">
          <div class="au-form-group">
              <div class="au-form-col form-group">
                  <input class="au-input au-input-2" type="email" name="EMAIL_USER" id="EMAIL_USER" class="form-control" placeholder="Email address" required autofocus>
              </div>
              <div class="au-form-col form-group">
                  <input class="au-input au-input-2" type="password" name="PASSWORD_USER" id="PASSWORD_USER" class="form-control" placeholder="Password" required>
              </div>
              
          </div>
          
          <div class="block-left">
            <input class="au-btn au-btn-primary"  type="submit" name = "submit" id="submit"  value="Login">
          </div>
            <div class="block-left">
            <p class=" text-block text-med-sm">Not registered? <a href="registration">Create an account</a></p>
            </div>

          </form>
  </div>
</section>