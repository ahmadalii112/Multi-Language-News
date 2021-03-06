<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('../../backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('.')}}{backend/{asset('./../abackend/ssets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('../../backend/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('../../backend/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                    <label>Name</label>
                    <input id="name"
                           type="text" name="name" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input id="email"
                           type="email" name="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input id="password"
                           type="password" name="password" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input id="password_confirmation"
                           type="password" name="password_confirmation" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">

                    @if (Route::has('password.request'))
                      <a href="{{ route('password.request') }}" class="forgot-pass">Forgot password</a>
                    @endif
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Sign up</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="{{route('login')}}"> Login</a></p>

                  <p class="terms">By creating an account you are accepting our<a href=""> Terms & Conditions</a></p>

                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('../../backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('../../backend/assets/js/off-canvas.j')}}s"></script>
    <script src="{{asset('../../backend/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('../../backend/assets/js/misc.js')}}"></script>
    <script src="{{asset('../../backend/assets/js/settings.js')}}"></script>
    <script src="{{asset('../../backend/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
  </body>
</html>