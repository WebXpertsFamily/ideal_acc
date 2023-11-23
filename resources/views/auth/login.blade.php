<x-guest-layout>
    @section('title')
        {{ 'Log in' }}
    @endsection
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>IDEAL</b> PACKAGES</a>
            </div>
            <div class="card-body">
                <h5 class="login-box-msg text-center">Login to Accounts Software</h5>
                <br>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    {{-- <div class="input-group mb-3">
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autofocus autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div> --}}

                    <div class="input-group mb-3">
                        <input id="username" class="form-control" type="text" name="username" :value="old('username')"
                            required autofocus autocomplete="username" placeholder="Enter user name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <div class="input-group mb-3">
                        <input id="password" class="form-control" type="password" name="password" required
                            autocomplete="current-password" placeholder="Enter Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
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
                {{-- <div class="card-header">
                    <p class=" text-left mb-13">
                        <a href="{{ route('password.request') }}">I forgot my Password</a>
                    </p>
                    <p class="text-left mb-10">
                        <a href="{{ route('register') }}" class="">Register a new Account</a>
                    </p>
                </div> --}}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</x-guest-layout>
