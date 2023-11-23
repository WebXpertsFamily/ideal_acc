<x-guest-layout>
    @section('title')
        {{ 'Recover your password' }}
    @endsection
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>IDEAL</b> PACKAGES</a>
            </div>
            <div class="card-body">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <p class="login-box-msg  text-left">Please Enter Your Email:</p>

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autofocus placeholder="Enter email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="text-danger" />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Email Password Reset Link</button>
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
</x-guest-layout>
