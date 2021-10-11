<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="/" class="h1">{{ config('app.name', 'Laravel') }}</a>
          </div>
          <div class="card-body">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />

            <p class="login-box-msg">Register a new membership</p>

            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name" :value="old('name')" required autofocus />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" :value="old('email')" required />
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
                <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="password_confirmation" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
            <p class="mt-3 mb-1">
              <a href="{{ route('login') }}">Login</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</x-guest-layout>
