<x-base title="Login" bodyClass="page-login">
    <x-register-layout textTitle="Login">
        <form action="" method="post">
            <div class="form-group">
                <input type="email" placeholder="Your Email" />
            </div>
            <div class="form-group">
                <input type="password" placeholder="Your Password" />
            </div>
            <div class="text-right mb-medium">
                <a href="/password-reset.html" class="auth-page-password-reset">Reset Password</a>
            </div>

            <button class="btn btn-primary btn-login w-full">Login</button>

            <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                <x-register-button file='google'>Google</x-register-button>
                <x-register-button file='facebook'>Facebook</x-register-button>
            </div>
            <div class="login-text-dont-have-account">
                Don't have an account? -
                <a href="/signup.html"> Click here to create one</a>
            </div>
        </form>
    </x-register-layout>
</x-base>