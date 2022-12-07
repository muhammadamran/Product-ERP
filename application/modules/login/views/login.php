<style>
  hr {
    border: 0;
    display: block;
    width: 100%;
    background-color: #e2e2e2;
    height: 1px;
    margin-top: 10px;
    margin-bottom: 10px;
  }
</style>
<div class="d-lg-flex half">
  <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url(); ?>assets/login/images/bg_1.jpg');"></div>
  <div class="contents order-2 order-md-1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7">
          <h3>Login to <strong>Colorlib</strong></h3>
          <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
          <form action="#" method="post">
            <div class="form-group first">
              <label for="username">Username</label>
              <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username">
            </div>
            <div class="form-group last mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Your Password" id="password">
            </div>
            <div class="d-flex mb-2 align-items-center">
              <label class="control control--checkbox mb-0"><span class="caption">Show Password</span>
                <input type="checkbox" />
                <div class="control__indicator"></div>
              </label>
            </div>
            <div class="d-flex mb-5 align-items-center">
              <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                <input type="checkbox" />
                <div class="control__indicator"></div>
              </label>
              <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
            </div>
            <input type="submit" value="Sign In" class="btn btn-block btn-primary">
            <div class="d-flex justify-content-center or-hr" style="margin:10px 0 -5px 0">
              <hr>
              <p class="mx-4 text-muted">or</p>
              <hr>
            </div>
            <img src="<?= base_url(); ?>assets/apps/img/svg/google.svg">
            <input type="submit" value="Sign In with Google" class="btn btn-block btn-info">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>