<?php include 'header.php'; ?>
    <main class="page-wrapper" style="padding-top: 72px;">
      <div class="d-lg-flex position-relative h-100">
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="index.php" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home"><i class="ai-home"></i></a>
        <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
          <div class="w-100 m-auto" style="max-width: 526px;">
            <h1>No account? Sign up</h1>
            <p class="pb-3 mb-3 mb-lg-4">Have an account already?&nbsp;&nbsp;<a href='signin.php'>Sign in here!</a></p>
            <form action="login-reg.php" class="needs-validation" method="post" novalidate>
              <div class="row row-cols-1 row-cols-sm-2">
                <div class="col mb-4">
                  <input class="form-control form-control-lg" type="tel" name="mobile_number" placeholder="Your Number" required>
                </div>
                <div class="col mb-4">
                  <input class="form-control form-control-lg" type="text" name="name" placeholder="Your Name" required>
                </div>
              </div>
              <div class="mb-4">
                <input class="form-control form-control-lg" type="email" name="email" placeholder="Email address" required>
              </div>
              <div class="password-toggle mb-4">
                <input class="form-control form-control-lg" type="password" name="password" placeholder="Password" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
              <div class="pb-4">
                <div class="form-check my-2">
                  <input class="form-check-input" type="checkbox" id="terms">
                  <label class="form-check-label ms-1" for="terms">I agree to <a href="#">Terms &amp; Conditions</a></label>
                </div>
              </div>
              <button class="btn btn-lg btn-primary w-100 mb-4" type="submit" name="reg_submit">Sign in</button>
            </form>
          </div>
           </div>
       <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url(assets/img/account/cover.jpg);"></div>
      </div>
    </main>
    <?php include 'footer.php'; ?>
 