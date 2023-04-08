<?php include 'header.php'; ?>

    <!-- Page wrapper-->
    <main class="page-wrapper">
      <!-- Page content-->
      <div class="d-flex flex-column align-items-center position-relative h-100 px-3 pt-5">
        <!-- Home button--><a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 zindex-2 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="index.php" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home"><i class="ai-home"></i></a>
        <!-- Content-->
        <div class="mt-auto" style="max-width: 700px;">
          <h1 class="pt-3 pb-2 pb-lg-3">Forgot your password?</h1>
          <p class="pb-2">Change your password in three easy steps</p>
          <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
            <li class="d-flex mb-2"><span class="text-primary fw-semibold me-2">1.</span>Fill in your email address below.</li>
            <li class="d-flex mb-2"><span class="text-primary fw-semibold me-2">2.</span>We'll email you a temporary code.</li>
            <li class="d-flex mb-2"><span class="text-primary fw-semibold me-2">3.</span>Use the code to change your password on our secure website.</li>
          </ul>
          <div class="card dark-mode border-0 bg-primary">
            <form class="card-body">
              <div class="mb-4">
                <div class="position-relative"><i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y text-light opacity-80 ms-3"></i>
                  <input class="form-control form-control-lg ps-5" type="email" placeholder="Email address" required>
                </div>
              </div>
              <button class="btn btn-light" type="submit">Get new password</button>
            </form>
          </div>
        </div>
        <!-- Copyright-->
        <p class="w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 700px;"><span class="text-muted">&copy; All rights reserved. Made by</span><a class="nav-link d-inline-block p-0 ms-1" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></p>
      </div>
    </main>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
      <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
      </svg><i class="ai-arrow-up"></i></a>


      <?php include 'footer.php'; ?>