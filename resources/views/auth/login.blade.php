<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="/" class="h1">{{ config('app.name', 'Laravel') }}</a>
          </div>
          <div class="card-body">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />
            
            <p class="login-box-msg">Sign in to start your session</p>
      
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" :value="old('email')" required autofocus>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            @if (Route::has('password.request'))
              <p class="mb-1">
                <a href="{{ route('password.request') }}">I forgot my password</a>
              </p>
            @endif
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</x-guest-layout>
