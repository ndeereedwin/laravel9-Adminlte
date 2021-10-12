<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="/" class="h1">{{ config('app.name', 'Laravel') }}</a>
          </div>
          <div class="card-body">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />

            <form method="POST" action="{{ route('password.update') }}">
              @csrf

              <input type="hidden" name="token" value="{{ $request->route('token') }}">

              <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required autocomplete="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="new-password" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="password-confirmation" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
    
          </div>
          <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</x-guest-layout>
