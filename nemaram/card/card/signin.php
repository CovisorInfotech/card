<?php include 'header.php'; ?>
    <main class="page-wrapper" style="padding-top: 72px;">
     <div class="d-lg-flex position-relative h-100">
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="index.php" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home"><i class="ai-home"></i></a>
        <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
          <div class="w-100 m-auto" style="max-width: 526px;">
            <h1>Sign in to Around</h1>
            <p class="pb-3 mb-3 mb-lg-4">Don't have an account yet?&nbsp;&nbsp;<a href='signup.php'>Register here!</a></p>
            <form action="login-reg.php" class="needs-validation" method="post" novalidate>
              <div class="pb-3 mb-3">
                <div class="position-relative">
                  <input class="form-control form-control-lg ps-5" type="tel" placeholder="Your Mumber" name="mobile_number" required>
                </div>
              </div>
              <div class="mb-4">
                <div class="position-relative"><i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <div class="password-toggle">
                    <input class="form-control form-control-lg ps-5" type="password" name="password" placeholder="Password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-wrap align-items-center justify-content-between pb-4">
                <form-check class="my-1">
                  <input class="form-check-input" type="checkbox" id="keep-signedin">
                  <label class="form-check-label ms-1" for="keep-signedin">Keep me signed in</label>
                </form-check><a class="fs-sm fw-semibold text-decoration-none my-1" href="password-recovery.php">Forgot password?</a>
              </div>
              
              <button class="btn btn-lg btn-primary w-100 mb-4" type="submit" name="login_submit">Sign in</button>
            </form>
          </div>
          </div>
        <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url(assets/img/account/cover.jpg);"></div>
      </div>
    </main>
    
    <?php include 'footer.php'; ?>    